<?php

namespace App\DataFixtures;

use App\Entity\Activity;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class MusicActivityFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // musique (styles musicaux)
        $musi = $this->getReference('musique');

        $rap = new Activity();
        $rap->setName('Rap')
            ->setCategory($musi)
            ->setImg('assets/images/activity/musique/rap.jpg');
        $manager->persist($rap);

        $hiphop = new Activity();
        $hiphop->setName('Hip-hop')
            ->setCategory($musi)
            ->setImg('assets/images/activity/musique/hiphop.jpg');
        $manager->persist($hiphop);

        $classic = new Activity();
        $classic->setName('Classique')
            ->setCategory($musi)
            ->setImg('assets/images/activity/musique/classic.jpg');
        $manager->persist($classic);

        $electro = new Activity();
        $electro->setName('Electro')
            ->setCategory($musi)
            ->setImg('assets/images/activity/musique/electro.jpg');
        $manager->persist($electro);

        $rock = new Activity();
        $rock->setName('Rock')
            ->setCategory($musi)
            ->setImg('assets/images/activity/musique/rock.jpg');
        $manager->persist($rock);

        $bs = new Activity();
        $bs->setName('Bande son')
            ->setCategory($musi)
            ->setImg('assets/images/activity/musique/soundtrack.jpg');
        $manager->persist($bs);

        $variete = new Activity();
        $variete->setName('Variété')
            ->setCategory($musi)
            ->setImg('assets/images/activity/musique/variete.jpg');
        $manager->persist($variete);

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
