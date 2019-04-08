<?php

namespace App\Controller;

use App\Entity\VikaEvent;
//use App\Form\BookingType;
use App\Form\UserType;
use App\Form\VikaEventType;
use App\Repository\VikaEventRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventController extends AbstractController
{
    /**
     * @Route("/event", name="event")
     */
    public function index()
    {
        return $this->render('event/showContent.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }

    /**
     * @Route("/event-calendar", name="event_calendar", methods={"GET"})
     */
    public function calendar(VikaEventRepository $repo, Request $request): Response
    {
        $event = $repo -> findAll();

        return $this->render('event/calendar.html.twig', [
            'event' => $event,
        ]);
     }

    /**
     * @Route("/event-newCalendar", name="event_newCalendar", methods={"GET", "POST"})
     */
    public function newcalendar(VikaEvent $vikaEvent=null, Request $request, ObjectManager $manager): Response
    {
        if (!$vikaEvent){
            $vikaEvent = new VikaEvent();
        }
        $formEvent = $this->createForm(VikaEventType::class, $vikaEvent);
        $formEvent->handleRequest($request);

        if ($formEvent->isSubmitted() && $formEvent->isValid()) {
            $manager->persist($vikaEvent);
            $manager->flush();
            return $this->redirectToRoute('event_calendar');
        }
        return $this->render('event/eventCreate.html.twig', [
            'formEvent' => $formEvent->createView(),
        ]);
    }
}
