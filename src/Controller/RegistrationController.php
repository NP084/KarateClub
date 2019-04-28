<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Doctrine\Common\Persistence\ObjectManager;

use App\Entity\User;
use App\Entity\UserConnected;
use App\Entity\Adress;
use App\Entity\City;
use App\Entity\Phone;
use App\Entity\PersonOfContact;
use App\Entity\ContactList;
use App\Entity\Paiement;
use App\Entity\Registration;

use App\Form\AddUserType;
use App\Form\AdressType;
use App\Form\CityType;
use App\Form\PhoneType;
use App\Form\PersonOfContactType;
use App\Form\ContactListType;
use App\Form\PaiementType;



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
    
    /**
     * MEMBRES DE LA FAMILLE D'UN UTILISATEUR DU SITE
     * @Route("/registration-list", name="registration_view")
     * @Security("has_role('ROLE_ADMIN') or user.getId() == userConnected.getId()")
    */
    public function listRegistration(Registration $registration, User $user)
    {
        $user= $registration->getUser();
        return $this->render('registration/showContent.html.twig', [
            'controller_name' => 'Liste des dossiers de préinscription',
            'user' => $user,
            'registrations' => $registration,
        ]);
    }


    /**
     * @Route("/dossier-inscription-{id}", name="dossier_inscription", requirements={"idCL"="\d+"})
     * Ne pas oublier la sécurité
    */
    public function newModality(Registration $registration, Request $request, ObjectManager $manager, AuthorizationCheckerInterface $authChecker)
    {
        $paiement = new Paiement();
        $formPaiement = $this->createForm(PaiementType::class, $paiement);
        $formPaiement->handleRequest($request);

        if ($formPaiement->isSubmitted() && $formPaiement->isValid()) {
            $manager->persist($paiement);
            // si changement de grade, on l'ajoute à l'historique du user
            $this->addPaiementRegistration($registration, $paiement, $manager);
            $manager->flush();

            if (true === $authChecker->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('dossier_inscription', ['id' => $registration->getId()]);
            }     
        }


        return $this->render('registration/finalRegistration.html.twig', [
            'formPaiement' => $formPaiement->createView(),
            'registration' => $registration,
        ]);
    }
    

    /**
     * AJOUTE NOUVEAU MODALITÉ + ASSOCIATION AVEC LE REGISTRATION
     */
    public function addPaiementRegistration(Registration $registration, Paiement $paiement, ObjectManager $manager)
    {
        $repo = $this->getDoctrine()->getRepository(Paiement::class);
        $paiementTest = $repo->findOneBy([
            'modality' => $paiement->getModality(),
            'amount' => $paiement->getAmount()
        ]);
       // if (!$paiementTest) {
            // enregistre le nouveau numéro dans la DB
            $manager->persist($paiement);
            $registration->addPaiement($paiement);
            $manager->flush();
        //} else {
            // associe le n° existant à cet user
            //$registration->addPaiement($paiementTest);
           // $manager->flush();
        //}
    }

}
