<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\PriceGrid;
use App\Entity\VikaEvent;
use App\Form\PriceGridType;
use App\Form\VikaEventType;
use App\Repository\VikaEventRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


/**
 * @Route("/vika_event")
 */
class VikaEventController extends AbstractController
{
    /**
     * AFFICHE LA LISTE DES EVENEMENTS AUX VISITEURS DU SITE - TRIE SUR LE CHAMP CAT
     * Cat : all; Cours; Stages; Compétitions; Autres
     * Correspond aux champs du Header du site
     * @Route("-showList-{cat}", name="vika_event_showList", methods={"GET"})
     */
    public function showList(VikaEventRepository $vikaEventRepository, $cat): Response
    {
        $user = $this->getUser();
        if ($cat == 'all') {
            $vikaEvents = $vikaEventRepository->findBy(
                ['published'=>true],
                ['startDate' => 'DESC']
            );
        }
        else {
            // trouver la catégorie d'événement à afficher. La catégorie se trouve dans l'URL => cat
            $category = $this->getDoctrine()
                ->getRepository(Category::class)
                ->findBy(
                    ['title' => $cat]
                );
            // recherche des événements qui sont de la catégorie cat
            $vikaEvents = $vikaEventRepository->findBy(
                ['category' => $category,
                    'published'=>true],
                ['startDate' => 'DESC']
            );
        }
        return $this->render('vika_event/indexShow.html.twig', [
            'vikaEvents' => $vikaEvents,
            'user' => $user,
        ]);
    }

    /**
     * AFFICHLE LA LISTE DES EVENEMENTS (VUE ADMIN)
     * @Route("-list", name="vika_event_index", methods={"GET"})
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function index(VikaEventRepository $vikaEventRepository): Response
    {
        $vikaEvents = $vikaEventRepository->findBy(
            [ ],
            ['startDate' => 'DESC']
        );
        return $this->render('vika_event/index.html.twig', [
            'vikaEvents' => $vikaEvents,
        ]);
    }

    /**
     * PAS FONCTIONNEL
     * @Route("-calendar", name="vikaEvent_calendar", methods={"GET"})
     */
    public function calendar(): Response
    {
        return $this->render('vika_event/calendar.html.twig');
    }


    /**
     * MONTRE à UN VISITEUR LES DéTAILS D'UN EVENEMENT
     * @Route("-{id}", name="vika_event_show", methods={"GET"}, requirements={"id"="\d+"})
     */
    public function show(VikaEvent $vikaEvent): Response
    {
        return $this->render('vika_event/show.html.twig', [
            'vikaEvent' => $vikaEvent,
        ]);
    }

    /**
     * CREATION ET EDITION D'UN EVENEMENT - PERMET AUSSI D'AJOUTER PLS TARIFS
     * @Route("-new", name="vika_event_new", methods={"GET","POST"})
     * @Route("-{id}-edit", name="vika_event_edit", methods={"GET","POST"}, requirements={"id"="\d+"})
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function edit(Request $request, VikaEvent $vikaEvent = null, ObjectManager $manager): Response
    {
        $newMode = false;
        if (!$vikaEvent) {
            $vikaEvent = new VikaEvent();
            $newMode = true;
        }
        $form = $this->createForm(VikaEventType::class, $vikaEvent);
        $form->handleRequest($request);

        $price = new PriceGrid();
        $formPrice = $this->createForm(PriceGridType::class, $price);
        $formPrice->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //$entityManager = $this->getDoctrine()->getManager();
            //$entityManager->persist($vikaEvent);
            $manager->persist($vikaEvent);
            //$entityManager->flush();
            $manager->flush();
            //$this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('vika_event_edit', ['id' => $vikaEvent->getId()]);
        }

        if ($formPrice->isSubmitted() && $formPrice->isValid()) {
            $manager->persist($price);
            $vikaEvent->addPriceGrid($price);
            $manager->persist($vikaEvent);
            $manager->flush();
        }

        return $this->render('vika_event/edit.html.twig', [
            'vikaEvent' => $vikaEvent,
            'price' => $price,
            'form' => $form->createView(),
            'formPrice' => $formPrice->createView(),
            'newMode' => $newMode,
            'newMode'=>$newMode,
        ]);
    }

    /**
     * SUPPRIME UN EVENEMENT - SES TARFIS SONT éGALEMENT SUPPRIMé
     * @Route("-{id}-delete", name="vika_event_delete", methods={"DELETE"}, requirements={"id"="\d+"})
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function delete(Request $request, VikaEvent $vikaEvent): Response
    {
        if ($this->isCsrfTokenValid('delete' . $vikaEvent->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($vikaEvent);
            $entityManager->flush();
        }

        return $this->redirectToRoute('vika_event_index');
    }
}

/*
 */
/*public function new(Request $request): Response
    {
        $vikaEvent = new VikaEvent();
        $form = $this->createForm(VikaEventType::class, $vikaEvent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($vikaEvent);
            $entityManager->flush();

            return $this->redirectToRoute('vika_event_index');
        }

        return $this->render('vika_event/new.html.twig', [
            'vikaEvent' => $vikaEvent,
            'form' => $form->createView(),
        ]);
    }*/