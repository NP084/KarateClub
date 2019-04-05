<?php

namespace App\Controller;

use App\Entity\ContentPage;
use App\Form\ArticleType;
use App\Form\ContentType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class VikaController extends AbstractController
{
    /**
     * @Route("/vika-{path}-edit", name="VikaContentEdit")
     *
     */
    public function vikacreate(ContentPage $content, Request $request, ObjectManager $manager ){

        $form = $this->createForm(ContentType::class, $content);
        $form->handleRequest($request);

<<<<<<< HEAD
        // if pour éviter les doublons
        if ($personne->getId()) {
            $manager->persist($personne);
            return $this->redirectToRoute('encadrement_index',['id'=>$personne->getId()]);
        } else {
            if ($form->isSubmitted() && $form->isValid()){
            $manager->persist($personne);
            $manager->flush();
            return $this->redirectToRoute('encadrement_index',['id'=>$personne->getId()]);
            }
        }
        
        return $this->render('vika/Encadrementcreate.html.twig', [
            'formEncadrement'=>$form->createView(),
            'editMode'=> $personne->getId()!==null
        ]);
    }

    /**
     * @Route("/vika-encadrement", name="encadrement_index")
     */
    public function vikaencadrement(EncadrementRepository $repo){

        $personnes = $repo -> findAll();
=======
        if ($form->isSubmitted() && $form->isValid()){

            $manager->persist($content);
            $manager->flush();
            return $this->redirectToRoute('VikeContentEdit',['id'=>$content->getId()]);
        }

        return $this->render('vika/vikacreate.html.twig', [
            'formContent'=>$form->createView(),
>>>>>>> master

        ]);
    }

    /**
     * @Route("/vika-{path}", name="VikaContent")
     *
     */
    public function vikashow(ContentPage $contentPage){

        return $this->render('vika/showContent.html.twig', [
            'contentPage' => $contentPage,
        ]);
    }


}
