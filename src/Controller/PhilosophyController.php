<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PhilosophyController extends AbstractController
{
    /**
     * @Route("/philosophie", name="philosophy")
     */

    public function philosophy()
    {
        return $this->render('philosophy/Philosophy.html.twig');
    }
}