<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
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
    public function addCompetences(Request $request)
    {
        $groupeComptences = $request->getContent();
        $groupeComptencesTab = $this->serializer->decode($groupeComptences,"json");
        if (!array_key_exists("competences",$groupeComptencesTab) || !($groupeComptencesTab['competences'])) {
            return new JsonResponse("Une competence est requise",Response::HTTP_BAD_REQUEST,[],true);
        }
        else{
            $grpCompetenceObj = $this->serializer->denormalize($groupeComptencesTab,"App\Entity\GroupeCompetence");
            $this->manager->persist($grpCompetenceObj);
            $this->manager->flush();
            return new JsonResponse("Créé avec success",Response::HTTP_CREATED,[],true);
        }
    }
}
