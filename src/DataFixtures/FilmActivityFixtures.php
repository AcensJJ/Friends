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

        $film4 = new Activity();
        $film4->setCategory($film)
            ->setName('Catastrophe')
            ->setImg('assets/images/activity/film/catastrophe.jpg');
        $manager->persist($film4);

        $film5 = new Activity();
        $film5->setCategory($film)
            ->setName('Comédie')
            ->setImg('assets/images/activity/film/comedie.jpg');
        $manager->persist($film5);

        $film6 = new Activity();
        $film6->setCategory($film)
            ->setName('Policier')
            ->setImg('assets/images/activity/film/policier.jpg');
        $manager->persist($film6);

        $film7 = new Activity();
        $film7->setCategory($film)
            ->setName('Documentaire')
            ->setImg('assets/images/activity/film/documentaire.jpg');
        $manager->persist($film7);

        $film8 = new Activity();
        $film8->setCategory($film)
            ->setName('Espionnage')
            ->setImg('assets/images/activity/film/espionnage.jpg');
        $manager->persist($film8);

        $film9 = new Activity();
        $film9->setCategory($film)
            ->setName('Western')
            ->setImg('assets/images/activity/film/western.jpg');
        $manager->persist($film9);

        $film10 = new Activity();
        $film10->setCategory($film)
            ->setName('Fantastique')
            ->setImg('assets/images/activity/film/fantastique.png');
        $manager->persist($film10);

        $film12 = new Activity();
        $film12->setCategory($film)
            ->setName('Guerre')
            ->setImg('assets/images/activity/film/guerre.jpg');
        $manager->persist($film12);

        $film13 = new Activity();
        $film13->setCategory($film)
            ->setName('Historique')
            ->setImg('assets/images/activity/film/historique.jpg');
        $manager->persist($film13);

        $film14 = new Activity();
        $film14->setCategory($film)
            ->setName('Horreur')
            ->setImg('assets/images/activity/film/horreur.jpg');
        $manager->persist($film14);

        $film15 = new Activity();
        $film15->setCategory($film)
            ->setName('Musical')
            ->setImg('assets/images/activity/film/musical.jpg');
        $manager->persist($film15);

        $film16 = new Activity();
        $film16->setCategory($film)
            ->setName('Romance')
            ->setImg('assets/images/activity/film/romance.jpg');
        $manager->persist($film16);

        $film17 = new Activity();
        $film17->setCategory($film)
            ->setName('Science-Fiction')
            ->setImg('assets/images/activity/film/sciencefiction.jpg');
        $manager->persist($film17);

        $film18 = new Activity();
        $film18->setCategory($film)
            ->setName('Super-Héros')
            ->setImg('assets/images/activity/film/heros.jpg');
        $manager->persist($film18);

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
