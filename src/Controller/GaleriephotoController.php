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
     * @Route("/gallery-{id}-edit", name="gallery_edit", requirements={"id"="\d+"})
     */
    public function form(Gallery $galerie = null, Request $request, ObjectManager $manager)
    {
        if (!$galerie) {
            $galerie = new Gallery();
        }

        $form = $this->createForm(GalleryType::class, $galerie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $medias = $galerie->getMedia();
            foreach ($medias as $media){
                $manager->persist($media);
                $media->setGallery($galerie);
                $manager->flush();
                if ($media->getImageName()==null){
                    $em = $this->getDoctrine()->getEntityManager();
                    $em->remove($media);
                    $em->flush();
                }
            }
            // if pour éviter les doublons
            if ($galerie->getId()) {
                $manager->persist($galerie);
            } else {
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
