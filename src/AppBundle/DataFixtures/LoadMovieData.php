<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadMovieData extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $movie0 = new Movie();
        $movie0->setTitle('Loucuras na idade Média');
        $movie0->setDescription('filme de comedia, top 5 estrelas');

        $movie1 = new Movie();
        $movie1->setTitle('O Resgate do Soldado Ryan');
        $movie1->setDescription('filme de guerra épico norte-americano de 1998, ambientado durante a Batalha da Normandia na Segunda Guerra Mundial.');
        
        $movie2 = new Movie();
        $movie2->setTitle('Matrix');
        $movie2->setDescription('O filme descreve um futuro distópico no qual a realidade, como percebida pela maioria dos humanos, é, na verdade, uma realidade simulada chamada "Matrix", criada por máquinas sencientes para subjugar a população humana, enquanto o calor e a atividade elétrica de seus corpos são usados ​​como fonte de energia.');
        
        $manager->persist($movie0);
        $manager->persist($movie1);
        $manager->persist($movie2);
        $manager->flush();

    }
    
}