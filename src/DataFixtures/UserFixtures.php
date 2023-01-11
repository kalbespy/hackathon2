<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture implements DependentFixtureInterface
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('mortym@yahoo.com');
        $user->setFirstname('Morty');
        $user->setLastname('McFly');
        $user->setRoles(['ROLE_USER']);
        $hashedPassword = $this->passwordHasher->hashPassword(
            $user,
            'morty123'
        );
        $user->setPassword($hashedPassword);
        $user->addVehicle($this->getReference('vehicle_0'));
        $user->addVehicle($this->getReference('vehicle_5'));
        $manager->persist($user);
        $this->addReference($user->getEmail(), $user);


        $user = new User();
        $user->setEmail('bricew@yahoo.com');
        $user->setFirstname('Brice');
        $user->setLastname('Wayne');
        $user->setRoles(['ROLE_USER']);
        $hashedPassword = $this->passwordHasher->hashPassword(
            $user,
            'brice123'
        );
        $user->setPassword($hashedPassword);
        $user->addVehicle($this->getReference('vehicle_3'));
        $manager->persist($user);
        $this->addReference($user->getEmail(), $user);


        $user = new User();
        $user->setEmail('daveh@yahoo.com');
        $user->setFirstname('Dave');
        $user->setLastname('Hasselhoff');
        $user->setRoles(['ROLE_USER']);
        $hashedPassword = $this->passwordHasher->hashPassword(
            $user,
            'dave123'
        );
        $user->setPassword($hashedPassword);
        $user->addVehicle($this->getReference('vehicle_7'));
        $user->addVehicle($this->getReference('vehicle_13'));
        $manager->persist($user);
        $this->addReference($user->getEmail(), $user);


        $admin = new User();
        $admin->setEmail('admin@libertysurf.com');
        $admin->setRoles(['ROLE_ADMIN']);
        $hashedPassword = $this->passwordHasher->hashPassword(
            $admin,
            'admin123'
        );
        $admin->setPassword($hashedPassword);
        $manager->persist($admin);
        $this->addReference($admin->getEmail(), $admin);


        $admin = new User();
        $admin->setEmail('cinecar@aol.com');
        $admin->setRoles(['ROLE_CONTRIBUTOR']);
        $hashedPassword = $this->passwordHasher->hashPassword(
            $admin,
            'cinecar123'
        );
        $admin->setPassword($hashedPassword);
        $manager->persist($admin);
        $this->addReference($admin->getEmail(), $admin);

        $manager->flush();
    }


    public function getDependencies()
    {
        return [
            VehicleFixtures::class,
        ];
    }
}
