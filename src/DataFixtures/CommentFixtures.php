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
        $comment1->setMessage('No jet, no wow.');
        $comment1->setDate(new \DateTime('06/04/1982'));
        $comment1->setNote('1');
        $comment1->setUser($this->getReference('jeffb@yahoo.com'));
        $comment1->setVehicle($this->getReference('vehicle_0'));

        $manager->persist($comment1);

        $comment2 = new Comment();
        $comment2->setMessage('I rented the batmobile for my wedding and it was amazing! Everyone was impressed and we got incredible pictures. The service was excellent and I highly recommend this site.');
        $comment2->setDate(new \DateTime('01/01/1990'));
        $comment2->setNote('4');
        $comment2->setUser($this->getReference('bricew@yahoo.com'));
        $comment2->setVehicle($this->getReference('vehicle_3'));

        $manager->persist($comment2);

        $comment3 = new Comment();
        $comment3->setMessage('I rented the James Bond car for my bachelor party and it was a dream come true. The service was excellent and we had an amazing day.');
        $comment3->setDate(new \DateTime('12/21/2012'));
        $comment3->setNote('5');
        $comment3->setUser($this->getReference('mortym@yahoo.com'));
        $comment3->setVehicle($this->getReference('vehicle_8'));

        $manager->persist($comment3);

        $comment4 = new Comment();
        $comment4->setMessage('I rented the Mustang Bullitt for a day of driving and it was the most incredible experience of my life. The vehicle was incredibly powerful and fun to drive. I recommend this site to all car movie enthusiasts.');
        $comment4->setDate(new \DateTime('05/09/2021'));
        $comment4->setNote('3');
        $comment4->setUser($this->getReference('bricew@yahoo.com'));
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
