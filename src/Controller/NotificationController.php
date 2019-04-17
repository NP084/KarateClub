<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NotificationController extends AbstractController
{
    /**
     * @Route("/admin-notification", name="notification")
     */
    public function index()
    {
        return $this->render('notification/showContent.html.twig', [
            'controller_name' => 'NotificationController',
        ]);
    }
}
