<?php

namespace App\DataFixtures;

use App\Entity\Activity;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class CultureActivityFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // culture
        $cult = $this->getReference('culture');

        $cinema = new Activity();
        $cinema->setName('Culture cinématographique')
            ->setImg('assets/images/activity/culture/cinema.jpg')
            ->setCategory($cult);
        $manager->persist($cinema);

        $lecture = new Activity();
        $lecture->setName('Culture littéraire')
            ->setImg('assets/images/activity/culture/litterature.jpg')    
            ->setCategory($cult);
        $manager->persist($lecture);

        $musique = new Activity();
        $musique->setName('Culture musicale')
            ->setImg('assets/images/activity/culture/music.jpg')
            ->setCategory($cult);
        $manager->persist($musique);

        $theatre = new Activity();
        $theatre->setName('Culture théâtrale')
            ->setImg('assets/images/activity/culture/theatre.jpg')
            ->setCategory($cult);
        $manager->persist($theatre);

        $artistique = new Activity();
        $artistique->setName('Culture artistique')
            ->setImg('assets/images/activity/culture/artistique.jpg')
            ->setCategory($cult);
        $manager->persist($artistique);
        
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
