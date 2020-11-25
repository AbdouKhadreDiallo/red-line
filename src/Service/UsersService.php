<?php
namespace App\Service;

use App\Service\UploadAvatarService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class UsersService{

    private $manager, $encoder, $serializer, $uploadAvatarService, $validator;

    function __construct(EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder,SerializerInterface $serializer, UploadAvatarService $uploadAvatarService, ValidatorInterface $validator)
    {
        $this->manager = $manager;
        $this->encoder = $encoder;
        $this->serializer = $serializer;
        $this->uploadAvatarService = $uploadAvatarService;
        $this->validator = $validator;
    }


    public function updateUser($object, $request)
    {
        if (!$object) {
            return new JsonResponse("User not found");
        }
        if($request->get("avatar")){
            $avatar = $this->uploadAvatarService->uploadAvatar($request);
            $object->setAvatar($avatar);
            $this->manager->flush();
            return new JsonResponse("done");
        }
        
    }
}