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
     * @ORM\Column(type="string", length=50)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Firstname;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Sex;

    /**
     * @ORM\Column(type="date")
     */
    private $Birthdate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Streetname;

    /**
     * @ORM\Column(type="integer")
     */
    private $Housenumber;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $Postbox;

    /**
     * @ORM\Column(type="integer")
     */
    private $Zip;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $City;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Phone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Cellphone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Grade;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $Obtentiondate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Tutorname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Tutorfirstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->Firstname;
    }

    public function setFirstname(string $Firstname): self
    {
        $this->Firstname = $Firstname;

        return $this;
    }

    public function getSex(): ?string
    {
        return $this->Sex;
    }

    public function setSex(string $Sex): self
    {
        $this->Sex = $Sex;

        return $this;
    }

    public function getBirthdate(): ?\DateTimeInterface
    {
        return $this->Birthdate;
    }

    public function setBirthdate(\DateTimeInterface $Birthdate): self
    {
        $this->Birthdate = $Birthdate;

        return $this;
    }

    public function getStreetname(): ?string
    {
        return $this->Streetname;
    }

    public function setStreetname(string $Streetname): self
    {
        $this->Streetname = $Streetname;

        return $this;
    }

    public function getHousenumber(): ?int
    {
        return $this->Housenumber;
    }

    public function setHousenumber(int $Housenumber): self
    {
        $this->Housenumber = $Housenumber;

        return $this;
    }

    public function getPostbox(): ?string
    {
        return $this->Postbox;
    }

    public function setPostbox(?string $Postbox): self
    {
        $this->Postbox = $Postbox;

        return $this;
    }

    public function getZip(): ?int
    {
        return $this->Zip;
    }

    public function setZip(int $Zip): self
    {
        $this->Zip = $Zip;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->City;
    }

    public function setCity(string $City): self
    {
        $this->City = $City;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->Phone;
    }

    public function setPhone(?string $Phone): self
    {
        $this->Phone = $Phone;

        return $this;
    }

    public function getCellphone(): ?string
    {
        return $this->Cellphone;
    }

    public function setCellphone(?string $Cellphone): self
    {
        $this->Cellphone = $Cellphone;

        return $this;
    }

    public function getGrade(): ?string
    {
        return $this->Grade;
    }

    public function setGrade(?string $Grade): self
    {
        $this->Grade = $Grade;

        return $this;
    }

    public function getObtentiondate(): ?\DateTimeInterface
    {
        return $this->Obtentiondate;
    }

    public function setObtentiondate(?\DateTimeInterface $Obtentiondate): self
    {
        $this->Obtentiondate = $Obtentiondate;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getTutorname(): ?string
    {
        return $this->Tutorname;
    }

    public function setTutorname(?string $Tutorname): self
    {
        $this->Tutorname = $Tutorname;

        return $this;
    }

    public function getTutorfirstname(): ?string
    {
        return $this->Tutorfirstname;
    }

    public function setTutorfirstname(?string $Tutorfirstname): self
    {
        $this->Tutorfirstname = $Tutorfirstname;

        return $this;
    }
}
