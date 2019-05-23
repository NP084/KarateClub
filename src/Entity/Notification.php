<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Onurb\Doctrine\ORMMetadataGrapher\Mapping as Grapher;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NotificationRepository")
 */
class Notification
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
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content;

    /**
     * @ORM\Column(type="datetime")
     */
    private $notifDate;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", inversedBy="notifications")
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
    public function getTitle(): ?string
    {
        return $this->title;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getNotifDate(): ?\DateTimeInterface
    {
        return $this->notifDate;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setNotifDate(\DateTimeInterface $notifDate): self
    {
        $this->notifDate = $notifDate;

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
