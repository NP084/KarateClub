<?php


namespace App\EventListener;

use App\Entity\VikaEvent;
use App\Repository\VikaEventRepository;
use CalendarBundle\Entity\Event;
use CalendarBundle\Event\CalendarEvent;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


class CalendarListener
{
    private $vikaEventRepository;

    public function __construct(
        VikaEventRepository $vikaEventRepository,
        UrlGeneratorInterface $router

    ) {
        $this->VikaEventRepository = $vikaEventRepository;
        $this->router = $router;
    }

    public function load(CalendarEvent $calendar): void
    {
        $start = $calendar->getStart();
        $end = $calendar->getEnd();
      //  $filters = $calendar->getFilters();

        // Modify the query to fit to your entity and needs
        // Change booking.beginAt by your start date property
        $vikaEvents = $this->VikaEventRepository
            ->createQueryBuilder('vikaEvent')
            ->where('vikaEvent.startDate BETWEEN :start and :end')
            ->setParameter('start', $start->format('d-m-Y H:i:s'))
            ->setParameter('end', $end->format('d-m-Y H:i:s'))
            ->getQuery()
            ->getResult()
        ;


        foreach ($vikaEvents as $vikaEvent) {
            // this create the events with your data (here booking data) to fill calendar
            $vikaEventEvent = new Event(
                $vikaEvent->getOwner(),
                $vikaEvent->getTitle(),
                $vikaEvent->getStartDate(),
                $vikaEvent->getEndDate() // If the end date is null or not defined, a all day event is created.
            );

            /*
             * Add custom options to events
             *
             * For more information see: https://fullcalendar.io/docs/event-object
             * and: https://github.com/fullcalendar/fullcalendar/blob/master/src/core/options.ts
             */

            $vikaEventEvent->setOptions([
                'backgroundColor' => 'red',
                'borderColor' => 'red',
            ]);
            $vikaEventEvent->addOption(
                'url',
                $this->router->generate('event_calendar')
            //['id' => $booking->getId(), ])
            );
            // finally, add the event to the CalendarEvent to fill the calendar
            $calendar->addEvent($vikaEventEvent);
        }
    }

}