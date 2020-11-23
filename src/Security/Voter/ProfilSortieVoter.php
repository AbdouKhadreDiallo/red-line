<?php

namespace App\Security\Voter;

use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class ProfilSortieVoter extends Voter
{

    private $security = null;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    protected function supports($attribute, $subject)
    {
        // replace with your own logic
        // https://symfony.com/doc/current/security/voters.html
        
        return in_array($attribute, ['PROFILSORTIE_CREATE', 'PROFILSORTIE_READ', 'PROFILSORTIE_EDIT', 'PROFILSORTIE_DELETE'])
            && $subject instanceof \App\Entity\ProfilSortie;
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        $user = $token->getUser();
        // if the user is anonymous, do not grant access
        if (!$user instanceof UserInterface) {
            return false;
        }

        // ... (check conditions and return true to grant permission) ...
        switch ($attribute) {
            case 'PROFILSORTIE_CREATE':
                return $user->getRoles()[0] === "ROLE_ADMIN" || $user->getRoles()[0] === "ROLE_FORMATEUR";
                break;
            case 'PROFILSORTIE_READ':
                return $user->getRoles()[0] === "ROLE_ADMIN" || $user->getRoles()[0] === "ROLE_FORMATEUR" || $user->getRoles()[0] === "ROLE_CM";
                break;
            case 'PROFILSORTIE_EDIT':
                return $user->getRoles()[0] === "ROLE_ADMIN" || $user->getRoles()[0] === "ROLE_FORMATEUR";
                break;
        }

        return false;
    }
}
