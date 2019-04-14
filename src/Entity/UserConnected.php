<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserConnectedRepository")
 * @ORM\Table(name="userConnected")
 * @UniqueEntity(
 *  fields={"email"},
 *  message="L'email indiqué est déjà utilisé !"
 * )
 */
class UserConnected implements UserInterface, \Serializable
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
     * @ORM\Column(type="string", length=255)
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min=6,
     *      max=24,
     *      minMessage = "Votre mot de passe doit faire minimum {{ limit }} caractères !",
     *      maxMessage = "Votre mot de passe doit faire maximum {{ limit }} caractères !")
     * @Assert\EqualTo(propertyPath="confirm_password", message="Les mots de passe ne correspondent pas!")
     */
    private $password;

    public $confirm_password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;

    /**
     * @ORM\Column(type="date")
     */
    private $birthday;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $createdUser;

    /**
    * @var string le token qui servira lors de l'oubli de mot de passe
    * @ORM\Column(type="string", length=255, nullable=true)
    */
    protected $resetToken;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="userConnected")
     */
    private $users;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\User", inversedBy="ownerUser", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;


    /**
    * @return string
    */
    public function getResetToken(): string
    {
        return $this->resetToken;
    }

    /**
    * @param string $resetToken
    */
    public function setResetToken(?string $resetToken): void
    {
        $this->resetToken = $resetToken;
    }

    public function __construct()
    {
        $user = new User();
        $this->setUser($user);
        $user->setUserConnected($this);
        $this->users = new ArrayCollection();

    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // $this->salt
            ) = unserialize($serialized, array('allowed_classes' => false));
    }

    public function eraseCredentials(){

    }

    public function getSalt(){

    }

    public function getRoles(){
        if ($this->email == "admin@admin.com") {
            return ['ROLE_ADMIN'];
        } elseif ($this->email == "money@money.com") {
            return ['ROLE_MONEY'];
        } else {
            return ['ROLE_USER'];
        }

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

    public function setBirthday(\DateTimeInterface $birthday): self
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

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setUserConnected($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            // set the owning side to null (unless already changed)
            if ($user->getUserConnected() === $this) {
                $user->setUserConnected(null);
            }
        }

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }

}
