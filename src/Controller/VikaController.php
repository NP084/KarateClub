<?php

namespace App\Controller;

use App\Entity\ContentPage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VikaController extends AbstractController
{
    /**
     * @Route("/vika-philosophy", name="philosophy")
     */
    public function philisophyContent(ContentPage $philosophy){

        return $this->render('vika/philosophy.html.twig', [
            'contentPage' => $philosophy,
        ]);
    }
}
