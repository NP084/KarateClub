<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Onurb\Doctrine\ORMMetadataGrapher\Mapping as Grapher;

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
     * @ORM\Column(type="string", length=255)
     */
    private $label;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\VikaEvent", inversedBy="priceGrid")
     */
    private $vikaEvent;

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function __construct()
    {

    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getId(): ?int
    {
        return $this->id;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getPublic(): ?string
    {
        return $this->public;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setPublic(string $public): self
    {
        $this->public = $public;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getInfo(): ?string
    {
        return $this->info;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setInfo(?string $info): self
    {
        $this->info = $info;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getVikaEvent(): ?VikaEvent
    {
        return $this->vikaEvent;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setVikaEvent(?VikaEvent $vikaEvent): self
    {
        $this->vikaEvent = $vikaEvent;

        return $this;
    }
}
