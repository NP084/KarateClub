<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
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
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Article", mappedBy="category")
     */
    private $articles;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Event", mappedBy="category")
     */
    private $event;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Equipment", mappedBy="category")
     */
    private $equipment;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\History", mappedBy="category")
     */
    private $history;


    public function __construct()
    {
        $this->articles = new ArrayCollection();
        $this->event = new ArrayCollection();
        $this->equipment = new ArrayCollection();
        $this->history = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
            $article->setCategory($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->contains($article)) {
            $this->articles->removeElement($article);
            // set the owning side to null (unless already changed)
            if ($article->getCategory() === $this) {
                $article->setCategory(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Event[]
     */
    public function getEvent(): Collection
    {
        return $this->event;
    }

    public function addEvent(Event $event): self
    {
        if (!$this->event->contains($event)) {
            $this->event[] = $event;
            $event->setCategory($this);
        }

        return $this;
    }

    public function removeEvent(Event $event): self
    {
        if ($this->event->contains($event)) {
            $this->event->removeElement($event);
            // set the owning side to null (unless already changed)
            if ($event->getCategory() === $this) {
                $event->setCategory(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Equipment[]
     */
    public function getEquipment(): Collection
    {
        return $this->equipment;
    }

    public function addEquipment(Equipment $equipment): self
    {
        if (!$this->equipment->contains($equipment)) {
            $this->equipment[] = $equipment;
            $equipment->setCategory($this);
        }

        return $this;
    }

    public function removeEquipment(Equipment $equipment): self
    {
        if ($this->equipment->contains($equipment)) {
            $this->equipment->removeElement($equipment);
            // set the owning side to null (unless already changed)
            if ($equipment->getCategory() === $this) {
                $equipment->setCategory(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|History[]
     */
    public function getHistory(): Collection
    {
        return $this->history;
    }

    public function addHistory(History $history): self
    {
        if (!$this->history->contains($history)) {
            $this->history[] = $history;
            $history->setCategory($this);
        }

        return $this;
    }

    public function removeHistory(History $history): self
    {
        if ($this->history->contains($history)) {
            $this->history->removeElement($history);
            // set the owning side to null (unless already changed)
            if ($history->getCategory() === $this) {
                $history->setCategory(null);
            }
        }

        return $this;
    }

}
