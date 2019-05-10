<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use App\Entity\ContactClub;
use App\Form\ContactClubType;

class LayoutController extends AbstractController
{
    public function footerAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $contacts = $entityManager->getRepository(ContactClub::class)->findAll();

        return $this->render('OutilsTemplates/Footer.html.twig', [
            'contacts' => $contacts,
        ]);
    }

    /**
     * @Route("/contact-club", name="contact_club")
     */
    public function contactclub()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $contacts = $entityManager->getRepository(ContactClub::class)->findAll();

        return $this->render('OutilsTemplates/ContactClub.html.twig', [
            'contacts' => $contacts,
        ]);
    }

    /**
     * AJOUT DE CONTACT
     * @Route("/admin-contact-new", name="new_admin_contact")
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function ajoutContact(Request $request)
    {
      $entityManager = $this->getDoctrine()->getManager();
      //$contact = $entityManager->getRepository(ContactClub::class)->find($idContact);
      //$contact = $entityManager->getRepository(ContactClub::class);

      $contactClub =  new ContactClub();

      $form = $this->createForm(ContactClubType::class, $contactClub);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
          $entityManager->persist($contactClub);
          $entityManager->flush();
          return $this->redirectToRoute('contact_club');
      }

      return $this->render('OutilsTemplates/contactNew.html.twig', [
          'form' => $form->createView(),
          ]);
    }

    /**
     * MODIFICATION DE CONTACT
     * @Route("/admin-contact-idContact={idContact}-edit", name="edit_admin_contact")
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function editerContact($idContact, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $contact = $entityManager->getRepository(ContactClub::class)->find($idContact);

        $form = $this->createForm(ContactClubType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($contact);
            $entityManager->flush();
            return $this->redirectToRoute('contact_club');
        }

        return $this->render('OutilsTemplates/contactEdit.html.twig', [
            'form' => $form->createView(),
            ]);
    }

    /**
     * SUPPRIMER UN CONTACT
     * @Route("/admin-contact-idContact={idContact}-remove", name="remove_admin_contact", requirements={"idCL"="\d+"})
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function supprimerContact($idContact)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $contact = $entityManager->getRepository(ContactClub::class)->find($idContact);

        $entityManager->remove($contact);
        $entityManager->flush();

        return $this->redirectToRoute('contact_club');
    }

    /**
     * @Route("/layout", name="layout")
     */
    public function index()
    {
        return $this->render('layout/showContent.html.twig', [
            'controller_name' => 'LayoutController',
        ]);
    }
}
