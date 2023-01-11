<?php

namespace App\DataFixtures;

use App\Entity\Vehicle;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class VehicleFixtures extends Fixture
{

    const VEHICLES = [
    [ 
        'mileage' => "20000",
        'fuel' => " super",
        'category' => "Sport",
        'generalCondition' => "Collector",
        'transmission' => "sequential",
        'nbPlace' => '3',
        'availability' => 'true',
        'location' => 'Minisota',
        'consumption' => '100',
        'emissions' => '250',
        'gps'=> 'true',
        'airConditioning' => 'false',
        'title'=> 'Starsky and Hutch',
        'license'=> 'B',
        'picture'=> '4-Ford-Gran-torino-Starsky-Hutch.jpg',
        'film'=> '0'
    ],
    [
        'mileage' => "1000000",
        'fuel' => " super",
        'category' => "family",
        'generalCondition' => "collector",
        'transmission' => "auto",
        'nbPlace' => '6',
        'availability' => 'true',
        'location' => 'New York',
        'consumption' => '200 ',
        'emissions' => '250',
        'gps'=> 'true',
        'airConditioning' => 'False',
        'title'=> 'All risk agencye',
        'license'=> 'B',
        'picture'=> 'agenceTousRisque.jpeg',
        'film'=> '1'
    ],
    [
        'mileage' => "100000",
        'fuel' => " Jocker blood ",
        'category' => "Sport",
        'generalCondition' => "strike out",
        'transmission' => "manual",
        'nbPlace' => '1',
        'availability' => 'true',
        'location' => 'Bat cave',
        'consumption' => '200',
        'emissions' => '950',
        'gps'=> 'true',
        'airConditioning' => 'False',
        'title'=> 'Batcar Batman forever',
        'license'=> 'B',
        'picture'=> 'batmobile-batman-forever-4905-2.jpg',
        'film'=> '2'
    ],
    [
        'mileage' => "200",
        'fuel' => " Jocker blood ",
        'category' => "Sport",
        'generalCondition' => "strike out",
        'transmission' => "manual",
        'nbPlace' => '1',
        'availability' => 'true',
        'location' => 'Bat cave',
        'consumption' => '200',
        'emissions' => '4500',
        'gps'=> 'true',
        'airConditioning' => 'false',
        'title'=> 'Batcar Dark hnight',
        'license'=> 'B',
        'picture'=> 'batmobilebale.jpeg',
        'film'=> '3'
    ],
    [
        'mileage' => "55000",
        'fuel' => " Melange ",
        'category' => "3émé age",
        'generalCondition' => "strike out",
        'transmission' => "manual",
        'nbPlace' => '2',
        'availability' => 'true',
        'location' => 'Museum',
        'consumption' => '300',
        'emissions' => '100',
        'gps'=> 'false',
        'airConditioning' => 'False',
        'title'=> 'coccinelle',
        'license'=> 'B',
        'picture'=> 'coccinelle.jpg',
        'film'=> '1'
    ],
    [
        'mileage' => "550000",
        'fuel' => " Nuclear ",
        'category' => "Spatial",
        'generalCondition' => "strike out",
        'transmission' => "automatic piloting",
        'nbPlace' => '4',
        'availability' => 'true',
        'location' => 'Cybertron',
        'consumption' => '3500000 ',
        'emissions' => '0',
        'gps'=> 'true',
        'airConditioning' => 'False',
        'title'=> 'Bumblebe',
        'license'=> 'B',
        'picture'=> 'bumblebleVoiture.jpeg',
        'film'=> '5'
    ],
    [
        'mileage' => "550000",
        'fuel' => "GPL",
        'category' => "Gost",
        'generalCondition' => "dent",
        'transmission' => "automatic ",
        'nbPlace' => '4',
        'availability' => 'true',
        'location' => 'Multivers',
        'consumption' => '35000 ',
        'emissions' => '350',
        'gps'=> 'true',
        'airConditioning' => 'False',
        'title'=> 'GostBusters',
        'license'=> 'B',
        'picture'=> 'voiture-gostbusters.jpg',
        'film'=> '16'
    ],
    [
        'mileage' => "550000",
        'fuel' => " Diesel ",
        'category' => "Spy",
        'generalCondition' => "dent",
        'transmission' => "manual",
        'nbPlace' => '2',
        'availability' => 'true',
        'location' => 'Londres',
        'consumption' => '3500',
        'emissions' => '350',
        'gps'=> 'true',
        'airConditioning' => 'False',
        'title'=> 'James Bond',
        'license'=> 'B',
        'picture'=> 'jamesBond.jpeg',
        'film'=> '7'
    ],
    [
        'mileage' => "40000",
        'fuel' => " Diesel",
        'category' => "Sport",
        'generalCondition' => "dent",
        'transmission' => "manual ",
        'nbPlace' => '2',
        'availability' => 'true',
        'location' => 'Los angeles',
        'consumption' => '3500',
        'emissions' => '350',
        'gps'=> 'true',
        'airConditioning' => 'False',
        'title'=> 'K2000',
        'license'=> 'B',
        'picture'=> 'k2000.jpg',
        'film'=> '8'
    ],
    [
        'mileage' => "100000",
        'fuel' => " Petrol ",
        'category' => "Custome",
        'generalCondition' => "dent",
        'transmission' => "manual ",
        'nbPlace' => '2',
        'availability' => 'true',
        'location' => 'Canyon',
        'consumption' => '3500 ',
        'emissions' => '350',
        'gps'=> 'true',
        'airConditioning' => 'False',
        'title'=> 'Mad Max fury road',
        'license'=> 'B',
        'picture'=> 'mad_max_voiture.webp',
        'film'=> '9'
    ],
    [
        'mileage' => "100000",
        'fuel' => "Petrol",
        'category' => "Custome",
        'generalCondition' => "dent",
        'transmission' => "manual ",
        'nbPlace' => '4',
        'availability' => 'true',
        'location' => 'Canyon',
        'consumption' => '3500 ',
        'emissions' => '350',
        'gps'=> 'true',
        'airConditioning' => 'False',
        'title' => 'Mad Max 2',
        'license' => 'B',
        'picture'=> 'mad_max2.webp',
        'film'=> '10'
    ],
    [
        'mileage' => "158200",
        'fuel' => " Petrol ",
        'category' => "",
        'generalCondition' => "dent",
        'transmission' => "manual ",
        'nbPlace' => '2',
        'availability' => 'true',
        'location' => 'Canyon',
        'consumption' => '3500',
        'emissions' => '350',
        'gps'=> 'true',
        'airConditioning' => 'False',
        'title'=> 'Mistery Machine',
        'license'=> 'B',
        'picture'=> 'MisteryMachine.jpeg',
        'film'=> '11'
    ],
    [
        'mileage' => "500",
        'fuel' => "Pedal",
        'category' => "misfeet",
        'generalCondition' => "bite",
        'transmission' => "manual ",
        'nbPlace' => '3',
        'availability' => 'true',
        'location' => 'Canyon',
        'consumption' => '0',
        'emissions' => '0',
        'gps'=> 'true',
        'airConditioning' => 'False',
        'title'=> 'Oui-oui',
        'license'=> 'B',
        'picture'=> 'Oui-oui.jpg',
        'film'=> '12'
    ],
    [
        'mileage' => "10000",
        'fuel' => " Electique",
        'category' => "hunter",
        'generalCondition' => "new",
        'transmission' => "manual",
        'nbPlace' => '4',
        'availability' => 'true',
        'location' => 'Ligue Pokemon',
        'consumption' => '0',
        'emissions' => '0',
        'gps'=> 'true',
        'airConditioning' => 'False',
        'title'=> 'PikaCar',
        'license'=> 'B',
        'picture'=> 'pikachu.webp',
        'film'=> '13'
    ],
    [
        'mileage' => "52260",
        'fuel' => " Super",
        'category' => "vintage",
        'generalCondition' => "dent",
        'transmission' => "manual ",
        'nbPlace' => '1',
        'availability' => 'true',
        'location' => 'Bat Cave',
        'consumption' => '900 ',
        'emissions' => '450',
        'gps'=> 'true',
        'airConditioning' => 'False',
        'title'=> 'Batmobile version 1',
        'license'=> 'B',
        'picture'=> 'premiereBatmobile.jpeg',
        'film'=> '4'
    ],
    [
        'mileage' => "58202665",
        'fuel' => " Super",
        'category' => "vintage",
        'generalCondition' => "dent",
        'transmission' => "temporel ",
        'nbPlace' => '2',
        'availability' => 'true',
        'location' => 'far West',
        'consumption' => '900',
        'emissions' => '45',
        'gps'=> 'true',
        'airConditioning' => 'True',
        'title'=> 'return of the futur',
        'license'=> 'Z',
        'picture'=> 'retour vers le future.jpg',
        'film'=> '14'
    ],
    [
        'mileage' => "253600",
        'fuel' => " Diesel",
        'category' => "Banlieue",
        'generalCondition' => "dent",
        'transmission' => "temporel ",
        'nbPlace' => '4',
        'availability' => 'true',
        'location' => 'Marseille',
        'consumption' => '15',
        'emissions' => '30',
        'gps'=> 'true',
        'airConditioning' => 'True',
        'title'=> 'Taxi',
        'license'=> 'B',
        'picture'=> 'taxi.jpeg',
        'film'=> '15'
    ],
];

    public function load(ObjectManager $manager): void
    {
        foreach (self::VEHICLES as $key => $value) {
            $vehicle = new Vehicle();
            $vehicle->setMileage($value['mileage']);
            $vehicle->setFuel($value['fuel']);
            $vehicle->setCategory($value['category']);
            $vehicle->setGeneralCondition($value['generalCondition']);
            $vehicle->setTransmition($value['transmission']);
            $vehicle->setNbPlace($value['nbPlace']);
            $vehicle->setAvailability($value['availability']);
            $vehicle->setLocation($value['location']);
            $vehicle->setConsumption($value['consumption']);
            $vehicle->setEmissions($value['emissions']);
            $vehicle->setGps($value['gps']);
            $vehicle->setAirConditioning($value['airConditioning']);
            $vehicle->setTitle($value['title']);
            $vehicle->setLicense($value['license']);
            $vehicle->setPicture($value['picture']);
            $vehicle->setFilm($this->getReference('movie_' . $value['film']));
            
            $manager->persist($vehicle);
            $this->addReference('vehicle_' . $key, $vehicle);
        }
    $manager->flush();
    }
}
