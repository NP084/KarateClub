<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Form\RegistrationType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\Persistence\ObjectManager;

class SecurityController extends AbstractController
{
    /**
    * @Route("/inscription", name="security_registration")
    */
    public function registration(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder){
        $user = new User();

        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);

            $manager->persist($user);
            $manager->flush($user);
            return $this->redirectToRoute('security_login');
        }

            return $this->render('security/registration.html.twig', [
                'form' => $form->createView()
            ]);

        }

    /**
    * @Route("/connexion", name="security_login")
    */
    public function login(){
        return $this->render('security/login.html.twig');

    }

    /**
    * @Route("/deconnexion", name="security_logout")
    */
    public function logout(){

    }

}

    // /**
    //  * @Route("/security", name="security")
    //  */
    // public function index()
    // {
    //     return $this->render('security/index.html.twig', [
    //         'controller_name' => 'SecurityController',
    //     ]);
    // }
