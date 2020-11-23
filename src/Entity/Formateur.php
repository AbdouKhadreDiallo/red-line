<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\FormateurRepository;
use ApiPlatform\Core\Annotation\ApiResource;

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
 *              "security" = "is_granted('FORMATEUR_VIEW', object)",
 *              "security_message" = "acces non autorisé"
 *          },
 *          "put_formateur" = {
 *              "method" = "put",
 *              "path" = "/formateurs/{id}",
 *              "security" = "is_granted('ROLE_ADMIN')",
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
