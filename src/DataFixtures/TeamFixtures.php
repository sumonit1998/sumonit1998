<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Team;
use App\Entity\Player;
use App\Entity\TeamPlayer;

class TeamFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        // $product = new Product();
        

       



        $player = new Player();
        $player->setName('Ms Dhone');
        $player->setSurname('Dhone');
        $player->setPrice(150);
        $player->setStatus(0);

        $manager->persist($player);




        $player1 = new Player();
        $player1->setName('Tamim Ikbal');
        $player1->setSurname('Tamim');
        $player1->setPrice(100);
        $player1->setStatus(0);
        
        $manager->persist($player1);

        $player2 = new Player();
        $player2->setName('Sakib-al-Hasan');
        $player2->setSurname('Sakib');
        $player2->setPrice(200);
        $player2->setStatus(0);

        $manager->persist($player2);

        $manager->flush();
    }
}
