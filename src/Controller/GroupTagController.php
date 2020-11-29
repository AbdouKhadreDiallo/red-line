<?php

namespace App\Controller;

use App\Entity\Tag;
use App\Entity\GroupTag;
use App\Repository\TagRepository;
use App\Repository\GroupTagRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GroupTagController extends AbstractController
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
     * @Route("/api/group_tags", name="group_tag", methods={"post"})
    */
    public function addGropeTag(Request $request, SerializerInterface $serializer, EntityManagerInterface $manager)
    {
        $groupe_tag = new GroupTag();
        $data = $request->getContent();
        $data_json = $this->serializer->decode($data, "json");
        $tag = $data_json['tags'];
        if (!$tag) {
            return new JsonResponse("un groupe doit obligatoire avore un tag",Response::HTTP_BAD_REQUEST,[],true);
        }
        foreach ($tag as $value) {
            $new_tag = new Tag();
            $new_tag->setLibelle($value['libelle']);
            $new_tag->setDescriptif($value['description']);
            $this->manager->persist($new_tag);
            $groupe_tag->addTag($new_tag);
        }
        $groupe_tag->setLibelle($data_json['libelle']);
        $this->manager->persist($groupe_tag);
        $this->manager->flush();
        return new JsonResponse("Créé avec success",Response::HTTP_CREATED,[],true);
    }

    /**
     * @Route("/api/group_tags/{id}", name="edit_group_tag", methods={"put"})
    */
    public function edit_tag($id, Request $request, GroupTagRepository $grpTag_Repo, TagRepository $tagRepo)
    {
        $groupeTag_to_edit = $grpTag_Repo->find($id);
        if (!$groupeTag_to_edit) {
            return $this->json(["message" => "Ce groupe de competence n'existe pas"],Response::HTTP_FORBIDDEN);
        }

        $data = $request->getContent();
        $dataTag = $this->serializer->decode($data, "json");
        
        $tags = $dataTag['tags'];
        if ($tags) {
            foreach ($tags as $value) {
                if (isset($value["id"])) {
                    $tag_find = $tagRepo->find($value["id"]);
                    if ($tag_find) {
                        foreach ($groupeTag_to_edit->getTags() as $value) {
                            if ($value == $tag_find) {
                                $groupeTag_to_edit->removeTag($tag_find);
                            }
                            else {
                                $groupeTag_to_edit->addTag($tag_find);
                            }
                        }
                    }
                }
            }
        }
        if (isset($dataTag['libelle'])) {
            $groupeTag_to_edit->setLibelle($dataTag['libelle']);
        }
        $this->manager->flush();
        return new JsonResponse("Modifié avec succés",Response::HTTP_CREATED,[],true);
        
    }


}
