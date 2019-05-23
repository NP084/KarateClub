<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Onurb\Doctrine\ORMMetadataGrapher\Mapping as Grapher;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonOfContactRepository")
 */
class PersonOfContact
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $num1;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ContactList", mappedBy="personOfContact", orphanRemoval=true)
     */
    private $contactLists;


      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->contactLists = new ArrayCollection();
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
    public function getName(): ?string
    {
        return $this->name;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getNum1(): ?string
    {
        return $this->num1;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setNum1(string $num1): self
    {
        $this->num1 = $num1;

        return $this;
    }

    /**
     * @return Collection|ContactList[]
     */
      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getContactLists(): Collection
    {
        return $this->contactLists;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function addContactList(ContactList $contactList): self
    {
        if (!$this->contactLists->contains($contactList)) {
            $this->contactLists[] = $contactList;
            $contactList->setPersonOfContact($this);
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function removeContactList(ContactList $contactList): self
    {
        if ($this->contactLists->contains($contactList)) {
            $this->contactLists->removeElement($contactList);
            // set the owning side to null (unless already changed)
            if ($contactList->getPersonOfContact() === $this) {
                $contactList->setPersonOfContact(null);
            }
        }

        return $this;
    }

}
