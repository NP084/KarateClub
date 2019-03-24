<?php

namespace App\Controller;

use App\Entity\ContentPage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VikaController extends AbstractController
{
    /**
     * @Route("/vika-{id}", name="VikaContent", requirements={"id"="\d+"})
     */
    public function vikashow(ContentPage $philosophy){

        return $this->render('vika/showContent.html.twig', [
            'contentPage' => $philosophy,
        ]);
    }
}
