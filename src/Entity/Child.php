<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ChildRepository")
 */
class Child
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\User", cascade={"persist", "remove"})
     */
    private $Name;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\user", cascade={"persist", "remove"})
     */
    private $sex;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\user", cascade={"persist", "remove"})
     */
    private $firstname;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\user", cascade={"persist", "remove"})
     */
    private $birthdate;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\phone", inversedBy="children")
     */
    private $Phones;

    public function __construct()
    {
        $this->Phones = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?User
    {
        return $this->Name;
    }

    public function setName(?User $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getSex(): ?user
    {
        return $this->sex;
    }

    public function setSex(?user $sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    public function getFirstname(): ?user
    {
        return $this->firstname;
    }

    public function setFirstname(?user $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getBirthdate(): ?user
    {
        return $this->birthdate;
    }

    public function setBirthdate(?user $birthdate): self
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * @return Collection|phone[]
     */
    public function getPhones(): Collection
    {
        return $this->Phones;
    }

    public function addPhone(phone $phone): self
    {
        if (!$this->Phones->contains($phone)) {
            $this->Phones[] = $phone;
        }

        return $this;
    }

    public function removePhone(phone $phone): self
    {
        if ($this->Phones->contains($phone)) {
            $this->Phones->removeElement($phone);
        }

        return $this;
    }
}
