<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GaleriephotoController extends AbstractController
{
    /**
     * @Route("/galeriephoto", name="galeriephoto")
     */
    public function index()
    {
        return $this->render('galeriephoto/showContent.html.twig', [
            'controller_name' => 'GaleriephotoController',
        ]);
    }
}
