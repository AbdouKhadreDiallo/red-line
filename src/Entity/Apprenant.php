<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ApprenantRepository;
use ApiPlatform\Core\Annotation\ApiResource;

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
 *              "security" = "is_granted('ROLE_FORMATEUR') or is_granted('ROLE_CM')",
 *              "security_message" = "acces non autorisé"
 *          },
 *          "modify_apprenant" = {
 *              "method"="put",
 *              "path" = "/apprenants/{id}",
 *              "security" = "is_granted('ROLE_FORMATEUR')",
 *              "security_message" = "acces non autorisé"
 *          },
 *      }
 * )
 * @ORM\Entity(repositoryClass=ApprenantRepository::class)
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
}
