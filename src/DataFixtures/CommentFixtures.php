<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class CommentFixtures extends Fixture  implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $comment1 = new Comment();
        $comment1->setMessage('This car\'s location is not very convenient, with limited parking options and poor access to major roads. It would be a challenge for daily commuters.');
        $comment1->setDate(new \DateTime('06/04/1982'));
        $comment1->setNote('1');
        $comment1->setUser($this->getReference('moviefan@yahoo.com'));
        $comment1->setVehicle($this->getReference('vehicle_0'));

        $manager->persist($comment1);

        $comment2 = new Comment();
        $comment2->setMessage('Great location for a car, easy access to major roads and plenty of nearby amenities for convenience."');
        $comment2->setDate(new \DateTime('01/01/1990'));
        $comment2->setNote('4');
        $comment2->setUser($this->getReference('moviefan@yahoo.com'));
        $comment2->setVehicle($this->getReference('vehicle_3'));

        $manager->persist($comment2);
        
        $comment3 = new Comment();
        $comment3->setMessage('This location is perfect for road-trippers, as it\'s situated near major highways and has ample parking for cars. The area also boasts beautiful scenic routes for a more leisurely drive.');
        $comment3->setDate(new \DateTime('12/21/2012'));
        $comment3->setNote('5');
        $comment3->setUser($this->getReference('moviefan@yahoo.com'));
        $comment3->setVehicle($this->getReference('vehicle_8'));

        $manager->persist($comment3);

        $comment4 = new Comment();
        $comment4->setMessage('I\'m Batman.');
        $comment4->setDate(new \DateTime('05/09/2021'));
        $comment4->setNote('3');
        $comment4->setUser($this->getReference('moviefan@yahoo.com'));
        $comment4->setVehicle($this->getReference('vehicle_10'));

        $manager->persist($comment4);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixtures::class,
        ];
    }
}
