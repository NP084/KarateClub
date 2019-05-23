<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Onurb\Doctrine\ORMMetadataGrapher\Mapping as Grapher;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactListRepository")
 */
class ContactList
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
    private $relation;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $info;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="contactLists")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PersonOfContact", inversedBy="contactLists")
     * @ORM\JoinColumn(nullable=false)
     */
    private $personOfContact;

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
    public function getRelation(): ?string
    {
        return $this->relation;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setRelation(string $relation): self
    {
        $this->relation = $relation;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getInfo(): ?string
    {
        return $this->info;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setInfo(?string $info): self
    {
        $this->info = $info;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getPersonOfContact(): ?PersonOfContact
    {
        return $this->personOfContact;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setPersonOfContact(?PersonOfContact $personOfContact): self
    {
        $this->personOfContact = $personOfContact;

        return $this;
    }
}
