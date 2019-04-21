<?php

namespace App\Controller;

use App\Entity\Adress;
use App\Entity\City;
use App\Entity\User;
use App\Form\AdressType;
use App\Form\CityType;
use App\Form\RegistrationType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\UserConnected;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


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
     * @Route("/new_registration", name="new_registration")
     */
    public function new_registration(Request $request, ObjectManager $manager){
        $user = new User();
        $user->setName('Write a blog post'); //si user_connected alors aller chercher le nom et prénom (if à mettre)
        $user->setFirstName('tomorrow');

        $form = $this->createFormBuilder($user)
            ->add('name', TextType::class)
            ->add('firstname', TextType::class)
            ->add('birthdate', DateType::class)
            ->add('sex', TextType::class)
            ->add('belt', TextType::class)
            ->add('receiptdate', DateType::class)
            ->getForm();


        $adress = new Adress();
        $adressForm = $this->createForm(AdressType::class,$adress);
           $adressForm->handleRequest($request);
        $city = new City();
        $formCity = $this->createForm(CityType::class, $city);
        $formCity->handleRequest($request);



        return $this->render('registration/registration.html.twig', [
            'form' => $form->createView(),
            'adressForm' => $adressForm->createView(),
            'cityForm' => $formCity->createView()
        ]);
    }


//        $form = $this->createForm(UserType::class, $user);
//        $form->handleRequest($request);
//
//        if($form->isSubmitted() && $form->isValid()){
//
//            $manager->persist($user);
//            $manager->flush($user);
//            return $this->redirectToRoute('validation');
//        }
//
//        return $this->render('registration/registration.html.twig', [
//            'form' => $form->createView()
//        ]);
//
//    }



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

}
