<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Onurb\Doctrine\ORMMetadataGrapher\Mapping as Grapher;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdressRepository")
 */
class Adress
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
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $num;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $postBox;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $streetName;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", mappedBy="adress")
     */
    private $users;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\City", inversedBy="adresses")
     * @ORM\JoinColumn(nullable=false)
     */
    private $city;


      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function __construct()
    {
        $this->users = new ArrayCollection();
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
    public function getType(): ?string
    {
        return $this->type;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getNum(): ?string
    {
        return $this->num;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setNum(string $num): self
    {
        $this->num = $num;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getPostBox(): ?string
    {
        return $this->postBox;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setPostBox(?string $postBox): self
    {
        $this->postBox = $postBox;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getStreetName(): ?string
    {
        return $this->streetName;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setStreetName(string $streetName): self
    {
        $this->streetName = $streetName;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addAdress($this);
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            $user->removeAdress($this);
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getCity(): ?City
    {
        return $this->city;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setCity(?City $city): self
    {
        $this->city = $city;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function __toString()
    {
        return $this->streetname;
    }


}
