<?php
namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;


class ArchiveService
{
    private $manager;
    private $serializer;
    public function __construct(EntityManagerInterface $manager, SerializerInterface $serializer){
        $this->manager = $manager;
        $this->serializer = $serializer;
    }
    
    
    public function archive($id,$object){
        $items_to_archive = $object->findOneBy(["id" => $id]);
        if (!$items_to_archive) {
            return $this->json(["message" => "Ce Profil n'existe pas"],Response::HTTP_NOT_FOUND);
        }
        else {
            if ($items_to_archive->getIsDeleted() == true) {
                return new Response("Ressource deja archive");
            }
            else {
                $items_to_archive->setIsDeleted(true);
                $this->manager->flush();
                return new Response("Ressource archivée avec succes");
            }
        }
        
    }
}
