<?php

namespace App\DataFixtures;

use App\Entity\Country;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CountryFixtures extends Fixture
{
    private const PAYS = [
       [
            'name' => 'Albania',
            'supermarket' => 22.45,
            'beautySalon' => 6.28,
            'pharmacy' => 13.17,
            'perfumery' => 30.61,
            'online' => 27.49,
        ],
        [
            'name' => 'Andorra',
            'supermarket' => 10.67,
            'beautySalon' => 18.35,
            'pharmacy' => 25.07,
            'perfumery' => 22.89,
            'online' => 23.01,
        ],
        [
            'name' => 'Armenia',
            'supermarket' => 30.03,
            'beautySalon' => 12.61,
            'pharmacy' => 27.07,
            'perfumery' => 3.44,
            'online' => 26.85,
        ],
        [
            'name' => 'Austria',
            'supermarket' => 15.01,
            'beautySalon' => 24.92,
            'pharmacy' => 8.93,
            'perfumery' => 33.14,
            'online' => 18.00,
        ],
        [
            'name' => 'Belgium',
            'supermarket' => 7.91,
            'beautySalon' => 15.80,
            'pharmacy' => 18.53,
            'perfumery' => 27.54,
            'online' => 30.21,
        ],
        [
            'name' => 'Bulgaria',
            'supermarket' => 14.44,
            'beautySalon' => 26.65,
            'pharmacy' => 25.94,
            'perfumery' => 2.23,
            'online' => 30.73,
        ],
        [
            'name' => 'Bosnia-and-Herzegovina',
            'supermarket' => 20.08,
            'beautySalon' => 14.14,
            'pharmacy' => 23.29,
            'perfumery' => 20.94,
            'online' => 21.55,
        ],
        [
            'name' => 'Belarus',
            'supermarket' => 14.02,
            'beautySalon' => 25.77,
            'pharmacy' => 24.92,
            'perfumery' => 8.91,
            'online' => 26.38,
        ],
        [
            'name' => 'Switzerland',
            'supermarket' => 26.71,
            'beautySalon' => 22.13,
            'pharmacy' => 13.29,
            'perfumery' => 19.23,
            'online' => 18.63,
        ],
        [
            'name' => 'Czech-Republic',
            'supermarket' => 16.54,
            'beautySalon' => 30.14,
            'pharmacy' => 16.12,
            'perfumery' => 17.90,
            'online' => 19.29,
        ],
        [
            'name' => 'Germany',
            'supermarket' => 18.78,
            'beautySalon' => 22.59,
            'pharmacy' => 19.03,
            'perfumery' => 21.86,
            'online' => 17.74,
        ],
        [
            'name' => 'Denmark',
            'supermarket' => 24.15,
            'beautySalon' => 22.07,
            'pharmacy' => 17.15,
            'perfumery' => 16.40,
            'online' => 20.22,
        ],
        [
            'name' => 'Estonia',
            'supermarket' => 20.69,
            'beautySalon' => 18.34,
            'pharmacy' => 20.75,
            'perfumery' => 21.88,
            'online' => 18.34,
        ],
        [
            'name' => 'Finland',
            'supermarket' => 27.82,
            'beautySalon' => 20.78,
            'pharmacy' => 7.49,
            'perfumery' => 26.24,
            'online' => 17.68,
        ],
        [
            'name' => 'United-Kingdom',
            'supermarket' => 30.73,
            'beautySalon' => 11.16,
            'pharmacy' => 20.05,
            'perfumery' => 16.76,
            'online' => 21.31,
        ],
        [
            'name' => 'Georgia',
            'supermarket' => 22.44,
            'beautySalon' => 31.03,
            'pharmacy' => 16.25,
            'perfumery' => 21.87,
            'online' => 8.41,
        ],
        [
            'name' => 'Greece',
            'supermarket' => 12.03,
            'beautySalon' => 30.29,
            'pharmacy' => 21.88,
            'perfumery' => 17.62,
            'online' => 18.18,
        ],
        [
            'name' => 'Croatia',
            'supermarket' => 16.20,
            'beautySalon' => 25.79,
            'pharmacy' => 24.22,
            'perfumery' => 20.89,
            'online' => 13.90,
        ],
        [
            'name' => 'Hungary',
            'supermarket' => 23.95,
            'beautySalon' => 25.82,
            'pharmacy' => 16.37,
            'perfumery' => 14.89,
            'online' => 18.97,
        ],
        [
            'name' => 'Ireland',
            'supermarket' => 15.62,
            'beautySalon' => 20.39,
            'pharmacy' => 16.69,
            'perfumery' => 27.77,
            'online' => 19.53,
        ],
        [
            'name' => 'Iceland',
            'supermarket' => 22.74,
            'beautySalon' => 20.72,
            'pharmacy' => 15.67,
            'perfumery' => 19.24,
            'online' => 21.63,
        ],
        [
            'name' => 'Liechtenstein',
            'supermarket' => 19.79,
            'beautySalon' => 17.97,
            'pharmacy' => 18.22,
            'perfumery' => 19.72,
            'online' => 24.30,
        ],
        [
            'name' => 'Lithuania',
            'supermarket' => 29.44,
            'beautySalon' => 14.15,
            'pharmacy' => 18.97,
            'perfumery' => 15.91,
            'online' => 21.53,
        ],
        [
            'name' => 'Luxembourg',
            'supermarket' => 19.08,
            'beautySalon' => 20.18,
            'pharmacy' => 20.58,
            'perfumery' => 19.07,
            'online' => 21.09,
        ],
        [
            'name' => 'Latvia',
            'supermarket' => 17.19,
            'beautySalon' => 29.31,
            'pharmacy' => 20.05,
            'perfumery' => 18.18,
            'online' => 15.2,
        ],
        [
            'name' => 'Moldova',
            'supermarket' => 13.89,
            'beautySalon' => 18.84,
            'pharmacy' => 22.32,
            'perfumery' => 25.23,
            'online' => 19.73,
        ],
        [
            'name' => 'Macedonia',
            'supermarket' => 22.12,
            'beautySalon' => 18.09,
            'pharmacy' => 25.18,
            'perfumery' => 21.05,
            'online' => 13.55,
        ],
        [
            'name' => 'Montenegro',
            'supermarket' => 15.00,
            'beautySalon' => 21.11,
            'pharmacy' => 19.18,
            'perfumery' => 23.11,
            'online' => 21.60,
        ],
        [
            'name' => 'Norway',
            'supermarket' => 22.71,
            'beautySalon' => 21.45,
            'pharmacy' => 23.21,
            'perfumery' => 19.22,
            'online' => 13.41,
        ],
        [
            'name' => 'Poland',
            'supermarket' => 19.05,
            'beautySalon' => 24.89,
            'pharmacy' => 18.80,
            'perfumery' => 16.79,
            'online' => 20.47,
        ],
        [
            'name' => 'Romania',
            'supermarket' => 19.31,
            'beautySalon' => 25.08,
            'pharmacy' => 21.21,
            'perfumery' => 18.18,
            'online' => 16.22,
        ],
        [
            'name' => 'Serbia',
            'supermarket' => 26.94,
            'beautySalon' => 18.67,
            'pharmacy' => 18.51,
            'perfumery' => 15.37,
            'online' => 20.51,
        ],
        [
            'name' => 'Slovakia',
            'supermarket' => 20.71,
            'beautySalon' => 20.21,
            'pharmacy' => 23.14,
            'perfumery' => 19.59,
            'online' => 16.34,
        ],
        [
            'name' => 'Slovenia',
            'supermarket' => 19.14,
            'beautySalon' => 18.15,
            'pharmacy' => 26.16,
            'perfumery' => 16.08,
            'online' => 20.46,
        ],
        [
            'name' => 'Sweden',
            'supermarket' => 19.57,
            'beautySalon' => 23.74,
            'pharmacy' => 21.84,
            'perfumery' => 17.97,
            'online' => 16.88,
        ],
        [
            'name' => 'Turkey',
            'supermarket' => 15.26,
            'beautySalon' => 22.23,
            'pharmacy' => 23.42,
            'perfumery' => 16.09,
            'online' => 23.00,
        ],
        [
            'name' => 'Ukraine',
            'supermarket' => 19.08,
            'beautySalon' => 16.77,
            'pharmacy' => 19.54,
            'perfumery' => 24.72,
            'online' => 20.88,
        ],
        [
            'name' => 'Kosovo',
            'supermarket' => 21.42,
            'beautySalon' => 18.36,
            'pharmacy' => 19.43,
            'perfumery' => 21.60,
            'online' => 19.20,
        ],
        [
            'name' => 'Netherlands',
            'supermarket' => 23.27,
            'beautySalon' => 15.31,
            'pharmacy' => 18.33,
            'perfumery' => 24.08,
            'online' => 19.01,
        ],
        [
            'name' => 'Spain',
            'supermarket' => 19.94,
            'beautySalon' => 24.18,
            'pharmacy' => 19.70,
            'perfumery' => 16.16,
            'online' => 20.01,
        ],
        [
            'name' => 'France',
            'supermarket' => 18.31,
            'beautySalon' => 22.88,
            'pharmacy' => 15.37,
            'perfumery' => 25.06,
            'online' => 18.38,
        ],
        [
            'name' => 'Portugal',
            'supermarket' => 20.01,
            'beautySalon' => 15.77,
            'pharmacy' => 21.16,
            'perfumery' => 24.56,
            'online' => 15.18,
        ],
        [
            'name' => 'Cyprus',
            'supermarket' => 16.27,
            'beautySalon' => 18.63,
            'pharmacy' => 20.19,
            'perfumery' => 21.63,
            'online' => 23.29,
        ],
        [
            'name' => 'Italy',
            'supermarket' => 22.45,
            'beautySalon' => 6.28,
            'pharmacy' => 13.17,
            'perfumery' => 30.61,
            'online' => 27.49,
        ],

    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::PAYS as $value) {
            $country = new Country();
            $country->setName($value['name']);
            $country->setSupermarket($value['supermarket']);
            $country->setBeautySalon($value['beautySalon']);
            $country->setPharmacy($value['pharmacy']);
            $country->setPerfumery($value['perfumery']);
            $country->setOnline($value['online']);
            $manager->persist($country);
            $this->addReference($value['name'], $country);
        }
        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            ProductFixtures::class,
        ];
    }
}
