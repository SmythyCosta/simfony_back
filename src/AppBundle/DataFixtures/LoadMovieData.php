<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadMovieData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $movie1 = new Movie();
        $movie1->setTitle('Loucuras na Idade Média');
        $movie1->setDescription('Um bon filme de comédia, 5 estrelas...');
        
        $manager->persist($movie1);
        $manager->flush();
    }
}