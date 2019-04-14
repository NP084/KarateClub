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

        $category = new Category();
        $category -> setTitle('Participation à un stage')
            -> setDescription('Historique');
        $entityManager->persist($category);

        $category = new Category();
        $category -> setTitle('Participation à une compétition')
            -> setDescription('Historique');
        $entityManager->persist($category);

        $category = new Category();
        $category -> setTitle('Autre')
            -> setDescription('Historique');
        $entityManager->persist($category);

        // création des CATEGORIES pour la table VIKAEVENT
        $category = new Category();
        $category -> setTitle('Stage')
            -> setDescription('Event');
        $entityManager->persist($category);

        $category = new Category();
        $category -> setTitle('Compétition')
            -> setDescription('Event');
        $entityManager->persist($category);

        $category = new Category();
        $category -> setTitle('Passage de grade')
            -> setDescription('Event');
        $entityManager->persist($category);

        $category = new Category();
        $category -> setTitle('Autre')
            -> setDescription('Event');
        $entityManager->persist($category);

        // création des CATEGORIES pour la table ARTICLE
        $category = new Category();
        $category -> setTitle('Information générale')
            -> setDescription('Articles');
        $entityManager->persist($category);

        $category = new Category();
        $category -> setTitle('Annonce')
            -> setDescription('Articles');
        $entityManager->persist($category);

        $category = new Category();
        $category -> setTitle('Passage de grade')
            -> setDescription('Articles');
        $entityManager->persist($category);

        $category = new Category();
        $category -> setTitle('Autre')
            -> setDescription('Articles');
        $entityManager->persist($category);

        $entityManager->flush();
        return $this->redirectToRoute('home');
    }
}
