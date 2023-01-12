<?php

namespace App\DataFixtures;

use App\Entity\Vehicle;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class VehicleFixtures extends Fixture implements DependentFixtureInterface
{

    const VEHICLES = [
        [
            'mileage' => "20000",
            'fuel' => "Super",
            'category' => "Sport",
            'generalCondition' => "Collector",
            'transmission' => "Sequential",
            'nbPlace' => '3',
            'availability' => 'true',
            'location' => 'Minnesota',
            'consumption' => '100',
            'emissions' => '250',
            'gps' => 'true',
            'airConditioning' => 'false',
            'title' => 'Ford Torino',
            'license' => 'B',
            'picture' => '4-Ford-Gran-torino-Starsky-Hutch.jpg',
            'film' => '0',
            'quote' => 'I think I\m going to have to redo the whole look. I\ve become too predictable. Starsky',
            'description' => "The Ford Torino is a classic muscle car that will make you feel like you're in a 70s cop show, chasing down criminals on the streets. With its bold design, it's sure to turn heads as you cruise around town. And with its powerful V8 engine, it's got enough muscle to outrun just about anyone, except maybe the cops."
        ],
        [
            'mileage' => "1000000",
            'fuel' => "Super",
            'category' => "Family car",
            'generalCondition' => "Collector",
            'transmission' => "Automatic",
            'nbPlace' => '6',
            'availability' => 'true',
            'location' => 'New York',
            'consumption' => '200 ',
            'emissions' => '250',
            'gps' => 'true',
            'airConditioning' => 'False',
            'title' => 'The A-Team Van',
            'license' => 'B',
            'picture' => 'agenceTousRisque.jpeg',
            'film' => '1',
            'quote' => 'We are here to save the world, not to tell it how it should be saved. Hannibal',
            'description' => "The A-Team van is the ultimate crime-fighting vehicle, equipped with everything you need to take down bad guys and make a quick getaway. It's got a bold black and red color scheme, complete with a custom 'A-Team' logo painted on the side."
        ],
        [
            'mileage' => "100000",
            'fuel' => "Jocker's blood",
            'category' => "Sport",
            'generalCondition' => "Strike out",
            'transmission' => "Manual",
            'nbPlace' => '1',
            'availability' => 'true',
            'location' => 'Batcave',
            'consumption' => '200',
            'emissions' => '950',
            'gps' => 'true',
            'airConditioning' => 'false',
            'title' => 'Batmobile from Batman forever',
            'license' => 'BatLicense',
            'picture' => 'batmobile-batman-forever-4905-2.jpg',
            'film' => '2',
            'quote' => 'I am the Dark Knight, I am Batman. The Batman',
            'description' => "The Batmobile is like a sports car with a superhero complex. It's got all the fancy gadgets, the sleek design, and the horsepower to outrun the police, but it's just dying to be seen flying through the streets of Gotham, with Batman and Robin in tow, pretending to be just an ordinary car."

        ],
        [
            'mileage' => "200",
            'fuel' => "Jocker's blood",
            'category' => "Sport",
            'generalCondition' => "Strike out",
            'transmission' => "Manual",
            'nbPlace' => '1',
            'availability' => 'true',
            'location' => 'Batcave',
            'consumption' => '200',
            'emissions' => '4500',
            'gps' => 'true',
            'airConditioning' => 'false',
            'title' => 'Batmobile form the Dark knight',
            'license' => 'BatLicense',
            'picture' => 'batmobilebale.jpeg',
            'film' => '3',
            'quote' => 'There is no respite, no forgiveness, no end. There is only hatred. And I am his master. The Joker',
            'description' => "The batmobile is a sleek, black vehicle that combines speed and stealth, making it the ultimate crime-fighting machine. It has all the bells and whistles you would expect from a superhero's ride, including bat-shaped headlights, bat-shaped tail fins, and even a bat-shaped steering wheel (because why not?)."
        ],
        [
            'mileage' => "55000",
            'fuel' => "Mix",
            'category' => "Senior",
            'generalCondition' => "Strike out",
            'transmission' => "Manual",
            'nbPlace' => '2',
            'availability' => 'true',
            'location' => 'Museum',
            'consumption' => '300',
            'emissions' => '100',
            'gps' => 'false',
            'airConditioning' => 'false',
            'title' => 'Herbie',
            'license' => 'B',
            'picture' => 'coccinelle.jpg',
            'film' => '1',
            'quote' => 'One thing I taught you is that everyone needs a little love." Herbie',
            'description' => "Herbie is a car with a personality as big as its chrome bumper. This VW Beetle is not your average vehicle. It has a mind of its own and a will to win, making it the ultimate underdog in any race."
        ],
        [
            'mileage' => "550000",
            'fuel' => "Nuclear",
            'category' => "Alien",
            'generalCondition' => "Strike out",
            'transmission' => "Autopilot",
            'nbPlace' => '4',
            'availability' => 'true',
            'location' => 'Cybertron',
            'consumption' => '3500000 ',
            'emissions' => '0',
            'gps' => 'true',
            'airConditioning' => 'false',
            'title' => 'Bumblebee',
            'license' => 'B',
            'picture' => 'bumblebleVoiture.jpeg',
            'film' => '5',
            'quote' => '',
            'description' => "Bumblebee is a Camaro that packs a punch, both in terms of looks and performance. This car is a true transformer, it goes from a regular looking Camaro to a fierce robot with the touch of a button."
        ],
        [
            'mileage' => "550000",
            'fuel' => "GPL",
            'category' => "Gost",
            'generalCondition' => "Dent",
            'transmission' => "Automatic ",
            'nbPlace' => '4',
            'availability' => 'false',
            'location' => 'Multivers',
            'consumption' => '35000 ',
            'emissions' => '350',
            'gps' => 'true',
            'airConditioning' => 'false',
            'title' => 'GostBusters',
            'license' => 'B',
            'picture' => 'voiture-gostbusters.jpg',
            'film' => '16',
            'quote' => '',
            'description' => "The Ghostbusters car, or Ecto-1, is the ultimate ghost-hunting machine. With its iconic roof-mounted siren, it's sure to get you noticed as you race to save the city from ectoplasmic threats."
        ],
        [
            'mileage' => "550000",
            'fuel' => "Diesel",
            'category' => "Spy",
            'generalCondition' => "Dent",
            'transmission' => "Manual",
            'nbPlace' => '2',
            'availability' => 'true',
            'location' => 'London',
            'consumption' => '3500',
            'emissions' => '350',
            'gps' => 'true',
            'airConditioning' => 'false',
            'title' => 'Aston Martin',
            'license' => 'B',
            'picture' => 'jamesBond.jpeg',
            'film' => '7',
            'quote' => '',
            'description' => "James Bond's Aston Martin is the ultimate spy car. It's got everything a secret agent could want: a sleek design, powerful engine, and more gadgets than Q Branch. All in all, this is a car that will make you feel like a true spy, just remember to bring your passport, in case you need to make a quick escape to exotic location."
        ],
        [
            'mileage' => "40000",
            'fuel' => "Diesel",
            'category' => "Sport",
            'generalCondition' => "Dent",
            'transmission' => "Manual",
            'nbPlace' => '2',
            'availability' => 'true',
            'location' => 'Los Angeles',
            'consumption' => '3500',
            'emissions' => '350',
            'gps' => 'true',
            'airConditioning' => 'false',
            'title' => 'KITT',
            'license' => 'B',
            'picture' => 'k2000.jpg',
            'film' => '8',
            'quote' => '',
            'description' => "KITT, from the classic 80s show Knight Rider, is the ultimate high-tech car. It has a habit of giving out sarcastic comebacks and making jokes, making your ride not only safe but also entertaining."
        ],
        [
            'mileage' => "100000",
            'fuel' => "Petrol ",
            'category' => "Custom",
            'generalCondition' => "Dent",
            'transmission' => "manual ",
            'nbPlace' => '2',
            'availability' => 'false',
            'location' => 'Wasteland',
            'consumption' => '3500 ',
            'emissions' => '350',
            'gps' => 'true',
            'airConditioning' => 'false',
            'title' => 'Mad Max Fury Road Car',
            'license' => 'None',
            'picture' => 'mad_max_voiture.webp',
            'film' => '9',
            'quote' => 'I am the one who flees both the living and the dead. Stalked by scavengers, haunted by those I couldn\t protect. I am the warrior who fights for the survival of the tribe. Furiosa',
            'description' => "The cars from Mad Max Fury Road are like rolling fortresses, decked out with spikes, armor, and enough fire-breathing exhaust pipes to make any dystopian warlord jealous. They are a wild and colorful bunch, each one more intimidating and dangerous than the last, and are sure to make a statement whether they are racing across the wasteland or causing chaos on the Fury Road."
        ],
        [
            'mileage' => "100000",
            'fuel' => "Petrol",
            'category' => "Custom",
            'generalCondition' => "Dent",
            'transmission' => "Manual ",
            'nbPlace' => '4',
            'availability' => 'true',
            'location' => 'Wasteland',
            'consumption' => '3500 ',
            'emissions' => '350',
            'gps' => 'true',
            'airConditioning' => 'false',
            'title' => 'Mad Max 2 car',
            'license' => 'None',
            'picture' => 'mad_max2.webp',
            'film' => '10',
            'quote' => '',
            'description' => "Mad Max's car, the 'Interceptor', is a post-apocalyptic road warrior's dream machine. It's got a variety of modifications such as reinforced roll cage, mounted machine guns, and front-mounted spikes, which will come in handy when you're trying to fend off marauders and warlords."
        ],
        [
            'mileage' => "158200",
            'fuel' => "Petrol ",
            'category' => "Detective Van",
            'generalCondition' => "Dent",
            'transmission' => "Manual ",
            'nbPlace' => '2',
            'availability' => 'false',
            'location' => 'Canyon',
            'consumption' => '3500',
            'emissions' => '350',
            'gps' => 'true',
            'airConditioning' => 'False',
            'title' => 'Mistery Machine',
            'license' => 'B',
            'picture' => 'MisteryMachine.jpeg',
            'film' => '11',
            'quote' => '',
            'description' => "The Mystery Machine, from the classic cartoon Scooby-Doo, is the ultimate mystery-solving vehicle. With a powerful engine, it can take you to any location, be it an old mansion, a spooky theme park, or even an abandoned mine, in search of ghosts, ghouls, and other supernatural phenomena."
        ],
        [
            'mileage' => "500",
            'fuel' => "Pedal",
            'category' => "Mistfit",
            'generalCondition' => "Bite",
            'transmission' => "Manual ",
            'nbPlace' => '3',
            'availability' => 'true',
            'location' => 'Toyland',
            'consumption' => '0',
            'emissions' => '0',
            'gps' => 'true',
            'airConditioning' => 'False',
            'title' => 'Noddy car',
            'license' => 'B',
            'picture' => 'Oui-oui.jpg',
            'film' => '12',
            'quote' => '',
            'description' => "Noddy's car is a small, whimsical vehicle that's perfect for exploring the magical world of Toyland. With its round shape, cheerful design and Noddy's face on the front, it's sure to put a smile on your face."
        ],
        [
            'mileage' => "10000",
            'fuel' => "Electic",
            'category' => "Hunter",
            'generalCondition' => "Excellent",
            'transmission' => "Manual",
            'nbPlace' => '4',
            'availability' => 'true',
            'location' => 'Pokemon League',
            'consumption' => '0',
            'emissions' => '0',
            'gps' => 'true',
            'airConditioning' => 'False',
            'title' => 'PikaCar',
            'license' => 'B',
            'picture' => 'pikachu.webp',
            'film' => '13',
            'quote' => '',
            'description' => "Pikachu's mobile is a car that's just as electric and energetic as the Pokémon himself. It's powered by Pikachu's electricity, so it never needs to be charged."
        ],
        [
            'mileage' => "52260",
            'fuel' => "Super",
            'category' => "Vintage",
            'generalCondition' => "Dent",
            'transmission' => "Manual",
            'nbPlace' => '1',
            'availability' => 'true',
            'location' => 'Batcave',
            'consumption' => '900 ',
            'emissions' => '450',
            'gps' => 'true',
            'airConditioning' => 'false',
            'title' => 'Batmobile first model',
            'license' => 'BatLicense',
            'picture' => 'premiereBatmobile.jpeg',
            'film' => '4',
            'quote' => '',
            'description' => "The Batmobile is like a sports car on steroids, but with more bat symbols. It's got everything: bat-shaped headlights, bat-shaped tail fins, bat-shaped cup holders (for those emergency bat-signal latte situations). It's also got an ejector seat, in case Batman needs to make a quick bat-escape. And let's not forget the bat-computer, which is basically just like a regular computer, but with more batman emojis."
        ],
        [
            'mileage' => "58202665",
            'fuel' => "Super",
            'category' => "Vintage",
            'generalCondition' => "Dent",
            'transmission' => "Temporel ",
            'nbPlace' => '2',
            'availability' => 'true',
            'location' => 'Back to the Future',
            'consumption' => '900',
            'emissions' => '45',
            'gps' => 'true',
            'airConditioning' => 'true',
            'title' => 'DeLorean DMC-12',
            'license' => 'Z',
            'picture' => 'retour vers le future.jpg',
            'film' => '14',
            'quote' => '',
            'description' => "The Delorean from Back to the Future is a time-traveling machine that's guaranteed to make you feel like a true time traveler. With its stainless-steel body, it's got more than enough 'flux' to take you on a journey through time, whether it's to the past or the future, as long as you have enough 'plutonium' and remember to set the time circuits correctly."
        ],
        [
            'mileage' => "253600",
            'fuel' => "Diesel",
            'category' => "Urban",
            'generalCondition' => "Dent",
            'transmission' => "Manual",
            'nbPlace' => '4',
            'availability' => 'true',
            'location' => 'Marseille suburb',
            'consumption' => '15',
            'emissions' => '30',
            'gps' => 'true',
            'airConditioning' => 'true',
            'title' => 'Taxi',
            'license' => 'Who cares, you are going to lose it anyway...',
            'picture' => 'taxi.jpeg',
            'film' => '15',
            'quote' => '',
            'description' => "The car from the Taxi movies, is a modified Checker cab that is built to handle the wildest of chases and craziest of stunts. It's got a bulletproof body, a powerful engine and a suspension system that can handle all the jumps, spins and donuts that taxi driver Jimmy Fallon can throw at it."
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
            $vehicle->setDescription($value['description']);
            $vehicle->setFilm($this->getReference('movie_' . $value['film']));
            $vehicle->setQuote($value['quote']);

            $manager->persist($vehicle);
            $this->addReference('vehicle_' . $key, $vehicle);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            MovieFixtures::class,
        ];
    }
}
