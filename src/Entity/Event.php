<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EventRepository")
 */
class Event
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $owner;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $capacity;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdEv;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Registration", mappedBy="event")
     */
    private $registrations;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="event")
     */
    private $category;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\TimePeriod", inversedBy="events")
     */
    private $timePeriod;

    public function __construct()
    {
        $this->media = new ArrayCollection();
        $this->registrations = new ArrayCollection();
        $this->timePeriod = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function setOwner(?string $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    public function setCapacity(?int $capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getCreatedEv(): ?\DateTimeInterface
    {
        return $this->createdEv;
    }

    public function setCreatedEv(\DateTimeInterface $createdEv): self
    {
        $this->createdEv = $createdEv;

        return $this;
    }

    /**
     * @return Collection|Registration[]
     */
    public function getRegistrations(): Collection
    {
        return $this->registrations;
    }

    public function addRegistration(Registration $registration): self
    {
        if (!$this->registrations->contains($registration)) {
            $this->registrations[] = $registration;
            $registration->setEvent($this);
        }

        return $this;
    }

    public function removeRegistration(Registration $registration): self
    {
        if ($this->registrations->contains($registration)) {
            $this->registrations->removeElement($registration);
            // set the owning side to null (unless already changed)
            if ($registration->getEvent() === $this) {
                $registration->setEvent(null);
            }
        }

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection|TimePeriod[]
     */
    public function getTimePeriod(): Collection
    {
        return $this->timePeriod;
    }

    public function addTimePeriod(TimePeriod $timePeriod): self
    {
        if (!$this->timePeriod->contains($timePeriod)) {
            $this->timePeriod[] = $timePeriod;
        }

        return $this;
    }

    public function removeTimePeriod(TimePeriod $timePeriod): self
    {
        if ($this->timePeriod->contains($timePeriod)) {
            $this->timePeriod->removeElement($timePeriod);
        }

        return $this;
    }
}
