<?php

namespace App\DataFixtures;

use App\Entity\Activity;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class FilmActivityFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        //film
        $film = $this->getReference('film');

        $film1 = new Activity();
        $film1->setCategory($film)
            ->setName('Action')
            ->setImg('assets/images/activity/film/action.jpg');
        $manager->persist($film1);

        $film2 = new Activity();
        $film2->setCategory($film)
            ->setName('Aventure')
            ->setImg('assets/images/activity/film/aventure.jpg');
        $manager->persist($film2);

        $film3 = new Activity();
        $film3->setCategory($film)
            ->setName('Biopic')
            ->setImg('assets/images/activity/film/biopic.jpg');
        $manager->persist($film3);

        $film5 = new Activity();
        $film5->setCategory($film)
            ->setName('Comédie')
            ->setImg('assets/images/activity/film/comedie.jpg');
        $manager->persist($film5);

        $film10 = new Activity();
        $film10->setCategory($film)
            ->setName('Fantastique')
            ->setImg('assets/images/activity/film/fantastique.png');
        $manager->persist($film10);

        $film14 = new Activity();
        $film14->setCategory($film)
            ->setName('Horreur')
            ->setImg('assets/images/activity/film/horreur.jpg');
        $manager->persist($film14);

        $film16 = new Activity();
        $film16->setCategory($film)
            ->setName('Romance')
            ->setImg('assets/images/activity/film/romance.jpg');
        $manager->persist($film16);

        $film19 = new Activity();
        $film19->setCategory($film)
            ->setName('Drame')
            ->setImg('assets/images/activity/film/drame.jpg');
        $manager->persist($film19);

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
