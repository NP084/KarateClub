<?php

namespace App\Controller;

use App\Entity\ContentPage;
use App\Entity\Sponsor;
use App\Form\ArticleType;
use App\Form\ContentType;
use App\Form\SponsorType;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\EncadrementType;
use App\Entity\Encadrement;
use App\Repository\EncadrementRepository;
use App\Repository\SponsorRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;



class VikaController extends AbstractController
{
    /**
     * @Route("/vika-encadrement-new", name="encadrement_create")
     * @Route("/vika-encadrement-{id}-edit", name="encadrement_edit", requirements={"id"="\d+"})
     * @Security("is_granted('ROLE_ADMIN')")
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
     * @Route("/vika-sponsors-new", name="sponsors_create")
     * @Route("/vika-sponsors-{id}-edit", name="sponsors_edit", requirements={"id"="\d+"})
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function formSponsors(Sponsor $sponsors=null, Request $request, ObjectManager $manager ){

        if (!$sponsors) {
            $sponsors = New Sponsor();
        }

        $form = $this->createForm(SponsorType::class, $sponsors);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            if (!$sponsors->getId()){
                $sponsors->setDatecreat(new \DateTime());
            }
            $manager->persist($sponsors);
            $manager->flush();
            return $this->redirectToRoute('sponsor_index',['path'=>'Sponsor']);
        }

        return $this->render('vika/Sponsorcreate.html.twig', [
            'formSponsor'=>$form->createView(),
            'editMode'=> $sponsors->getId()!==null
        ]);
    }

    /**
     * Supprime l'entraineur.
     * @Route("/vika-encadrement-delete-{id}", name="encadrement_delete", requirements={"id"="\d+"})
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function EncadrementDelete(Encadrement $personne){
        $em = $this->getDoctrine()->getEntityManager();
        $em->remove($personne);
        $em->flush();

        return $this->redirectToRoute('encadrement_index',['path'=>'Encadrement']);
    }

/**
     * Supprime le sponsor.
     * @Route("/vika-sponsor-delete-{id}", name="sponsors_delete", requirements={"id"="\d+"})
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function SponsorDelete(Sponsor $sponsor){
        $em = $this->getDoctrine()->getEntityManager();
        $em->remove($sponsor);
        $em->flush();

        return $this->redirectToRoute('sponsor_index',['path'=>'Sponsor']);
    }

    /**
     * @Route("/vika%page-{path}", name="encadrement_index")
     */
    public function vikaEncadrement(EncadrementRepository $repo, ContentPage $contentPage){

        $personnes = $repo -> findAll();

        return $this->render('vika/Encadrementindex.html.twig', [
            'personnes' => $personnes,
            'contentPage' => $contentPage,
            ]);
    }

    /**
     * @Route("/vika-page-{path}", name="sponsor_index")
     */
    public function vikaSponsor(SponsorRepository $repo, ContentPage $contentPage){

        $sponsors = $repo -> findAll();

        return $this->render('vika/Sponsorindex.html.twig', [
            'sponsors' => $sponsors,
            'contentPage' => $contentPage,
            ]);
    }

    /**
     * @Route("/vika-{path}-edit", name="VikaContentEdit")
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function vikacreate(ContentPage $content, Request $request, ObjectManager $manager ){

        $form = $this->createForm(ContentType::class, $content);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $manager->persist($content);
            $manager->flush();
            return $this->redirectToRoute('VikaContent',['path'=>$content->getPath()]);
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
