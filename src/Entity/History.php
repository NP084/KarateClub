<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Onurb\Doctrine\ORMMetadataGrapher\Mapping as Grapher;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\HistoryRepository")
 */
class History
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="histories")
     */
    private $user;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $refDate;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="history")
     */
    private $category;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function __construct()
    {
        $this->refDate = new \DateTime();
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
    public function getRefDate(): ?\DateTimeInterface
    {
        return $this->refDate;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setRefDate(\DateTimeInterface $refDate): self
    {
        $this->refDate = $refDate;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getCategory(): ?Category
    {
        return $this->category;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
