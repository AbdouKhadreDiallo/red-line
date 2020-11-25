<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ReferentielRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 *      collectionOperations = {
 *          "add_ref" = {
 *              "method"="POST",
 *              "route_name"="add_referentiel",
 *              "security" = "is_granted('ROLE_FORMATEUR') or is_granted('ROLE_ADMIN')",
 *              "security_message" = "acces non autorisé"
 *          },
 *          "get_ref" = {
 *              "method" = "GET",
 *              "path" = "/referentiels",
 *              "normalization_context" = {"groups":{"referentiel:read"}},
 *              "security" = "is_granted('ROLE_FORMATEUR') or is_granted('ROLE_ADMIN')",
 *              "security_message" = "acces non autorisé"
 *          },
 *          "get_grpeCompet_Competence" = {
 *              "method" = "GET",
 *              "path" = "/referentiels/GrpeCompetence",
 *              "normalization_context" = {"groups":{"AllGrpeCompetence:read"}},
 *              "security" = "is_granted('ROLE_FORMATEUR') or is_granted('ROLE_ADMIN')",
 *              "security_message" = "acces non autorisé"
 *          }
 *      },
 *      itemOperations = {
 *          "get_One_ref" = {
 *              "method" = "get",
 *              "path" = "/referentiels/{id}",
 *              "normalization_context" = {"groups":{"referentiel:read"}},
 *              "security" = "is_granted('ROLE_FORMATEUR') or is_granted('ROLE_ADMIN')",
 *              "security_message" = "acces non autorisé"
 *          },
 *          "get_grpe_competes" = {
 *              "method" = "get",
 *              "path" = "/referentiels/{id}/groupe_competences/{groupeCompetence}/competences",
 *              "normalization_context" = {"groups":{"cmpteneceFromGroupFromReferentiel:read"}},
 *              "security" = "is_granted('ROLE_FORMATEUR') or is_granted('ROLE_ADMIN')",    
 *              "security_message" = "acces non autorisé" 
 *          },
 *          "edit_ref" = {
 *              "method"="put",
 *              "route_name"="edit_referentiel",
 *              "security" = "is_granted('ROLE_ADMIN') or is_granted('ROLE_FORMATEUR') or is_granted('ROLE_CM')",
 *              "security_message" = "acces non autorisé"
 *          },
 *          "delete_ref" = {
 *              "method" = "delete",
 *              "path" = "/referentiels/{id}",
 *              "security" = "is_granted('ROLE_ADMIN') or is_granted('ROLE_FORMATEUR') or is_granted('ROLE_CM')",
 *              "security_message" = "acces non autorisé"
 *          }
 *      }
 * )
 * @ORM\Entity(repositoryClass=ReferentielRepository::class)
 */
class Referentiel
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Groups({"referentiel:read"})
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Groups({"referentiel:read"})
     */
    private $presentation;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $programme;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"referentiel:read"})
     */
    private $critereAdmission;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"referentiel:read"})
     */
    private $critereEvaluation;

    /**
     * @ORM\ManyToMany(targetEntity=GroupeCompetence::class, inversedBy="referentiels")
     * @ApiSubresource
     * @Groups({"referentiel:read"})
     * @Groups({"cmpteneceFromGroupFromReferentiel:read"})
     * @Groups({"AllGrpeCompetence:read"})
     */
    private $groupeCompetence;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isDeleted;

    public function __construct()
    {
        $this->groupeCompetence = new ArrayCollection();
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

    public function getPresentation(): ?string
    {
        return $this->presentation;
    }

    public function setPresentation(string $presentation): self
    {
        $this->presentation = $presentation;

        return $this;
    }

    public function getProgramme()
    {
        return $this->programme;
    }

    public function setProgramme($programme): self
    {
        $this->programme = $programme;

        return $this;
    }

    public function getCritereAdmission(): ?string
    {
        return $this->critereAdmission;
    }

    public function setCritereAdmission(string $critereAdmission): self
    {
        $this->critereAdmission = $critereAdmission;

        return $this;
    }

    public function getCritereEvaluation(): ?string
    {
        return $this->critereEvaluation;
    }

    public function setCritereEvaluation(string $critereEvaluation): self
    {
        $this->critereEvaluation = $critereEvaluation;

        return $this;
    }

    /**
     * @return Collection|GroupeCompetence[]
     */
    public function getGroupeCompetence(): Collection
    {
        return $this->groupeCompetence;
    }

    public function addGroupeCompetence(GroupeCompetence $groupeCompetence): self
    {
        if (!$this->groupeCompetence->contains($groupeCompetence)) {
            $this->groupeCompetence[] = $groupeCompetence;
        }

        return $this;
    }

    public function removeGroupeCompetence(GroupeCompetence $groupeCompetence): self
    {
        $this->groupeCompetence->removeElement($groupeCompetence);

        return $this;
    }

    public function getIsDeleted(): ?bool
    {
        return $this->isDeleted;
    }

    public function setIsDeleted(?bool $isDeleted): self
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }
}
