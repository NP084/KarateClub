<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="App\Repository\PhoneRepository")
 */
class Phone
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
     * @ORM\ManyToMany(targetEntity="App\Entity\User", inversedBy="phones")
     */
    private $user;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Preregistration", mappedBy="phone")
     */
    private $preregistrations;

    public function __construct()
    {
        $this->user = new ArrayCollection();
        $this->preregistrations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getNum(): ?string
    {
        return $this->num;
    }

    public function setNum(string $num): self
    {
        $this->num = $num;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUser(): Collection
    {
        return $this->user;
    }

    public function addUser(User $user): self
    {
        if (!$this->user->contains($user)) {
            $this->user[] = $user;
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->user->contains($user)) {
            $this->user->removeElement($user);
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
            $preregistration->addPhone($this);
        }

        return $this;
    }

    public function removePreregistration(Preregistration $preregistration): self
    {
        if ($this->preregistrations->contains($preregistration)) {
            $this->preregistrations->removeElement($preregistration);
            $preregistration->removePhone($this);
        }

        return $this;
    }
}
