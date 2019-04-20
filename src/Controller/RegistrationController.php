<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Doctrine\Common\Persistence\ObjectManager;

use App\Entity\User;
use App\Entity\UserConnected;
use App\Entity\Adress;
use App\Entity\City;
use App\Entity\Phone;
use App\Entity\PersonOfContact;
use App\Entity\ContactList;

use App\Form\AddUserType;
use App\Form\AdressType;
use App\Form\CityType;
use App\Form\PhoneType;
use App\Form\PersonOfContactType;
use App\Form\ContactListType;



class RegistrationController extends AbstractController
{
    /**
     * @Route("/registration", name="registration")
     */
    public function index()
    {
        return $this->render('registration/showContent.html.twig', [
            'controller_name' => 'RegistrationController',
        ]);
    }

    /**
     * MEMBRES DE LA FAMILLE D'UN UTILISATEUR DU SITE
     * @Route("/registration-member-family-{id}", name="registration_view_family", requirements={"idCL"="\d+"})
     * @Route("/registration-admin-family-{id}", name="registration_admin_family", requirements={"idCL"="\d+"})
     * @Security("has_role('ROLE_ADMIN') or user.getId() == userConnected.getId()")
    */
    public function indexFamily(UserConnected $userConnected)
    {
        $users = $userConnected->getUsers();
        return $this->render('registration/showFamily.html.twig', [
            'controller_name' => 'Vue des membres de sa famille',
            'users' => $users,
            'userConnected' => $userConnected,
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
        //$contactList = new ContactList();
        //$formContactList = $this->createForm(ContactListType::class, $contactList);
        //$formContactList->handleRequest($request);

        if ($formUser->isSubmitted() && $formUser->isValid()) {
            $user->setUserConnected($userConnected);
            $manager->persist($user, $adress, $city, $phone, $PoC, $manager);
            $manager->flush();
            if (true === $authChecker->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('registration_admin_family', ['id' => $user->getId()]);
            } else {
                return $this->redirectToRoute('registration_view_family', ['id' => $user->getId()]);
            }
        }

        return $this->render('registration/addUser.html.twig', [
            'user' => $user,
            'formUser' => $formUser->createView(),
            'phoneForm' => $formPhone->createView(),
            'adressForm' => $formAdress->createView(),
            'cityForm' => $formCity->createView(),
            'PoCForm' => $formPoC->createView(),
            //'ContactListForm' => $formContactList->createView()
        ]);
    }


}
