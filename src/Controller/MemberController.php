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
use Symfony\Component\Form\Form;
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
     * @Route("/member/id={id}/edit", name="profile_edit", requirements={"id"="\d+"})
     */
    public function profileEdit(User $user, Request $request, ObjectManager $manager){
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        // création d'un Form pour éventuellement enregistrer un nouveau numéro de téléphone
        $phone = new Phone();
        $formPhone = $this->createForm(PhoneType::class, $phone);
        $formPhone->handleRequest($request);

        // Formulaire d'ajout d'un n° de téléphone a été envoyé :
        if($formPhone->isSubmitted()){
            // si numéro de téléphone n'existe pas, on le crée dans la DB
            $this->addUserPhone($user, $phone, $request, $manager);
            return $this->redirectToRoute('profile_edit',['id'=>$user->getId()]);
        }
        // création d'un Form pour éventuellement enregistrer une nouvelle adresse
        $adress = new Adress();
        $formAdress = $this->createForm(AdressType::class, $adress);
        $formAdress->handleRequest($request);
        $city = new City();
        $formCity = $this->createForm(CityType::class, $city);
        $formCity->handleRequest($request);

        // Formulaire d'ajout d'une nouvelle adress
        if($formAdress->isSubmitted()){
            $repoCity = $this->getDoctrine()
                ->getRepository(City::class);
            $cityTest = $repoCity->findBy([
                'cityName' =>$city->getCityName(),
                'zip'      =>$city->getZip()
            ]);
            // instance citytest n'existe pas (la ville n'existe pas dans la DB)
            if (!$cityTest){
                $manager->persist($city);
                $manager->flush();
            }

            // si adress n'existe pas, on la crée dans la DB
            $repo = $this->getDoctrine()
                ->getRepository(Adress::class);
            // test si l'adress existe déjà :
            $adressTest = $repo->findBy([
                'streetName'=>$adress->getStreetName(),
                'num'       =>$adress->getNum(),
                'postBox'   =>$adress->getPostBox(),
            ]);
            // instance adressTest n'existe pas (l'adress n'existe pas dans la DB)
            if (!$adressTest) {
                $adress->setCity($city);
                $manager->persist($adress);
                $manager->flush();
            }
            // ajoute l'adresse au user

            $adress -> addUser($user);
            $manager->persist($user);
            $manager->flush();
            return $this->redirectToRoute('profile_edit',['id'=>$user->getId()]);
        }

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

    public function addUserPhone(User $user, Phone $phone, Request $request, ObjectManager $manager){
        $repo = $this->getDoctrine()
            ->getRepository(Phone::class);
        // si le n° existe déjà => phonetest sera une instance de Phone associée à ce numéro
        $phoneTest = $repo->findOneBy([
            'num'=>$phone->getNum()
        ]);
        if (!$phoneTest) {
            // enregistre le nouveau numéro dans la DB
            $manager->persist($phone);
            $user->addPhone($phone);
            $manager->flush();
        }else{
            // associe le n° existant à cet user
            $user->addPhone($phoneTest);
            $manager->persist($user);
            $manager->flush();
        }
    }
}
