<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\ContactClub;

class LayoutController extends AbstractController
{
    public function footerAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $contacts = $entityManager->getRepository(ContactClub::class)->find(2);

        return $this->render('OutilsTemplates/Footer.html.twig', [
            'contacts' => $contacts,
        ]);
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
