<?php

namespace App\DataFixtures;

use App\Entity\Activity;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class JeuxvideoActivityFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // jeux vidéos
        $jeuxvideo = $this->getReference('jeuxVideos');

        $jeuxvideo1 = new Activity();
        $jeuxvideo1->setCategory($jeuxvideo)
            ->setName('Aventure')
            ->setImg('assets/images/activity/jeux_video/aventure.jpg');
        $manager->persist($jeuxvideo1);

        $jeuxvideo2 = new Activity();
        $jeuxvideo2->setCategory($jeuxvideo)
            ->setName('Zombie')
            ->setImg('assets/images/activity/jeux_video/zombie.jpg');
        $manager->persist($jeuxvideo2);

        $jeuxvideo3 = new Activity();
        $jeuxvideo3->setCategory($jeuxvideo)
            ->setName('Course')
            ->setImg('assets/images/activity/jeux_video/course.png');
        $manager->persist($jeuxvideo3);

        $jeuxvideo4 = new Activity();
        $jeuxvideo4->setCategory($jeuxvideo)
            ->setName('FPS')
            ->setImg('assets/images/activity/jeux_video/fps.jpg');
        $manager->persist($jeuxvideo4);

        $jeuxvideo7 = new Activity();
        $jeuxvideo7->setCategory($jeuxvideo)
            ->setName('Plate-forme')
            ->setImg('assets/images/activity/jeux_video/plateforme.jpg');
        $manager->persist($jeuxvideo7);

        $jeuxvideo10 = new Activity();
        $jeuxvideo10->setCategory($jeuxvideo)
            ->setName('Sport')
            ->setImg('assets/images/activity/jeux_video/sport.jpg');
        $manager->persist($jeuxvideo10);

        $jeuxvideo11 = new Activity();
        $jeuxvideo11->setCategory($jeuxvideo)
            ->setName('Action')
            ->setImg('assets/images/activity/jeux_video/action.jpg');
        $manager->persist($jeuxvideo11);

        $jeuxvideo14 = new Activity();
        $jeuxvideo14->setCategory($jeuxvideo)
            ->setName('Réflexion')
            ->setImg('assets/images/activity/jeux_video/reflexion.png');
        $manager->persist($jeuxvideo14);

        $jeuxvideo15 = new Activity();
        $jeuxvideo15->setCategory($jeuxvideo)
            ->setName('Création')
            ->setImg('assets/images/activity/jeux_video/creation.jpg');
        $manager->persist($jeuxvideo15);

        $jeuxvideo16 = new Activity();
        $jeuxvideo16->setCategory($jeuxvideo)
            ->setName('Infiltration')
            ->setImg('assets/images/activity/jeux_video/infiltration.png');
        $manager->persist($jeuxvideo16);

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
