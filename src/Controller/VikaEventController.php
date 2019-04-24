<?php

namespace App\Controller;

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

/**
 * @Route("/vika_event")
 */
class VikaEventController extends AbstractController
{
    /**
     * @Route("-list", name="vika_event_index", methods={"GET"})
     */
    public function index(VikaEventRepository $vikaEventRepository): Response
    {
        return $this->render('vika_event/index.html.twig', [
            'vika_events' => $vikaEventRepository->findAll(),
        ]);
    }

    /**
     * @Route("-calendar", name="vikaEvent_calendar", methods={"GET"})
     */
    public function calendar(): Response
    {
        return $this->render('vika_event/calendar.html.twig');
    }


    /**
     * @Route("-new", name="vika_event_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
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
            'vika_event' => $vikaEvent,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("-{id}", name="vika_event_show", methods={"GET"}, requirements={"id"="\d+"})
     */
    public function show(VikaEvent $vikaEvent): Response
    {
        return $this->render('vika_event/show.html.twig', [
            'vika_event' => $vikaEvent,
        ]);
    }

    /**
     * @Route("-{id}-edit", name="vika_event_edit", methods={"GET","POST"}, requirements={"id"="\d+"})
     */
    public function edit(Request $request, VikaEvent $vikaEvent, ObjectManager $manager): Response
    {
        $form = $this->createForm(VikaEventType::class, $vikaEvent);
        $form->handleRequest($request);

        $price = new PriceGrid();
        $formPrice= $this->createForm(PriceGridType::class, $price);
        $formPrice->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            if ($formPrice->isSubmitted() && $formPrice->isValid()){
                $manager->persist($price);
                $vikaEvent->addPriceGrid($price);
                $manager->persist($vikaEvent);
                $manager->flush();
            }
            else{
                $this->getDoctrine()->getManager()->flush();
            }


            return $this->redirectToRoute('vika_event_index');
        }

        return $this->render('vika_event/edit.html.twig', [
            'vika_event' => $vikaEvent,
            'price'=>$price,
            'form' => $form->createView(),
            'formPrice' => $formPrice->createView(),
        ]);
    }

    /**
     * @Route("-{id}-delete", name="vika_event_delete", methods={"DELETE"}, requirements={"id"="\d+"})
     */
    public function delete(Request $request, VikaEvent $vikaEvent): Response
    {
        if ($this->isCsrfTokenValid('delete'.$vikaEvent->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($vikaEvent);
            $entityManager->flush();
        }

        return $this->redirectToRoute('vika_event_index');
    }
}
