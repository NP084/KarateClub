<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Onurb\Doctrine\ORMMetadataGrapher\Mapping as Grapher;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;


/**
 * @ORM\Entity(repositoryClass="App\Repository\EncadrementRepository")
 * @Vich\Uploadable
 */
class Encadrement
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
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $datecreat;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * @Vich\UploadableField(mapping="encadrement_picture", fileNameProperty="imagename")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $imagename;

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
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
            $this->datecreat = new \DateTimeImmutable();
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
    public function getId(): ?int
    {
        return $this->id;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getName(): ?string
    {
        return $this->name;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setName(string $name): self
    {
        $this->name = $name;

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

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getImagename(): ?string
    {
        return $this->imagename;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setImagename(?string $imagename): void
    {
        $this->imagename = $imagename;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getDatecreat(): ?\DateTimeInterface
    {
        return $this->datecreat;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setDatecreat(\DateTimeInterface $datecreat): self
    {
        $this->datecreat = $datecreat;

        return $this;
    }
}
