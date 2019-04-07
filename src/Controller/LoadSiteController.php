<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\History;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LoadSiteController extends AbstractController
{
    /**
     * @Route("/load_site", name="load_site")
     */
    public function index()
    {
        $entityManager=$this->getDoctrine()->getManager();

        // création des CATEGORIES pour la table HISTORY
        $category = new Category();
        $category -> setTitle('Passage de grade')
                  -> setDescription('Historique');
        $entityManager->persist($category);
        $entityManager->flush();
        return $this->redirectToRoute('home');
    }
}
