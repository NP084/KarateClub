<?php

namespace App\Controller;

use App\Entity\Gallery;
use App\Form\MediaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Media;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use App\Form\GalleryType;

class GaleriephotoController extends AbstractController
{
    /**
     * @Route("/galeriephoto", name="galeriephoto")
     */
    public function index()
    {
        return $this->render('galeriephoto/index.html.twig');
    }

    /**
     * @Route("/galeriephoto-new", name="galeriephoto_create")
     */ 
    public function form(Media $galerie=null, Request $request, ObjectManager $manager){

        if (!$galerie){
            $galerie = new Gallery();
            $media   = new  Media();
        }

        $form = $this->createForm(GalleryType::class, $galerie);
        $form->handleRequest($request);

        $formMedia = $this->createForm(MediaType::class, $media);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            if (!$galerie->getId()){
                $galerie->setCreatedEv(new \DateTime());
            }
            $manager->persist($galerie);
            $manager->flush();
            /* return $this->redirectToRoute('blog_show',['id'=>$galerie->getId()]); */
            return $this->redirectToRoute('galeriephoto');
        }

        return $this->render('galeriephoto/create.html.twig', [
            'formGaleriephoto'=>$form->createView(),
            'formMedia'=>$formMedia->createView(),
            'editMode'=> $galerie->getId()!==null
        ]);
    }
}
