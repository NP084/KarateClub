<?php

namespace App\Controller;

use App\Entity\Adress;
use App\Entity\User;
use App\Form\AdressType;
use App\Form\ContentType;
use App\Form\RegistrationType;
use App\Form\UserType;
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
        $adress = new Adress();
        $form = $this->createForm(UserType::class,$user);
        $form->handleRequest($request);
        $formadress = $this->createForm(AdressType::class,$adress);
           $formadress -> handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $manager->persist($user);
            $manager->flush();

        }

        return $this->render('registration/registration.html.twig', [
            'form' => $form->createView(),
            'adressForm'=> $formadress->createView()

        ]);
//            ->add('name', TextType::class)
//            ->add('firstname', TextType::class)
//            ->add('birthdate', DateType::class)
//            ->add('sex', TextType::class)
//            ->add('belt', TextType::class)
//            ->add('receiptdate', DateType::class)
//            ->getForm();


//        $adress = new Adress();
//        $formadress = $this->createForm(AdressType::class,$adress)
//           $formadress -> handleRequest($request);
//            ->add('num',NumberType::class)



//        return $this->render('registration/registration.html.twig', [
//            'form' => $form->createView(),
////            'formadress' => $formadress->createView()
//        ]);
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
