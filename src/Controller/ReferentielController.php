<?php

namespace App\Controller;

use App\Service\ReferentielService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ReferentielController extends AbstractController
{

    private $serializer;
    private $validator;
    private $manager;
    private $refService;

    public function __construct(ReferentielService $refService ,SerializerInterface $serializer, EntityManagerInterface $manager, ValidatorInterface $validator){
        $this->serializer = $serializer;
        $this->validator = $validator;
        $this->manager = $manager;
        $this->refService = $refService;
    }

    /**
     * @Route("/api/referentiels", name="add_referentiel", methods={"POST"})
     */
    public function add_referentiels(Request $request)
    {
        $referentiel = $request->request->all();
        $programme = $request->files->get("programme");

        $programme = fopen($programme->getRealPath(), 'rb');
        $referentiel["programme"]=$programme;

        $referentiel = $this->serializer->denormalize($referentiel, "App\Entity\Referentiel", true);
        $errors = $this->validator->validate($referentiel);

        if(count($errors) > 0){
            $errors = $this->serializer->serialize($errors,'json');
            return new JsonResponse($errors,Response::HTTP_BAD_REQUEST,[],true);
        }
        $this->manager->persist($referentiel);
        $this->manager->flush();
        return new JsonResponse("Créé avec success",Response::HTTP_CREATED,[],true);

    }
    /** 
     * @Route(
     * name="edit_referentiel",
     * path="/api/referentiels/{id}",
     * methods={"PUT"},
     * defaults={
     * "_controller"="app\Controller\ReferentielController::updateReferentiel",
     * "_api_resource_class"=Referentiel::class,
     * "api_collection_operation_name"="add_referentiel"
     * }
     * )
     */
    public function updateReferentiel($id, Request $request){
        return $this->refService->updateReferentiel("App\Entity\Referentiel", $request, $id);
    }
}
