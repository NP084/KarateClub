<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $num2;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ContactList", mappedBy="personOfContact", orphanRemoval=true)
     */
    private $contactLists;


    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->contactLists = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getNum1(): ?string
    {
        return $this->num1;
    }

    public function setNum1(string $num1): self
    {
        $this->num1 = $num1;

        return $this;
    }

    public function getNum2(): ?string
    {
        return $this->num2;
    }

    public function setNum2(?string $num2): self
    {
        $this->num2 = $num2;

        return $this;
    }

    /**
     * @return Collection|ContactList[]
     */
    public function getContactLists(): Collection
    {
        return $this->contactLists;
    }

    public function addContactList(ContactList $contactList): self
    {
        if (!$this->contactLists->contains($contactList)) {
            $this->contactLists[] = $contactList;
            $contactList->setPersonOfContact($this);
        }

        return $this;
    }

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
