<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Onurb\Doctrine\ORMMetadataGrapher\Mapping as Grapher;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PaiementRepository")
 */
class Paiement
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
    private $amount;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Registration", inversedBy="paiement")
     * @ORM\JoinColumn(nullable=false)
     */
    private $registration;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="paiements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isPaid;

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
    public function getAmount(): ?float
    {
        return $this->amount;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getRegistration(): ?Registration
    {
        return $this->registration;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setRegistration(?Registration $registration): self
    {
        $this->registration = $registration;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getCategory(): ?Category
    {
        return $this->category;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getIsPaid(): ?bool
    {
        return $this->isPaid;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setIsPaid(?bool $isPaid): self
    {
        $this->isPaid = $isPaid;

        return $this;
    }
}
