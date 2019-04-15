<?php

namespace App\Controller;

use App\Entity\Adress;
use App\Entity\Category;
use App\Entity\City;
use App\Entity\ContactList;
use App\Entity\History;
use App\Entity\PersonOfContact;
use App\Entity\Registration;
use App\Entity\UserConnected;
use App\Form\AdressType;
use App\Form\CityType;
use App\Form\ContactListType;
use App\Form\HistoryType;
use App\Form\PersonOfContactType;
use App\Form\RegistrationRemarkType;
use App\Form\RegistrationType;
use App\Form\UserConnectedType;
use App\Form\UserType;
use App\Form\ResetPasswordType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use App\Entity\Phone;
use App\Form\PhoneType;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class MemberController extends AbstractController
{

    /**
     * @Route("/member-id={id}-edit", name="profile_edit", requirements={"id"="\d+"})
     * @Route("/admin-id={id}-edit", name="admin_edit",  requirements={"id"="\d+"})
     * @Security("has_role('ROLE_ADMIN') or user.getId() == user.getId()")
     */
    public function profileEdit(User $user, Request $request, ObjectManager $manager, AuthorizationCheckerInterface $authChecker)
    {
//        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Vous ne pouvez pas accéder à cette page');
        //      * @Security("has_role('ROLE_ADMIN') or user.getUserConnected().getId() == contactList.getUser().getId()")
        $formUser = $this->createForm(UserType::class, $user);
        $formUser->handleRequest($request);

        if ($formUser->isSubmitted() && $formUser->isValid()) {
            $manager->persist($user);
            // si changement de grade, on l'ajoute à l'historique du user
            $this->addHistory($user, null, $manager);
            $manager->flush();
            if (true === $authChecker->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('admin_edit', ['id' => $user->getId()]);
            } else {
                return $this->redirectToRoute('profile_edit', ['id' => $user->getId()]);
            }
        }

        // création d'un Form pour éventuellement enregistrer un nouveau numéro de téléphone
        $phone = new Phone();
        $formPhone = $this->createForm(PhoneType::class, $phone);
        $formPhone->handleRequest($request);

        if ($formPhone->isSubmitted() && $formPhone->isValid()) {
            // appel à la fonction qui insère le n° de téléphone dans la DB et l'associe au user
            $this->addUserPhone($user, $phone, $manager);
            if (true === $authChecker->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('admin_edit', ['id' => $user->getId()]);
            } else {
                return $this->redirectToRoute('profile_edit', ['id' => $user->getId()]);
            }
        }

        // création d'un Form pour éventuellement enregistrer une nouvelle adresse et/ou nouvelle ville
        $adress = new Adress();
        $formAdress = $this->createForm(AdressType::class, $adress);
        $formAdress->handleRequest($request);
        $city = new City();
        $formCity = $this->createForm(CityType::class, $city);
        $formCity->handleRequest($request);

        // Formulaire d'ajout d'une nouvelle adresse a été envoyé :
        if ($formAdress->isSubmitted() && $formAdress->isValid()) {
            // appel à la fonction qui insère nouvelle adresse dans la DB et l'associe au user
            $this->addUserAdress($user, $adress, $city, $manager);
            if (true === $authChecker->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('admin_edit', ['id' => $user->getId()]);
            } else {
                return $this->redirectToRoute('profile_edit', ['id' => $user->getId()]);
            }
        }

        // Formulaire Personne de contact
        $PoC = new PersonOfContact();
        $formPoC = $this->createForm(PersonOfContactType::class, $PoC);
        $formPoC->handleRequest($request);
        $contactList = new ContactList();
        $formContactList = $this->createForm(ContactListType::class, $contactList);
        $formContactList->handleRequest($request);

        // Formulaire d'ajout d'une nouvelle personne de contact a été envoyé :
        if ($formPoC->isSubmitted() && $formPoC->isValid()) {
            // appel à la fonction qui insère nouvelle adresse dans la DB et l'associe au user
            $this->addUserPoC($user, $contactList, $PoC, $manager);
            if (true === $authChecker->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('admin_edit', ['id' => $user->getId()]);
            } else {
                return $this->redirectToRoute('profile_edit', ['id' => $user->getId()]);
            }
        }

        return $this->render('member/editProfile.html.twig', [
            'user' => $user,
            'formUser' => $formUser->createView(),
            'phoneForm' => $formPhone->createView(),
            'adressForm' => $formAdress->createView(),
            'cityForm' => $formCity->createView(),
            'PoCForm' => $formPoC->createView(),
            'ContactListForm' => $formContactList->createView()
        ]);
    }

    /**
     * @Route("/member-id={id}", name="profile_show",  requirements={"id"="\d+"})
     * @Route("/admin-id={id}", name="admin_show",  requirements={"id"="\d+"})
     */
    public function profileShow(User $user, Request $request)
    {
        return $this->render('member/showProfile.html.twig', [
            'user' => $user
        ]);
    }

    /**
     * AJOUTE NOUVEAU PHONE à LA DB (test si existe pour éviter doublon) + ASSOCIATION AU USER
     */
    public function addUserPhone(User $user, Phone $phone, ObjectManager $manager)
    {
        $repo = $this->getDoctrine()
            ->getRepository(Phone::class);
        $phoneTest = $repo->findOneBy([
            'type' => $phone->getType(),
            'num' => $phone->getNum()
        ]);
        if (!$phoneTest) {
            // enregistre le nouveau numéro dans la DB
            $manager->persist($phone);
            $user->addPhone($phone);
            $manager->flush();
        } else {
            // associe le n° existant à cet user
            $user->addPhone($phoneTest);
            $manager->flush();
        }
    }

    /**
     * Supprime un numéro de téléphone d'un user. (le numéro reste dans la DB)
     * @Route("/member-removePhone-idPhone={idPhone}-idUser={idUser}", name="remove_phone", requirements={"id"="\d+"})
     * @Route("/admin-removePhone-idPhone={idPhone}-idUser={idUser}", name="remove_phone_admin", requirements={"id"="\d+"})
     */
    public function removeUserPhone($idPhone, $idUser, AuthorizationCheckerInterface $authChecker)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $phone = $entityManager->getRepository(Phone::class)->find($idPhone);
        $user = $entityManager->getRepository(User::class)->find($idUser);

        $phone->removeUser($user);
        $entityManager->flush();

        if (true === $authChecker->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('admin_edit', ['id' => $user->getId()]);
        } else {
            return $this->redirectToRoute('profile_edit', ['id' => $user->getId()]);
        }
    }

    /**
     * Supprime une adresse d'un user. (l'adresse reste dans la DB)
     * @Route("/member-removeAdress-idAdress={idAdress}-idUser={idUser}", name="remove_adress", requirements={"id"="\d+"})
     * @Route("/admin-removeAdress-idAdress={idAdress}-idUser={idUser}", name="remove_adress_admin", requirements={"id"="\d+"})
     */
    public function removeUserAdress($idAdress, $idUser, AuthorizationCheckerInterface $authChecker)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($idUser);

        $adress = $entityManager->getRepository(Adress::class)->find($idAdress);

        $user->removeAdress($adress);
        $entityManager->flush();

        if (true === $authChecker->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('admin_edit', ['id' => $user->getId()]);
        } else {
            return $this->redirectToRoute('profile_edit', ['id' => $user->getId()]);
        }
    }

    /**
     * AJOUTE NOUVELLE ADRESSE à LA DB (test si existe pour éviter doublon) + ASSOCIATION AU USER
     */
    public function addUserAdress(User $user, Adress $adress, City $city, ObjectManager $manager)
    {
        $repoCity = $this->getDoctrine()
            ->getRepository(City::class);
        $cityTest = $repoCity->findOneBy([
            'cityName' => $city->getCityName(),
            'zip' => $city->getZip(),
            'country' => $city->getCountry()
        ]);
        // si citytest existe pas : on crée une nouvelle ville dans la DB
        if (!$cityTest) {
            $manager->persist($city); // le pays est automatiquement associé
            $manager->flush();
        }

        $repo = $this->getDoctrine()
            ->getRepository(Adress::class);
        $adressTest = $repo->findOneBy([
            'type' => $adress->getType(),
            'streetName' => $adress->getStreetName(),
            'num' => $adress->getNum(),
            'postBox' => $adress->getPostBox()
            // 'city'      =>$adress->getCity() // commenté car sinon bug
        ]);
        // instance adressTest n'existe pas : création d'une nouvelle adresse dans la DB
        if (!$adressTest) {
            $manager->persist($adress);
            if (!$cityTest) {
                // si la ville n'existait pas => associe la ville qui vient d'être créée ($city)
                $adress->setCity($city);
            } else {
                // sinon => associe la ville qui a été trouvée dans le test ($cityTest)
                $adress->setCity($cityTest);
            }
            $user->addAdress($adress);
            $manager->flush();
        } else {
            // associe l'adresse existante à cet user
            $user->addAdress($adressTest);
            $manager->flush();
        }
    }

    /**
     * @Route("/admin-id={id}-idHist={idHist}-history-edit", name="admin_history_edit",  requirements={"id"="\d+"})
     * @Route("/admin-id={id}-history-new", name="admin_history_new",  requirements={"id"="\d+"})
     */
    public function editHistory(User $user, $idHist=null, Request $request, ObjectManager $manager)
    {
        if (!$idHist){
            $history = new History();
        }
        else{
            $entityManager = $this->getDoctrine()->getManager();
            $history = $entityManager->getRepository(History::class)->find($idHist);
        }
        $formHistory = $this->createForm(HistoryType::class, $history);
        $formHistory->handleRequest($request);

        if ($formHistory->isSubmitted() and $formHistory->isValid()) {
            // appel à la fonction qui insère nouvel historique dans la DB et l'associe au user
            $this->addHistory($user, $history, $manager);
            return $this->redirectToRoute('admin_history', ['id' => $user->getId()]);
        }
        return $this->render('member/editHistory.html.twig', [
            'user' => $user,
            'historyForm' => $formHistory->createView(),
        ]);
    }

    /**
     * @Route("/member-id={id}-history", name="profile_history", requirements={"id"="\d+"})
     * @Route("/admin-id={id}-history", name="admin_history",  requirements={"id"="\d+"})
     */
    public function showHistory(User $user)
    {
        return $this->render('member/showHistory.html.twig', [
            'user' => $user
        ]);

    }
    public function addHistory(User $user, History $newHistory = null, ObjectManager $manager)
    {
        if ($newHistory) {
            $newHistory->setUser($user);
            $manager->persist($newHistory);
            $manager->flush();
        }
        else {
            // dans le cas où il y a un passage de grade :
            $repo = $this->getDoctrine()
                ->getRepository(History::class);
            $histories = $repo->findOneBy([
                'user' => $user->getId(),
                'description' => $user->getBelt(),
            ]);
            if ($histories == null) {
                $history = new History();
                $repo2 = $this->getDoctrine()
                    ->getRepository(Category::class);
                $category = $repo2->findOneBy([
                    'title' => "Passage de grade",
                ]);
                $history->setDescription($user->getBelt())
                    ->setRefDate($user->getReceiptDate())
                    ->setCategory($category)
                    ->setUser($user);
                $manager->persist($history);
                $manager->flush();
            }
        }
    }

    /**
     * Supprime une ligne d'historique de contact.
     * @Route("/admin-remove_history-id={id}-idUser={idUser}", name="remove_history_admin", requirements={"idCL"="\d+"})
     */
    public function removeHistory($id, $idUser)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $history = $entityManager->getRepository(History::class)->find($id);
        $user = $entityManager->getRepository(User::class)->find($idUser);

        $user->removeHistory($history);
        $entityManager->flush();

        return $this->redirectToRoute('admin_history', ['id' => $user->getId()]);

    }

    /**
     * Supprime une personne de contact.
     * @Route("/member-removePoC-idCL={idCL}-idUser={idUser}", name="remove_PoC", requirements={"idCL"="\d+"})
     * @Route("/admin-removePoC-idCL={idCL}-idUser={idUser}", name="remove_PoC_admin", requirements={"idCL"="\d+"})
     */
    public function removePoC($idCL, $idUser, AuthorizationCheckerInterface $authChecker)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $contactList = $entityManager->getRepository(ContactList::class)->find($idCL);
        $user = $entityManager->getRepository(User::class)->find($idUser);

        $user->removeContactList($contactList);
        $entityManager->flush();

        if (true === $authChecker->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('admin_edit', ['id' => $user->getId()]);
        } else {
            return $this->redirectToRoute('profile_edit', ['id' => $user->getId()]);
        }
    }

    /**
     * AJOUTE NOUVELLE PERSONNE DE CONTACT à LA DB (test si existe pour éviter doublon) + ASSOCIATION AU USER
     */
    public function addUserPoC(User $user, ContactList $contactList, PersonOfContact $PoC, ObjectManager $manager)
    {
        $repo = $this->getDoctrine()
            ->getRepository(PersonOfContact::class);
        $PoCTest = $repo->findOneBy([
            'name' => $PoC->getName(),
            'firstName' => $PoC->getFirstName(),
            'num1' => $PoC->getNum1(),
        ]);
        // si personne de contact n'existe pas : on crée une nouvelle personne dans la DB
        if (!$PoCTest) {
            // enregistre le nouveau numéro dans la DB
            $manager->persist($PoC);
            $manager->flush();
        }

        $repoCL = $this->getDoctrine()
            ->getRepository(ContactList::class);
        $contactListTest = $repoCL->findOneBy([
            'relation' => $contactList->getRelation(),
            'info' => $contactList->getInfo(),
        ]);
        // instance adressTest n'existe pas : création d'une nouvelle adresse dans la DB
        if (!$contactListTest) {
            $manager->persist($contactList);
            if (!$PoCTest) {
                // si personne de contact n'existait pas => associe la personne qui vient d'être créée ($PoC)
                $contactList->setPersonOfContact($PoC);
            } else {
                // sinon => associe la ville qui a été trouvée dans le test ($cityTest)
                $contactList->setPersonOfContact($PoCTest);
            }
            $user->addContactList($contactList);
            $manager->flush();
        } else {
            // associe l'adresse existante à cet user
            $user->addContactList($contactListTest);
            $manager->flush();
        }
    }

    /**
     * MODIFICATION D'UNE PERSONNE DE CONTACT.
     * @Route("/member-editPoC-id={id}-idCL={idCL}-idPoC={idPoC}", name="edit_PoC", requirements={"id"="\d+"})
     * @Route("/admin-editPoC-id={id}-idCL={idCL}-idPoC={idPoC}", name="edit_PoC_admin", requirements={"id"="\d+"})
     * @ParamConverter("contactList", options={"id"="idCL"})
     * @Security("has_role('ROLE_ADMIN') or user.getUser().getId() == contactList.getUser().getId()")
     */
    public function editPoC($id, $idPoC, ContactList $contactList, Request $request, ObjectManager $manager, AuthorizationCheckerInterface $authChecker)
    {
        //* @Security("user.getUser().getId() == contactList.getUser().getId()")

        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($id);
        $personOfContact = $entityManager->getRepository(PersonOfContact::class)->find($idPoC);

        $formCL = $this->createForm(ContactListType::class, $contactList);
        $formCL->handleRequest($request);

        if ($formCL->isSubmitted() && $formCL->isValid()) {
            $manager->persist($contactList);
            $manager->flush();
            if (true === $authChecker->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('admin_edit', ['id' => $user->getId()]);
            } else {
                return $this->redirectToRoute('profile_edit', ['id' => $user->getId()]);
            }        }

        return $this->render('member/editPersonOfContact.html.twig', [
            'contactList' => $contactList,
            'ContactListForm' => $formCL->createView(),
            'personOfContact' => $personOfContact,
        ]);
    }

    /**
     * @Route("/admin-id={id}-idReg={idReg}-registration-edit", name="admin_registration_edit",  requirements={"id"="\d+"})
     */
    public function editRegistration(User $user, $idReg, Request $request, ObjectManager $manager)
    {
        if (!$idReg){
            $registration = new Registration();
        }
        else{
            $entityManager = $this->getDoctrine()->getManager();
            $registration = $entityManager->getRepository(Registration::class)->find($idReg);
        }

        $formRegistration = $this->createForm(
            RegistrationRemarkType::class, $registration);
        $formRegistration->handleRequest($request);

        if ($formRegistration->isSubmitted() and $formRegistration->isValid()) {
            // appel à la fonction qui insère nouvel historique dans la DB et l'associe au user
            $this->addRegistration($user, $registration, $manager);
            return $this->redirectToRoute('admin_registration', ['id' => $user->getId()]);
        }
        return $this->render('member/editRegistration.html.twig', [
            'user' => $user,
            'registrationForm' => $formRegistration->createView(),
        ]);
    }

    /**
     * @Route("/member-id={id}-registration", name="member_registration", requirements={"id"="\d+"})
     * @Route("/admin-id={id}-registration", name="admin_registration",  requirements={"id"="\d+"})
     */
    public function showRegistration(User $user)
    {
        return $this->render('member/showRegistrations.html.twig', [
            'user' => $user
        ]);
    }

    public function addRegistration(User $user, Registration $newRegistration, ObjectManager $manager)
    {
        if ($newRegistration) {
            $newRegistration->setUser($user);
            $manager->persist($newRegistration);
            $manager->flush();
        }
    }

    /**
     * Supprime une ligne des inscriptions de contact.
     * @Route("/admin-remove_registration-id={id}-idUser={idUser}", name="remove_registration_admin", requirements={"idCL"="\d+"})
     */
    public function removeRegistration($id, $idUser)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $registration = $entityManager->getRepository(Registration::class)->find($id);
        $user = $entityManager->getRepository(User::class)->find($idUser);

        $user->removeRegistration($registration);
        $entityManager->flush();

        return $this->redirectToRoute('admin_registration', ['id' => $user->getId()]);

    }

    /**
     * MEMBRES DE LA FAMILLE D'UN UTILISATEUR DU SITE
     * @Route("/member-family-{id}", name="view_family")
     * @Route("/admin-family-{id}", name="admin_family")
     */
    public function indexFamily(UserConnected $userConnected)
    {
        $users = $userConnected->getUsers();
        return $this->render('member/showFamily.html.twig', [
            'controller_name' => 'Vue des membres de sa famille',
            'users' => $users,
            'user'=>$userConnected,
        ]);
    }



    /**
     * @Route("/member-id={id}-resetpassword", name="member_reset_password",  requirements={"id"="\d+"})
     * @Route("/admin-id={id}-history", name="admin_reset_password",  requirements={"id"="\d+"})
     */
     /*
    public function resetPassword(Request $request)
    {
    	$em = $this->getDoctrine()->getManager();
      $user = $this->getUser();
    	$form = $this->createForm(ResetPasswordType::class, $user);
      //dump($request->request);die();

    	$form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $passwordEncoder = $this->get('security.password_encoder');
            //dump($request->request);die();
            //echo "<script>alert(\"Je suis ici\")</script>";
            $oldPassword = $request->request->get('member_reset_password')['ancienMotDePasse'];

            // Si l'ancien mot de passe est bon
            if ($passwordEncoder->isPasswordValid($user, $oldPassword)) {
                $newEncodedPassword = $passwordEncoder->encodePassword($user, $user->getPassword());
                $user->setPassword($newEncodedPassword);

                $em->persist($user);
                $em->flush();

                $this->addFlash('notice', 'Votre mot de passe à bien été changé !');

                return $this->redirectToRoute('profile_edit');
            } else {
                $form->addError(new FormError('Ancien mot de passe incorrect'));
            }
        }

    	return $this->render('member/resetPassword.html.twig', array(
    		'form' => $form->createView(),
    	));
    }
    */
}
