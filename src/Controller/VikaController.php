<?php

namespace App\Controller;

use App\Entity\ContentPage;
use App\Form\ArticleType;
use App\Form\ContentType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\EncadrementType;
use App\Entity\Encadrement;
use App\Repository\EncadrementRepository;



class VikaController extends AbstractController
{
    /**
     * @Route("/vika-encadrement-new", name="encadrement_create")
     * @Route("/vika-encadrement-{id}-edit", name="encadrement_edit")
     */
    public function form(Encadrement $personne=null, Request $request, ObjectManager $manager ){

        if (!$personne) {
            $personne = New Encadrement();
        }

        $form = $this->createForm(EncadrementType::class, $personne);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            if (!$personne->getId()){
                $personne->setDatecreat(new \DateTime());
            }
            $manager->persist($personne);
            $manager->flush();
            return $this->redirectToRoute('encadrement_index',['path'=>'Encadrement']);
        }

        return $this->render('vika/Encadrementcreate.html.twig', [
            'formEncadrement'=>$form->createView(),
            'editMode'=> $personne->getId()!==null
        ]);
    }

    /**
     * Supprime l'entraineur.
     * @Route("/vika-encadrement-delete-{id}", name="encadrement_delete")
     */
    public function EncadrementDelete($id){
        $em = $this->getDoctrine()->getEntityManager();
        $personne = $em->getRepository(Encadrement::class)->find($id);
        $em->remove($personne);
        $em->flush();

        return $this->redirectToRoute('encadrement_index',['path'=>'Encadrement']);
    }



    /**
     * @Route("/vika-page-{path}", name="encadrement_index")
     */
    public function vikaEncadrement(EncadrementRepository $repo, ContentPage $contentPage){

        $personnes = $repo -> findAll();

        return $this->render('vika/Encadrementindex.html.twig', [
            'personnes' => $personnes,
            'contentPage' => $contentPage,
            ]);
    }

    /**
     * @Route("/vika-{path}-edit", name="VikaContentEdit")
     *
     */
    public function vikacreate(ContentPage $content, Request $request, ObjectManager $manager ){

        $form = $this->createForm(ContentType::class, $content);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $manager->persist($content);
            $manager->flush();
            return $this->redirectToRoute('VikaContentEdit',['path'=>$content->getPath()]);
        }

        return $this->render('vika/vikacreate.html.twig', [
            'formContent'=>$form->createView(),

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
