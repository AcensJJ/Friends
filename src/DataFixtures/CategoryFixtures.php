<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $sport = new Category();
        $sport->setName('Sport')
            ->setImage('assets/images/categories/sport.jpg');
        $manager->persist($sport);

        $culture = new Category();
        $culture->setName('Culture')
            ->setImage('assets/images/categories/culture.jpg');
        $manager->persist($culture);

        $art = new Category();
        $art->setName('Art')
            ->setImage('assets/images/categories/art.jpg');
        $manager->persist($art);

        $musique = new Category();
        $musique->setName('Musique')
            ->setImage('assets/images/categories/music.jpg');
        $manager->persist($musique);

        $jeuxVideos = new Category();
        $jeuxVideos->setName('Jeux Vidéos')
            ->setImage('assets/images/categories/jeux.jpg');
        $manager->persist($jeuxVideos);

        $film = new Category();
        $film->setName('Film')
            ->setImage('assets/images/categories/film.jpg');
        $manager->persist($film);

        $serie = new Category();
        $serie->setName('Serie')
            ->setImage('assets/images/categories/series.jpg');
        $manager->persist($serie);

        $animaux = new Category();
        $animaux->setName('Animaux')
            ->setImage('assets/images/categories/cat.jpg');
        $manager->persist($animaux);

        $instrument = new Category();
        $instrument->setName('Instruments')
            ->setImage('assets/images/categories/instrument.jpg');
        $manager->persist($instrument);

        $jeux = new Category();
        $jeux->setName('Jeux (société, de plein air, etc...)')
            ->setImage('assets/images/categories/societe.jpg');
        $manager->persist($jeux);

        $this->addReference('sport', $sport);
        $this->addReference('culture', $culture);
        $this->addReference('art', $art);
        $this->addReference('musique', $musique);
        $this->addReference('jeuxVideos', $jeuxVideos);
        $this->addReference('jeuxVideos', $jeuxVideos);
        $this->addReference('film', $film);
        $this->addReference('instrument', $instrument);
        $this->addReference('jeux', $jeux);
        $this->addReference('animaux', $animaux);

        $manager->flush();
    }
}
