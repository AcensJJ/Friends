<?php

namespace App\DataFixtures;

use App\Entity\Activity;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ActivityFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Activités sportives
        $sport = $this->getReference('sport');
        
        $hiver = new Activity();
        $hiver->setName('Sports d\'hiver')
            ->setImg('images/activity/hiver.png')
            ->setCategory($sport);
        $manager->persist($hiver);

        $equipe = new Activity();
        $equipe->setName('Sports d\'équipe')
            ->setImg('images/activity/equipe.jpg')
            ->setCategory($sport);
        $manager->persist($equipe);

        $indi = new Activity();
        $indi->setName('Sports individuels')
            ->setImg('images/activity/individuel.jpg')
            ->setCategory($sport);
        $manager->persist($indi);
        
        $aqua = new Activity();
        $aqua->setName('Sports aquatiques')
            ->setImg('images/activity/aquatique.jpg')
            ->setCategory($sport);
        $manager->persist($aqua);

        $muscu = new Activity();
        $muscu->setName('Musculation')
            ->setImg('images/activity/muscu.png')
            ->setCategory($sport);
        $manager->persist($muscu);
        
        // culture
        $cult = $this->getReference('culture');

        $cinema = new Activity();
        $cinema->setName('Culture cinématographique')
            ->setImg('images/activity/')
            ->setCategory($cult);
        $manager->persist($cinema);

        $lecture = new Activity();
        $lecture->setName('Culture littéraire')
            ->setImg('images/activity/')    
            ->setCategory($cult);
        $manager->persist($lecture);

        $musique = new Activity();
        $musique->setName('Culture musicale')
            ->setImg('images/activity/')
            ->setCategory($cult);
        $manager->persist($musique);

        $theatre = new Activity();
        $theatre->setName('Culture théâtrale')
            ->setImg('images/activity/')
            ->setCategory($cult);
        $manager->persist($theatre);

        $artistique = new Activity();
        $artistique->setName('Culture artistique')
            ->setImg('images/activity/')
            ->setCategory($cult);
        $manager->persist($artistique);
        
        // art (les 9 arts majeurs)
        $art = $this->getReference('art');

        $architecture  = new Activity();
        $architecture ->setName('architecture ')
            ->setImg('images/activity/')
            ->setCategory($art);
        $manager->persist($architecture );

        $sculpture = new Activity();;
        $sculpture->setName('sculpture')
            ->setImg('images/activity/')
            ->setCategory($art);
        $manager->persist($sculpture);

        $artsVisuels = new Activity();
        $artsVisuels->setName('arts visuels (peinture , dessin, etc.)')
            ->setImg('images/activity/')
            ->setCategory($art);
        $manager->persist($artsVisuels);

        $musique = new Activity();
        $musique->setName('musique')
            ->setImg('images/activity/')
            ->setCategory($art);
        $manager->persist($musique);
        
        $littérature = new Activity();
        $littérature->setName('littérature (poésie ou dramaturgie)')
            ->setImg('images/activity/')
            ->setCategory($art);
        $manager->persist($littérature);

        $artsDeLaScène = new Activity();
        $artsDeLaScène->setName('arts de la scène (théâtre, danse, mime, cirque)')
            ->setImg('images/activity/')
            ->setCategory($art);
        $manager->persist($artsDeLaScène);

        $cinema = new Activity();
        $cinema->setName('Cinéma')
            ->setImg('images/activity/')
            ->setCategory($art);
        $manager->persist($cinema);

        $lesArtsMediatiques = new Activity();
        $lesArtsMediatiques->setName('Les arts médiatiques (télévision, radio, photographie)')
            ->setImg('images/activity/')
            ->setCategory($art);
        $manager->persist($lesArtsMediatiques);

        $bd = new Activity();
        $bd->setName('La bande-dessinée')
            ->setImg('images/activity/')
            ->setCategory($art);
        $manager->persist($bd);

        // musique (styles musicaux)
        $musi = $this->getReference('musique');

        $rap = new Activity();
        $rap->setName('Rap')
            ->setCategory($musi);
        $manager->persist($rap);

        $hiphop = new Activity();
        $hiphop->setName('Hip-hop')
            ->setCategory($musi);
        $manager->persist($hiphop);

        $classic = new Activity();
        $classic->setName('Classique')
            ->setCategory($musi);
        $manager->persist($classic);

        $electro = new Activity();
        $electro->setName('Electro')
            ->setCategory($musi);
        $manager->persist($electro);

        $rock = new Activity();
        $rock->setName('Rock')
            ->setCategory($musi);
        $manager->persist($rock);

        $bs = new Activity();
        $bs->setName('Bande son')
            ->setCategory($musi);
        $manager->persist($bs);

        $variete = new Activity();
        $variete->setName('Variété')
            ->setCategory($musi);
        $manager->persist($variete);

        // // voyage
        // $voyage = $this->getReference('voyage');

        //film
        $film = $this->getReference('film');

        $film1 = new Activity();
        $film1->setCategory($film)
            ->setName('Drame');
        $manager->persist($film);

        $film1 = new Activity();
        $film1->setCategory($film)
            ->setName('Action');
        $manager->persist($film1);

        $film2 = new Activity();
        $film2->setCategory($film)
            ->setName('Aventure');
        $manager->persist($film2);

        $film3 = new Activity();
        $film3->setCategory($film)
            ->setName('Biopic');
        $manager->persist($film3);

        $film4 = new Activity();
        $film4->setCategory($film)
            ->setName('Catastrophe');
        $manager->persist($film4);

        $film5 = new Activity();
        $film5->setCategory($film)
            ->setName('Comédie');
        $manager->persist($film5);

        $film6 = new Activity();
        $film6->setCategory($film)
            ->setName('Policier');
        $manager->persist($film6);

        $film7 = new Activity();
        $film7->setCategory($film)
            ->setName('Documentaire');
        $manager->persist($film7);

        $film8 = new Activity();
        $film8->setCategory($film)
            ->setName('Espionnage');
        $manager->persist($film8);

        $film9 = new Activity();
        $film9->setCategory($film)
            ->setName('Western');
        $manager->persist($film9);

        $film10 = new Activity();
        $film10->setCategory($film)
            ->setName('Fantastique');
        $manager->persist($film10);

        $film12 = new Activity();
        $film12->setCategory($film)
            ->setName('Guerre');
        $manager->persist($film12);

        $film13 = new Activity();
        $film13->setCategory($film)
            ->setName('Historique');
        $manager->persist($film13);

        $film14 = new Activity();
        $film14->setCategory($film)
            ->setName('Horreur');
        $manager->persist($film14);

        $film15 = new Activity();
        $film15->setCategory($film)
            ->setName('Musical');
        $manager->persist($film15);

        $film16 = new Activity();
        $film16->setCategory($film)
            ->setName('Romance');
        $manager->persist($film16);

        $film17 = new Activity();
        $film17->setCategory($film)
            ->setName('Science-Fiction');
        $manager->persist($film17);

        $film18 = new Activity();
        $film18->setCategory($film)
            ->setName('Super-Héros');
        $manager->persist($film18);

        // Serie 
        $serie = $this->getReference('serie');

        $serie1 = new Activity();
        $serie1->setCategory($serie)
            ->setName('Drame');
        $manager->persist($serie1);

        $serie2 = new Activity();
        $serie2->setCategory($serie)
            ->setName('Action');
        $manager->persist($serie2);

        $serie3 = new Activity();
        $serie3->setCategory($serie)
            ->setName('Aventure');
        $manager->persist($serie3);

        $serie4 = new Activity();
        $serie4->setCategory($serie)
            ->setName('Biopic');
        $manager->persist($serie4);

        $serie5 = new Activity();
        $serie5->setCategory($serie)
            ->setName('Catastrophe');
        $manager->persist($serie5);

        $serie6 = new Activity();
        $serie6->setCategory($serie)
            ->setName('Comédie');
        $manager->persist($serie6);

        $serie7 = new Activity();
        $serie7->setCategory($serie)
            ->setName('Policier');
        $manager->persist($serie7);

        $serie8 = new Activity();
        $serie8->setCategory($serie)
            ->setName('Documentaire');
        $manager->persist($serie8);

        $serie9 = new Activity();
        $serie9->setCategory($serie)
            ->setName('Espionnage');
        $manager->persist($serie9);

        $serie10 = new Activity();
        $serie10->setCategory($serie)
            ->setName('Western');
        $manager->persist($serie10);

        $serie11 = new Activity();
        $serie11->setCategory($serie)
            ->setName('Fantastique');
        $manager->persist($serie11);

        $serie13 = new Activity();
        $serie13->setCategory($serie)
            ->setName('Guerre');
        $manager->persist($serie13);

        $serie14 = new Activity();
        $serie14->setCategory($serie)
            ->setName('Historique');
        $manager->persist($serie14);

        $serie15 = new Activity();
        $serie15->setCategory($serie)
            ->setName('Horreur');
        $manager->persist($serie15);

        $serie16 = new Activity();
        $serie16->setCategory($serie)
            ->setName('Musical');
        $manager->persist($serie16);

        $serie17 = new Activity();
        $serie17->setCategory($serie)
            ->setName('Romance');
        $manager->persist($serie17);

        $serie18 = new Activity();
        $serie18->setCategory($serie)
            ->setName('Science-Fiction');
        $manager->persist($serie18);

        $serie20 = new Activity();
        $serie20->setCategory($serie)
            ->setName('Survival');
        $manager->persist($serie20);
        
        // instrument de musique
        $instrument = $this->getReference('instrument');

        $instrument1 = new Activity();
        $instrument1->setCategory($instrument)
            ->setName('Instruments à cordes')
            ->setImg('images/activity/cordes.jpg');
        $manager->persist($instrument1);

        $instrument2 = new Activity();
        $instrument2->setCategory($instrument)
            ->setName('Instruments à vents')
            ->setImg('images/activity/vent.jpg');
        $manager->persist($instrument2);

        $instrument3= new Activity();
        $instrument3->setCategory($instrument)
            ->setName('Instruments à percusion')
            ->setImg('images/activity/percussion.png');
        $manager->persist($instrument3);

        // jeux vidéos
        $jeuxvideo = $this->getReference('jeuxVideos');

        $jeuxvideo1 = new Activity();
        $jeuxvideo1->setCategory($jeuxvideo)
            ->setName('Aventure')
            ->setImg('images/activity/');
        $manager->persist($jeuxvideo1);

        $jeuxvideo2 = new Activity();
        $jeuxvideo2->setCategory($jeuxvideo)
            ->setName('Zombie')
            ->setImg('images/activity/');
        $manager->persist($jeuxvideo2);

        $jeuxvideo3 = new Activity();
        $jeuxvideo3->setCategory($jeuxvideo)
            ->setName('Course')
            ->setImg('images/activity/');
        $manager->persist($jeuxvideo3);

        $jeuxvideo4 = new Activity();
        $jeuxvideo4->setCategory($jeuxvideo)
            ->setName('FPS')
            ->setImg('images/activity/');
        $manager->persist($jeuxvideo4);

        $jeuxvideo5 = new Activity();
        $jeuxvideo5->setCategory($jeuxvideo)
            ->setName('Wargames')
            ->setImg('images/activity/');
        $manager->persist($jeuxvideo5);

        $jeuxvideo6 = new Activity();
        $jeuxvideo6->setCategory($jeuxvideo)
            ->setName('MMORPG')
            ->setImg('images/activity/');
        $manager->persist($jeuxvideo6);

        $jeuxvideo7 = new Activity();
        $jeuxvideo7->setCategory($jeuxvideo)
            ->setName('Plate-forme')
            ->setImg('images/activity/');
        $manager->persist($jeuxvideo7);

        $jeuxvideo8 = new Activity();
        $jeuxvideo8->setCategory($jeuxvideo)
            ->setName('RPG')
            ->setImg('fake');
        $manager->persist($jeuxvideo8);

        $jeuxvideo9 = new Activity();
        $jeuxvideo9->setCategory($jeuxvideo)
            ->setName('Simulation')
            ->setImg('images/activity/');
        $manager->persist($jeuxvideo9);

        $jeuxvideo10 = new Activity();
        $jeuxvideo10->setCategory($jeuxvideo)
            ->setName('Sport')
            ->setImg('images/activity/');
        $manager->persist($jeuxvideo10);

        $jeuxvideo11 = new Activity();
        $jeuxvideo11->setCategory($jeuxvideo)
            ->setName('Action')
            ->setImg('images/activity/');
        $manager->persist($jeuxvideo11);

        $jeuxvideo12 = new Activity();
        $jeuxvideo12->setCategory($jeuxvideo)
            ->setName('Arcade')
            ->setImg('images/activity/');
        $manager->persist($jeuxvideo12);

        $jeuxvideo13 = new Activity();
        $jeuxvideo13->setCategory($jeuxvideo)
            ->setName('Stratégie')
            ->setImg('images/activity/');
        $manager->persist($jeuxvideo13);

        $jeuxvideo14 = new Activity();
        $jeuxvideo14->setCategory($jeuxvideo)
            ->setName('Réflexion')
            ->setImg('images/activity/');
        $manager->persist($jeuxvideo14);

        $jeuxvideo15 = new Activity();
        $jeuxvideo15->setCategory($jeuxvideo)
            ->setName('Création')
            ->setImg('images/activity/');
        $manager->persist($jeuxvideo15);

        $jeuxvideo16 = new Activity();
        $jeuxvideo16->setCategory($jeuxvideo)
            ->setName('Infiltration')
            ->setImg('images/activity/');
        $manager->persist($jeuxvideo16);
        
        $jeuxvideo17 = new Activity();
        $jeuxvideo17->setCategory($jeuxvideo)
            ->setName('Tower defense')
            ->setImg('images/activity/');
        $manager->persist($jeuxvideo17);
        
        $jeuxvideo18 = new Activity();
        $jeuxvideo18->setCategory($jeuxvideo)
            ->setName('Moba')
            ->setImg('images/activity/');
        $manager->persist($jeuxvideo18);

        $jeuxvideo19 = new Activity();
        $jeuxvideo19->setCategory($jeuxvideo)
            ->setName('Danse')
            ->setImg('images/activity/');
        $manager->persist($jeuxvideo19);

        $jeuxvideo20 = new Activity();
        $jeuxvideo20->setCategory($jeuxvideo)
            ->setName('Karaoké')
            ->setImg('images/activity/');
        $manager->persist($jeuxvideo20);

        // jeux
        $jeux = $this->getReference('jeux');

        $jeux1 = new Activity();
        $jeux1->setCategory($jeux)
            ->setName('Karaoké')
            ->setImg('images/activity/');
        $manager->persist($jeux1);
        
        $jeux2 = new Activity();
        $jeux2->setCategory($jeux)
            ->setName('Escape game')
            ->setImg('images/activity/');
        $manager->persist($jeux2);
        
        $jeux3 = new Activity();
        $jeux3->setCategory($jeux)
            ->setName('Jeu de société')
            ->setImg('images/activity/');
        $manager->persist($jeux3);
        
        $jeux4 = new Activity();
        $jeux4->setCategory($jeux)
            ->setName('Bar de jeu')
            ->setImg('images/activity/');
        $manager->persist($jeux4);
        
        $jeux5 = new Activity();
        $jeux5->setCategory($jeux)
            ->setName('Jeu de rôles')
            ->setImg('images/activity/');
        $manager->persist($jeux5);

        $jeux6 = new Activity();
        $jeux6->setCategory($jeux)
            ->setName('Jeu en soirée')
            ->setImg('images/activity/');
        $manager->persist($jeux6);

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
