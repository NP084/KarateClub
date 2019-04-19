<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PriceListRepository")
 */
class PriceList
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
    private $number_adult;

    /**
     * @ORM\Column(type="float")
     */
    private $number_children;

    /**
     * @ORM\Column(type="float")
     */
    private $number_student;

    /**
     * @ORM\Column(type="float")
     */
    private $number_baby;

    /**
     * @ORM\Column(type="float")
     */
    private $price_federation;

    /**
     * @ORM\Column(type="float")
     */
    private $price_club;

    /**
     * @ORM\Column(type="float")
     */
    private $percentage;

    /**
     * @ORM\Column(type="float")
     */
    private $price_total;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumberAdult(): ?float
    {
        return $this->number_adult;
    }

    public function setNumberAdult(float $number_adult): self
    {
        $this->number_adult = $number_adult;

        return $this;
    }

    public function getNumberChildren(): ?float
    {
        return $this->number_children;
    }

    public function setNumberChildren(float $number_children): self
    {
        $this->number_children = $number_children;

        return $this;
    }

    public function getNumberStudent(): ?float
    {
        return $this->number_student;
    }

    public function setNumberStudent(float $number_student): self
    {
        $this->number_student = $number_student;

        return $this;
    }

    public function getNumberBaby(): ?float
    {
        return $this->number_baby;
    }

    public function setNumberBaby(float $number_baby): self
    {
        $this->number_baby = $number_baby;

        return $this;
    }

    public function getPriceFederation(): ?float
    {
        return $this->price_federation;
    }

    public function setPriceFederation(float $price_federation): self
    {
        $this->price_federation = $price_federation;

        return $this;
    }

    public function getPriceClub(): ?float
    {
        return $this->price_club;
    }

    public function setPriceClub(float $price_club): self
    {
        $this->price_club = $price_club;

        return $this;
    }

    public function getPercentage(): ?float
    {
        return $this->percentage;
    }

    public function setPercentage(float $percentage): self
    {
        $this->percentage = $percentage;

        return $this;
    }

    public function getPriceTotal(): ?float
    {
        return $this->price_total;
    }

    public function setPriceTotal(float $price_total): self
    {
        $this->price_total = $price_total;

        return $this;
    }
}
