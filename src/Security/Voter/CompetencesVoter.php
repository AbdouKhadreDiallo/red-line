<?php

namespace App\Security\Voter;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class CompetencesVoter extends Voter
{
    protected function supports($attribute, $subject)
    {
        // replace with your own logic
        // https://symfony.com/doc/current/security/voters.html
        return in_array($attribute, ['EDIT', 'VIEW', 'ADD', 'DELETE'])
            && $subject instanceof \App\Entity\Competences;
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
            case 'EDIT':
                return $user->getRoles()[0] === "ROLE_ADMIN";
                // logic to determine if the user can EDIT
                // return true or false
                break;
            case 'VIEW':
                return $user->getRoles()[0] === "ROLE_ADMIN" || $user->getRoles()[0] === "ROLE_FORMATEUR" || $user->getRoles()[0] === "ROLE_CM";
                // logic to determine if the user can VIEW
                // return true or false
                break;
            case 'ADD':
                return $user->getRoles()[0] === "ROLE_ADMIN";
                // logic to determine if the user can VIEW
                // return true or false
                break;
            case 'DELETE':
                return $user->getRoles()[0] === "ROLE_ADMIN" || $user->getRoles()[0] === "ROLE_FORMATEUR";
                // logic to determine if the user can VIEW
                // return true or false
                break;
        }

        return false;
    }
}
