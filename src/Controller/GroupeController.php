<?php

namespace App\Controller;

use App\Repository\GroupeRepository;
use App\Repository\ApprenantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GroupeController extends AbstractController
{
    private $serializer;
    private $validator;
    private $manager;

    public function __construct(SerializerInterface $serializer, EntityManagerInterface $manager, ValidatorInterface $validator){
        $this->serializer = $serializer;
        $this->validator = $validator;
        $this->manager = $manager;
    }
    /**
     * @Route("/api/admin/groupes/{id}", name="edit_groupe", methods={"put"})
     */
    public function edit_groupe($id, Request $request, GroupeRepository $groupe_repository, ApprenantRepository $apprenant_repo)
    {
        $groupe_to_edit = $groupe_repository->find($id);
        if (!$groupe_to_edit) {
            return $this->json(["message" => "Ce groupe n'existe pas"],Response::HTTP_FORBIDDEN);
        }

        $data = $request->getContent();
        $dataGroup = $this->serializer->decode($data, "json");
        
        $apprenants= $dataGroup['apprenants'];
        if ($apprenants) {
            foreach ($apprenants as $value) {
                
                if (($value["id"])) {
                    $apprenant_search = $apprenant_repo->find($value["id"]);
                    if ($apprenant_search) {
                        foreach ($groupe_to_edit->getApprenants() as $value) {
                            if ($value != $apprenant_search) {
                                $groupe_to_edit->addApprenants($apprenant_search);
                            }
                            else {
                                return $this->json(["message" => "Cet apprenant est déjà dans ce groupe"],Response::HTTP_FORBIDDEN);
                            }
                        }
                    }
                    else {
                        return $this->json(["message" => "Cet apprenant n'existe pas"],Response::HTTP_FORBIDDEN);
                    }
                }
            }
        }

        $this->manager->flush();
        return $this->json($groupe_to_edit,Response::HTTP_OK);

    }

    /**
     * @Route("/api/admin/groupes/{id}/apprenants/{apprenant}", name="delete_apprenant_in_groupe", methods={"DELETE"})
    */
    public function removeApprenantFromGroup($id,$apprenant,GroupeRepository $groupe_repository, ApprenantRepository $apprenant_repo){
        $groupe = $groupe_repository->findOneBy([
            "id"=>$id
        ]);
        $etudiantWithId = $apprenant_repo->findOneBy([
            "id"=>$apprenant
        ]);
        $apprenants = $groupe->getApprenants();
        if($apprenants->contains($etudiantWithId)){
            $groupe->removeApprenant($etudiantWithId);
            $this->manager->flush();
            return $this->json($groupe,Response::HTTP_OK);
        }
        return new Response("L'apprenant que vous tentez du supprimé est introuvable dans ce groupe");
    }

    
}
