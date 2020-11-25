<?php

namespace App\DataPersister;

use App\Entity\Niveau;
use App\Entity\Competences;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use ApiPlatform\Core\DataPersister\DataPersisterInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class CompetencePersister implements DataPersisterInterface
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
    public function supports($data): bool
    {
        // TODO: Implement supports() method.
        return $data instanceof Competences;
    }
    public function persist($data)
    {
        //dd(count($data->getNiveaux()));
        foreach ($data->getNiveaux() as $niveaux) {
            $niveau = new Niveau();
            $niveau->setCritereEvaluation($niveaux->getCritereEvaluation());
            $niveau->setGroupeAction($niveaux->getGroupeAction());
            $niveau->setCompetence($data);
            $this->manager->persist($niveau);
        }

        $this->manager->flush();
    }
    public function remove($data)
    {
        
    }
}