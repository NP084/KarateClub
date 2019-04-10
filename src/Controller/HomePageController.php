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
     * @Route("/homepage", name="home_page")
     */
    public function index($contentPage)
    {
//        return $this->render('home_page/showContent.html.twig');

        return $this->render('home_page/index.html.twig', [
            'contentPage' => $contentPage,
        ]);
    }

/**
 * @Route("/homepage-edit", name="HomeEdit")
 *
 */
public function informationcreate(ContentPage $content, Request $request, ObjectManager $manager ){

    $form = $this->createForm(ContentType::class, $content);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()){

        $manager->persist($content);
        $manager->flush();
        return $this->redirectToRoute('home_page',['path'=>$content->getPath()]);
    }

    return $this->render('home_page/index.html.twig', [
        'formContent'=>$form->createView(),

    ]);
}}
