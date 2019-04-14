<?php

namespace App\Controller;

use App\Entity\ContentPage;
use App\Form\ContentType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{

    /**
     * @Route("/admin-edit-{path}", name="home_pageedit")
     *
     */
    public function vikacreate(ContentPage $content, Request $request, ObjectManager $manager)
    {

        $form = $this->createForm(ContentType::class, $content);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $manager->persist($content);
            $manager->flush();
            return $this->redirectToRoute('home_page', ['path' => $content->getPath()]);
        }

        return $this->render('home_page/homecreate.html.twig', [
            'formContent' => $form->createView(),

        ]);
    }


    /**
     * @Route("/home-{path}", name="home_page")
     */
    public function index(ContentPage $contentPage)
    {
//        return $this->render('home_page/showContent.html.twig');
        return $this->render('home_page/index.html.twig', [
            'contentPage' => $contentPage,
        ]);
    }



}