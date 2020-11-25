<?php
namespace App\DataPersister;

use App\Entity\Formateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use ApiPlatform\Core\DataPersister\DataPersisterInterface;

class FormateurPersister implements DataPersisterInterface 
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function supports($data): bool
    {
        // TODO: Implement supports() method.
        return $data instanceof Formateur;
    }
    public function persist($data)
    {
        $data->setIsDeleted(false);
        $this->entityManager->persist($data);
        $this->entityManager->flush();
    }
    public function remove($data)
    {
        
        $data->setIsDeleted(true);
        $this->entityManager->flush();
    }
}