<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PreregistrationRepository")
 */
class Preregistration
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\user", inversedBy="preregistration", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?user
    {
        return $this->name;
    }

    public function setName(user $name): self
    {
        $this->name = $name;

        return $this;
    }
}
