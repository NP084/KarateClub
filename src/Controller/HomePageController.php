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
     * @Route("/homepage-{path}-edit", name="home_page_edit")
     * * @Route("/{path}-edit", name="home_edit")
     */
    public function homeedition(ContentPage $content, Request $request, ObjectManager $manager ){

        $form = $this->createForm(ContentType::class, $content);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $manager->persist($content);
            $manager->flush();
            return $this->redirectToRoute('home_page',['path'=>$content->getPath()]);
        }

        return $this->render('home_page/homepageedit.html.twig', [
            'formContent'=>$form->createView(),

        ]);
    }

    /**
     * @Route("/homepage-{path}", name="home_page")
//     * @Route("/{path}", name="home_page1")
     */
//    public function index()
//    {
////        return $this->render('home_page/showContent.html.twig');
//        return $this->render('home_page/index.html.twig');
//    }
    public function index(ContentPage $contentPage){

        return $this->render('home_page/index.html.twig', [
            'contentPage' => $contentPage,
        ]);
    }


}
