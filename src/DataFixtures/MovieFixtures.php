<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    private const MOVIES = [
        [
            'title' => "Starsky and Hutch",
            'year' => "1975",
        ],
        [
            'title' => "The A-Team",
            'year' => "1983",
        ],
        [
            'title' => "Batman: The Dark Knight",
            'year' => "2008",
        ],
        [
            'title' => "Batman Forever",
            'year' => "1995",
        ],
        [
            'title' => "Batman",
            'year' => "1966",
        ],
        [
            'title' => "Transformers",
            'year' => "2007",
        ],
        [
            'title' => "The Love Bug",
            'year' => "1968",
        ],
        [
            'title' => "Goldfinder",
            'year' => "1964",
        ],
        [
            'title' => "K2000",
            'year' => "1982",
        ],
        [
            'title' => "Mad Max: Fury Road",
            'year' => "2015",
        ],
        [
            'title' => "Mad Max 2",
            'year' => "1985",
        ],
        [
            'title' => "Scooby-Doo",
            'year' => "2002",
        ],
        [
            'title' => "Noddy",
            'year' => "1949",
        ],
        [
            'title' => "Pokémon",
            'year' => "1998",
        ],
        [
            'title' => "Back to the Future",
            'year' => "1995",
        ],
        [
            'title' => "Taxi",
            'year' => "1998",
        ],
        [
            'title' => "Ghostbusters",
            'year' => "1984",
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::MOVIES as $key => $value) {
            $movie = new Movie();
            $movie->setTitle($value['title']);
            $movie->setYear($value['year']);
            $manager->persist($movie);
            $this->addReference('movie_' . $key, $movie);
        }
        $manager->flush();
    }
}
