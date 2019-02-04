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
            ->setImg('assets/images/activity/sport/hiver.png')
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
            ->setImg('assets/images/activity/sport/muscu.png')
            ->setCategory($sport);
        $manager->persist($muscu);
        
        // culture
        $cult = $this->getReference('culture');

        $cinema = new Activity();
        $cinema->setName('Culture cinématographique')
            ->setImg('assets/images/activity/culture/cinema.png')
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
            ->setImg('assets/images/activity/art/cinema.png')
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
            ->setImg('assets/images/activity/musique/soundtrack.png');
        $manager->persist($bs);

        $variete = new Activity();
        $variete->setName('Variété')
            ->setCategory($musi)
            ->setImg('assets/images/activity/musique/variete.jpg');

        $manager->persist($variete);

        // // voyage
        // $voyage = $this->getReference('voyage');

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

        // Serie 
        $serie = $this->getReference('serie');

        $serie1 = new Activity();
        $serie1->setCategory($serie)
            ->setName('Drame')
            ->setImg('assets/images/activity/serie/drame.jpg');

        $manager->persist($serie1);

        $serie2 = new Activity();
        $serie2->setCategory($serie)
            ->setName('Action')
            ->setImg('assets/images/activity/serie/action.jpg');

        $manager->persist($serie2);

        $serie3 = new Activity();
        $serie3->setCategory($serie)
            ->setName('Aventure')
            ->setImg('assets/images/activity/serie/aventure.jpg');

        $manager->persist($serie3);

    

        $serie5 = new Activity();
        $serie5->setCategory($serie)
            ->setName('Catastrophe')
            ->setImg('assets/images/activity/serie/catastrophe.jpg');

        $manager->persist($serie5);

        $serie6 = new Activity();
        $serie6->setCategory($serie)
            ->setName('Comédie')
            ->setImg('assets/images/activity/serie/comedie.jpg');

        $manager->persist($serie6);

        $serie7 = new Activity();
        $serie7->setCategory($serie)
            ->setName('Policier')
            ->setImg('assets/images/activity/serie/policier.jpg');

        $manager->persist($serie7);


        $serie9 = new Activity();
        $serie9->setCategory($serie)
            ->setName('Espionnage')
            ->setImg('assets/images/activity/serie/espionnage.jpg');

        $manager->persist($serie9);

        $serie10 = new Activity();
        $serie10->setCategory($serie)
            ->setName('Western')
            ->setImg('assets/images/activity/serie/western.png');

        $manager->persist($serie10);

        $serie11 = new Activity();
        $serie11->setCategory($serie)
            ->setName('Fantastique')
            ->setImg('assets/images/activity/serie/fantastique.jpg');

        $manager->persist($serie11);

        $serie13 = new Activity();
        $serie13->setCategory($serie)
            ->setName('Guerre')
            ->setImg('assets/images/activity/serie/guerre.jpg');

        $manager->persist($serie13);


        $serie15 = new Activity();
        $serie15->setCategory($serie)
            ->setName('Horreur')
            ->setImg('assets/images/activity/serie/horreur.jpg');

        $manager->persist($serie15);

        $serie16 = new Activity();
        $serie16->setCategory($serie)
            ->setName('Musical')
            ->setImg('assets/images/activity/serie/musical.jpg');

        $manager->persist($serie16);

        $serie17 = new Activity();
        $serie17->setCategory($serie)
            ->setName('Romance')
            ->setImg('assets/images/activity/serie/romance.jpg');

        $manager->persist($serie17);

        $serie18 = new Activity();
        $serie18->setCategory($serie)
            ->setName('Science-Fiction')
            ->setImg('assets/images/activity/serie/scienfiction.jpg');

        $manager->persist($serie18);

        $serie20 = new Activity();
        $serie20->setCategory($serie)
            ->setName('Survival')
            ->setImg('assets/images/activity/serie/survival.jpg');

        $manager->persist($serie20);
        
        // instrument de musique
        $instrument = $this->getReference('instrument');

        $instrument1 = new Activity();
        $instrument1->setCategory($instrument)
            ->setName('Instruments à cordes')
            ->setImg('assets/images/activity/instrument/cordes.jpg');
            $manager->persist($instrument1);

        $instrument2 = new Activity();
        $instrument2->setCategory($instrument)
            ->setName('Instruments à vents')
            ->setImg('assets/images/activity/instrument/vent.jpg');
            $manager->persist($instrument2);

        $instrument3= new Activity();
        $instrument3->setCategory($instrument)
            ->setName('Instruments à percusion')
            ->setImg('assets/images/activity/instrument/percussion.png');
            $manager->persist($instrument3);

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

        $jeuxvideo5 = new Activity();
        $jeuxvideo5->setCategory($jeuxvideo)
            ->setName('Wargames')
            ->setImg('assets/images/activity/jeux_video/fps.jpg');
        $manager->persist($jeuxvideo5);

        $jeuxvideo6 = new Activity();
        $jeuxvideo6->setCategory($jeuxvideo)
            ->setName('MMORPG')
            ->setImg('assets/images/activity/jeux_video/mmorpg.jpg');
        $manager->persist($jeuxvideo6);

        $jeuxvideo7 = new Activity();
        $jeuxvideo7->setCategory($jeuxvideo)
            ->setName('Plate-forme')
            ->setImg('assets/images/activity/jeux_video/plateforme.jpg');
        $manager->persist($jeuxvideo7);

        $jeuxvideo8 = new Activity();
        $jeuxvideo8->setCategory($jeuxvideo)
            ->setName('RPG')
            ->setImg('assets/images/activity/jeux_video/rpg.png');
        $manager->persist($jeuxvideo8);

        $jeuxvideo9 = new Activity();
        $jeuxvideo9->setCategory($jeuxvideo)
            ->setName('Simulation')
            ->setImg('assets/images/activity/jeux_video/simulation.jpg');
        $manager->persist($jeuxvideo9);

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

        $jeuxvideo12 = new Activity();
        $jeuxvideo12->setCategory($jeuxvideo)
            ->setName('Arcade')
            ->setImg('assets/images/activity/jeux_video/arcada.png');
        $manager->persist($jeuxvideo12);

        $jeuxvideo13 = new Activity();
        $jeuxvideo13->setCategory($jeuxvideo)
            ->setName('Stratégie')
            ->setImg('assets/images/activity/jeux_video/strategie.jpg');
        $manager->persist($jeuxvideo13);

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
            ->setImg('assets/images/activity/jeux_video/infiltration.jpg');
        $manager->persist($jeuxvideo16);
        
        
        $jeuxvideo18 = new Activity();
        $jeuxvideo18->setCategory($jeuxvideo)
            ->setName('Moba')
            ->setImg('assets/images/activity/jeux_video/moba.jpg');
        $manager->persist($jeuxvideo18);

        $jeuxvideo19 = new Activity();
        $jeuxvideo19->setCategory($jeuxvideo)
            ->setName('Danse')
            ->setImg('assets/images/activity/jeux_video/danse.jpg');
        $manager->persist($jeuxvideo19);

        // jeux
        $jeux = $this->getReference('jeux');


        $jeux1 = new Activity();
        $jeux1->setCategory($jeux)
            ->setName('Karaoké')
            ->setImg('assets/images/activity/jeux/karaoke.jpg');
        $manager->persist($jeux1);
        
        $jeux2 = new Activity();
        $jeux2->setCategory($jeux)
            ->setName('Escape game')
            ->setImg('assets/images/activity/jeux/escapegame.jpg');
        $manager->persist($jeux2);
        
        $jeux3 = new Activity();
        $jeux3->setCategory($jeux)
            ->setName('Jeu de société')
            ->setImg('assets/images/activity/jeux/societe.jpg');
        $manager->persist($jeux3);
        
        $jeux4 = new Activity();
        $jeux4->setCategory($jeux)
            ->setName('Bar de jeu')
            ->setImg('assets/images/activity/jeux/barjeu.jpg');
        $manager->persist($jeux4);
        
        $jeux5 = new Activity();
        $jeux5->setCategory($jeux)
            ->setName('Jeu de rôles')
            ->setImg('assets/images/activity/jeux/jdr.jpg');
        $manager->persist($jeux5);

        $jeux6 = new Activity();
        $jeux6->setCategory($jeux)
            ->setName('Jeu en soirée')
            ->setImg('assets/images/activity/jeux/jeusoire.jpg');
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
