<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StatusRepository")
 */
class Status
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
     * @ORM\Column(type="boolean")
     */
    private $inOrder;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $receiptDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $validationDate;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AttachedFile", mappedBy="status")
     */
    private $attachedFile;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Registration", inversedBy="status")
     */
    private $registration;

    /**
     * @ORM\Column(type="integer")
     */
    private $statut;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $remark;

    public function __construct()
    {
        $this->attachedFile = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getInOrder(): ?bool
    {
        return $this->inOrder;
    }

    public function setInOrder(bool $inOrder): self
    {
        $this->inOrder = $inOrder;

        return $this;
    }

    public function getReceiptDate(): ?\DateTimeInterface
    {
        return $this->receiptDate;
    }

    public function setReceiptDate(?\DateTimeInterface $receiptDate): self
    {
        $this->receiptDate = $receiptDate;

        return $this;
    }

    public function getValidationDate(): ?\DateTimeInterface
    {
        return $this->validationDate;
    }

    public function setValidationDate(?\DateTimeInterface $validationDate): self
    {
        $this->validationDate = $validationDate;

        return $this;
    }

    /**
     * @return Collection|AttachedFile[]
     */
    public function getAttachedFile(): Collection
    {
        return $this->attachedFile;
    }

    public function addAttachedFile(AttachedFile $attachedFile): self
    {
        if (!$this->attachedFile->contains($attachedFile)) {
            $this->attachedFile[] = $attachedFile;
            $attachedFile->setStatus($this);
        }

        return $this;
    }

    public function removeAttachedFile(AttachedFile $attachedFile): self
    {
        if ($this->attachedFile->contains($attachedFile)) {
            $this->attachedFile->removeElement($attachedFile);
            // set the owning side to null (unless already changed)
            if ($attachedFile->getStatus() === $this) {
                $attachedFile->setStatus(null);
            }
        }

        return $this;
    }

    public function getRegistration(): ?Registration
    {
        return $this->registration;
    }

    public function setRegistration(?Registration $registration): self
    {
        $this->registration = $registration;

        return $this;
    }

    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(int $statut): self
    {
        $this->statut = $statut;

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
}
