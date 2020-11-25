<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProfilRepository;
use ApiPlatform\Core\Annotation\ApiFilter;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\BooleanFilter;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ApiResource(
 *      attributes={
 *              "security" = "is_granted('ROLE_ADMIN')",
 *              "security_message" = "Seuls les admins ont le droit d'acces à ce ressource",
 *       },
 *     collectionOperations = {
 *          "add_profil"={
 *              "method"="post",
 *              "path"="/admin/profils"
 *           },
 *            "show_profils"={
 *                 "method" = "GET",
 *                 "path"="/admin/profils",
 *                  "normalization_context"={"groups"={"profil:read"}},
 *              },
 *                "show_users_from_profil"={
 *                "method" = "GET",
 *                "path" = "/admin/profils/{id}/users",
 *                  "normalization_context"={"groups"={"users_profils:read"}},
 *              },
 * },
 *     itemOperations = {
 *           "show_one_profil"={
 *                  "method"="get",
 *                  "path"="/admin/profils/{id}"
 * },
 *         "update_profil"={
 *              "method"="put",
 *              "path"="/admin/profils/{id}"
 * },
 *          "delete_profil"={
 *              "method"="delete",
 *              "path"="/admin/profils/{id}"
 *          }                                        
 *  },
 *             normalizationContext={"groups"={"profil:read"}},
 *              denormalizationContext={"groups"={"profil:write"}}
 * )
 * 
 * @ApiFilter(BooleanFilter::class, properties={"isDeleted"})
 * 
 * @ORM\Entity(repositoryClass=ProfilRepository::class)
 * @UniqueEntity("libelle")
 */
class Profil
{


    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("profil:read")
     * @Groups({"users:read_all"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"profil:read", "profil:write", "users:read_all"})
     * @Assert\NotBlank(message = "Le libelle ne peut pas etre vide")
     * @Groups({"users:read_all","users_profils:read"})
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="profil")
     * @ApiSubresource()
     */
    private $users;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"profil:read", "profil:write", "users:read_all"})
     */
    private $isDeleted=false;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

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
            $user->setProfil($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getProfil() === $this) {
                $user->setProfil(null);
            }
        }

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
