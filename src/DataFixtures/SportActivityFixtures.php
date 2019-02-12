<?php

namespace App\DataFixtures;

use App\Entity\Activity;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class SportActivityFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Activités sportives
        $sport = $this->getReference('sport');
        
        $hiver = new Activity();
        $hiver->setName('Sports d\'hiver')
            ->setImg('assets/images/activity/sport/hiver.jpg')
            ->setCategory($sport);
        $manager->persist($hiver);

        $equipe = new Activity();
        $equipe->setName('Sports d\'équipe')
            ->setImg('assets/images/activity/sport/equipe.jpg')
            ->setCategory($sport);
        $manager->persist($equipe);

        $indi = new Activity();
        $indi->setName('Sports individuels')
            ->setImg('assets/images/activity/sport/individuel.jpg')
            ->setCategory($sport);
        $manager->persist($indi);
        
        $aqua = new Activity();
        $aqua->setName('Sports aquatiques')
            ->setImg('assets/images/activity/sport/aquatique.jpg')
            ->setCategory($sport);
        $manager->persist($aqua);

        $muscu = new Activity();
        $muscu->setName('Musculation')
            ->setImg('assets/images/activity/sport/muscu.jpg')
            ->setCategory($sport);
        $manager->persist($muscu);
        
        $manager->flush();
    }

    
    // Doit charger le(s) fichier(s) avant celui ci, pour avoir les references
    public function getDependencies()
    {
        return array(
            CategoryFixtures::class,
        );
    }
}
