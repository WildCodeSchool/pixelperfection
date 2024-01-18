<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Product;



class ProductFixtures extends Fixture
{
    private const PRODUCT = [
        [
            'productName' => 'Machine Professor',
            'countries' => 'Albania',
        ],
        [
            'productName' => 'Serve Image',
            'countries' => 'Albania',
        ],
        [
            'productName' => 'Democrat You',
            'countries' => 'Albania',
        ],
        [
            'productName' => 'Wear Local',
            'countries' => 'Albania',
        ],
        [
            'productName' => 'Chair Least',
            'countries' => 'Albania',
        ],
        [
            'productName' => 'Measure Change',
            'countries' => 'Andorra',
        ],
        [
            'productName' => 'Animal Send',
            'countries' => 'Andorra',
        ],
        [
            'productName' => 'Long Scientist',
            'countries' => 'Andorra',
        ],
        [
            'productName' => 'Suddenly Even',
            'countries' => 'Andorra',
        ],
        [
            'productName' => 'Begin Them',
            'countries' => 'Andorra',
        ],
        [
            'productName' => 'Receive Much',
            'countries' => 'Armenia',
        ],
        [
            'productName' => 'Structure Policy',
            'countries' => 'Armenia',
        ],
        [
            'productName' => 'Opportunity School',
            'countries' => 'Armenia',
        ],
        [
            'productName' => 'Employee Player',
            'countries' => 'Armenia',
        ],
        [
            'productName' => 'Property Democrat',
            'countries' => 'Armenia',
        ],
        [
            'productName' => 'Everybody Live',
            'countries' => 'Austria',
        ],
        [
            'productName' => 'Into For',
            'countries' => 'Austria',
        ],
        [
            'productName' => 'Protect That',
            'countries' => 'Austria',
        ],
        [
            'productName' => 'From Firm',
            'countries' => 'Austria',
        ],
        [
            'productName' => 'Study Really',
            'countries' => 'Austria',
        ],
        [
            'productName' => 'Hand Quality',
            'countries' => 'Belgium',
        ],
        [
            'productName' => 'Type Which',
            'countries' => 'Belgium',
        ],
        [
            'productName' => 'Capital Wear',
            'countries' => 'Belgium',
        ],
        [
            'productName' => 'Red Southern',
            'countries' => 'Belgium',
        ],
        [
            'productName' => 'Professor We',
            'countries' => 'Belgium',
        ],
        [
            'productName' => 'Door Evening',
            'countries' => 'Bulgaria',
        ],
        [
            'productName' => 'Wait Ten',
            'countries' => 'Bulgaria',
        ],
        [
            'productName' => 'Ever Raise',
            'countries' => 'Bulgaria',
        ],
        [
            'productName' => 'Commercial Surface',
            'countries' => 'Bulgaria',
        ],
        [
            'productName' => 'Building Receive',
            'countries' => 'Bulgaria',
        ],
        [
            'productName' => 'Family Together',
            'countries' => 'Bosnia-and-Herzegovina',
        ],
        [
            'productName' => 'First Game',
            'countries' => 'Bosnia-and-Herzegovina',
        ],
        [
            'productName' => 'Former Factor',
            'countries' => 'Bosnia-and-Herzegovina',
        ],
        [
            'productName' => 'Both Its',
            'countries' => 'Bosnia-and-Herzegovina',
        ],
        [
            'productName' => 'Interesting Again',
            'countries' => 'Bosnia-and-Herzegovina',
        ],
        [
            'productName' => 'Computer New',
            'countries' => 'Belarus',
        ],
        [
            'productName' => 'When Hotel',
            'countries' => 'Belarus',
        ],
        [
            'productName' => 'One Push',
            'countries' => 'Belarus',
        ],
        [
            'productName' => 'Assume Guess',
            'countries' => 'Belarus',
        ],
        [
            'productName' => 'Personal System',
            'countries' => 'Belarus',
        ],
        [
            'productName' => 'Respond Ask',
            'countries' => 'Switzerland',
        ],
        [
            'productName' => 'Fund Present',
            'countries' => 'Switzerland',
        ],
        [
            'productName' => 'Reach Young',
            'countries' => 'Switzerland',
        ],
        [
            'productName' => 'Could Deep',
            'countries' => 'Switzerland',
        ],
        [
            'productName' => 'General High',
            'countries' => 'Switzerland',
        ],
        [
            'productName' => 'Me Table',
            'countries' => 'Czech-Republic',
        ],
        [
            'productName' => 'Science Indicate',
            'countries' => 'Czech-Republic',
        ],
        [
            'productName' => 'Name Way',
            'countries' => 'Czech-Republic',
        ],
        [
            'productName' => 'Minute Movie',
            'countries' => 'Czech-Republic',
        ],
        [
            'productName' => 'Which Actually',
            'countries' => 'Czech-Republic',
        ],
        [
            'productName' => 'Network True',
            'countries' => 'Germany',
        ],
        [
            'productName' => 'As Person',
            'countries' => 'Germany',
        ],
        [
            'productName' => 'Way Health',
            'countries' => 'Germany',
        ],
        [
            'productName' => 'Response Value',
            'countries' => 'Germany',
        ],
        [
            'productName' => 'We Doctor',
            'countries' => 'Germany',
        ],
        [
            'productName' => 'Party Job',
            'countries' => 'Denmark',
        ],
        [
            'productName' => 'Inside Tend',
            'countries' => 'Denmark',
        ],
        [
            'productName' => 'Finish Suddenly',
            'countries' => 'Denmark',
        ],
        [
            'productName' => 'Rise Study',
            'countries' => 'Denmark',
        ],
        [
            'productName' => 'Chance Trip',
            'countries' => 'Denmark',
        ],
        [
            'productName' => 'Key Travel',
            'countries' => 'Estonia',
        ],
        [
            'productName' => 'Show Strategy',
            'countries' => 'Estonia',
        ],
        [
            'productName' => 'Over Especially',
            'countries' => 'Estonia',
        ],
        [
            'productName' => 'Garden Country',
            'countries' => 'Estonia',
        ],
        [
            'productName' => 'Decision View',
            'countries' => 'Estonia',
        ],
        [
            'productName' => 'Water Type',
            'countries' => 'Finland',
        ],
        [
            'productName' => 'By Ask',
            'countries' => 'Finland',
        ],
        [
            'productName' => 'Position Late',
            'countries' => 'Finland',
        ],
        [
            'productName' => 'Matter Feel',
            'countries' => 'Finland',
        ],
        [
            'productName' => 'Almost Seem',
            'countries' => 'Finland',
        ],
        [
            'productName' => 'Time Final',
            'countries' => 'United-Kingdom',
        ],
        [
            'productName' => 'Expert Stock',
            'countries' => 'United-Kingdom',
        ],
        [
            'productName' => 'Magazine Thought',
            'countries' => 'United-Kingdom',
        ],
        [
            'productName' => 'Sure Focus',
            'countries' => 'United-Kingdom',
        ],
        [
            'productName' => 'Inside Behind',
            'countries' => 'United-Kingdom',
        ],
        [
            'productName' => 'Talk Mention',
            'countries' => 'Georgia',
        ],
        [
            'productName' => 'Community Development',
            'countries' => 'Georgia',
        ],
        [
            'productName' => 'Join Store',
            'countries' => 'Georgia',
        ],
        [
            'productName' => 'Explain Newspaper',
            'countries' => 'Georgia',
        ],
        [
            'productName' => 'Nation Speech',
            'countries' => 'Georgia',
        ],
        [
            'productName' => 'Seven Meeting',
            'countries' => 'Greece',
        ],
        [
            'productName' => 'Whose Though',
            'countries' => 'Greece',
        ],
        [
            'productName' => 'Long Behind',
            'countries' => 'Greece',
        ],
        [
            'productName' => 'Student Choose',
            'countries' => 'Greece',
        ],
        [
            'productName' => 'Condition No',
            'countries' => 'Greece',
        ],
        [
            'productName' => 'Explain Show',
            'countries' => 'Croatia',
        ],
        [
            'productName' => 'Story Into',
            'countries' => 'Croatia',
        ],
        [
            'productName' => 'Treatment Full',
            'countries' => 'Croatia',
        ],
        [
            'productName' => 'Top Score',
            'countries' => 'Croatia',
        ],
        [
            'productName' => 'Case Soon',
            'countries' => 'Croatia',
        ],
        [
            'productName' => 'East Write',
            'countries' => 'Hungary',
        ],
        [
            'productName' => 'Attorney Style',
            'countries' => 'Hungary',
        ],
        [
            'productName' => 'Organization Model',
            'countries' => 'Hungary',
        ],
        [
            'productName' => 'Start Hard',
            'countries' => 'Hungary',
        ],
        [
            'productName' => 'Force Nothing',
            'countries' => 'Hungary',
        ],
        [
            'productName' => 'Policy Language',
            'countries' => 'Ireland',
        ],
        [
            'productName' => 'Here Indicate',
            'countries' => 'Ireland',
        ],
        [
            'productName' => 'Along Culture',
            'countries' => 'Ireland',
        ],
        [
            'productName' => 'Authority All',
            'countries' => 'Ireland',
        ],
        [
            'productName' => 'Stock Common',
            'countries' => 'Ireland',
        ],
        [
            'productName' => 'Letter Political',
            'countries' => 'Iceland',
        ],
        [
            'productName' => 'Very Grow',
            'countries' => 'Iceland',
        ],
        [
            'productName' => 'Attention Allow',
            'countries' => 'Iceland',
        ],
        [
            'productName' => 'Town Rock',
            'countries' => 'Iceland',
        ],
        [
            'productName' => 'Ago Beat',
            'countries' => 'Iceland',
        ],
        [
            'productName' => 'Chair Least',
            'countries' => 'Liechtenstein',
        ],
        [
            'productName' => 'Wear Local',
            'countries' => 'Liechtenstein',
        ],
        [
            'productName' => 'Democrat You',
            'countries' => 'Liechtenstein',
        ],
        [
            'productName' => 'Serve Image',
            'countries' => 'Liechtenstein',
        ],
        [
            'productName' => 'Machine Professor',
            'countries' => 'Liechtenstein',
        ],
        [
            'productName' => 'Home Nation',
            'countries' => 'Lithuania',
        ],
        [
            'productName' => 'Fight Discuss',
            'countries' => 'Lithuania',
        ],
        [
            'productName' => 'Until Activity',
            'countries' => 'Lithuania',
        ],
        [
            'productName' => 'Respond Indicate',
            'countries' => 'Lithuania',
        ],
        [
            'productName' => 'Different Beat',
            'countries' => 'Lithuania',
        ],
        [
            'productName' => 'Serve Image',
            'countries' => 'Luxembourg',
        ],
        [
            'productName' => 'Machine Professor',
            'countries' => 'Luxembourg',
        ],
        [
            'productName' => 'Democrat You',
            'countries' => 'Luxembourg',
        ],
        [
            'productName' => 'Wear Local',
            'countries' => 'Luxembourg',
        ],
        [
            'productName' => 'Coach Cover',
            'countries' => 'Luxembourg',
        ],
        [
            'productName' => 'Series Too',
            'countries' => 'Latvia',
        ],
        [
            'productName' => 'Risk Evening',
            'countries' => 'Latvia',
        ],
        [
            'productName' => 'Pass Free',
            'countries' => 'Latvia',
        ],
        [
            'productName' => 'Song Growth',
            'countries' => 'Latvia',
        ],
        [
            'productName' => 'Coach Cover',
            'countries' => 'Latvia',
        ],
        [
            'productName' => 'Different Beat',
            'countries' => 'Moldova',
        ],
        [
            'productName' => 'Respond Indicate',
            'countries' => 'Moldova',
        ],
        [
            'productName' => 'Until Activity',
            'countries' => 'Moldova',
        ],
        [
            'productName' => 'Fight Discuss',
            'countries' => 'Moldova',
        ],
        [
            'productName' => 'Home Nation',
            'countries' => 'Moldova',
        ],
        [
            'productName' => 'Song Growth',
            'countries' => 'Macedonia',
        ],
        [
            'productName' => 'Pass Free',
            'countries' => 'Macedonia',
        ],
        [
            'productName' => 'Risk Evening',
            'countries' => 'Macedonia',
        ],
        [
            'productName' => 'Series Too',
            'countries' => 'Macedonia',
        ],
        [
            'productName' => 'Coach Cover',
            'countries' => 'Macedonia',
        ],
        [
            'productName' => 'Stock Common',
            'countries' => 'Montenegro',
        ],
        [
            'productName' => 'Authority All',
            'countries' => 'Montenegro',
        ],
        [
            'productName' => 'Along Culture',
            'countries' => 'Montenegro',
        ],
        [
            'productName' => 'Here Indicate',
            'countries' => 'Montenegro',
        ],
        [
            'productName' => 'Policy Language',
            'countries' => 'Montenegro',
        ],
        [
            'productName' => 'Force Nothing',
            'countries' => 'Norway',
        ],
        [
            'productName' => 'Start Hard',
            'countries' => 'Norway',
        ],
        [
            'productName' => 'Organization Model',
            'countries' => 'Norway',
        ],
        [
            'productName' => 'Attorney Style',
            'countries' => 'Norway',
        ],
        [
            'productName' => 'East Write',
            'countries' => 'Norway',
        ],
        [
            'productName' => 'Nation Speech',
            'countries' => 'Poland',
        ],
        [
            'productName' => 'Explain Newspaper',
            'countries' => 'Poland',
        ],
        [
            'productName' => 'Join Store',
            'countries' => 'Poland',
        ],
        [
            'productName' => 'Community Development',
            'countries' => 'Poland',
        ],
        [
            'productName' => 'Talk Mention',
            'countries' => 'Poland',
        ],
        [
            'productName' => 'General High',
            'countries' => 'Romania',
        ],
        [
            'productName' => 'Could Deep',
            'countries' => 'Romania',
        ],
        [
            'productName' => 'Reach Young',
            'countries' => 'Romania',
        ],
        [
            'productName' => 'Fund Present',
            'countries' => 'Romania',
        ],
        [
            'productName' => 'We Doctor',
            'countries' => 'Romania',
        ],
        [
            'productName' => 'Respond Ask',
            'countries' => 'Serbia',
        ],
        [
            'productName' => 'Response Value',
            'countries' => 'Serbia',
        ],
        [
            'productName' => 'Way Health',
            'countries' => 'Serbia',
        ],
        [
            'productName' => 'As Person',
            'countries' => 'Serbia',
        ],
        [
            'productName' => 'Network True',
            'countries' => 'Serbia',
        ],
        [
            'productName' => 'Personal System',
            'countries' => 'Slovakia',
        ],
        [
            'productName' => 'Assume Guess',
            'countries' => 'Slovakia',
        ],
        [
            'productName' => 'One Push',
            'countries' => 'Slovakia',
        ],
        [
            'productName' => 'When Hotel',
            'countries' => 'Slovakia',
        ],
        [
            'productName' => 'Computer New',
            'countries' => 'Slovakia',
        ],
        [
            'productName' => 'Against Thank',
            'countries' => 'Slovenia',
        ],
        [
            'productName' => 'Meet Bit',
            'countries' => 'Slovenia',
        ],
        [
            'productName' => 'Image Road',
            'countries' => 'Slovenia',
        ],
        [
            'productName' => 'Safe During',
            'countries' => 'Slovenia',
        ],
        [
            'productName' => 'Ground Movement',
            'countries' => 'Slovenia',
        ],
        [
            'productName' => 'Decision View',
            'countries' => 'Sweden',
        ],
        [
            'productName' => 'Garden Country',
            'countries' => 'Sweden',
        ],
        [
            'productName' => 'Over Especially',
            'countries' => 'Sweden',
        ],
        [
            'productName' => 'Show Strategy',
            'countries' => 'Sweden',
        ],
        [
            'productName' => 'Key Travel',
            'countries' => 'Sweden',
        ],
        [
            'productName' => 'Chance Trip',
            'countries' => 'Turkey',
        ],
        [
            'productName' => 'Rise Study',
            'countries' => 'Turkey',
        ],
        [
            'productName' => 'Finish Suddenly',
            'countries' => 'Turkey',
        ],
        [
            'productName' => 'Inside Tend',
            'countries' => 'Turkey',
        ],
        [
            'productName' => 'Party Job',
            'countries' => 'Turkey',
        ],
        [
            'productName' => 'Which Actually',
            'countries' => 'Ukraine',
        ],
        [
            'productName' => 'Minute Movie',
            'countries' => 'Ukraine',
        ],
        [
            'productName' => 'Name Way',
            'countries' => 'Ukraine',
        ],
        [
            'productName' => 'Science Indicate',
            'countries' => 'Ukraine',
        ],
        [
            'productName' => 'Me Pimpoye',
            'countries' => 'Ukraine',
        ],
        [
            'productName' => 'Almost Seem',
            'countries' => 'Kosovo',
        ],
        [
            'productName' => 'Matter Feel',
            'countries' => 'Kosovo',
        ],
        [
            'productName' => 'Position Late',
            'countries' => 'Kosovo',
        ],
        [
            'productName' => 'By Ask',
            'countries' => 'Kosovo',
        ],
        [
            'productName' => 'Water Type',
            'countries' => 'Kosovo',
        ],
        [
            'productName' => 'Ago Beat',
            'countries' => 'Netherlands',
        ],
        [
            'productName' => 'Town Rock',
            'countries' => 'Netherlands',
        ],
        [
            'productName' => 'Attention Allow',
            'countries' => 'Netherlands',
        ],
        [
            'productName' => 'Very Grow',
            'countries' => 'Netherlands',
        ],
        [
            'productName' => 'Letter Political',
            'countries' => 'Netherlands',
        ],
        [
            'productName' => 'Property Democrat',
            'countries' => 'Spain',
        ],
        [
            'productName' => 'Employee Player',
            'countries' => 'Spain',
        ],
        [
            'productName' => 'Opportunity School',
            'countries' => 'Spain',
        ],
        [
            'productName' => 'Structure Policy',
            'countries' => 'Spain',
        ],
        [
            'productName' => 'Receive Much',
            'countries' => 'Spain',
        ],
        [
            'productName' => 'Ground Movement',
            'countries' => 'France',
        ],
        [
            'productName' => 'Safe During',
            'countries' => 'France',
        ],
        [
            'productName' => 'Image Road',
            'countries' => 'France',
        ],
        [
            'productName' => 'Meet Bit',
            'countries' => 'France',
        ],
        [
            'productName' => 'Against Thank',
            'countries' => 'France',
        ],
        [
            'productName' => 'Yes Send',
            'countries' => 'Cyprus',
        ],
        [
            'productName' => 'Among Return',
            'countries' => 'Cyprus',
        ],
        [
            'productName' => 'Local This',
            'countries' => 'Cyprus',
        ],
        [
            'productName' => 'First Collection',
            'countries' => 'Cyprus',
        ],
        [
            'productName' => 'To Yeah',
            'countries' => 'Cyprus',
        ],
        [
            'productName' => 'Water Type',
            'countries' => 'Italy',
        ],
        [
            'productName' => 'Ago Beat',
            'countries' => 'Italy',
        ],
        [
            'productName' => 'Town Rock',
            'countries' => 'Italy',
        ],
        [
            'productName' => 'Attention Allow',
            'countries' => 'Italy',
        ],
        [
            'productName' => 'Very Grow',
            'countries' => 'Italy',
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::PRODUCT as $value) {
            $product = new Product();
            $product->setProductName($value['productName']);
            $product->addCountry($this->getReference($value['countries']));
            $manager->persist($product);
        }
        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            CountryFixtures::class,
        ];
    }
}
