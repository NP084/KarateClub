<?php

namespace App\Controller;

use App\Entity\Gallery;
use App\Entity\Media;
use App\Form\GalleryType;
use App\Form\MediaType;
use App\Repository\GalleryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;


class GaleriephotoController extends AbstractController
{
    /**
     * @Route("/galleries", name="galeriephoto")
     */
    public function index(GalleryRepository $repo)
    {
        $galleries = $repo->findAll();
        return $this->render('galeriephoto/index.html.twig', [
            'galleries'=>$galleries,
        ]);
    }

    /**
     * @Route("/gallery-new", name="galeriephoto_create")
     */
    public function form(Gallery $galerie = null, Request $request, ObjectManager $manager)
    {

        if (!$galerie) {
            $galerie = new Gallery();
        }
        // $media = new Media();

        /*        $name1 = new Media();
                $name1 -> setImageName('photo1');
                $name1 -> setUpdatedImage(new \DateTime());
                $name2 = new Media();
                $name2 -> setImageName('photo2');
                $galerie->addMedium($name1);
                $galerie->addMedium($name2);*/

        $form = $this->createForm(GalleryType::class, $galerie);
        $form->handleRequest($request);

        /*     $formMedia = $this->createForm(MediaType::class, $media);
             $form->handleRequest($request);*/

        if ($form->isSubmitted() && $form->isValid()) {
            // if (!$galerie->getId()){
            //    $galerie->setCreatedEv(new \DateTime());
            //}

            if ($galerie->getId()) {
                $manager->persist($galerie);
            } else {
                /*$entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($galerie);
                $entityManager->flush();*/
                $manager->persist($galerie);
                $manager->flush();
            }
            return $this->redirectToRoute('galeriephoto');
        }

        return $this->render('galeriephoto/create.html.twig', [
            'formGaleriephoto' => $form->createView(),
            //    'formMedia'=>$formMedia->createView(),
            'editMode' => $galerie->getId() !== null
        ]);
    }
}
