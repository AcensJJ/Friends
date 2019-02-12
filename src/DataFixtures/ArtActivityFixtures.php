<?php

namespace App\DataFixtures;

use App\Entity\Activity;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ArtActivityFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {   
        // art (les 9 arts majeurs)
        $art = $this->getReference('art');

        $architecture  = new Activity();
        $architecture ->setName('architecture ')
            ->setImg('assets/images/activity/art/architecture.jpg')
            ->setCategory($art);
        $manager->persist($architecture );

        $sculpture = new Activity();;
        $sculpture->setName('sculpture')
            ->setImg('assets/images/activity/art/sculpteur.jpg')
            ->setCategory($art);
        $manager->persist($sculpture);

        $artsVisuels = new Activity();
        $artsVisuels->setName('arts visuels (peinture , dessin, etc.)')
            ->setImg('assets/images/activity/art/visuel.jpg')
            ->setCategory($art);
        $manager->persist($artsVisuels);

        $musique = new Activity();
        $musique->setName('musique')
            ->setImg('assets/images/activity/art/classic.jpg')
            ->setCategory($art);
        $manager->persist($musique);
        
        $littérature = new Activity();
        $littérature->setName('littérature (poésie ou dramaturgie)')
            ->setImg('assets/images/activity/art/litterature.jpg')
            ->setCategory($art);
        $manager->persist($littérature);

        $artsDeLaScène = new Activity();
        $artsDeLaScène->setName('arts de la scène (théâtre, danse, mime, cirque)')
            ->setImg('assets/images/activity/art/theatre.jpg')
            ->setCategory($art);
        $manager->persist($artsDeLaScène);

        $cinema = new Activity();
        $cinema->setName('Cinéma')
            ->setImg('assets/images/activity/art/cinema.jpg')
            ->setCategory($art);
        $manager->persist($cinema);

        $lesArtsMediatiques = new Activity();
        $lesArtsMediatiques->setName('Les arts médiatiques (télévision, radio, photographie)')
            ->setImg('assets/images/activity/art/journalisme.jpg')
            ->setCategory($art);
        $manager->persist($lesArtsMediatiques);

        $bd = new Activity();
        $bd->setName('La bande-dessinée')
            ->setImg('assets/images/activity/art/bd.jpg')
            ->setCategory($art);
        $manager->persist($bd);

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
