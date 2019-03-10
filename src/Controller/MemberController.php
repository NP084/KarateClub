<?php

namespace App\Controller;

use App\Entity\Adress;
use App\Entity\City;
use App\Form\AdressType;
use App\Form\CityType;
use App\Form\UserType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use App\Entity\Phone;
use App\Form\PhoneType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class MemberController extends AbstractController

{
    /**
     * @Route("/member", name="member")
     */
    public function index()
    {
        return $this->render('member/index.html.twig', [
            'controller_name' => 'MemberController',
        ]);
    }

    /**
     * @Route("/member/addPhone/id={id}", name="add_phone", requirements={"id"="\d+"})
     * @Route("/member/id={id}/edit", name="profile_edit", requirements={"id"="\d+"})
     */
    public function profileEdit(User $user, Request $request, ObjectManager $manager){
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        // création d'un Form pour éventuellement enregistrer un nouveau numéro de téléphone
        $phone = new Phone();
        $formPhone = $this->createForm(PhoneType::class, $phone);
        $formPhone->handleRequest($request);

        if($formPhone->isSubmitted()){
            // si numéro de téléphone n'existe pas, on le crée dans la DB
            $repo = $this->getDoctrine()
                ->getRepository(Phone::class);
            $phoneTest = $repo->findOneByNum($phone->getNum());
            if (!$phoneTest){ // le n° n'existe pas
                $manager->persist($phone);
                $manager->flush();
            }
            // ajoute le numéro au user (ORM => pas de doublon dans association user-phone)
            $phone -> addUser($user);
            $manager->persist($user);
            $manager->flush();
            return $this->redirectToRoute('profile_edit',['id'=>$user->getId()]);
        }
        // création d'un Form pour éventuellement enregistrer une nouvelle adresse
        $Adress = new Adress();
        $formAdress = $this->createForm(AdressType::class, $Adress);

        $City = new City();
        $formCity = $this->createForm(CityType::class, $City);

        return $this->render('member/editProfile.html.twig', [
            'user' => $user,
            'formUser'=>$form->createView(),
            'phoneForm' => $formPhone->createView(),
            'adressForm' => $formAdress->createView(),
            'cityForm' => $formCity->createView()
        ]);
    }


    /**
     * @Route("/member/id={id}", name="profile_show",  requirements={"id"="\d+"})
     */
    public function profileShow(User $user, Request $request){

            return $this->render('member/showProfile.html.twig',[
                'user' => $user
            ]);


    }

    /**
     * Supprime un numéro de téléphone d'un user. (le numéro reste dans la DB)
     * @Route("/member/removePhone/idPhone={idPhone}/idUser={idUser}", name="remove_phone", requirements={"id"="\d+"})
     */
    public function removeUserPhone($idPhone, $idUser){
        $entityManager=$this->getDoctrine()->getManager();
        $phone = $entityManager->getRepository(Phone::class)->find($idPhone);
        $user = $entityManager->getRepository(User::class)->find($idUser);

        $phone->removeUser($user);
        $entityManager->flush();

        return $this->redirectToRoute('profile_edit',['id'=>$user->getId()]);
    }

}
