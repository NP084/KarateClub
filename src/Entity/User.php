<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
//use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(name="app_user")
 * @Vich\Uploadable
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Phone", mappedBy="user")
     */
    private $phones;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Adress", inversedBy="users")
     * @ORM\OrderBy({"type" = "ASC"})
     */
    private $adress;

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
     * @ORM\OrderBy({"datecreat" = "ASC"})
     */
    private $attachedFiles;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Registration", mappedBy="user", cascade={"persist", "remove"}, orphanRemoval=true)
     * @ORM\OrderBy({"registrationDate" = "ASC"})
     */
    private $registration;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\History", mappedBy="user", cascade={"persist", "remove"}, orphanRemoval=true)
     * Affiche l'historique trié selon refDate
     * @ORM\OrderBy({"refDate" = "ASC"})
     */
    private $histories;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $sex;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ContactList", mappedBy="user", orphanRemoval=true)
     * @ORM\OrderBy({"relation" = "ASC"})
     */
    private $contactLists;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $imageName;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * @Vich\UploadableField(mapping="user_picture", fileNameProperty="imageName")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $updatedImage;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\UserConnected", inversedBy="users")
     */
    private $userConnected;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\UserConnected", mappedBy="user", cascade={"persist", "remove"})
     */
    private $ownerUser;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdUs;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @ORM\Column(type="date")
     */
    private $birthdate;



    public function __construct()
    {
        $this->phones = new ArrayCollection();
        $this->adress = new ArrayCollection();
        $this->rentals = new ArrayCollection();
        $this->attachedFiles = new ArrayCollection();
        $this->personOfContact = new ArrayCollection();
        $this->registration = new ArrayCollection();
        $this->histories = new ArrayCollection();
        $this->contactLists = new ArrayCollection();
        $this->isActive = false;
        $this->createdUs = new \DateTime();
    }

    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $imageFile
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

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection|Registration[]
     */
    public function getRegistration(): Collection
    {
        return $this->registration;
    }

    public function addRegistration(Registration $registration): self
    {
        if (!$this->registration->contains($registration)) {
            $this->registration[] = $registration;
            $registration->setUser($this);
        }

        return $this;
    }

    public function removeRegistration(Registration $registration): self
    {
        if ($this->registration->contains($registration)) {
            $this->registration->removeElement($registration);
            // set the owning side to null (unless already changed)
            if ($registration->getUser() === $this) {
                $registration->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|History[]
     */
    public function getHistories(): Collection
    {
        return $this->histories;
    }

    public function addHistory(History $history): self
    {
        if (!$this->histories->contains($history)) {
            $this->histories[] = $history;
            $history->setUser($this);
        }

        return $this;
    }

    public function removeHistory(History $history): self
    {
        if ($this->histories->contains($history)) {
            $this->histories->removeElement($history);
            // set the owning side to null (unless already changed)
            if ($history->getUser() === $this) {
                $history->setUser(null);
            }
        }

        return $this;
    }

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex(string $sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * @return Collection|ContactList[]
     */
    public function getContactLists(): Collection
    {
        return $this->contactLists;
    }

    public function addContactList(ContactList $contactList): self
    {
        if (!$this->contactLists->contains($contactList)) {
            $this->contactLists[] = $contactList;
            $contactList->setUser($this);
        }

        return $this;
    }

    public function removeContactList(ContactList $contactList): self
    {
        if ($this->contactLists->contains($contactList)) {
            $this->contactLists->removeElement($contactList);
            // set the owning side to null (unless already changed)
            if ($contactList->getUser() === $this) {
                $contactList->setUser(null);
            }
        }

        return $this;
    }

    public function getUserConnected(): ?UserConnected
    {
        return $this->userConnected;
    }

    public function setUserConnected(?UserConnected $userConnected): self
    {
        $this->userConnected = $userConnected;

        return $this;
    }

    public function getOwnerUser(): ?UserConnected
    {
        return $this->ownerUser;
    }

    public function setOwnerUser(UserConnected $ownerUser): self
    {
        $this->ownerUser = $ownerUser;

        // set the owning side of the relation if necessary
        if ($this !== $ownerUser->getUser()) {
            $ownerUser->setUser($this);
        }

        return $this;
    }

    public function getCreatedUs(): ?\DateTimeInterface
    {
        return $this->createdUs;
    }

    public function setCreatedUs(\DateTimeInterface $createdUs): self
    {
        $this->createdUs = $createdUs;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getBirthdate(): ?\DateTimeInterface
    {
        return $this->birthdate;
    }

    public function setBirthdate(\DateTimeInterface $birthdate): self
    {
        $this->birthdate = $birthdate;

        return $this;
    }

}
