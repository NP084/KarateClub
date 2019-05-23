<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Onurb\Doctrine\ORMMetadataGrapher\Mapping as Grapher;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactClubRepository")
 */
class ContactClub
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $num;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email()
     */
    private $email;

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
    public function getNum(): ?string
    {
        return $this->num;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setNum(?string $num): self
    {
        $this->num = $num;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
