<?php

namespace App\Controller;

use App\Repository\ProfilRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfilController extends AbstractController
{
    private $manager;
    private $serializer;
    public function __construct(EntityManagerInterface $manager, SerializerInterface $serializer){
        $this->manager = $manager;
        $this->serializer = $serializer;
    }
    /**
        * @Route(
        *   name="archive_profil",
        *   path="api/admin/profils/{id<[0-9]+>}",
        *   methods={"DELETE"},
        * )
    */
    public function archiver($id, ProfilRepository $profilRepository)
    {
        $items_to_archive = $profilRepository->findOneBy(["id" => $id]);
        if (!$items_to_archive) {
            return $this->json(["message" => "Ce Profil n'existe pas"],Response::HTTP_NOT_FOUND);
        }
        else {
            if ($items_to_archive->getIsDeleted() == true) {
                $items_to_archive->setIsDeleted(false);
                $this->manager->flush();
                return new Response("Ressource desarchivée");
            }
            else {
                $items_to_archive->setIsDeleted(true);
                $this->manager->flush();
                return new Response("Ressource archivée avec succes");
            }
        }
    }

    /**
        * @Route(
        *   name="show_users_from_profil",
        *   path="api/admin/profils/{id<[0-9]+>}/users",
        *   methods={"GET"},
        * )
    */
    public function show_users_from_profils($id, ProfilRepository $profilRepository){
        $items_to_archive = $profilRepository->findOneBy(["id" => $id]);
        if (!$items_to_archive) {
            return $this->json(["message" => "Ce Profil n'existe pas"],Response::HTTP_NOT_FOUND);
        }
        else {
            $itemsToChowJson = $this->serializer->serialize($items_to_archive->getUsers(), 'json');
            //dd($items_to_archive->getUsers());
            return new JsonResponse($itemsToChowJson, Response::HTTP_OK, [], true);
        }
    }

}
