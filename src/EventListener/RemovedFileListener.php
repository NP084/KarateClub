<?php

namespace App\EventListener;

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
    }
}