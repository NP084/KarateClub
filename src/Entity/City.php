<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Onurb\Doctrine\ORMMetadataGrapher\Mapping as Grapher;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\CityRepository")
 */
class City
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Type("string")
     */
    private $zip;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Type("string")
     */
    private $cityName;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Country", inversedBy="city")
     * @Assert\Type("string")
     */
    private $country;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Adress", mappedBy="city", orphanRemoval=true)
     */
    private $adresses;

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function __construct()
    {
        $this->adresses = new ArrayCollection();
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
    public function getZip(): ?string
    {
        return $this->zip;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setZip(string $zip): self
    {
        $this->zip = $zip;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getCityName(): ?string
    {
        return $this->cityName;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setCityName(string $cityName): self
    {
        $this->cityName = $cityName;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getCountry(): ?Country
    {
        return $this->country;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setCountry(?Country $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return Collection|Adress[]
     */
      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getAdresses(): Collection
    {
        return $this->adresses;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function addAdress(Adress $adress): self
    {
        if (!$this->adresses->contains($adress)) {
            $this->adresses[] = $adress;
            $adress->setCity($this);
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function removeAdress(Adress $adress): self
    {
        if ($this->adresses->contains($adress)) {
            $this->adresses->removeElement($adress);
            // set the owning side to null (unless already changed)
            if ($adress->getCity() === $this) {
                $adress->setCity(null);
            }
        }

        return $this;
    }
}
