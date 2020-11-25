<?php
namespace App\Service;

use Symfony\Component\HttpFoundation\Request;

class UploadAvatarService{

    public function uploadAvatar(Request $request){
        $avatar = $request->files->get("avatar");
        $avatarbin = fopen($avatar, 'rb');
        return $avatarbin;
    }

}