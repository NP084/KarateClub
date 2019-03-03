<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(
 *  fields={"email"},
 *  message="L'email indiqué est déjà utilisé !"
 * )
 */
class User implements UserInterface
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
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min=8,
     *      max=24,
     *      minMessage = "Votre mot de passe doit faire minimum {{ limit }} caractères !",
     *      maxMessage = "Votre mot de passe doit faire maximum {{ limit }} caractères !")
     * @Assert\EqualTo(propertyPath="confirm_password", message="Ne correspond pas à la confirmation !")
     */
    private $password;


    public $confirm_password;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Phone", mappedBy="user")
     */
    private $phones;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Adress", inversedBy="users")
     */
    private $adress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $birthday;

    /**
     * @ORM\Column(type="date")
     */
    private $createdUser;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $belt;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $receiptDate;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Rental", mappedBy="member")
     */
    private $rentals;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AttachedFile", mappedBy="member")
     */
    private $attachedFiles;


    public function __construct()
    {
        $this->phones = new ArrayCollection();
        $this->adress = new ArrayCollection();
        $this->rentals = new ArrayCollection();
        $this->attachedFiles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function eraseCredentials(){

    }
    public function getSalt(){

    }
    public function getRoles(){
        return ['ROLE_USER'];
    }

    /**
     * @return Collection|Phone[]
     */
    public function getPhones(): Collection
    {
        return $this->phones;
    }

    public function addPhone(Phone $phone): self
    {
        if (!$this->phones->contains($phone)) {
            $this->phones[] = $phone;
            $phone->addUser($this);
        }

        return $this;
    }

    public function removePhone(Phone $phone): self
    {
        if ($this->phones->contains($phone)) {
            $this->phones->removeElement($phone);
            $phone->removeUser($this);
        }

        return $this;
    }

    /**
     * @return Collection|Adress[]
     */
    public function getAdress(): Collection
    {
        return $this->adress;
    }

    public function addAdress(Adress $adress): self
    {
        if (!$this->adress->contains($adress)) {
            $this->adress[] = $adress;
        }

        return $this;
    }

    public function removeAdress(Adress $adress): self
    {
        if ($this->adress->contains($adress)) {
            $this->adress->removeElement($adress);
        }

        return $this;
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

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(?\DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getCreatedUser(): ?\DateTimeInterface
    {
        return $this->createdUser;
    }

    public function setCreatedUser(\DateTimeInterface $createdUser): self
    {
        $this->createdUser = $createdUser;

        return $this;
    }


    public function getBelt(): ?string
    {
        return $this->belt;
    }

    public function setBelt(?string $belt): self
    {
        $this->belt = $belt;

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

    /**
     * @return Collection|Rental[]
     */
    public function getRentals(): Collection
    {
        return $this->rentals;
    }

    public function addRental(Rental $rental): self
    {
        if (!$this->rentals->contains($rental)) {
            $this->rentals[] = $rental;
            $rental->setMember($this);
        }

        return $this;
    }

    public function removeRental(Rental $rental): self
    {
        if ($this->rentals->contains($rental)) {
            $this->rentals->removeElement($rental);
            // set the owning side to null (unless already changed)
            if ($rental->getMember() === $this) {
                $rental->setMember(null);
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
            $attachedFile->setMember($this);
        }

        return $this;
    }

    public function removeAttachedFile(AttachedFile $attachedFile): self
    {
        if ($this->attachedFiles->contains($attachedFile)) {
            $this->attachedFiles->removeElement($attachedFile);
            // set the owning side to null (unless already changed)
            if ($attachedFile->getMember() === $this) {
                $attachedFile->setMember(null);
            }
        }

        return $this;
    }

}
