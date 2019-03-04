<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VikaController extends AbstractController
{
    /**
     * @Route("/vika", name="vika")
     */
    public function index()
    {
        return $this->render('vika/index.html.twig', [
            'controller_name' => 'VikaController',
        ]);
    }
}
