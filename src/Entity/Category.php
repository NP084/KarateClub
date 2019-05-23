<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Onurb\Doctrine\ORMMetadataGrapher\Mapping as Grapher;

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
     * @ORM\OneToMany(targetEntity="App\Entity\Paiement", mappedBy="category")
     */
    private $paiements;


      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function __construct()
    {
        $this->articles = new ArrayCollection();
        $this->history = new ArrayCollection();
        $this->vikaEvents = new ArrayCollection();
        $this->paiements = new ArrayCollection();
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
    public function getDescription(): ?string
    {
        return $this->description;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
            $article->setCategory($this);
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
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
      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getHistory(): Collection
    {
        return $this->history;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function addHistory(History $history): self
    {
        if (!$this->history->contains($history)) {
            $this->history[] = $history;
            $history->setCategory($this);
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
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
      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getVikaEvents(): Collection
    {
        return $this->vikaEvents;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function addVikaEvent(VikaEvent $vikaEvent): self
    {
        if (!$this->vikaEvents->contains($vikaEvent)) {
            $this->vikaEvents[] = $vikaEvent;
            $vikaEvent->setCategory($this);
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
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
     * @Grapher\IsDisplayedMethod()
     */
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

    /**
     * @return Collection|Paiement[]
     */
      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getPaiements(): Collection
    {
        return $this->paiements;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function addPaiement(Paiement $paiement): self
    {
        if (!$this->paiements->contains($paiement)) {
            $this->paiements[] = $paiement;
            $paiement->setCategory($this);
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function removePaiement(Paiement $paiement): self
    {
        if ($this->paiements->contains($paiement)) {
            $this->paiements->removeElement($paiement);
            // set the owning side to null (unless already changed)
            if ($paiement->getCategory() === $this) {
                $paiement->setCategory(null);
            }
        }

        return $this;
    }

}
