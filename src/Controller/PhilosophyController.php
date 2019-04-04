<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PhilosophyController extends AbstractController
{
    /**
     * @Route("/philosophie", name="philosophy")
     */

    public function login(){
        return $this->render('security/login.html.twig');

}