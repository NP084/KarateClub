<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Onurb\Doctrine\ORMMetadataGrapher\Mapping as Grapher;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RegistrationRepository")
 */
class Registration
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $registrationDate;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $remark;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="registration")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\VikaEvent", inversedBy="registrations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $vikaEvent;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $minor;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $medical_care;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $image_diffusion;


    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $condition_registration;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $total_amount;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Paiement", mappedBy="registration", orphanRemoval=true)
     */
    private $paiement;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AttachedFile", mappedBy="registration", cascade={"persist", "remove"}, orphanRemoval=true )
     */
    private $attachedFiles;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $validateRegistration_date;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isValidated;



      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function __construct()
    {
        $this->attachedFiles = new ArrayCollection();
        $this->status = new ArrayCollection();
        $this->paiement = new ArrayCollection();
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
    public function getRegistrationDate(): ?\DateTimeInterface
    {
        return $this->registrationDate;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setRegistrationDate(\DateTimeInterface $registrationDate): self
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;

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
    public function getVikaEvent(): ?VikaEvent
    {
        return $this->vikaEvent;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setVikaEvent(?VikaEvent $vikaEvent): self
    {
        $this->vikaEvent = $vikaEvent;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getMinor(): ?bool
    {
        return $this->minor;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setMinor(?bool $minor): self
    {
        $this->minor = $minor;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getMedicalCare(): ?bool
    {
        return $this->medical_care;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setMedicalCare(?bool $medical_care): self
    {
        $this->medical_care = $medical_care;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getImageDiffusion(): ?bool
    {
        return $this->image_diffusion;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setImageDiffusion(?bool $image_diffusion): self
    {
        $this->image_diffusion = $image_diffusion;

        return $this;
    }



      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getConditionRegistration(): ?bool
    {
        return $this->condition_registration;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setConditionRegistration(bool $condition_registration): self
    {
        $this->condition_registration = $condition_registration;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getTotalAmount(): ?float
    {
        return $this->total_amount;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setTotalAmount(?float $total_amount): self
    {
        $this->total_amount = $total_amount;

        return $this;
    }

    /**
     * @return Collection|Paiement[]
     */
      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getPaiement(): Collection
    {
        return $this->paiement;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function addPaiement(Paiement $paiement): self
    {
        if (!$this->paiement->contains($paiement)) {
            $this->paiement[] = $paiement;
            $paiement->setRegistration($this);
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function removePaiement(Paiement $paiement): self
    {
        if ($this->paiement->contains($paiement)) {
            $this->paiement->removeElement($paiement);
            // set the owning side to null (unless already changed)
            if ($paiement->getRegistration() === $this) {
                $paiement->setRegistration(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|AttachedFile[]
     */
      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getAttachedFiles(): Collection
    {
        return $this->attachedFiles;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function addAttachedFile(AttachedFile $attachedFile): self
    {
        if (!$this->attachedFiles->contains($attachedFile)) {
            $this->attachedFiles[] = $attachedFile;
            $attachedFile->setRegistration($this);
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function removeAttachedFile(AttachedFile $attachedFile): self
    {
        if ($this->attachedFiles->contains($attachedFile)) {
            $this->attachedFiles->removeElement($attachedFile);
            // set the owning side to null (unless already changed)
            if ($attachedFile->getRegistration() === $this) {
                $attachedFile->setRegistration(null);
            }
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getValidateRegistrationDate(): ?\DateTimeInterface
    {
        return $this->validateRegistration_date;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setValidateRegistrationDate(?\DateTimeInterface $validateRegistration_date): self
    {
        $this->validateRegistration_date = $validateRegistration_date;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getIsValidated(): ?bool
    {
        return $this->isValidated;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setIsValidated(?bool $isValidated): self
    {
        $this->isValidated = $isValidated;

        return $this;
    }

}
