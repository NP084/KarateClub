<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Onurb\Doctrine\ORMMetadataGrapher\Mapping as Grapher;


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
     * @Grapher\IsDisplayedMethod()
     */
    public function __construct()
    {
        $this->user = new ArrayCollection();
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
     * @return Collection|User[]
     */
      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getUser(): Collection
    {
        return $this->user;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function addUser(User $user): self
    {
        if (!$this->user->contains($user)) {
            $this->user[] = $user;
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function removeUser(User $user): self
    {
        if ($this->user->contains($user)) {
            $this->user->removeElement($user);
        }

        return $this;
    }
}
