<?php

namespace App\Controller;

use App\Entity\ContentPage;
use App\Entity\ContactClub;
use App\Form\ContentType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Repository\ArticleRepository;
use App\Entity\Article;


class HomePageController extends AbstractController
{

    /**
     * @Route("/admin-edit-{path}", name="home_pageedit")
     * @Security("has_role('ROLE_ADMIN')")
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
    public function index(ArticleRepository $repoArticle, ContentPage $contentPage)
    {
        $article = $repoArticle->findBy(
            [ ],
            ['id' => 'DESC']
        );

        return $this->render('home_page/index.html.twig', [
            'contentPage' => $contentPage,
            'articles' => $article,
        ]);
    }



}
