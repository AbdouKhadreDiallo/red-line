<?php

namespace App\Entity;

use Webmozart\Assert\Assert;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ApiResource(
 * normalizationContext={"groups":{"user:read"}},
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
*           "archive_user"={
*             "method"="DELETE",
*              "path"= "/admin/users/{id}",
*               "security" = "is_granted('ROLE_ADMIN')",
 *              "security_message" = "Accès refusé"
*  },

* }, 
 *)
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discriminator", type="string")
 * @ORM\DiscriminatorMap({"user" = "User", "admin" = "Admin", "formateur" = "Formateur", "apprenant" = "Apprenant"})
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
     * @Groups({"user:read"})
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
     * @Groups({"user:read"})
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"users:read_all"})
     * @Groups({"user:read"})
     */
    private $lastname;

    /**
     * @ORM\Column(type="blob")
     */
    private $avatar;

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
}
