<?php

namespace App\Controller;

use App\Entity\Adress;
use App\Entity\City;
use App\Form\AdressType;
use App\Form\CityType;
use App\Form\UserType;
use App\Repository\AdressRepository;
use App\Repository\RegistrationRepository;
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
     * @Route("/member/id={id}/edit", name="profile_edit")
     */
    public function profileEdit(User $user, Request $request){
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        // récupère les téléphones de l'utilisateur
        $phones = $user -> getPhones();
        // création d'un Form pour éventuellement enregistrer  un nouveau numéro de téléphone
        $phone = new Phone();
        $formPhone = $this->createForm(PhoneType::class, $phone);
        $formPhone->handleRequest($request);

        // récupère les adresses
        $adress = $user -> getAdress();
        // création d'un Form pour éventuellement enregistrer  une nouvelle adresse
        $emptyAdress = new Adress();
        $formAdress = $this->createForm(AdressType::class, $emptyAdress);

        $emptyCity = new City();
        $formCity = $this->createForm(CityType::class, $emptyCity);

        return $this->render('member/editProfile.html.twig', [
            'formUser'=>$form->createView(),
            'phones' => $phones,
            'phoneForm' => $formPhone->createView(),
            'adress' => $adress,
            'adressForm' => $formAdress->createView(),
            'cityForm' => $formCity->createView()
        ]);
    }

    /**
     * @Route("/member/id={id}", name="profile_show")
     */
    public function profileShow(User $user, Request $request){
        $phone = new Phone();
        $formPhone = $this->createForm(PhoneType::class, $phone);
        $formPhone->handleRequest($request);

        $adress = new Adress();
        $formAdress = $this->createForm(AdressType::class, $adress);
        $formAdress ->handleRequest($request);

        // récupère les inscriptions à des événements (cours, stage etc)
        $registrations = $user -> getRegistration();

        // récupère historique du membre
        $histories = $user -> getHistories();

            return $this->render('member/showProfile.html.twig',[
                'user' => $user,
                'phoneForm' => $formPhone->createView(),
                'AdressForm' => $formAdress->createView(),
                'registrations' => $registrations,
                'history' => $histories
            ]);


    }
}
