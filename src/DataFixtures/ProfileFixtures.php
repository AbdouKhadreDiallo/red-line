<?php

namespace App\DataFixtures;

use App\Entity\Profil;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ProfileFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $profiltab = ['ADMIN', 'APPRENANT', 'CM', 'FORMATEUR'];
        
        foreach($profiltab as $theProfil){
            $profil = new Profil;
            $profil->setLibelle($theProfil);
            
            $manager->persist($profil);
            $manager->flush();
            
            if ($theProfil == "ADMIN") {
                $this->setReference("admin", $profil);
            }
            elseif ($theProfil == "APPRENANT") {
                $this->setReference("apprenant", $profil);
            }
            elseif ($theProfil=="CM") {
                $this->setReference("cm", $profil);
            }
            elseif ($theProfil=="FORMATEUR") {
                $this->setReference("formateur", $profil);
            }
        }

        $manager->flush();
    }
    
}
