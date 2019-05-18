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
     * @Route("/member-add-{id}-new-{idevent}", name="add_profil_event", requirements={"idevent"="\d+"})
     * @Route("/admin-add-{id}-new-{idevent}", name="add_admin_event",  requirements={"idevent"="\d+"})
     */
    public function addUserEvent(UserConnected $userConnected, $idevent = null, Request $request, ObjectManager $manager, AuthorizationCheckerInterface $authChecker)
    {
        $usr = new User();
        $formUser = $this->createForm(AddUserType::class, $usr);
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
            $usr->setUserConnected($userConnected);
            $manager->persist($usr);
            $manager->flush();
            //Création de la nouvelle adresse:
            $this->addUserAdress($usr, $adress, $city, $manager);
            $this->addUserPhone($usr, $phone, $manager);
            $this->addUserPoC($usr, $contactList, $PoC, $manager);

            if (!$idevent) {
                if (true === $authChecker->isGranted('ROLE_ADMIN')) {
                    return $this->redirectToRoute('admin_family', ['id' => $userConnected->getId()]);
                } else {
                    return $this->redirectToRoute('view_family', ['id' => $userConnected->getId()]);
                }
            } else {
                return $this->redirectToRoute('registration_member_lesson', ['id' => $userConnected->getId(), 'idevent' => $idevent]);
            }
        }

        return $this->render('member/addUser.html.twig', [
            'user' => $usr,
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
     * @Route("/add-member-{id}-new", name="add_profil", requirements={"id"="\d+"})
     * @Route("/add-admin-{id}-new", name="add_admin",  requirements={"id"="\d+"})
     */
    public function addUser(UserConnected $userConnected, Request $request, ObjectManager $manager, AuthorizationCheckerInterface $authChecker)
    {
        return $this->addUserEvent($userConnected, null, $request, $manager, $authChecker);
    }

    /**
     * MEMBRES DE LA FAMILLE D'UN UTILISATEUR DU SITE
     * @Route("/verify-user-profile-{id}-{idevent}", name="verify_profile", requirements={"idevent"="\d+"})
     * @Security("is_granted('ROLE_ADMIN') or user.getId() == usr.getUserConnected().getId()")
     */
    public function verifyProfile(User $usr, Request $request, ObjectManager $manager, $idevent, AuthorizationCheckerInterface $authChecker)
    {
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
     * @Route("/member-{id}-edit", name="profile_edit", requirements={"id"="\d+"})
     * @Route("/admin-{id}-edit", name="admin_edit",  requirements={"id"="\d+"})
     * @Security("is_granted('ROLE_ADMIN') or user.getId() == usr.getUserConnected().getId()")
     */
    public function profileEdit(User $usr, Request $request, ObjectManager $manager, AuthorizationCheckerInterface $authChecker)
    {
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
     * @Route("/member-{id}", name="profile_show",  requirements={"id"="\d+"})
     * @Route("/admin-{id}", name="admin_show",  requirements={"id"="\d+"})
     * @Security("is_granted('ROLE_ADMIN') or user.getId() == usr.getUserConnected().getId()")
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
    public function addUserPhone(User $usr, Phone $phone, ObjectManager $manager)
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
            $usr->addPhone($phone);
            $manager->flush();
        } else {
            // associe le n° existant à cet user
            $usr->addPhone($phoneTest);
            $manager->flush();
        }
    }

    /**
     * Supprime un numéro de téléphone d'un user. (le numéro reste dans la DB)
     * @Route("/member-removePhone-{idPhone}-{id}-{idevent}", name="remove_phone", requirements={"idevent"="\d+"})
     * @Route("/admin-removePhone-{idPhone}-{id}-{idevent}", name="remove_phone_admin", requirements={"idevent"="\d+"})
     * @Security("is_granted('ROLE_ADMIN') or user.getId() == usr.getUserConnected().getId()")
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
     * @Route("/member-removeAdress-{idAdress}-{id}-{idevent}", name="remove_adress", requirements={"idevent"="\d+"})
     * @Route("/admin-removeAdress-{idAdress}-{id}-{idevent}", name="remove_adress_admin", requirements={"idevent"="\d+"})
     * @Security("is_granted('ROLE_ADMIN') or user.getId() == usr.getUserConnected().getId()")
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
    public function addUserAdress(User $usr, Adress $adress, City $city, ObjectManager $manager)
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
            $usr->addAdress($adress);
            $manager->flush();
        } else {
            // associe l'adresse existante à cet user
            $usr->addAdress($adressTest);
            $manager->flush();
        }
    }

    /**
     * @Route("/admin-{id}-history-{idHist}-edit", name="admin_history_edit",  requirements={"id"="\d+"})
     * @Route("/admin-{id}-history-new", name="admin_history_new",  requirements={"id"="\d+"})
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function editHistory(User $usr, $idHist = null, Request $request, ObjectManager $manager)
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
            $this->addHistory($usr, $history, $manager);
            return $this->redirectToRoute('admin_history', ['id' => $usr->getId()]);
        }
        return $this->render('member/editHistory.html.twig', [
            'user' => $usr,
            'historyForm' => $formHistory->createView(),
            'editMode' => $history->getId() !== null

        ]);
    }

    /**
     * @Route("/member-{id}-history", name="profile_history", requirements={"id"="\d+"})
     * @Route("/admin-{id}-history", name="admin_history",  requirements={"id"="\d+"})
     * @Security("is_granted('ROLE_ADMIN') or user.getId() == usr.getUserConnected().getId()")
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

    public function addHistory(User $usr, History $newHistory = null, ObjectManager $manager)
    {
        if ($newHistory) {
            $newHistory->setUser($usr);
            $manager->persist($newHistory);
            $manager->flush();
        } else {
            // dans le cas où il y a un passage de grade :
            $repo = $this->getDoctrine()
                ->getRepository(History::class);
            $histories = $repo->findOneBy([
                'user' => $usr->getId(),
                'description' => $usr->getBelt(),
            ]);
            if ($histories == null) {
                $history = new History();
                $repo2 = $this->getDoctrine()
                    ->getRepository(Category::class);
                $category = $repo2->findOneBy([
                    'title' => "Passage de grade",
                ]);
                $history->setDescription($usr->getBelt());
                if ($usr->getReceiptDate()) {
                    $history->setRefDate($usr->getReceiptDate());
                } else {
                    $history->setRefDate(new \DateTime());
                }

                $history->setCategory($category)
                    ->setUser($usr);
                $manager->persist($history);
                $manager->flush();
            }
        }
    }

    /**
     * Supprime une ligne d'historique de contact.
     * @Route("/admin-remove_history-{id}-{idUser}", name="remove_history_admin", requirements={"idUser"="\d+"})
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function removeHistory(History $history, $idUser)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $usr = $entityManager->getRepository(User::class)->find($idUser);

        $usr->removeHistory($history);
        $entityManager->flush();

        return $this->redirectToRoute('admin_history', ['id' => $usr->getId()]);
    }

    /**
     * Supprime une personne de contact.
     * @Route("/member-removePoC-{idCL}-{id}-{idevent}", name="remove_PoC", requirements={"idevent"="\d+"})
     * @Route("/admin-removePoC-{idCL}-{id}-{idevent}", name="remove_PoC_admin", requirements={"idevent"="\d+"})
     * @Security("is_granted('ROLE_ADMIN') or user.getId() == usr.getUserConnected().getId()")
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
    public function addUserPoC(User $usr, ContactList $contactList, PersonOfContact $PoC, ObjectManager $manager)
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
            $usr->addContactList($contactList);
            $manager->flush();
        } else {
            // associe l'adresse existante à cet user
            $usr->addContactList($contactListTest);
            $manager->flush();
        }
    }

    /**
     * MODIFICATION D'UNE PERSONNE DE CONTACT.
     * @Route("/member-editPoC-{id}-{idCL}-{idPoC}-{idevent}", name="edit_PoC", requirements={"idevent"="\d+"})
     * @Route("/admin-editPoC-{id}-{idCL}-{idPoC}-{idevent}", name="edit_PoC_admin", requirements={"idevent"="\d+"})
     * @ParamConverter("contactList", options={"id"="idCL"})
     * @Security("is_granted('ROLE_ADMIN') or user.getUser().getId() == contactList.getUser().getuserConnected().getUser().getId()")
     */
    public function editPoC(User $usr, $idPoC, ContactList $contactList, $idevent = null, Request $request, ObjectManager $manager, AuthorizationCheckerInterface $authChecker)
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
                    return $this->redirectToRoute('admin_edit', ['id' => $usr->getId()]);
                } else {
                    return $this->redirectToRoute('profile_edit', ['id' => $usr->getId()]);
                }
            } else {
                return $this->redirectToRoute('preregistration_summary',
                    ['id' => $usr->getId(), 'idevent' => $idevent]);
            }
        }
        return $this->render('member/editPersonOfContact.html.twig', [
            'user' => $usr,
            'contactList' => $contactList,
            'ContactListForm' => $formCL->createView(),
            'personOfContact' => $personOfContact,
            'idevent' => $idevent,
        ]);
    }

    /**
     * @Route("/admin-{id}-{idReg}-registration-edit", name="admin_registration_edit",  requirements={"idReg"="\d+"})
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function editRegistration(User $usr, $idReg, Request $request, ObjectManager $manager)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $registration = $entityManager->getRepository(Registration::class)->find($idReg);

        $formRegistration = $this->createForm(
            RegistrationRemarkType::class, $registration);
        $formRegistration->handleRequest($request);

        if ($formRegistration->isSubmitted() and $formRegistration->isValid()) {
            // appel à la fonction qui insère nouvel historique dans la DB et l'associe au user
            $this->addRegistration($usr, $registration, $manager);
            return $this->redirectToRoute('admin_registration', ['id' => $usr->getId()]);
        }
        return $this->render('member/editRegistration.html.twig', [
            'user' => $usr,
            'registrationForm' => $formRegistration->createView(),
        ]);
    }

    /**
     * @Route("/member-id}-registration", name="member_registration", requirements={"id"="\d+"})
     * @Route("/admin-{id}-registration", name="admin_registration",  requirements={"id"="\d+"})
     * @Security("is_granted('ROLE_ADMIN') or user.getId() == usr.getUserConnected().getId()")
     */
    public function showRegistration(User $usr)
    {
        $idevent = true;
        return $this->render('member/showRegistrations.html.twig', [
            'user' => $usr,
            'idevent' => $idevent
        ]);
    }

    public function addRegistration(User $usr, Registration $newRegistration, ObjectManager $manager)
    {
        if ($newRegistration) {
            $newRegistration->setUser($usr);
            $manager->persist($newRegistration);
            $manager->flush();
        }
    }

    /**
     * Supprime une ligne des inscriptions de contact.
     * @Route("/admin-remove_registration-{id}-{idUser}-{idevent}", name="remove_registration_admin", requirements={"idevent"="\d+"})
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function removeRegistration(Registration $registration, $idUser, $idevent = null)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $usr = $entityManager->getRepository(User::class)->find($idUser);

        $usr->removeRegistration($registration);
        $entityManager->flush();
        $userCnt = $this->getUser();

        if (($userCnt->getId() == $usr->getUserConnected()->getId())) {
            return $this->redirectToRoute('admin_registration', ['id' => $usr->getId()]);
        } else {
            return $this->redirectToRoute('registration_view');
        }
    }

    /**
     * MEMBRES DE LA FAMILLE D'UN UTILISATEUR DU SITE
     * @Route("/member-family-{id}", name="view_family", requirements={"id"="\d+"})
     * @Route("/admin-family-{id}", name="admin_family", requirements={"id"="\d+"})
     * @Security("is_granted('ROLE_ADMIN') or user.getId() == userConnected.getId()")
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
     * @Route("/member-{id}-document", name="member_document", requirements={"id"="\d+"})
     * @Route("/admin-{id}-document", name="admin_document",  requirements={"id"="\d+"})
     * @Security("is_granted('ROLE_ADMIN') or user.getId() == usr.getUserConnected().getId()")
     */
    public function showDocument(User $usr)
    {
        return $this->render('member/showDocument.html.twig', [
            'user' => $usr
        ]);
    }

    /**
     * AJOUT/MODIFICATION DE DOCUMENTATION
     * @Route("/member-{idUser}-document-new", name="load_member_document", requirements={"idUser"="\d+"})
     * @Route("/admin-{idUser}-document-new", name="load_admin_document", requirements={"idUser"="\d+"})
     * @Route("/member-{idUser}-document-{id}-edit", name="edit_member_document", requirements={"id"="\d+"})
     * @Route("/admin-{idUser}-document-{id}-edit", name="edit_admin_document", requirements={"id"="\d+"})
     */
    public function form(AttachedFile $attachedFile = null, $idUser, Request $request, AuthorizationCheckerInterface $authChecker)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $usr = $entityManager->getRepository(User::class)->find($idUser);

        $usr = $this->getUser();
        //la personne connectée = l'id du parent du usr pour lequel on crée ou édite un doc
        if (true === $authChecker->isGranted('ROLE_ADMIN')
            or $usr->getId() == $usr->getUserConnected()->getId()) {

            if (!$attachedFile) {
                $attachedFile = new AttachedFile();
            }
            $form = $this->createForm(DocumentType::class, $attachedFile);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager->persist($attachedFile);
                $attachedFile->setMember($usr);
                $entityManager->flush();

                if (true === $authChecker->isGranted('ROLE_ADMIN')) {
                    return $this->redirectToRoute('admin_document', [
                        'id' => $usr->getId(),
                    ]);
                } else {
                    return $this->redirectToRoute('member_document', [
                        'id' => $usr->getId(),
                    ]);
                }
            }
            return $this->render('member/documentEdit.html.twig', [
                'formPicture' => $form->createView(),
                'editMode' => $usr->getImageName() !== null,
                'user' => $usr,
            ]);
        } else {
            return $this->redirectToRoute('home_page', ['path' => 'accueil']);
        }
    }

    /**
     * Supprime un document.
     * @Route("/admin-remove_document-{id}-{idUser}", name="remove_document_admin", requirements={"idUser"="\d+"})
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function removeDoc(AttachedFile $doc, $idUser)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $usr = $entityManager->getRepository(User::class)->find($idUser);

        $usr->removeAttachedFile($doc);
        $entityManager->flush();

        return $this->redirectToRoute('admin_document', ['id' => $usr->getId()]);
    }

    /**
     * Affiche un document.
     * @Route("/admin-afficher_document-{id}-{idUser}", name="afficher_document_admin", requirements={"idUser"="\d+"})
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function afficherDoc(AttachedFile $doc, $idUser)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $usr = $entityManager->getRepository(User::class)->find($idUser);
        return $this->render('member/afficherDoc.html.twig', [
            'doc' => $doc,
            'user' => $usr,
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
