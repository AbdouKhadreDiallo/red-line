<?php
namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ReferentielRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;

class ReferentielService {

    private $refRepo;
    private $manager;
    private $serializer;

    public function __construct(EntityManagerInterface $manager, SerializerInterface $serializer, ReferentielRepository $refRepo){
        $this->manager = $manager;
        $this->serializer = $serializer;
        $this->refRepo = $refRepo;
    }
    //service traitant programme
    public function uploadfile($file, $name)
    {
        $filetype = explode("/", $file->getMimeType())[1];
        $filePath = $file->getRealPath();
        return \file_get_contents($filePath, $name.'.'.$filetype);
    }

    // update referentiel
    public function updateReferentiel($entity, $request, $id)
    {
        $data = $request->request->all();
        $refEnCours = $this->refRepo->find($id);
        if (!$refEnCours) {
            return $this->json(["message" => "Referentiel inexistant."],Response::HTTP_NOT_FOUND);
        }
        $programme = $request->files->get('programme');

        foreach ($data as $key => $value) {
            if ($key!= "_method") {
                $FirstMajuscume = "set".ucfirst(strtolower($key));
                if (method_exists($entity, $FirstMajuscume)) {
                    $refEnCours->$FirstMajuscume($value);
                }

            }
        }
        if (!is_null($programme)){
            $refEnCours->setProgramme($this->uploadfile($programme, 'progr$programme'));
        }
        $this->manager->flush();
        return new JsonResponse("Modifier avec succes", Response::HTTP_OK,[], true);
    }
    
}