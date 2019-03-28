<?php

namespace App\Controller;

use App\Entity\ContentPage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VikaController extends AbstractController
{
    /**
     * @Route("/vika-{path}", name="VikaContent", requirements={"id"="\d+"})
     */
    public function vikashow(ContentPage $contentPage){

        return $this->render('vika/showContent.html.twig', [
            'contentPage' => $contentPage,
        ]);
    }
}
