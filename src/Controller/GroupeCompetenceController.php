<?php

namespace App\Controller;

use App\Entity\Competences;
use App\Entity\GroupeCompetence;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CompetencesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class GroupeCompetenceController extends AbstractController
{


    private $encoder;
    private $serializer;
    private $validator;
    private $manager;

    public function __construct(UserPasswordEncoderInterface $encoder,SerializerInterface $serializer, EntityManagerInterface $manager, ValidatorInterface $validator){
        $this->encoder = $encoder;
        $this->serializer = $serializer;
        $this->validator = $validator;
        $this->manager = $manager;
    }

    /**
     * @Route("/api/groupe_competences", name="groupe_competence", methods={"post"})
     */
    public function addGroupeCompetences(Request $request, CompetencesRepository $CompetenceRepo)
    {
        $groupeCompetence = new GroupeCompetence();
        if (!$this->isGranted("ADD",$groupeCompetence))
            return $this->json(["message" => "Vous n'avez pas access à cette Ressource"],Response::HTTP_FORBIDDEN);
        $groupeComptences = $request->getContent();
        $groupeComptencesTab = $this->serializer->decode($groupeComptences,"json");
        //dd($groupeComptencesTab);
        if (!array_key_exists("competences",$groupeComptencesTab) || !($groupeComptencesTab['competences'])) {
            return new JsonResponse("Une competence est requise",Response::HTTP_BAD_REQUEST,[],true);
        }
        else{
            $Competence = isset($groupeComptencesTab['competences']) ? $groupeComptencesTab['competences'] : [];
            $groupeComptencesTab['competences'] = [];
        }
        $grpCompetenceObj = $this->serializer->denormalize($groupeComptencesTab,"App\Entity\GroupeCompetence");
        
        if ($Competence) {
            foreach ($Competence as $competences) {
                if (isset($competences["id"])) {
                    $CompetId = isset($competences["id"]) ? $competences["id"] : null;
                    $compet = $CompetenceRepo->find($CompetId);
                    if(!$compet){
                        return $this->json(["message" => "La competence passé en id n'existe pas."],Response::HTTP_NOT_FOUND);
                    }
                    $grpCompetenceObj->addCompetence($compet);
                }
                elseif (isset($competences["libelle"])){
                    $newCompetence = new Competences();
                    $newCompetence->setLibelle($competences["libelle"]);
                    $this->manager->persist($newCompetence);
                    $grpCompetenceObj->addCompetence($newCompetence);
                }
                
            }
        }
        $this->manager->persist($grpCompetenceObj);
        $this->manager->flush();
        return new JsonResponse("Créé avec success",Response::HTTP_CREATED,[],true);
    }
}
