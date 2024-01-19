<?php

namespace App\DataFixtures;

use App\Entity\Quality;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class QualityFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 50; $i++) {

            $quality = new Quality();

            $quality->setPerfume($faker->numberBetween(1, 5));
            $quality->setTexture($faker->numberBetween(1, 5));
            $quality->setApplication($faker->numberBetween(1, 5));
            $quality->setPackagingAttractive($faker->numberBetween(1, 5));
            $quality->setPackagingConvenient($faker->numberBetween(1, 5));
            $quality->setEfficiency($faker->numberBetween(1, 5));
            $quality->setAllergy($faker->boolean(5));

            $this->addReference("quality_$i", $quality);
            $manager->persist($quality);
        }
        $manager->flush();
    }
}
