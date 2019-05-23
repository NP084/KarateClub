<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Onurb\Doctrine\ORMMetadataGrapher\Mapping as Grapher;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @ORM\Entity(repositoryClass="App\Repository\VikaEventRepository")
 * @Vich\Uploadable
 */
class VikaEvent
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
    private $owner;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $capacity;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdEv;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="vikaEvents")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Registration", mappedBy="vikaEvent")
     */
    private $registrations;


    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * @Vich\UploadableField(mapping="vikaEvent_picture", fileNameProperty="imageName")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $imageName;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $updatedImage;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $endDate;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\PriceGrid", mappedBy="vikaEvent", cascade={"persist", "remove"}, orphanRemoval=true)
     * @ORM\OrderBy({"public" = "ASC"})
     */
    private $priceGrid;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $info;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $published;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $inscription;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $easyInscription;

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $imageFile
     */
      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedImage = new \DateTimeImmutable();
        }
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getImageName(): ?string
    {
        return $this->imageName;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function __construct()
    {
        $this->registrations = new ArrayCollection();
        $this->createdEv = new \DateTime();
        $this->priceGrid = new ArrayCollection();
        $this->published = false;
        $this->inscription = true;
        $this->easyInscription = false;
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
    public function getOwner(): ?string
    {
        return $this->owner;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setOwner(?string $owner): self
    {
        $this->owner = $owner;

        return $this;
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
    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setCapacity(?int $capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getCreatedEv(): ?\DateTimeInterface
    {
        return $this->createdEv;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setCreatedEv(\DateTimeInterface $createdEv): self
    {
        $this->createdEv = $createdEv;

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
     * @return Collection|Registration[]
     */
      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getRegistrations(): Collection
    {
        return $this->registrations;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function addRegistration(Registration $registration): self
    {
        if (!$this->registrations->contains($registration)) {
            $this->registrations[] = $registration;
            $registration->setVikaEvent($this);
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function removeRegistration(Registration $registration): self
    {
        if ($this->registrations->contains($registration)) {
            $this->registrations->removeElement($registration);
            // set the owning side to null (unless already changed)
            if ($registration->getVikaEvent() === $this) {
                $registration->setVikaEvent(null);
            }
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setEndDate(?\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return Collection|PriceGrid[]
     */
      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getPriceGrid(): Collection
    {
        return $this->priceGrid;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function addPriceGrid(PriceGrid $priceGrid): self
    {
        if (!$this->priceGrid->contains($priceGrid)) {
            $this->priceGrid[] = $priceGrid;
            $priceGrid->setVikaEvent($this);
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function removePriceGrid(PriceGrid $priceGrid): self
    {
        if ($this->priceGrid->contains($priceGrid)) {
            $this->priceGrid->removeElement($priceGrid);
            // set the owning side to null (unless already changed)
            if ($priceGrid->getVikaEvent() === $this) {
                $priceGrid->setVikaEvent(null);
            }
        }

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
    public function getPublished(): ?bool
    {
        return $this->published;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setPublished(?bool $published): self
    {
        $this->published = $published;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getInscription(): ?bool
    {
        return $this->inscription;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setInscription(?bool $inscription): self
    {
        $this->inscription = $inscription;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getEasyInscription(): ?bool
    {
        return $this->easyInscription;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setEasyInscription(?bool $easyInscription): self
    {
        $this->easyInscription = $easyInscription;

        return $this;
    }

}
