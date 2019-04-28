<?php

namespace App\Controller;

use App\Entity\Registration;
use App\Form\PreregistrationType;
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

            'users' => $users,
            'userConnected' => $userConnected
        ]);
    }

    /**
     * MEMBRES DE LA FAMILLE D'UN UTILISATEUR DU SITE
     * @Route("/registration-member-family-{id}-{idevent}", name="registration_member_lesson", requirements={"idCL"="\d+"})
     * @Route("/registration-admin-family-{id}-{idevent}", name="registration_admin_lesson", requirements={"idCL"="\d+"})
     * @Security("has_role('ROLE_ADMIN') or user.getId() == userConnected.getId()")
    */
    public function lessonsMember(UserConnected $userConnected, $idevent)
    {
        $users = $userConnected->getUsers();
        return $this->render('registration/showFamily.html.twig', [

            'users' => $users,
            'userConnected' => $userConnected,
            'idevent' => $idevent,
        ]);
    }
    /**
     * MEMBRES DE LA FAMILLE D'UN UTILISATEUR DU SITE
     * @Route("/condition-member-family-{id}-{idevent}", name="condition_view_family", requirements={"idCL"="\d+"})
     * @Route("/condition-admin-family-{id}-{idevent}", name="condition_admin_family", requirements={"idCL"="\d+"})
     * @Security("has_role('ROLE_ADMIN') or user.getId() == userConnected.getId()")
     */
    public function conditions(User $users, $idevent, Request $request, ObjectManager $manager)
    {

        $prereg = new Registration();
        $form = $this->createForm(PreregistrationType::class, $prereg);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $prereg ->setUser($idevent);
            $prereg ->setUser($users);
            $prereg->setRegistrationDate(new \DateTime('now'));
            $manager->persist($prereg);

            $manager->flush();
        }


        return $this->render('registration/conditions.html.twig', [
            'users' => $users,
            'userConnected' => $userConnected,
            'idevent' => $idevent,
            'form' => $form->createView()
        ]);
    }
    
}
