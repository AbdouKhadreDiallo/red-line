<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProfilSortieRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @UniqueEntity(
 *      fields={"libelle"},
 *      message = "le libelle existe déjà"
 * )
 * @ApiResource(
 *      collectionOperations = {
 *          "show_all_profils" = {
 *              "method" = "get",
 *              "path" = "/admin/profils_de_sorties",
 *              "security" = "is_granted('PROFILSORTIE_READ')",
 *              "security_message" = "acces non autorisé"
 *          },
 *          "add_profils_sortie" = {
 *              "method" = "post",
 *              "path" = "/admin/profils_de_sorties",
 *              "security_post_denormalize" = "is_granted('PROFILSORTIE_CREATE', object)",
 *              "security_message" = "acces non autorisé sa waay"
 *          }
 *      },
 *      itemOperations = {
 *          "show_One_Profils_de_sortie" = {
 *              "method" = "get",
 *              "path" = "/admin/profils_de_sorties/{id}",
 *              "defaults"={"id"=null},
 *              "security" = "is_granted('PROFILSORTIE_READ', object)",
 *              "security_message" = "acces non autorisé"
 *          },
 *          "put_Profils_de_sortie" = {
 *              "method" = "put",
 *              "path" = "/admin/profils_de_sorties/{id}",
 *              "security" = "is_granted('PROFILSORTIE_EDIT', object)",
 *              "security_message" = "acces non autorisé"
 *          },
 *          "archive_profil"={
 *               "method" = "delete",
 *               "path" = "/admin/profils_de_sorties/{id}",
 *          } 
 *      }
 * )
 * @ORM\Entity(repositoryClass=ProfilSortieRepository::class)
 */
class ProfilSortie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255,unique=true)
     */
    private $libelle;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isDeleted;

    /**
     * @ORM\OneToMany(targetEntity=Apprenant::class, mappedBy="profilSortie")
     */
    private $apprenants;

    public function __construct()
    {
        $this->apprenants = new ArrayCollection();
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

    public function getIsDeleted(): ?bool
    {
        return $this->isDeleted;
    }

    public function setIsDeleted(bool $isDeleted): self
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * @return Collection|Apprenant[]
     */
    public function getApprenants(): Collection
    {
        return $this->apprenants;
    }

    public function addApprenant(Apprenant $apprenant): self
    {
        if (!$this->apprenants->contains($apprenant)) {
            $this->apprenants[] = $apprenant;
            $apprenant->setProfilSortie($this);
        }

        return $this;
    }

    public function removeApprenant(Apprenant $apprenant): self
    {
        if ($this->apprenants->removeElement($apprenant)) {
            // set the owning side to null (unless already changed)
            if ($apprenant->getProfilSortie() === $this) {
                $apprenant->setProfilSortie(null);
            }
        }

        return $this;
    }
}
