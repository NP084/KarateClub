<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Onurb\Doctrine\ORMMetadataGrapher\Mapping as Grapher;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContentPageRepository")
 */
class ContentPage
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
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $path;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $subtitle;

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
    public function getContent(): ?string
    {
        return $this->content;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setSubtitle(?string $subtitle): self
    {
        $this->subtitle = $subtitle;

        return $this;
    }
}
