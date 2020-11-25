<?php
namespace App\Service;

use Foo;
use App\Repository\UserRepository;
use App\Service\UploadAvatarService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AddUserService {
    
    private $manager, $encoder, $serializer, $uploadAvatarService, $validator, $refRepo;

    function __construct(UserRepository $refRepo,EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder,SerializerInterface $serializer, UploadAvatarService $uploadAvatarService, ValidatorInterface $validator)
    {
        $this->manager = $manager;
        $this->encoder = $encoder;
        $this->serializer = $serializer;
        $this->uploadAvatarService = $uploadAvatarService;
        $this->validator = $validator;
        $this->refRepo = $refRepo;
    }
    public function add($entite,$repository, $request)
    {
        // dd($request);
        $user = $request->request->all();
        $avatar = $request->files->get("avatar");

        
        //on ouvre le fichier et on le lit en format binaire
        $avatar = fopen($avatar->getRealPath(), 'rb');
        $user["avatar"]=$avatar;
        $userWithSameEmail = $this->$repository->findBy([
            "email" => $user["email"]
        ]);

        if(count($userWithSameEmail)){
            throw $this->createNotFoundException("Un utilisateur avec cet email existe déjà");
        }
        $user = $this->serializer->denormalize($user, $entite, true);
        $errors = $this->validator->validate($user);
        if(count($errors) > 0){
            $errors = $this->serializer->serialize($errors,'json');
            return new JsonResponse($errors,Response::HTTP_BAD_REQUEST,[],true);
        }
        // fclose($avatar);
        // $data->setPassword($this->passwordEncoder->encodePassword($user,$user->getPassword()));

        $user->setRoles($user->getRoles());
        $user->setPassword($this->encoder->encodePassword($user,"password"));
        $this->manager->persist($user);
        $this->manager->flush();
        return new JsonResponse("Créé avec success",Response::HTTP_CREATED,[],true);
    }

    public function uploadfile($file, $name)
    {
        $filetype = explode("/", $file->getMimeType())[1];
        $filePath = $file->getRealPath();
        return \file_get_contents($filePath, $name.'.'.$filetype);
    }

    public function updateUser($entity, $request, $id)
    {
        $data = $request->request->all();
        $refEnCours = $this->refRepo->find($id);
        if (!$refEnCours) {
            return $this->json(["message" => "Referentiel inexistant."],Response::HTTP_NOT_FOUND);
        }
        $avatar = $request->files->get('avatar');

        // dynamiser les if/else
        
        foreach ($data as $key => $value) {
            if ($key!= "_method") {
                $FirstMajuscume = "set".ucfirst(strtolower($key));
                if (method_exists($entity, $FirstMajuscume)) {
                    $refEnCours->$FirstMajuscume($value);
                }

            }
        }

        if (!is_null($avatar)){
            $refEnCours->setAvatar($this->uploadfile($avatar, 'avatar'));
        }
        
        $this->manager->flush();
        return new JsonResponse("Modifier avec succes", Response::HTTP_OK,[], true);
    }
}