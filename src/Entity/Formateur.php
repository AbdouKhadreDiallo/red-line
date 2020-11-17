<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\FormateurRepository;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource(
 *      collectionOperations = {
 *          "list_formateurs" = {
 *              "method" = "get",
 *              "path" = "/formateurs",
 *              "security" = "is_granted('ROLE_CM')",
 *              "security_message" = "acces non autorisé"
 *          },
 *          "add_formateurs" = {
 *              "method" = "post",
 *              "path" = "/formateurs",
 *              "security" = "is_granted('ROLE_CM')",
 *              "security_message" = "acces non autorisé"
 *          }
 *      },
 *      itemOperations = {
 *          "show_one_formateur" = {
 *              "method" = "get",
 *              "path" = "/formateurs/{id}",
 *              "security" = "is_granted('ROLE_CM')",
 *              "security_message" = "acces non autorisé"
 *          },
 *      }
 * )
 * @ORM\Entity(repositoryClass=FormateurRepository::class)
 */
class Formateur extends User
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
