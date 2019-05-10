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
     * @Route("/admin-contact-new", name="load_admin_contact")
     */
    public function ajoutContact(AttachedFile $attachedFile = null, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($idUser);

        $usr = $this->getUser();
        //la personne connectée = l'id du parent du user pour lequel on crée ou édite un doc
        if (true === $authChecker->isGranted('ROLE_ADMIN')
            or $usr->getId() == $user->getUserConnected()->getId()) {

            if (!$attachedFile) {
                $attachedFile = new AttachedFile();
            }
            $form = $this->createForm(DocumentType::class, $attachedFile);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager->persist($attachedFile);
                $attachedFile->setMember($user);
                $entityManager->flush();

                if (true === $authChecker->isGranted('ROLE_ADMIN')) {
                    return $this->redirectToRoute('admin_document', [
                        'id' => $user->getId(),
                    ]);
                } else {
                    return $this->redirectToRoute('member_document', [
                        'id' => $user->getId(),
                    ]);
                }
            }
            return $this->render('member/documentEdit.html.twig', [
                'formPicture' => $form->createView(),
                'editMode' => $user->getImageName() !== null,
                'user' => $user,
            ]);
        } else {
            return $this->redirectToRoute('home_page', ['path' => 'accueil']);
        }
    }

    /**
     * MODIFICATION DE CONTACT
     * @Route("/admin-contact-idContact={idContact}-edit", name="edit_admin_contact")
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
        }

        return $this->render('OutilsTemplates/contactEdit.html.twig', [
            'form' => $form->createView(),
            ]);

        //} else {
        //    return $this->redirectToRoute('home_page', ['path' => 'accueil']);
        //}
    }

    /**
     * SUPPRIMER UN CONTACT
     * @Route("/admin-contact-idContact={idContact}-remove", name="remove_admin_contact", requirements={"idCL"="\d+"})
     * @Security("has_role('ROLE_ADMIN')")
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
