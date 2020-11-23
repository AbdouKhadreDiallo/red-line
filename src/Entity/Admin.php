<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\AdminRepository;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource(
 *      collectionOperations = {
 *          "add_admins" = {
 *              "method" = "post",
 *              "route_name"="add_admin",
 *              "security" = "is_granted('ROLE_ADMIN')",
 *              "security_message" = "acces non autorisé"
 *          }
 *      }
 * )
 * @ORM\Entity(repositoryClass=AdminRepository::class)
 */
class Admin extends User
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
