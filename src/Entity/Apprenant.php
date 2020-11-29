<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ApprenantRepository;
use ApiPlatform\Core\Annotation\ApiFilter;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\BooleanFilter;

/**
 * @ApiResource(
 *      normalizationContext={"groups":{"user:read"}},
 *      collectionOperations = {
 *          "liste_apprenants"={
 *              "method"="get",
 *              "path" = "/apprenants",
 *              "security" = "is_granted('ROLE_FORMATEUR') or is_granted('ROLE_ADMIN')",
 *              "security_message" = "acces non autorisé"
 *          },
 *          "add_apprenant" = {
 *              "method"="POST",
 *              "route_name"="add_apprenant",
 *              "security" = "is_granted('ROLE_FORMATEUR')",
 *              "security_message" = "acces non autorisé"
 *          },
 *      },
 *      itemOperations = {
 *          "show_one_apprenants"={
 *              "method" = "get",
 *              "path" = "/apprenants/{id}",
 *              "security" = "is_granted('ROLE_FORMATEUR') or is_granted('ROLE_CM') or is_granted('ROLE_ADMIN')",
 *              "security_message" = "acces non autorisé"
 *          },
 *          "modify_apprenant" = {
 *              "method"="put",
 *              "route_name"="edit_apprenant",
 *              "security" = "is_granted('ROLE_ADMIN')",
 *              "security_message" = "acces non autorisé"
 *          },
 *          "delete_apprenant" = {
 *              "method" = "delete",
 *              "path" = "/apprenants/{id}",
 *              "security" = "is_granted('ROLE_FORMATEUR') or is_granted('ROLE_CM') or is_granted('ROLE_ADMIN')",
 *              "security_message" = "acces non autorisé"
 *          }
 *      }
 * )
 * @ORM\Entity(repositoryClass=ApprenantRepository::class)
 * @ApiFilter(BooleanFilter::class, properties={"isDeleted"})
 */
class Apprenant extends User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    
    /**
     * @ORM\ManyToOne(targetEntity=ProfilSortie::class, inversedBy="apprenants")
     */
    private $profilSortie;

    /**
     * @ORM\ManyToMany(targetEntity=Groupe::class, mappedBy="apprenants")
     */
    private $groupes;

    public function __construct()
    {
        $this->groupes = new ArrayCollection();
    }

    

    public function getId(): ?int
    {
        return $this->id;
    }

    

    public function getProfilSortie(): ?ProfilSortie
    {
        return $this->profilSortie;
    }

    public function setProfilSortie(?ProfilSortie $profilSortie): self
    {
        $this->profilSortie = $profilSortie;

        return $this;
    }

    /**
     * @return Collection|Groupe[]
     */
    public function getGroupes(): Collection
    {
        return $this->groupes;
    }

    public function addGroupe(Groupe $groupe): self
    {
        if (!$this->groupes->contains($groupe)) {
            $this->groupes[] = $groupe;
            $groupe->addApprenant($this);
        }

        return $this;
    }

    public function removeGroupe(Groupe $groupe): self
    {
        if ($this->groupes->removeElement($groupe)) {
            $groupe->removeApprenant($this);
        }

        return $this;
    }
}
