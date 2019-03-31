<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Form\RegistrationType;
use App\Entity\UserConnected;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class SecurityController extends AbstractController
{
    /**
    * @Route("/inscription", name="security_registration")
    */
    public function registration(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder){
        $user = new UserConnected();

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

    /**
     * @Route("/forgotten_password", name="app_forgotten_password")
     */
    public function forgottenPassword(Request $request,\Swift_Mailer $mailer,TokenGeneratorInterface $tokenGenerator)//: Response
    {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $entityManager = $this->getDoctrine()->getManager();
            $user = $entityManager->getRepository(UserConnected::class)->findOneByEmail($email);
            /* @var $user User */
            if ($user === null) {
                $this->addFlash('danger', 'Email Inconnu');
                return $this->redirectToRoute('security_registration');//'home' j'ai changé la page pour voir quelle boucle il fait quand on met email qui n est pas dans la base de données
            }
            $token = $tokenGenerator->generateToken();
            try{
                $user->setResetToken($token);
                $entityManager->flush();
            } catch (\Exception $e) {
                $this->addFlash('warning', $e->getMessage());
                return $this->redirectToRoute('security_login');//'home' il n'y a jamais eu  d'exception
            }
            $url = $this->generateUrl('app_reset_password', array('token' => $token), UrlGeneratorInterface::ABSOLUTE_URL);
            $message = (new \Swift_Message('Mot de passe oublié VIKA'))
                ->setFrom('vanrijmenantp@gmail.com')
                ->setTo($user->getEmail())
                ->setBody("Voici le lien pour entrer votre nouveau mot de passe : " . $url, 'text/html');
            $mailer->send($message);//je ne recois jamais de message pourtant je suis redirigé apres vers la bonne route
            $this->addFlash('notice', 'Mail envoyé');
            return $this->redirectToRoute('blog');//'home' ok quand je mets un email de la basse de donnée
        }
        return $this->render('security/forgotten_password.html.twig');
    }

    /**
     * @Route("/reset_password/{token}", name="app_reset_password")
     */
    public function resetPassword(Request $request, string $token, UserPasswordEncoderInterface $passwordEncoder)
    {
        if ($request->isMethod('POST')) {
            $entityManager = $this->getDoctrine()->getManager();
            $user = $entityManager->getRepository(UserConnected::class)->findOneByResetToken($token);
            /* @var $user User */
            if ($user === null) {
                $this->addFlash('danger', 'Token Inconnu');
                return $this->redirectToRoute('home');
            }
            $user->setResetToken(null);
            $user->setPassword($passwordEncoder->encodePassword($user, $request->request->get('password')));
            $entityManager->flush();
            $this->addFlash('notice', 'Mot de passe mis à jour');
            return $this->redirectToRoute('home');
        }else {
            return $this->render('security/reset_password.html.twig', ['token' => $token]);
        }
    }

}

    // /**
    //  * @Route("/security", name="security")
    //  */
    // public function index()
    // {
    //     return $this->render('security/showContent.html.twig', [
    //         'controller_name' => 'SecurityController',
    //     ]);
    // }
