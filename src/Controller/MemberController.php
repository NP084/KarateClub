<?php

namespace App\Controller;

use App\Entity\Adress;
use App\Entity\AttachedFile;
use App\Entity\Category;
use App\Entity\City;
use App\Entity\ContactList;
use App\Entity\History;
use App\Entity\PersonOfContact;
use App\Entity\Registration;
use App\Entity\UserConnected;
use App\Entity\VikaEvent;
use App\Form\AdressType;
use App\Form\CityType;
use App\Form\ContactListType;
use App\Form\DocType;
use App\Form\DocumentType;
use App\Form\HistoryType;
use App\Form\PersonOfContactType;
use App\Form\PreregistrationType;
use App\Form\RegistrationRemarkType;
use App\Form\RegistrationType;
use App\Form\UserConnectedType;
use App\Form\UserPictureType;
use App\Form\UserType;
use App\Form\ResetPasswordType;
use App\Form\AddUserType;
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
     * Ajouter un nouveau user
     * @Route("/add-member-id-{id}-new-{idevent}", name="add_profil_event", requirements={"id"="\d+"})
     * @Route("/add-admin-id-{id}-new-{idevent}", name="add_admin_event",  requirements={"id"="\d+"})
     */
    public function addUserEvent(UserConnected $userConnected, $idevent = null, Request $request, ObjectManager $manager, AuthorizationCheckerInterface $authChecker)
    {
        //        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Vous ne pouvez pas accéder à cette page');
        //      * @Security("has_role('ROLE_ADMIN') or user.getUserConnected().getId() == contactList.getUser().getId()")
        $user = new User();
        $formUser = $this->createForm(AddUserType::class, $user);
        $formUser->handleRequest($request);
        $adress = new Adress();
        $formAdress = $this->createForm(AdressType::class, $adress);
        $formAdress->handleRequest($request);
        $city = new City();
        $formCity = $this->createForm(CityType::class, $city);
        $formCity->handleRequest($request);
        $phone = new Phone();
        $formPhone = $this->createForm(PhoneType::class, $phone);
        $formPhone->handleRequest($request);
        $PoC = new PersonOfContact();
        $formPoC = $this->createForm(PersonOfContactType::class, $PoC);
        $formPoC->handleRequest($request);
        $contactList = new ContactList();
        $formContactList = $this->createForm(ContactListType::class, $contactList);
        $formContactList->handleRequest($request);

        // Formulaire d'ajout d'une nouvelle adresse a été envoyé :
        if ($formUser->isSubmitted() && $formUser->isValid()) {
            //Création du nouveau USER:
            $user->setUserConnected($userConnected);
            $manager->persist($user);
            $manager->flush();
            //Création de la nouvelle adresse:
            $this->addUserAdress($user, $adress, $city, $manager);
            $this->addUserPhone($user, $phone, $manager);
            $this->addUserPoC($user, $contactList, $PoC, $manager);

            if (!$idevent) {
                return $this->redirectToRoute('registration_view_family', ['id' => $userConnected->getId()]);
            } else {
                return $this->redirectToRoute('registration_member_lesson', ['id' => $userConnected->getId(), 'idevent' => $idevent]);
            }

        }

        return $this->render('member/addUser.html.twig', [
            'user' => $user,
            'formUser' => $formUser->createView(),
            'phoneForm' => $formPhone->createView(),
            'adressForm' => $formAdress->createView(),
            'cityForm' => $formCity->createView(),
            'PoCForm' => $formPoC->createView(),
            'ContactListForm' => $formContactList->createView(),
            'idevent' => $idevent
        ]);
    }

    /**
     * Ajouter un nouveau user
     * @Route("/add-member-id={id}-new", name="add_profil", requirements={"id"="\d+"})
     * @Route("/add-admin-id={id}-new", name="add_admin",  requirements={"id"="\d+"})
     */
    public function addUser(UserConnected $userConnected, Request $request, ObjectManager $manager, AuthorizationCheckerInterface $authChecker)
    {
        //        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Vous ne pouvez pas accéder à cette page');
        //      * @Security("has_role('ROLE_ADMIN') or user.getUserConnected().getId() == contactList.getUser().getId()")

        return $this->addUserEvent($userConnected, null, $request, $manager, $authChecker);

    }

    /**
     * MEMBRES DE LA FAMILLE D'UN UTILISATEUR DU SITE
     * @Route("/verify-user-profile-{id}-{idevent}", name="verify_profile", requirements={"id"="\d+"})
     * @Security("has_role('ROLE_ADMIN') or user.getId() == usr.getUserConnected().getId()")
     */
    public function verifyProfile(User $usr, Request $request, ObjectManager $manager, $idevent, AuthorizationCheckerInterface $authChecker)
    {

//        $formUser = $this->createForm(AddUserType::class, $usr);
//        $formUser->handleRequest($request);
        $adress = new Adress();
        $formAdress = $this->createForm(AdressType::class, $adress);
        $formAdress->handleRequest($request);
        $city = new City();
        $formCity = $this->createForm(CityType::class, $city);
        $formCity->handleRequest($request);
        $phone = new Phone();
        $formPhone = $this->createForm(PhoneType::class, $phone);
        $formPhone->handleRequest($request);
        $PoC = new PersonOfContact();
        $formPoC = $this->createForm(PersonOfContactType::class, $PoC);
        $formPoC->handleRequest($request);
        $contactList = new ContactList();
        $formContactList = $this->createForm(ContactListType::class, $contactList);
        $formContactList->handleRequest($request);

        // Formulaire d'ajout d'une nouvelle adresse a été envoyé :
//        if ($formUser->isSubmitted() && $formUser->isValid()) {
//            $manager->persist($usr);
//            return $this->redirectToRoute('registration_view_family', ['id' => $usr->getUserConnected()->getId()]);
//        }


        if ($formPhone->isSubmitted() && $formPhone->isValid()) {
            // appel à la fonction qui insère le n° de téléphone dans la DB et l'associe au user
            $this->addUserPhone($usr, $phone, $manager);

        }

        // Formulaire d'ajout d'une nouvelle adresse a été envoyé :
        if ($formAdress->isSubmitted() && $formAdress->isValid()) {
            // appel à la fonction qui insère nouvelle adresse dans la DB et l'associe au user
            $this->addUserAdress($usr, $adress, $city, $manager);

        }

        if ($formPoC->isSubmitted() && $formPoC->isValid()) {
            // appel à la fonction qui insère nouvelle adresse dans la DB et l'associe au user
            $this->addUserPoC($usr, $contactList, $PoC, $manager);

        }
        if ($formPhone->isSubmitted() || $formAdress->isSubmitted() || $formPoC->isSubmitted()) {

            return $this->redirectToRoute('condition_view_family', [
                'id' => $usr->getId(),
                'idevent' => $idevent,
            ]);
        }

        return $this->render('member/completeUser.html.twig', ['user' => $usr,
//'formUser' => $formUser->createView(),
            'phoneForm' => $formPhone->createView(),
            'adressForm' => $formAdress->createView(),
            'cityForm' => $formCity->createView(),
            'PoCForm' => $formPoC->createView(),
            'ContactListForm' => $formContactList->createView(),
            'idevent' => $idevent,
            'user' => $usr
        ]);
    }

    /**
     * @Route("/member-id={id}-edit", name="profile_edit", requirements={"id"="\d+"})
     * @Route("/admin-id={id}-edit", name="admin_edit",  requirements={"id"="\d+"})
     * @Security("has_role('ROLE_ADMIN') or user.getId() == usr.getUserConnected().getId()")
     */
    public function profileEdit(User $usr, Request $request, ObjectManager $manager, AuthorizationCheckerInterface $authChecker)
    {
//        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Vous ne pouvez pas accéder à cette page');
        $formUser = $this->createForm(UserType::class, $usr);
        $formUser->handleRequest($request);

        if ($formUser->isSubmitted() && $formUser->isValid()) {
            $manager->persist($usr);
            // si changement de grade, on l'ajoute à l'historique du user
            $this->addHistory($usr, null, $manager);
            $manager->flush();
            if (true === $authChecker->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('admin_edit', ['id' => $usr->getId()]);
            } else {
                return $this->redirectToRoute('profile_edit', ['id' => $usr->getId()]);
            }
        }

        // création d'un Form pour éventuellement enregistrer un nouveau numéro de téléphone
        $phone = new Phone();
        $formPhone = $this->createForm(PhoneType::class, $phone);
        $formPhone->handleRequest($request);

        if ($formPhone->isSubmitted() && $formPhone->isValid()) {
            // appel à la fonction qui insère le n° de téléphone dans la DB et l'associe au user
            $this->addUserPhone($usr, $phone, $manager);
            if (true === $authChecker->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('admin_edit', ['id' => $usr->getId()]);
            } else {
                return $this->redirectToRoute('profile_edit', ['id' => $usr->getId()]);
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
            $this->addUserAdress($usr, $adress, $city, $manager);
            if (true === $authChecker->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('admin_edit', ['id' => $usr->getId()]);
            } else {
                return $this->redirectToRoute('profile_edit', ['id' => $usr->getId()]);
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
            $this->addUserPoC($usr, $contactList, $PoC, $manager);
            if (true === $authChecker->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('admin_edit', ['id' => $usr->getId()]);
            } else {
                return $this->redirectToRoute('profile_edit', ['id' => $usr->getId()]);
            }
        }
        return $this->render('member/editProfile.html.twig', [
            'user' => $usr,
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
     * @Security("has_role('ROLE_ADMIN') or user.getId() == usr.getUserConnected().getId()")
     */
    public function profileShow(User $usr)
    {
        return $this->render('member/showProfile.html.twig', [
            'user' => $usr
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
     * @Route("/member-removePhone-idPhone={idPhone}-idUser={id}-{idevent}", name="remove_phone", requirements={"id"="\d+"})
     * @Route("/admin-removePhone-idPhone={idPhone}-idUser={id}-{idevent}", name="remove_phone_admin", requirements={"id"="\d+"})
     * @Security("has_role('ROLE_ADMIN') or user.getId() == usr.getUserConnected().getId()")
     */
    public function removeUserPhone(User $usr, $idPhone, $idevent = null, AuthorizationCheckerInterface $authChecker)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $phone = $entityManager->getRepository(Phone::class)->find($idPhone);
        $phone->removeUser($usr);
        $entityManager->flush();

//        Gestion du btn retour : si idevent => retour vers preview inscription event
        if (!$idevent) {
            if (true === $authChecker->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('admin_edit', ['id' => $usr->getId()]);
            } else {
                return $this->redirectToRoute('profile_edit', ['id' => $usr->getId()]);
            }
        } else {
            return $this->redirectToRoute('preregistration_summary',
                ['id' => $usr->getId(), 'idevent' => $idevent]);
        }
    }

    /**
     * Supprime une adresse d'un user. (l'adresse reste dans la DB)
     * @Route("/member-removeAdress-idAdress={idAdress}-idUser={id}-{idevent}", name="remove_adress", requirements={"id"="\d+"})
     * @Route("/admin-removeAdress-idAdress={idAdress}-idUser={id}-{idevent}", name="remove_adress_admin", requirements={"id"="\d+"})
     * @Security("has_role('ROLE_ADMIN') or user.getId() == usr.getUserConnected().getId()")
     */
    public function removeUserAdress(User $usr, $idAdress, $idevent = null, AuthorizationCheckerInterface $authChecker)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $adress = $entityManager->getRepository(Adress::class)->find($idAdress);

        $usr->removeAdress($adress);
        $entityManager->flush();

        if (!$idevent) {
            if (true === $authChecker->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('admin_edit', ['id' => $usr->getId()]);
            } else {
                return $this->redirectToRoute('profile_edit', ['id' => $usr->getId()]);
            }
        } else {
            return $this->redirectToRoute('preregistration_summary',
                ['id' => $usr->getId(), 'idevent' => $idevent]);
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
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function editHistory(User $user, $idHist = null, Request $request, ObjectManager $manager)
    {
        if (!$idHist) {
            $history = new History();
        } else {
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
            'editMode' => $history->getId() !== null

        ]);
    }

    /**
     * @Route("/member-id={id}-history", name="profile_history", requirements={"id"="\d+"})
     * @Route("/admin-id={id}-history", name="admin_history",  requirements={"id"="\d+"})
     * @Security("has_role('ROLE_ADMIN') or user.getId() == usr.getUserConnected().getId()")
     */
    public function showHistory(User $usr)
    {
        return $this->render('member/showHistory.html.twig', [
            'user' => $usr
        ]);
    }

    /**
     * Ajoute une ligne d'historique dans le parcours d'un utilisateur
     */

    public function addHistory(User $user, History $newHistory = null, ObjectManager $manager)
    {
        if ($newHistory) {
            $newHistory->setUser($user);
            $manager->persist($newHistory);
            $manager->flush();
        } else {
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
                $history->setDescription($user->getBelt());
                if ($user->getReceiptDate()) {
                    $history->setRefDate($user->getReceiptDate());
                } else {
                    $history->setRefDate(new \DateTime());
                }

                $history->setCategory($category)
                    ->setUser($user);
                $manager->persist($history);
                $manager->flush();
            }
        }
    }

    /**
     * Supprime une ligne d'historique de contact.
     * @Route("/admin-remove_history-id={id}-idUser={idUser}", name="remove_history_admin", requirements={"idCL"="\d+"})
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function removeHistory(History $history, $idUser)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($idUser);

        $user->removeHistory($history);
        $entityManager->flush();

        return $this->redirectToRoute('admin_history', ['id' => $user->getId()]);
    }

    /**
     * Supprime une personne de contact.
     * @Route("/member-removePoC-idCL={idCL}-idUser={id}-{idevent}", name="remove_PoC", requirements={"idCL"="\d+"})
     * @Route("/admin-removePoC-idCL={idCL}-idUser={id}-{idevent}", name="remove_PoC_admin", requirements={"idCL"="\d+"})
     * @Security("has_role('ROLE_ADMIN') or user.getId() == usr.getUserConnected().getId()")
     */
    public function removePoC(User $usr, $idCL, $idevent = null, AuthorizationCheckerInterface $authChecker)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $contactList = $entityManager->getRepository(ContactList::class)->find($idCL);

        $usr->removeContactList($contactList);
        $entityManager->flush();

        if (!$idevent) {
            if (true === $authChecker->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('admin_edit', ['id' => $usr->getId()]);
            } else {
                return $this->redirectToRoute('profile_edit', ['id' => $usr->getId()]);
            }
        } else {
            return $this->redirectToRoute('preregistration_summary',
                ['id' => $usr->getId(), 'idevent' => $idevent]);
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
     * @Route("/member-editPoC-id={id}-idCL={idCL}-idPoC={idPoC}-{idevent}", name="edit_PoC", requirements={"id"="\d+"})
     * @Route("/admin-editPoC-id={id}-idCL={idCL}-idPoC={idPoC}-{idevent}", name="edit_PoC_admin", requirements={"id"="\d+"})
     * @ParamConverter("contactList", options={"id"="idCL"})
     * @Security("has_role('ROLE_ADMIN') or user.getUser().getId() == contactList.getUser().getuserConnected().getUser().getId()")
     */
    public function editPoC(User $user, $idPoC, ContactList $contactList, $idevent = null, Request $request, ObjectManager $manager, AuthorizationCheckerInterface $authChecker)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $personOfContact = $entityManager->getRepository(PersonOfContact::class)->find($idPoC);

        $formCL = $this->createForm(ContactListType::class, $contactList);
        $formCL->handleRequest($request);

        if ($formCL->isSubmitted() && $formCL->isValid()) {
            $manager->persist($contactList);
            $manager->flush();
            if (!$idevent) {
                if (true === $authChecker->isGranted('ROLE_ADMIN')) {
                    return $this->redirectToRoute('admin_edit', ['id' => $user->getId()]);
                } else {
                    return $this->redirectToRoute('profile_edit', ['id' => $user->getId()]);
                }
            } else {
                return $this->redirectToRoute('preregistration_summary',
                    ['id' => $user->getId(), 'idevent' => $idevent]);
            }
        }
        return $this->render('member/editPersonOfContact.html.twig', [
            'user' => $user,
            'contactList' => $contactList,
            'ContactListForm' => $formCL->createView(),
            'personOfContact' => $personOfContact,
            'idevent' => $idevent,
        ]);
    }

    /**
     * @Route("/admin-id={id}-idReg={idReg}-registration-edit", name="admin_registration_edit",  requirements={"id"="\d+"})
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function editRegistration(User $user, $idReg, Request $request, ObjectManager $manager)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $registration = $entityManager->getRepository(Registration::class)->find($idReg);

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
     * @Security("has_role('ROLE_ADMIN') or user.getId() == usr.getUserConnected().getId()")
     */
    public function showRegistration(User $usr)
    {
        return $this->render('member/showRegistrations.html.twig', [
            'user' => $usr
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
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function removeRegistration(Registration $registration, $idUser)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($idUser);

        $user->removeRegistration($registration);
        $entityManager->flush();

        return $this->redirectToRoute('admin_registration', ['id' => $user->getId()]);

    }

    /**
     * MEMBRES DE LA FAMILLE D'UN UTILISATEUR DU SITE
     * @Route("/member-family-{id}", name="view_family", requirements={"idCL"="\d+"})
     * @Route("/admin-family-{id}", name="admin_family", requirements={"idCL"="\d+"})
     * @Security("has_role('ROLE_ADMIN') or user.getId() == userConnected.getId()")
     */
    public function indexFamily(UserConnected $userConnected)
    {
        $users = $userConnected->getUsers();
        return $this->render('member/showFamily.html.twig', [
            'controller_name' => 'Vue des membres de sa famille',
            'users' => $users,
            'userConnected' => $userConnected,
        ]);
    }

    /**
     * @Route("/member-id={id}-document", name="member_document", requirements={"id"="\d+"})
     * @Route("/admin-id={id}-document", name="admin_document",  requirements={"id"="\d+"})
     * @Security("has_role('ROLE_ADMIN') or user.getId() == usr.getUserConnected().getId()")
     */
    public function showDocument(User $usr)
    {
        return $this->render('member/showDocument.html.twig', [
            'user' => $usr
        ]);
    }

    /**
     * AJOUT/MODIFICATION DE DOCUMENTATION
     * @Route("/member-idUser={idUser}-document-new", name="load_member_document")
     * @Route("/admin-idUser={idUser}-document-new", name="load_admin_document")
     * @Route("/member-idUser={idUser}-document-{id}-edit", name="edit_member_document")
     * @Route("/admin-idUser={idUser}-document-{id}-edit", name="edit_admin_document")
     */
    public function form(AttachedFile $attachedFile = null, $idUser, Request $request, AuthorizationCheckerInterface $authChecker)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($idUser);

        $usr = $this->getUser();
        //la personne connectée = l'id du parent du user pour lequel on crée ou édite un doc
        if (true === $authChecker->isGranted('ROLE_ADMIN')
            or $usr->getId() == $user->getUserConnected()->getId()) {

            if (!$attachedFile) {
                $attachedFile = new AttachedFile();
            }
            $form = $this->createForm(DocumentType::class, $attachedFile);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager->persist($attachedFile);
                $attachedFile->setMember($user);
                $entityManager->flush();

                if (true === $authChecker->isGranted('ROLE_ADMIN')) {
                    return $this->redirectToRoute('admin_document', [
                        'id' => $user->getId(),
                    ]);
                } else {
                    return $this->redirectToRoute('member_document', [
                        'id' => $user->getId(),
                    ]);
                }
            }
            return $this->render('member/documentEdit.html.twig', [
                'formPicture' => $form->createView(),
                'editMode' => $user->getImageName() !== null,
                'user' => $user,
            ]);
        } else {
            return $this->redirectToRoute('home_page', ['path' => 'accueil']);
        }
    }

    /**
     * Supprime un document.
     * @Route("/admin-remove_document-id={id}-idUser={idUser}", name="remove_document_admin", requirements={"idCL"="\d+"})
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function removeDoc(AttachedFile $doc, $idUser)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($idUser);

        $user->removeAttachedFile($doc);
        $entityManager->flush();

        return $this->redirectToRoute('admin_document', ['id' => $user->getId()]);
    }

    /**
     * Affiche un document.
     * @Route("/admin-afficher_document-id={id}-idUser={idUser}", name="afficher_document_admin", requirements={"idCL"="\d+"})
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function afficherDoc(AttachedFile $doc, $idUser)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($idUser);
        return $this->render('member/afficherDoc.html.twig', [
            'doc' => $doc,
            'user' => $user,
        ]);
    }


    /*    /**
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
