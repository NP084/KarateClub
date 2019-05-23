<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Onurb\Doctrine\ORMMetadataGrapher\Mapping as Grapher;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CountryRepository")
 */
class Country
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $countryName;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\City", mappedBy="country")
     */
    private $city;

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function __construct()
    {
        $this->city = new ArrayCollection();
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
    public function getCountryName(): ?string
    {
        return $this->countryName;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setCountryName(string $countryName): self
    {
        $this->countryName = $countryName;

        return $this;
    }

    /**
     * @return Collection|City[]
     */
      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getCity(): Collection
    {
        return $this->city;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function addCity(City $city): self
    {
        if (!$this->city->contains($city)) {
            $this->city[] = $city;
            $city->setCountry($this);
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function removeCity(City $city): self
    {
        if ($this->city->contains($city)) {
            $this->city->removeElement($city);
            // set the owning side to null (unless already changed)
            if ($city->getCountry() === $this) {
                $city->setCountry(null);
            }
        }

        return $this;
    }
}
