<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    private $encoder;
    private $serializer;
    private $repository;
    private $validator;
    private $manager;

    public function __construct(UserPasswordEncoderInterface $encoder,SerializerInterface $serializer, UserRepository $repository, EntityManagerInterface $manager, ValidatorInterface $validator){
        $this->encoder = $encoder;
        $this->serializer = $serializer;
        $this->repository = $repository;
        $this->validator = $validator;
        $this->manager = $manager;
    }

    /**
     * @Route(
     * name="add_admin",
     * path="api/admins",
     * methods={"POST"},
     * defaults={
     * "_controller"="app\Controller\UserController::addAdmin",
     * "_api_resource_class"=Admin::class,
     * "api_collection_operation_name"="add_admin"
     * }
     * )
     */
    public function addAdmin(Request $request)
    {
        return $this->add("App\Entity\Admin", $request);
    }

    /**
     * @Route(
     * name="add_formateur",
     * path="api/formateurs",
     * methods={"POST"},
     * defaults={
     * "_controller"="app\Controller\UserController::addFormateur",
     * "_api_resource_class"=Formateur::class,
     * "api_collection_operation_name"="add_formateur"
     * }
     * )
     */
    public function addFormateur(Request $request)
    {
        return $this->add("App\Entity\Formateur", $request);
    }


    /** 
     * @Route(
     * name="add_apprenant",
     * path="api/apprenants",
     * methods={"POST"},
     * defaults={
     * "_controller"="app\Controller\UserController::addApprenant",
     * "_api_resource_class"=User::class,
     * "api_collection_operation_name"="add_apprenant"
     * }
     * )
     */
    public function addApprenant(Request $request)
    {
        return $this->add("App\Entity\Apprenant", $request);
    }

    

    public function add($entite, $request)
    {
        $user = $request->request->all();
        $avatar = $request->files->get("avatar");
        $avatar = fopen($avatar->getRealPath(), 'rb');
        $user["avatar"]=$avatar;
        $userWithSameEmail = $this->repository->findBy([
            "email" => $user["email"]
        ]);
        if(count($userWithSameEmail)){
            return new JsonResponse("Cet utilisateur existe déjà",Response::HTTP_FORBIDDEN,[],true);
        }
        $user = $this->serializer->denormalize($user, $entite, true);
        // dd($user);
        $errors = $this->validator->validate($user);
        if(count($errors) > 0){
            $errors = $this->serializer->serialize($errors,'json');
            return new JsonResponse($errors,Response::HTTP_BAD_REQUEST,[],true);
        }
        $user->setRoles($user->getRoles());
        $user->setIsDeleted(false);
        $user->setPassword($this->encoder->encodePassword($user,"password"));
        $this->manager->persist($user);
        $this->manager->flush();
        return new JsonResponse("Créé avec success",Response::HTTP_CREATED,[],true);
    }
}
