<?php

namespace App\Controller;

use App\Entity\ContentPage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\EncadrementRepository;
use App\Form\EncadrementType;
use App\Entity\Encadrement;
use Doctrine\Common\Persistence\ObjectManager;


use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class VikaController extends AbstractController
{


    /**
    * @Route("/vika-encadrement-new", name="encadrement_create")
    * @Route("/vika-encadrement-{id}-edit", name="encadrement_edit")
    */
    public function form(Encadrement $personne=null, Request $request, ObjectManager $manager){

        if (!$personne){
            $personne=New Encadrement();
        }

        $form = $this->createForm(EncadrementType::class, $personne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            if (!$personne->getId()){
                $personne->setDatecreat(new \DateTime());
            }
            $manager->persist($personne);
            $manager->flush();
            return $this->redirectToRoute('encadrement_index',['id'=>$personne->getId()]);
        }

        return $this->render('vika/Encadrementcreate.html.twig', [
            'formEncadrement'=>$form->createView(),
            'editMode'=> $personne->getId()!==null
        ]);
    }

    /**
     * @Route("/vika-encadrement", name="encadrement_index")
     */
    public function vikaencadrement(){

        return $this->render('vika/Encadrementindex.html.twig');
    }

    /**
     * @Route("/vika-{path}", name="VikaContent", requirements={"id"="\d+"})
     */
    public function vikashow(ContentPage $contentPage){

        return $this->render('vika/showContent.html.twig', [
            'contentPage' => $contentPage,
        ]);
    }

}
