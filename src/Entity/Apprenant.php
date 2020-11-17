<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ApprenantRepository;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource(
 *      collectionOperations = {
 *          "liste_apprenants"={
 *              "method"="get",
 *              "path" = "/apprenants",
 *              "security" = "is_granted('ROLE_FORMATEUR') or is_granted('ROLE_CM')",
 *              "security_message" = "acces non autorisé"
 *          },
 *          "add_apprenants"={
 *              "method" = "post",
 *              "path" = "/apprenants",
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

    public function getId(): ?int
    {
        return $this->id;
    }
}
