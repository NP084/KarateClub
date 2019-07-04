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
use App\Entity\UserConnected;
use App\Entity\Adress;
use App\Entity\Country;
use App\DataFixtures\AppFixtures;
Use App\Entity\City;

class UserFixtures extends Fixture
{
    /**
     * Nécessaire pour utiliser encodePassword dans la fixture
     */
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    /**
     * Fixtures
     */

    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');

        $country = new Country();
        $country->setCountryName("France");
        $manager->persist($country);

        $city = new City();

        // créer des utilisateurs fakés
        for ($k = 1; $k <= 10; $k++) {

            $userC = new UserConnected();
            //$user = $userC->getUser();
            $user = new User();
            $user
                ->setName($faker->lastName())
                ->setFirstname($faker->firstName())
                ->setBirthdate($faker->dateTimeBetween('-77 years', '-6years'))
                ->setSex('Male')
                ->setBelt($faker->safeColorName())
                ->setReceiptDate($faker->dateTimeBetween('-77 years', '-6years'))
                ->setOwnerUser($userC)
                ->setBirthdate($faker->dateTimeBetween('-77 years', '-6years'));
            $manager->persist($user);

            $userAdress = new Adress();
            $userAdress->setType("Domicile")
                ->setNum($faker->buildingNumber())
                ->setStreetName($faker->streetName())
                ->setPostBox($faker->randomDigitNotNull())
                ->addUser($user);
            $manager->persist($userAdress);

            $phoneType = 'Domicile';
            $userPhone = new Phone();
            $userPhone->setType($phoneType)
                ->setNum($faker->phoneNumber())
                ->addUser($user);
            $manager->persist($userPhone);

            $city->setCityName($faker->city())
                ->setZip($faker->postcode())
                ->addAdress($userAdress)
                ->setCountry($country);
            $manager->persist($city);

            $userC->setPassword($this->passwordEncoder->encodePassword($userC, 'testtest'))
                ->setEmail($faker->email)
             //   ->setCreatedUser($faker->dateTimeBetween('-6 months'))
                ->addUser($user)
                ->setUser($user);
            $manager->persist($userC);



            $childUser = new User();
            $childUser->setSex('Female')
                ->setName($faker->lastName())
                ->setFirstname($faker->firstName())
                ->setBelt($faker->safeColorName())
                ->setReceiptDate($faker->dateTimeBetween('-77 years', '-6years'))
                ->setBirthdate($faker->dateTimeBetween('-77 years', '-6years'));
            $userC->addUser($childUser);
            $manager->persist($childUser);

            $childUser = new User();
            $childUser->setSex('Male')
                ->setName($faker->lastName())
                ->setFirstname($faker->firstName())
                ->setBelt($faker->safeColorName())
                ->setReceiptDate($faker->dateTimeBetween('-77 years', '-6years'))
                ->setBirthdate($faker->dateTimeBetween('-77 years', '-6years'));
            $userC->addUser($childUser);
            $manager->persist($childUser);

            $manager->flush();
        }
        // création d'un admin
        $userC = new UserConnected();
        //$user = $userC->getUser();
        $user = new User();

        $userAdress = new Adress();
        $userAdress->setType("Domicile")
            ->setNum($faker->buildingNumber())
            ->setStreetName($faker->streetName())
            ->setPostBox($faker->randomDigitNotNull())
            ->addUser($user);
        $manager->persist($userAdress);

        $phoneType = 'Domicile';
        $userPhone = new Phone();
        $userPhone->setType($phoneType)
            ->setNum($faker->phoneNumber())
            ->addUser($user);
        $manager->persist($userPhone);

        $city->setCityName($faker->city())
            ->setZip($faker->postcode())
            ->addAdress($userAdress)
            ->setCountry($country);
        $manager->persist($city);

        $userC->setPassword($this->passwordEncoder->encodePassword($userC, 'testtest'))
            ->setEmail('admin@admin.com')
           // ->setCreatedUser($faker->dateTimeBetween('-6 months'))
            ->addUser($user)
            ->setUser($user);
        $manager->persist($userC);

        $user->setName($faker->lastName())
            ->setFirstname($faker->firstName())
            ->setBirthdate($faker->dateTimeBetween('-77 years', '-6years'))
            ->setSex('Male')
            ->setBelt($faker->safeColorName())
            ->setOwnerUser($userC)
            ->setBirthdate($faker->dateTimeBetween('-77 years', '-6years'));
        $manager->persist($user);


        $childUser = new User();
        $childUser->setSex('Female')
            ->setName($faker->lastName())
            ->setFirstname($faker->firstName())
            ->setBelt($faker->safeColorName())
            ->setReceiptDate($faker->dateTimeBetween('-77 years', '-6years'))
            ->setBirthdate($faker->dateTimeBetween('-77 years', '-6years'));
        $userC->addUser($childUser);
        $manager->persist($childUser);

        $childUser = new User();
        $childUser->setSex('Male')
            ->setName($faker->lastName())
            ->setFirstname($faker->firstName())
            ->setBelt($faker->safeColorName())
            ->setReceiptDate($faker->dateTimeBetween('-77 years', '-6years'))
            ->setBirthdate($faker->dateTimeBetween('-77 years', '-6years'));
        $userC->addUser($childUser);
        $manager->persist($childUser);

        $manager->flush();
    }
}
