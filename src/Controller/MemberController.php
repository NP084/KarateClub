<?php

namespace App\Controller;

use App\Entity\Adress;
use App\Entity\City;
use App\Entity\PersonOfContact;
use App\Form\AdressType;
use App\Form\CityType;
use App\Form\PersonOfContactType;
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

        if($form->isSubmitted()){
            $manager->persist($user);
            $manager->flush();
            return $this->redirectToRoute('profile_edit',['id'=>$user->getId()]);
        }

        // création d'un Form pour éventuellement enregistrer un nouveau numéro de téléphone
        $phone = new Phone();
        $formPhone = $this->createForm(PhoneType::class, $phone);
        $formPhone->handleRequest($request);

        // Formulaire d'ajout d'un n° de téléphone a été envoyé :
        if($formPhone->isSubmitted()){
            // appel à la fonction qui insère le n° de téléphone dans la DB et l'associe au user
            $this->addUserPhone($user, $phone, $request, $manager);
            return $this->redirectToRoute('profile_edit',['id'=>$user->getId()]);
        }

        // création d'un Form pour éventuellement enregistrer une nouvelle adresse et/ou nouvelle ville
        $adress = new Adress();
        $formAdress = $this->createForm(AdressType::class, $adress);
        $formAdress->handleRequest($request);
        $city = new City();
        $formCity = $this->createForm(CityType::class, $city);
        $formCity->handleRequest($request);

        // Formulaire d'ajout d'une nouvelle adress a été envoyé :
        if($formAdress->isSubmitted()){
            // appel à la fonction qui insère nouvelle adresse dans la DB et l'associe au user
            $this->addUserAdress($user, $adress, $city, $request, $manager);
            return $this->redirectToRoute('profile_edit',['id'=>$user->getId()]);
        }

        // Formulaire Personne de contact
        $PoC = new PersonOfContact();
        $formPoC = $this->createForm(PersonOfContactType::class, $PoC);
        $formPoC->handleRequest($request);
        // Formulaire d'ajout d'une nouvelle personne de contact a été envoyé :
        if($formPoC->isSubmitted()){
            // appel à la fonction qui insère nouvelle adresse dans la DB et l'associe au user
            $this->addUserPoC($user, $PoC, $request, $manager);
         //   return $this->redirectToRoute('profile_edit',['id'=>$user->getId()]);
        }

        // retourne la page html avec les infos à afficher (des instances + form)
        return $this->render('member/editProfile.html.twig', [
            'user' => $user,
            'formUser'   =>$form->createView(),
            'phoneForm'  => $formPhone->createView(),
            'adressForm' => $formAdress->createView(),
            'cityForm'   => $formCity->createView(),
            'PoCForm'    => $formPoC->createView()
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
     * Supprime une personne de contact.
     * @Route("/member/removePoC/idPoC={idPoC}/idUser={idUser}", name="remove_PoC", requirements={"id"="\d+"})
     */
    public function removePoC($idPoC, $idUser){
        $entityManager=$this->getDoctrine()->getManager();
        $PoC = $entityManager->getRepository(PersonOfContact::class)->find($idPoC);
        $user = $entityManager->getRepository(User::class)->find($idUser);

        $PoC->removeUser($user);
        $entityManager->flush();

        return $this->redirectToRoute('profile_edit',['id'=>$user->getId()]);
    }

    /**
     * AJOUTE NOUVELLE PERSONNE DE CONTACT à LA DB (test si existe pour éviter doublon) + ASSOCIATION AU USER
     */
    public function addUserPoC(User $user, PersonOfContact $PoC, Request $request, ObjectManager $manager){
        $repo = $this->getDoctrine()
            ->getRepository(PersonOfContact::class);
        $PoCTest = $repo->findOneBy([
            'name'=>$PoC->getName(),
            'firstName'=>$PoC->getFirstName(),
            'num1' =>$PoC->getNum1(),
            'num2' =>$PoC->getNum2(),
            'info' =>$PoC->getInfo(),
        ]);
        if (!$PoCTest) {
            // enregistre le nouveau numéro dans la DB
            $manager->persist($PoC);

            $user->addPersonOfContact($PoC);
            $manager->flush();
        }else{
            // associe le n° existant à cet user
            $user->addPersonOfContact($PoCTest);
            $manager->flush();
        }
    }

    /**
     * AJOUTE NOUVEAU PHONE à LA DB (test si existe pour éviter doublon) + ASSOCIATION AU USER
     */
    public function addUserPhone(User $user, Phone $phone, Request $request, ObjectManager $manager){
        $repo = $this->getDoctrine()
            ->getRepository(Phone::class);
        $phoneTest = $repo->findOneBy([
            'type'=>$phone->getType(),
            'num' =>$phone->getNum()
        ]);
        if (!$phoneTest) {
            // enregistre le nouveau numéro dans la DB
            $manager->persist($phone);
            $user->addPhone($phone);
            $manager->flush();
        }else{
            // associe le n° existant à cet user
            $user->addPhone($phoneTest);
            $manager->flush();
        }
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

    /**
     * Supprime une adresse d'un user. (l'adresse reste dans la DB)
     * @Route("/member/removeAdress/idAdress={idAdress}/idUser={idUser}", name="remove_adress", requirements={"id"="\d+"})
     */
    public function removeUserAdress($idAdress, $idUser){
        $entityManager=$this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($idUser);
        $adress = $entityManager->getRepository(Adress::class)->find($idAdress);

        $user->removeAdress($adress);
        $entityManager->flush();

        return $this->redirectToRoute('profile_edit',['id'=>$user->getId()]);
    }


    /**
     * AJOUTE NOUVELLE ADRESSE à LA DB (test si existe pour éviter doublon) + ASSOCIATION AU USER
     */
    public function addUserAdress(User $user, Adress $adress, City $city, Request $request, ObjectManager $manager){
        $repoCity = $this->getDoctrine()
            ->getRepository(City::class);
        $cityTest = $repoCity->findOneBy([
            'cityName' =>$city->getCityName(),
            'zip'      =>$city->getZip(),
            'country'  =>$city->getCountry()
        ]);
        // si citytest existe pas : on crée une nouvelle ville dans la DB
        if (!$cityTest){
            $manager->persist($city); // le pays est automatiquement associé
            $manager->flush();
        }

        $repo = $this->getDoctrine()
            ->getRepository(Adress::class);
        $adressTest = $repo->findOneBy([
            'type'      =>$adress->getType(),
            'streetName'=>$adress->getStreetName(),
            'num'       =>$adress->getNum(),
            'postBox'   =>$adress->getPostBox()
           // 'city'      =>$adress->getCity() // commenté car sinon bug
        ]);
        // instance adressTest n'existe pas : création d'une nouvelle adresse dans la DB
        if (!$adressTest) {
            $manager->persist($adress);
            if(!$cityTest){
                // si la ville n'existait pas => associe la ville qui vient d'être créée ($city)
                $adress->setCity($city);
            }else{
                // sinon => associe la ville qui a été trouvée dans le test ($cityTest)
                $adress->setCity($cityTest);
            }
            $user   ->addAdress($adress);
            $manager->flush();
        }else{
            // associe l'adresse existante à cet user
            $user   ->addAdress($adressTest);
            $manager->flush();
        }
    }
}
