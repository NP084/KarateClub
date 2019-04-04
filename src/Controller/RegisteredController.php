<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RegisteredController extends AbstractController
{
    /**
     * @Route("/registered", name="enregistre")
     */
    public function index()
    {
        return $this->render('registered/showContent.html.twig', [
            'controller_name' => 'RegisteredController',
        ]);
    }
}
