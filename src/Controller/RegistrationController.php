<?php

namespace App\Controller;

use App\Entity\Adress;
use App\Entity\User;
use App\Entity\City;
use App\Form\RegistrationType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
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
        $city = new City();


        $form = $this->createFormBuilder($user)
            ->add('name', TextType::class)
            ->add('firstname', TextType::class)
            ->add('birthdate', DateType::class)
            ->add('sex', ChoiceType::class,[
                'choices' => [
                    'Sélectionner' => 'Indéfini',
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                ],
            ])
            ->add('belt', ChoiceType::class,[
                'choices' => [
                    'Ceinture blanche' => 'Ceinture blanche',
                    'Ceinture jaune' => 'Ceinture jaune',
                    'Ceinture orange' => 'Ceinture orange',
                    'Ceinture verte' => 'Ceinture verte',
                    'Ceinture bleue' => 'Ceinture bleue',
                    'Ceinture marron' => 'Ceinture marron',
                    'Ceinture noir 1er dan' => 'Ceinture noir 1er dan',
                    'Ceinture noir 2e dan' => 'Ceinture noir 2e dan',
                    'Ceinture noir 3e dan' => 'Ceinture noir 3e dan',
                    'Ceinture noir 4e dan' => 'Ceinture noir 4e dan',
                    'Ceinture noir 5e dan' => 'Ceinture noir 5e dan',
                    'Ceinture blanche et rouge 6e dan' => 'Ceinture noir 6e dan',
                    'Ceinture blanche et rouge 7e dan' => 'Ceinture blanche et rouge 7e dan',
                    'Ceinture blanche et rouge 8e dan' => 'Ceinture blanche et rouge 8e dan',
                ],
            ])
            ->add('receiptdate', DateType::class)
            ->getForm();
        $form->handleRequest($request);

        $formadress=$this->createFormBuilder($adress)
            ->add('streetname',TextType::class)
            ->add('num',NumberType::class )
            ->add('postbox',NumberType::class)
            ->getForm();
        $formadress->handleRequest($request);

        $formcity=$this->createFormBuilder($city)
            ->add('zip',NumberType::class)
            ->add('cityname',TextType::class )
            ->getForm();
        $formcity->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() && $formadress->isSubmitted() && $formadress->isValid() && $formcity->isSubmitted() && $formcity->isValid()) {

            $manager->persist($user);
            $manager->persist($adress);
            $manager->persist($city);
            $manager->flush();
//            return $this->redirectToRoute('home_page', ['path' => $content->getPath()]);
        }

        return $this->render('registration/registration.html.twig', [
            'form' => $form->createView(),
            'formadress' => $formadress -> createView(),
            'formcity' => $formcity -> CreateView()
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
