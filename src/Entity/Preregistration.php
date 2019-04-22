<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PreregistrationRepository")
 */
class Preregistration
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\User", inversedBy="preregistration", cascade={"persist", "remove"})
     */
    private $user;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Adress", inversedBy="preregistration", cascade={"persist", "remove"})
     */
    private $adress;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Phone", inversedBy="preregistrations")
     */
    private $phone;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\City", inversedBy="preregistrations",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $City;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Country")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Country;

    public function __construct()
    {
        $this->phone = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getAdress(): ?Adress
    {
        return $this->adress;
    }

    public function setAdress(?Adress $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * @return Collection|phone[]
     */
    public function getPhone(): Collection
    {
        return $this->phone;
    }

    public function addPhone(phone $phone): self
    {
        if (!$this->phone->contains($phone)) {
            $this->phone[] = $phone;
        }

        return $this;
    }

    public function removePhone(phone $phone): self
    {
        if ($this->phone->contains($phone)) {
            $this->phone->removeElement($phone);
        }

        return $this;
    }

    public function getCity(): ?City
    {
        return $this->City;
    }

    public function setCity(?City $City): self
    {
        $this->City = $City;

        return $this;
    }

    public function getCountry(): ?Country
    {
        return $this->Country;
    }

    public function setCountry(?Country $Country): self
    {
        $this->Country = $Country;

        return $this;
    }
}
