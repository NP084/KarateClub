<?php

namespace App\Controller;

use App\Entity\Adress;
use App\Entity\City;
use App\Entity\ContentPage;
use App\Entity\Phone;
use App\Entity\Preregistration;
use App\Entity\User;
use App\Form\ChildType;
use App\Form\ContentType;
use App\Form\PreregistrationType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\UserConnected;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
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
     * @Route("/preregistration", name="preregistration")
     */
    public function preregistration(Request $request, ObjectManager $manager)
    {
//
        $user = new User();
//
//
        $form = $this->createForm(ChildType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $phone = $user->getPhones();

            $manager->persist($phone);
            $manager->persist($user);
            $manager->flush();
          return $this->redirectToRoute('vika/Encadrementindex.html.twig');
        }

        return $this->render('registration/preregistration.html.twig', [
            'form'=>$form->createView(),]
        );
    }
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
    public function addUserAdress(User $user, Adress $adress, City $city, ObjectManager $manager)
    {
        $repoCity = $this->getDoctrine()
            ->getRepository(City::class);
        $cityTest = $repoCity->findOneBy([
            'cityName' => $city->getCityName(),
            'zip' => $city->getZip(),
            'country' => $city->getCountry()
        ]);
        // si citytest existe pas : on crée une nouvelle ville dans la DB
        if (!$cityTest) {
            $manager->persist($city); // le pays est automatiquement associé
            $manager->flush();
        }

        $repo = $this->getDoctrine()
            ->getRepository(Adress::class);
        $adressTest = $repo->findOneBy([
            'type' => $adress->getType(),
            'streetName' => $adress->getStreetName(),
            'num' => $adress->getNum(),
            'postBox' => $adress->getPostBox()
            // 'city'      =>$adress->getCity() // commenté car sinon bug
        ]);
        // instance adressTest n'existe pas : création d'une nouvelle adresse dans la DB
        if (!$adressTest) {
            $manager->persist($adress);
            if (!$cityTest) {
                // si la ville n'existait pas => associe la ville qui vient d'être créée ($city)
                $adress->setCity($city);
            } else {
                // sinon => associe la ville qui a été trouvée dans le test ($cityTest)
                $adress->setCity($cityTest);
            }
            $user->addAdress($adress);
            $manager->flush();
        } else {
            // associe l'adresse existante à cet user
            $user->addAdress($adressTest);
            $manager->flush();
        }
    }
}
