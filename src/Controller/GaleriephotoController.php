<?php

namespace App\Controller;

use App\Entity\Gallery;
use App\Entity\Media;
use App\Form\GalleryType;
use App\Form\GalleryHomeType;
use App\Form\MediaType;
use App\Repository\GalleryRepository;
use App\Repository\MediaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class GaleriephotoController extends AbstractController
{
    /**
     * @Route("/galleries", name="galeriephoto")
     */
    public function index(GalleryRepository $repo)
    {
        //Affiche les galeries dans l'ordre décroissant de leur création (nouveaux en haut)
        $galleries = $repo->findBy(
            [],
            ['id' => 'DESC']
        );
        // $galleries = $repo->findAll();
        return $this->render('galeriephoto/index.html.twig', [
            'galleries' => $galleries,
        ]);
    }

    /**
     * Supprime la galerie photo.
     * @Route("/gallery-delete-{id}", name="gallery_delete", requirements={"idCL"="\d+"})
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function GalleryDelete($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $gallery = $em->getRepository(Gallery::class)->find($id);
        $em->remove($gallery);
        $em->flush();

        return $this->redirectToRoute('galeriephoto');
    }


    /**
     * @Route("/gallery-new", name="galeriephoto_create")
     * @Route("/gallery-{id}-edit", name="gallery_edit", requirements={"id"="\d+"})
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function form(Gallery $galerie = null, Request $request, ObjectManager $manager)
    {
        if (!$galerie) {
            $galerie = new Gallery();
        }
//        Si name = Carrousel => on travaille sur le carrousel de la page d'accueil (prendre le type GalleryHomeType qui ne demande pas le nom et la description)
        if ($galerie->getName() == 'Carrousel') {
            $form = $this->createForm(GalleryHomeType::class, $galerie);
        } else {
            $form = $this->createForm(GalleryType::class, $galerie);
        }
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
//            si name est vide : galerie de la page d'accueil => on enregistre le nom et la description dans le controller
          /*  if (!$galerie->getName() or $galerie->getName()=='Carrousel') {
                $galerie->setName('Carrousel')
                    ->setDescription('Galerie photo de la page d\'accueil');
            }*/
            $medias = $galerie->getMedia();
            foreach ($medias as $media) {
                $manager->persist($media);
                $media->setGallery($galerie);
                $manager->flush();
                if ($media->getImageName() == null) {
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
            'galerie'          => $galerie,
            //    'formMedia'=>$formMedia->createView(),
            'editMode' => $galerie->getId() !== null
        ]);
    }

    /**
     * @Route("/gallery-view-{id}", name="gallery_show", requirements={"idCL"="\d+"})
     */
    public function galerieShow(Gallery $galerie, Request $request)
    {

        return $this->render('galeriephoto/galerieshow.html.twig', [
            'galerie' => $galerie
        ]);
    }

}
