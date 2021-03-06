<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\FormateurRepository;
use ApiPlatform\Core\Annotation\ApiFilter;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\BooleanFilter;

/**
 * @ApiResource(
 *      collectionOperations = {
 *          "list_formateurs" = {
 *              "method" = "get",
 *              "path" = "/formateurs",
 *              "security" = "is_granted('ROLE_ADMIN')",
 *              "security_message" = "acces non autorisé"
 *          },
 *          "add_formateurs" = {
 *              "method" = "post",
 *              "route_name"="add_formateur",
 *              "security" = "is_granted('ROLE_ADMIN')",
 *              "security_message" = "acces non autorisé"
 *          }
 *      },
 *      itemOperations = {
 *          "show_one_formateur" = {
 *              "method" = "get",
 *              "path" = "/formateurs/{id}",
 *              "security" = "is_granted('ROLE_ADMIN')",
 *              "security_message" = "acces non autorisé"
 *          },
 *          "put_formateur" = {
 *              "method" = "put",
 *              "path" = "/formateurs/{id}",
 *              "security" = "is_granted('ROLE_ADMIN')",
 *              "security_message" = "acces non autorisé"
 *          },
 *          "delete_formateur" = {
 *              "method" = "delete",
 *              "path" = "/formateurs/{id}",
 *              "security" = "is_granted('ROLE_ADMIN')",
 *              "security_message" = "acces non autorisé"
 *          }
 *      }
 * )
 * @ORM\Entity(repositoryClass=FormateurRepository::class)
 * @ApiFilter(BooleanFilter::class, properties={"isDeleted"})
 */
class Formateur extends User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\ManyToMany(targetEntity=Groupe::class, mappedBy="formateurs")
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
            $groupe->addFormateur($this);
        }

        return $this;
    }

    public function removeGroupe(Groupe $groupe): self
    {
        if ($this->groupes->removeElement($groupe)) {
            $groupe->removeFormateur($this);
        }

        return $this;
    }

}
