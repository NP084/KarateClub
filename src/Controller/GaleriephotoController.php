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
        return $this->render('galeriephoto/index.html.twig', [
            'controller_name' => 'GaleriephotoController',
        ]);
    }

    /**
     * @Route("/galeriephoto-new", name="galeriephoto_create")
     */
    public function create()
    {
        return $this->render('galeriephoto/create.html.twig');
    }  
}
