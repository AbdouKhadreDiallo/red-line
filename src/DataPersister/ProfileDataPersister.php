<?php
namespace App\DataPersister;
use App\Entity\Profil;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use ApiPlatform\Core\DataPersister\DataPersisterInterface;

class ProfileDataPersister implements DataPersisterInterface 
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function supports($data): bool
    {
        // TODO: Implement supports() method.
        return $data instanceof Profil;
    }
    public function persist($data)
    {
        // TODO: Implement persist() method.
    }
    public function remove($data)
    {
        
        $data->setIsDeleted(true);
        
        foreach ($data->getUsers() as $users) {
            $users->setIsDeleted(true);
        }
        $this->entityManager->flush();

    }
}