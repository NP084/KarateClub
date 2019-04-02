<?php

namespace App\EventListener;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

use Vich\UploaderBundle\Event\Event;

class RemovedFileListener
{

    public function onVichUploaderPostRemove(Event $event)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $removedFile = $event->getObject();
        //$mapping = $event->getMapping();
        $this->remove($removedFile);
        $this->flush();
        // do your stuff with $object and/or $mapping...
    }
}