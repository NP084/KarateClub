<?php

namespace App\Controller;

use App\Entity\VikaEvent;
use App\Form\VikaEventType;
use App\Repository\VikaEventRepository;
use CalendarBundle\CalendarEvents;
use CalendarBundle\Event\CalendarEvent;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\Events;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\EventListener\CalendarListener;
use Symfony\Component\EventDispatcher\EventDispatcher;

class VikaEventController extends AbstractController
{

    /**
     * @Route("/vika_event-calendar", name="event_calendar", methods={"GET"})
     */
    public function calendar(VikaEventRepository $repo, Request $request): Response
    {
        $event = $repo -> findAll();

     //   $vikaEvent = new CalendarEvent();
        $dispatcher = new EventDispatcher();

        $listener = new CalendarListener($repo);
        $dispatcher->addListener('calendar.set_data', [$listener, 'load']);
      //  $dispatcher->dispatch('calendar.set_data', $vikaEvent);

        return $this->render('vika_event/calendar.html.twig', [
            'event' => $event,
        ]);
    }

    /**
     * @Route("/vika_event", name="vika_event")
     */
    public function index()
    {
        return $this->render('vika_event/showContent.html.twig', [
            'controller_name' => 'VikaEventController',
        ]);
    }

    /**
     * @Route("/vika_event-newCalendar", name="event_newCalendar", methods={"GET", "POST"})
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
        return $this->render('vika_event/eventCreate.html.twig', [
            'formEvent' => $formEvent->createView(),
        ]);
    }


}
