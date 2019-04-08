<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TimePeriodRepository")
 */
class TimePeriod
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $endDate;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\VikaEvent", mappedBy="timePeriod")
     */
    private $vikaEvents;


    public function __construct()
    {
        $this->vikaEvents = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return Collection|VikaEvent[]
     */
    public function getVikaEvents(): Collection
    {
        return $this->vikaEvents;
    }

    public function addVikaEvent(VikaEvent $vikaEvent): self
    {
        if (!$this->vikaEvents->contains($vikaEvent)) {
            $this->vikaEvents[] = $vikaEvent;
            $vikaEvent->addTimePeriod($this);
        }

        return $this;
    }

    public function removeVikaEvent(VikaEvent $vikaEvent): self
    {
        if ($this->vikaEvents->contains($vikaEvent)) {
            $this->vikaEvents->removeElement($vikaEvent);
            $vikaEvent->removeTimePeriod($this);
        }

        return $this;
    }
}
