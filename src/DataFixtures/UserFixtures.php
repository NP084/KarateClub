<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


use App\Entity\Phone;
use App\Entity\Article;
use App\Entity\Category;
use App\Entity\CityUser;
use App\Entity\Comment;
use App\Entity\User;
use App\Entity\Adress;
use App\Entity\Country;
use App\DataFixtures\AppFixtures;
Use App\Entity\City;

class UserFixtures extends Fixture
{
    /**
    Nécessaire pour utiliser encodePassword dans la fixture
    */
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    /**
    Fixtures
    */

    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');

        $country = new Country();
        $country->setCountryName("France");
        $manager->persist($country);

        $city = new City();

        // créer 25 utilisateurs fakés
        for ($k=1; $k<=25; $k++){

            $user = new User();

            $userAdress = new Adress();
            $userAdress->setType("Domicile")
                       ->setNum($faker->buildingNumber())
                       ->setStreetName($faker->streetName())
                       ->setPostBox($faker->randomDigitNotNull())
                       ->addUser($user);
            $manager->persist($userAdress);

            $phoneType='Domicile';
            $userPhone=new Phone();
            $userPhone->setType($phoneType)
                      ->setNum($faker->phoneNumber())
                      ->addUser($user);
            $manager->persist($userPhone);

            $city->setCityName($faker->city())
                 ->setZip($faker->postcode())
                 ->addAdress($userAdress)
                 ->setCountry($country);
            $manager->persist($city);

            $user->setPassword($this->passwordEncoder->encodePassword(
                $user,'testtest'));

            $user->setEmail($faker->email)
                 ->setUsername($faker->userName)
                 ->setName($faker->lastName())
                 ->setSex('Male')
                 ->setFirstname($faker->firstName())
                 ->setBirthday($faker->dateTimeBetween('-77 years', '-6years'))
                 ->setCreatedUser($faker->dateTimeBetween('-6 months'))
                 ->setBelt($faker->safeColorName());
            $manager-> persist($user);

            $manager->flush();
        }
    }
}
