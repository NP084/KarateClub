<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\ContentPage;
use App\Entity\ContactClub;
use App\Form\ContentType;
use App\Repository\GalleryRepository;
use App\Repository\VikaEventRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Repository\ArticleRepository;
use App\Repository\SponsorRepository;
use App\Entity\Article;
use App\Entity\Sponsor;

class HomePageController extends AbstractController
{

    /**
     * @Route("/admin-edit-{path}", name="home_pageedit")
     * @Security("is_granted('ROLE_ADMIN')")
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
    public function index(VikaEventRepository $repoEvent, SponsorRepository $repoSponsor, ArticleRepository $repoArticle, GalleryRepository $galleryRepo, ContentPage $contentPage)
    {
        $carrousel = $galleryRepo ->findOneBy(
            ['name'=>'Carrousel']
        );
        $repo = $this->getDoctrine()
            ->getRepository(Category::class);
        $category = $repo->findOneBy([
            'title' => "Homepage",
        ]);
        $articles = $repoArticle->findBy(
            ['category' => $category],
            ['createdAt' => 'DESC']
        );

        $sponsors = $repoSponsor->findBy(
            [],
            ['datecreat' => 'DESC']
        );

       /* $event = $repoEvent->findBy(
            [],
            ['createdEv' => 'DESC']
        );*/

        return $this->render('home_page/index.html.twig', [
            'contentPage' => $contentPage,
            'articles' => $articles,
            'galerie'=> $carrousel,
            'sponsors' => $sponsors,
          //  'vikaEvents' => $event
        ]);
    }



}
