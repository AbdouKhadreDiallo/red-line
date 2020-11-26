<?php

namespace App\Controller;

use App\Entity\Niveau;
use App\Entity\Competences;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\GroupeCompetenceRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CompetencesController extends AbstractController
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
     * @Route("/api/competences", name="competences", methods={"POST"})
     */
    public function add_competences(Request $request, GroupeCompetenceRepository $groupe_competence_repo)
    {
        $newOne = new Competences();
        if (!$this->isGranted("ADD",$newOne))
            return $this->json(["message" => "Vous n'avez pas access à cette Ressource"],Response::HTTP_FORBIDDEN);
        
        $comptence = $request->getContent();
        $competenceTab = $this->serializer->decode($comptence,"json");

        // traitement groupe competences
        if (!array_key_exists("groupeCompetences",$competenceTab) || !($competenceTab['groupeCompetences'])) {
            return new JsonResponse("Un groupe de competence est requis",Response::HTTP_BAD_REQUEST,[],true);
        }

        $groupeCompetence = isset($competenceTab['groupeCompetences']) ? $competenceTab['groupeCompetences'] : [];
        $competenceTab['groupeCompetences'] = [];

        $CompetenceObj = $this->serializer->denormalize($competenceTab,"App\Entity\Competences");

        // ajout dans groupe de competence
        if($groupeCompetence){
            foreach ($groupeCompetence as $value) {
                if(isset($value["id"])){
                    $groupe_compet_exist = $groupe_competence_repo->find($value["id"]);
                    if ($groupe_compet_exist) {
                        $CompetenceObj->addGroupeCompetence($groupe_compet_exist);
                    }
                    return new JsonResponse("Groupe de competence inexistant", Response::HTTP_BAD_REQUEST, [], true);
                }
            }
        }
        // traitement niveau
        if (!array_key_exists("niveaux", $competenceTab) || !($competenceTab['niveaux'])) {
            return new JsonResponse("il faut ajouter les niveau");
        }
        elseif (count($competenceTab['niveaux']) != 3) {
            return new JsonResponse("Une comptence doit avoir 3 niveaux !!!");
        }
        else {
            foreach ($competenceTab['niveaux'] as $value) {
                $niveau = new Niveau();
                $niveau->setCritereEvaluation($value['critereEvaluation']);
                $niveau->setGroupeAction($value['groupeAction']);
                $this->manager->persist($niveau);
                $CompetenceObj->addNiveau($niveau);
            }
        }

        $this->manager->persist($CompetenceObj);
        $this->manager->flush();
        return new JsonResponse("Created",Response::HTTP_OK,[],true);
    }
}
