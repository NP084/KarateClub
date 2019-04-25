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
     * @ORM\OneToMany(targetEntity="App\Entity\Status", mappedBy="registration")
     */
    private $status;

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
    private $gdpr;

    /**
     * @ORM\Column(type="boolean")
     */
    private $condition_registration;


    /**
     * @ORM\OneToOne(targetEntity="App\Entity\PriceList", cascade={"persist", "remove"})
     */
    private $profil_tarif;


    public function __construct()
    {
        $this->attachedFiles = new ArrayCollection();
        $this->status = new ArrayCollection();
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

    /**
     * @return Collection|Status[]
     */
    public function getStatus(): Collection
    {
        return $this->status;
    }

    public function addStatus(Status $status): self
    {
        if (!$this->status->contains($status)) {
            $this->status[] = $status;
            $status->setRegistration($this);
        }

        return $this;
    }

    public function removeStatus(Status $status): self
    {
        if ($this->status->contains($status)) {
            $this->status->removeElement($status);
            // set the owning side to null (unless already changed)
            if ($status->getRegistration() === $this) {
                $status->setRegistration(null);
            }
        }

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

    public function getGdpr(): ?bool
    {
        return $this->gdpr;
    }

    public function setGdpr(?bool $gdpr): self
    {
        $this->gdpr = $gdpr;

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

    public function getProfilTarif(): ?PriceList
    {
        return $this->profil_tarif;
    }

    public function setProfilTarif(?PriceList $profil_tarif): self
    {
        $this->profil_tarif = $profil_tarif;

        return $this;
    }

}
