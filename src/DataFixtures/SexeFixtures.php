<?php

namespace App\DataFixtures;

use App\Entity\Sexe;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SexeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $homme = new Sexe();
        $homme->setName('Homme');
        $manager->persist($homme);

        $femme = new Sexe();
        $femme->setName('Femme');
        $manager->persist($femme);

        $manager->flush();

        // reference pour acceder avec une autre fixture
        $this->addReference('homme', $homme);
        $this->addReference('femme', $femme);
    }
}
