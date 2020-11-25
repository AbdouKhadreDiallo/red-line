<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\AdminRepository;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\BooleanFilter;

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
 * @ApiFilter(BooleanFilter::class, properties={"isDeleted"})
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
