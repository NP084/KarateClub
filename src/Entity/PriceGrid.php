<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PriceGridRepository")
 */
class PriceGrid
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $public;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $info;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\VikaEvent", inversedBy="priceGrids")
     */
    private $vikaEvent;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="priceGrids")
     */
    private $category;

    public function __construct()
    {
        $this->vikaEvent = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getPublic(): ?string
    {
        return $this->public;
    }

    public function setPublic(string $public): self
    {
        $this->public = $public;

        return $this;
    }

    public function getInfo(): ?string
    {
        return $this->info;
    }

    public function setInfo(?string $info): self
    {
        $this->info = $info;

        return $this;
    }

    /**
     * @return Collection|VikaEvent[]
     */
    public function getVikaEvent(): Collection
    {
        return $this->vikaEvent;
    }

    public function addVikaEvent(VikaEvent $vikaEvent): self
    {
        if (!$this->vikaEvent->contains($vikaEvent)) {
            $this->vikaEvent[] = $vikaEvent;
        }

        return $this;
    }

    public function removeVikaEvent(VikaEvent $vikaEvent): self
    {
        if ($this->vikaEvent->contains($vikaEvent)) {
            $this->vikaEvent->removeElement($vikaEvent);
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
}
