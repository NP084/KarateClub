<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Onurb\Doctrine\ORMMetadataGrapher\Mapping as Grapher;
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
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $birthdate;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Notification", mappedBy="user")
     */
    private $notifications;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fedNum;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isTrial;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $bars;


      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function __construct()
    {
        $this->phones = new ArrayCollection();
        $this->adress = new ArrayCollection();
        $this->attachedFiles = new ArrayCollection();
        $this->personOfContact = new ArrayCollection();
        $this->registration = new ArrayCollection();
        $this->histories = new ArrayCollection();
        $this->contactLists = new ArrayCollection();
        $this->isActive = false;
        $this->isTrial = false;
        $this->createdUs = new \DateTime();
        $this->notifications = new ArrayCollection();
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
      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Phone[]
     */
      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getPhones(): Collection
    {
        return $this->phones;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function addPhone(Phone $phone): self
    {
        if (!$this->phones->contains($phone)) {
            $this->phones[] = $phone;
            $phone->addUser($this);
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
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
      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getAdress(): Collection
    {
        return $this->adress;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function addAdress(Adress $adress): self
    {
        if (!$this->adress->contains($adress)) {
            $this->adress[] = $adress;
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function removeAdress(Adress $adress): self
    {
        if ($this->adress->contains($adress)) {
            $this->adress->removeElement($adress);
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getBelt(): ?string
    {
        return $this->belt;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setBelt(?string $belt): self
    {
        $this->belt = $belt;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getReceiptDate(): ?\DateTimeInterface
    {
        return $this->receiptDate;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setReceiptDate(?\DateTimeInterface $receiptDate): self
    {
        $this->receiptDate = $receiptDate;

        return $this;
    }

    /**
     * @return Collection|AttachedFile[]
     */
      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getAttachedFiles(): Collection
    {
        return $this->attachedFiles;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function addAttachedFile(AttachedFile $attachedFile): self
    {
        if (!$this->attachedFiles->contains($attachedFile)) {
            $this->attachedFiles[] = $attachedFile;
            $attachedFile->setMember($this);
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
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
      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getRegistration(): Collection
    {
        return $this->registration;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function addRegistration(Registration $registration): self
    {
        if (!$this->registration->contains($registration)) {
            $this->registration[] = $registration;
            $registration->setUser($this);
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
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
      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getHistories(): Collection
    {
        return $this->histories;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function addHistory(History $history): self
    {
        if (!$this->histories->contains($history)) {
            $this->histories[] = $history;
            $history->setUser($this);
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
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

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getSex(): ?string
    {
        return $this->sex;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setSex(string $sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * @return Collection|ContactList[]
     */
      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getContactLists(): Collection
    {
        return $this->contactLists;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function addContactList(ContactList $contactList): self
    {
        if (!$this->contactLists->contains($contactList)) {
            $this->contactLists[] = $contactList;
            $contactList->setUser($this);
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
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

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getUserConnected(): ?UserConnected
    {
        return $this->userConnected;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setUserConnected(?UserConnected $userConnected): self
    {
        $this->userConnected = $userConnected;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getOwnerUser(): ?UserConnected
    {
        return $this->ownerUser;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setOwnerUser(UserConnected $ownerUser): self
    {
        $this->ownerUser = $ownerUser;

        // set the owning side of the relation if necessary
        if ($this !== $ownerUser->getUser()) {
            $ownerUser->setUser($this);
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getCreatedUs(): ?\DateTimeInterface
    {
        return $this->createdUs;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setCreatedUs(\DateTimeInterface $createdUs): self
    {
        $this->createdUs = $createdUs;

        return $this;
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
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getBirthdate(): ?\DateTimeInterface
    {
        return $this->birthdate;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setBirthdate(\DateTimeInterface $birthdate): self
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * @return Collection|Notification[]
     */
      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getNotifications(): Collection
    {
        return $this->notifications;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function addNotification(Notification $notification): self
    {
        if (!$this->notifications->contains($notification)) {
            $this->notifications[] = $notification;
            $notification->addUser($this);
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function removeNotification(Notification $notification): self
    {
        if ($this->notifications->contains($notification)) {
            $this->notifications->removeElement($notification);
            $notification->removeUser($this);
        }

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getFedNum(): ?string
    {
        return $this->fedNum;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setFedNum(?string $fedNum): self
    {
        $this->fedNum = $fedNum;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }
      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getIsTrial(): ?bool
    {
        return $this->isTrial;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setIsTrial(?bool $isTrial): self
    {
        $this->isTrial = $isTrial;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getBars(): ?int
    {
        return $this->bars;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setBars(?int $bars): self
    {
        $this->bars = $bars;

        return $this;
    }

}
