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
     * @ORM\OneToMany(targetEntity="App\Entity\History", mappedBy="category")
     */
    private $history;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\VikaEvent", mappedBy="category")
     */
    private $vikaEvents;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\PriceGrid", mappedBy="category")
     */
    private $priceGrids;


    public function __construct()
    {
        $this->articles = new ArrayCollection();
        $this->history = new ArrayCollection();
        $this->vikaEvents = new ArrayCollection();
        $this->priceGrids = new ArrayCollection();
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

    /**
     * @return Collection|VikaEvent[]
     */
    public function getVikaEvents(): Collection
    {
        return $this->vikaEvents;
    }

    public function addVikaEvent(VikaEvent $vikaEvent): self
    {
        if (!$this->vikaEvents->contains($vikaEvent)) {
            $this->vikaEvents[] = $vikaEvent;
            $vikaEvent->setCategory($this);
        }

        return $this;
    }

    public function removeVikaEvent(VikaEvent $vikaEvent): self
    {
        if ($this->vikaEvents->contains($vikaEvent)) {
            $this->vikaEvents->removeElement($vikaEvent);
            // set the owning side to null (unless already changed)
            if ($vikaEvent->getCategory() === $this) {
                $vikaEvent->setCategory(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|PriceGrid[]
     */
    public function getPriceGrids(): Collection
    {
        return $this->priceGrids;
    }

    public function addPriceGrid(PriceGrid $priceGrid): self
    {
        if (!$this->priceGrids->contains($priceGrid)) {
            $this->priceGrids[] = $priceGrid;
            $priceGrid->setCategory($this);
        }

        return $this;
    }

    public function removePriceGrid(PriceGrid $priceGrid): self
    {
        if ($this->priceGrids->contains($priceGrid)) {
            $this->priceGrids->removeElement($priceGrid);
            // set the owning side to null (unless already changed)
            if ($priceGrid->getCategory() === $this) {
                $priceGrid->setCategory(null);
            }
        }

        return $this;
    }

}
