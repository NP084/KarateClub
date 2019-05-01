<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(type="boolean")
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
     * @ORM\OneToMany(targetEntity="App\Entity\AttachedFile", mappedBy="registration")
     */
    private $attachedFiles;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $medicalCertificate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $validateRegistration_date;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $conditionRegistration_Document;



    public function __construct()
    {
        $this->attachedFiles = new ArrayCollection();
        $this->status = new ArrayCollection();
        $this->paiement = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRegistrationDate(): ?\DateTimeInterface
    {
        return $this->registrationDate;
    }

    public function setRegistrationDate(\DateTimeInterface $registrationDate): self
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getVikaEvent(): ?VikaEvent
    {
        return $this->vikaEvent;
    }

    public function setVikaEvent(?VikaEvent $vikaEvent): self
    {
        $this->vikaEvent = $vikaEvent;

        return $this;
    }

    public function getMinor(): ?bool
    {
        return $this->minor;
    }

    public function setMinor(?bool $minor): self
    {
        $this->minor = $minor;

        return $this;
    }

    public function getMedicalCare(): ?bool
    {
        return $this->medical_care;
    }

    public function setMedicalCare(?bool $medical_care): self
    {
        $this->medical_care = $medical_care;

        return $this;
    }

    public function getImageDiffusion(): ?bool
    {
        return $this->image_diffusion;
    }

    public function setImageDiffusion(?bool $image_diffusion): self
    {
        $this->image_diffusion = $image_diffusion;

        return $this;
    }



    public function getConditionRegistration(): ?bool
    {
        return $this->condition_registration;
    }

    public function setConditionRegistration(bool $condition_registration): self
    {
        $this->condition_registration = $condition_registration;

        return $this;
    }

    public function getTotalAmount(): ?float
    {
        return $this->total_amount;
    }

    public function setTotalAmount(?float $total_amount): self
    {
        $this->total_amount = $total_amount;

        return $this;
    }

    /**
     * @return Collection|Paiement[]
     */
    public function getPaiement(): Collection
    {
        return $this->paiement;
    }

    public function addPaiement(Paiement $paiement): self
    {
        if (!$this->paiement->contains($paiement)) {
            $this->paiement[] = $paiement;
            $paiement->setRegistration($this);
        }

        return $this;
    }

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
    public function getAttachedFiles(): Collection
    {
        return $this->attachedFiles;
    }

    public function addAttachedFile(AttachedFile $attachedFile): self
    {
        if (!$this->attachedFiles->contains($attachedFile)) {
            $this->attachedFiles[] = $attachedFile;
            $attachedFile->setRegistration($this);
        }

        return $this;
    }

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

    public function getMedicalCertificate(): ?int
    {
        return $this->medicalCertificate;
    }

    public function setMedicalCertificate(?int $medicalCertificate): self
    {
        $this->medicalCertificate = $medicalCertificate;

        return $this;
    }

    public function getValidateRegistrationDate(): ?\DateTimeInterface
    {
        return $this->validateRegistration_date;
    }

    public function setValidateRegistrationDate(?\DateTimeInterface $validateRegistration_date): self
    {
        $this->validateRegistration_date = $validateRegistration_date;

        return $this;
    }

    public function getConditionRegistrationDocument(): ?int
    {
        return $this->conditionRegistration_Document;
    }

    public function setConditionRegistrationDocument(?int $conditionRegistration_Document): self
    {
        $this->conditionRegistration_Document = $conditionRegistration_Document;

        return $this;
    }


}
