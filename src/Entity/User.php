<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\BooleanFilter;

/**
 * @ApiResource(
 *     collectionOperations={
 *          "liste_users"={
 *              "method"="get",
 *              "path"="/admin/users",
 *              "normalization_context" = {"groups":{"user:read"}},
 *              "security" = "is_granted('ROLE_ADMIN')",
 *              "security_message" = "Accès refusé"
 *          },
 *          "add_user" = {
 *              "method" = "post",
 *              "path"="/admin/users",
 *              "security" = "is_granted('ROLE_ADMIN')",
 *              "security_message" = "Accès refusé"
 *          }
 *          
*             },
*           itemOperations={
*           "get_one_user"={
*               "method"="GET",
*               "path"="/admin/users/{id}" ,
 *               "security" = "is_granted('ROLE_ADMIN')",
 *              "security_message" = "Accès refusé"
*               }, 
*           "put_one_user"={
*               "method"="put",
*               "path"="/admin/users/{id}" ,
*               "security" = "is_granted('ROLE_ADMIN')",
 *              "security_message" = "Accès refusé"
*               },

* }, 
 *)
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discriminator", type="string")
 * @ORM\DiscriminatorMap({"user" = "User", "admin" = "Admin", "formateur" = "Formateur", "apprenant" = "Apprenant"})
 * 
 * @ApiFilter(BooleanFilter::class, properties={"isDeleted"})
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"user:read"})
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Groups({"user:read","users_profils:read"})
     * @Assert\NotBlank(message = "L'email est requis")
     * @Groups({"groupes:read"})
     * @Groups({"apprenants_in_groups:read"})
     * 
     */
    private $email;

    
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\ManyToOne(targetEntity=Profil::class, inversedBy="users")
     * @ORM\JoinColumn(nullable=false)
     */
    private $profil;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"users:read_all"})
     * @Groups({"user:read","users_profils:read"})
     * @Assert\NotBlank(message = "Le prenom ne peut pas etre vide")
     * @Groups({"groupes:read"})
     * @Groups({"apprenants_in_groups:read"})
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"users:read_all"})
     * @Groups({"user:read","users_profils:read"})
     * @Assert\NotBlank(message = "Le nom ne peut pas etre vide")
     * @Groups({"groupes:read"})
     * @Groups({"apprenants_in_groups:read"})
     */
    private $lastname;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $avatar;

    /**
     * @ORM\Column(type="boolean",options={"default" : false}, nullable=true)
     * @Groups({"users:read_all"})
     * @Groups({"user:read","users_profils:read"})
     */
    private $isDeleted;

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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_'.$this->profil->getLibelle();

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getProfil(): ?Profil
    {
        return $this->profil;
    }

    public function setProfil(?Profil $profil): self
    {
        $this->profil = $profil;

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

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar($avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getIsDeleted(): ?bool
    {
        return $this->isDeleted;
    }

    public function setIsDeleted(bool $isDeleted): self
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }
}
