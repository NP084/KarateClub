<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
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
     * @ORM\OneToMany(targetEntity="App\Entity\Preregistration", mappedBy="City")
     */
    private $preregistrations;

    public function __construct()
    {
        $this->adresses = new ArrayCollection();
        $this->preregistrations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function setZip(string $zip): self
    {
        $this->zip = $zip;

        return $this;
    }

    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    public function setCityName(string $cityName): self
    {
        $this->cityName = $cityName;

        return $this;
    }

    public function getCountry(): ?Country
    {
        return $this->country;
    }

    public function setCountry(?Country $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return Collection|Adress[]
     */
    public function getAdresses(): Collection
    {
        return $this->adresses;
    }

    public function addAdress(Adress $adress): self
    {
        if (!$this->adresses->contains($adress)) {
            $this->adresses[] = $adress;
            $adress->setCity($this);
        }

        return $this;
    }

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

    /**
     * @return Collection|Preregistration[]
     */
    public function getPreregistrations(): Collection
    {
        return $this->preregistrations;
    }

    public function addPreregistration(Preregistration $preregistration): self
    {
        if (!$this->preregistrations->contains($preregistration)) {
            $this->preregistrations[] = $preregistration;
            $preregistration->setCity($this);
        }

        return $this;
    }

    public function removePreregistration(Preregistration $preregistration): self
    {
        if ($this->preregistrations->contains($preregistration)) {
            $this->preregistrations->removeElement($preregistration);
            // set the owning side to null (unless already changed)
            if ($preregistration->getCity() === $this) {
                $preregistration->setCity(null);
            }
        }

        return $this;
    }
}
