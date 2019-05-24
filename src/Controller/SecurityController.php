<?php

namespace App\Controller;

use App\Entity\AttachedFile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Form\RegistrationType;
use App\Form\UserForRegType;
use App\Entity\User;
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
        $usr = new UserConnected();

        $formReg = $this->createForm(RegistrationType::class, $usr);
        $formReg->handleRequest($request);

        $usr2 = new User();

        $formUser = $this->createForm(UserForRegType::class, $usr2);
        $formUser->handleRequest($request);
        $attachedFile_1 = $this->getDoctrine()
            ->getRepository(AttachedFile::class)
            ->findOneBy(
                ['title' => 'CG']
            );

        if($formReg->isSubmitted() && $formReg->isValid()){
            $hash = $encoder->encodePassword($usr, $usr->getPassword());
            $usr->setPassword($hash);

            $usr->setUser($usr2);
            $usr->addUser($usr2);

            $manager->persist($usr);
            $manager->persist($usr2);
            $manager->flush();
            return $this->redirectToRoute('validation');
        }

            return $this->render('security/registration.html.twig', [
                'formReg' => $formReg->createView(),
                'formUser' => $formUser->createView(),
                'AttachedFile' => $attachedFile_1
            ]);

        }

    /**
    * @Route("/connexion", name="security_login")
    */
    public function login(){
        return $this->render('security/registered.html.twig');

    }
    /**
     * @Route("/validation", name="validation")
     */
    public function validate(){
        return $this->render('security/succeedregistration.html.twig');

    }



    /**
    * @Route("/deconnexion", name="security_logout")
    */
    public function logout(){
        return $this->redirectToRoute();
    }


    /**
     * @Route("/forgotten_password", name="app_forgotten_password")
     */
    public function forgottenPassword(Request $request,\Swift_Mailer $mailer,TokenGeneratorInterface $tokenGenerator)
    {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $entityManager = $this->getDoctrine()->getManager();
            $usr = $entityManager->getRepository(UserConnected::class)->findOneByEmail($email);
            /* @var $usr User */
            if ($usr === null) {
                $this->addFlash('danger', 'Email Inconnu');
                return $this->redirectToRoute('security_registration');
            }
            $token = $tokenGenerator->generateToken();
            try{
                $usr->setResetToken($token);
                $entityManager->flush();
            } catch (\Exception $e) {
                $this->addFlash('warning', $e->getMessage());
                return $this->redirectToRoute('home');
            }
            $url = $this->generateUrl('app_reset_password', array('token' => $token), UrlGeneratorInterface::ABSOLUTE_URL);
            $message = (new \Swift_Message('Mot de passe VIKA'))
                ->setFrom('vi.ka.59@hotmail.fr')
                ->setTo($usr->getEmail())
                ->setBody("Voici le lien pour entrer votre nouveau mot de passe : " . $url, 'text/html');
            $mailer->send($message);
            $this->addFlash('notice', 'Mail envoyé');
            return $this->redirectToRoute('home');
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
            $usr = $entityManager->getRepository(UserConnected::class)->findOneByResetToken($token);
            /* @var $usr User */
            if ($usr === null) {
                $this->addFlash('danger', 'Token Inconnu');
                return $this->redirectToRoute('home');
            }
            $usr->setResetToken(null);
            $usr->setPassword($passwordEncoder->encodePassword($usr, $request->request->get('password')));
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
