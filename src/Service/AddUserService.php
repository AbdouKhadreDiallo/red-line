<?php
namespace App\Service;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class AddUserService {
    
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
}