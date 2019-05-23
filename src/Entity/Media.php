<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Onurb\Doctrine\ORMMetadataGrapher\Mapping as Grapher;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @ORM\Entity(repositoryClass="App\Repository\MediaRepository")
 * @Vich\Uploadable
 */
class Media
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
    private $imageName;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * @Vich\UploadableField(mapping="media_picture", fileNameProperty="imageName")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Gallery", inversedBy="media",  cascade={"persist"})
     */
    private $gallery;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedImage;

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
            $this->updatedImage = new  \DateTimeImmutable();
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
    public function getGallery(): ?Gallery
    {
        return $this->gallery;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setGallery(?Gallery $gallery): self
    {
        $this->gallery = $gallery;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getUpdatedImage(): ?\DateTimeInterface
    {
        return $this->updatedImage;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setUpdatedImage(\DateTimeInterface $updatedImage): self
    {
        $this->updatedImage = $updatedImage;

        return $this;
    }
}
