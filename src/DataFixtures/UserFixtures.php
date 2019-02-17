<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use App\Entity\Phone;
use App\Entity\Article;
use App\Entity\Category;
use App\Entity\CityUser;
use App\Entity\Comment;
use App\Entity\User;
use App\Entity\Adress;
use App\Entity\Country;
Use App\Entity\City;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');

        $country = new Country();
        $country->setCountryName("France");
        $manager->persist($country);

        $city = new City();

        // créer 5 utilisateurs fakés
        for ($k=1; $k<=5; $k++){

            $user = new User();

            $userAdress = new Adress();
            $userAdress->setType("test")
                       ->setNum("123")
                       ->setStreetName("avenue du test")
                       ->setPostBox("B12")
                       ->addUser($user);
            $manager->persist($userAdress);

            $phoneType='Domicile';
            $userPhone=new Phone();
            $userPhone->setType($phoneType)
                      ->setNum("123456")
                      ->addUser($user);
            $manager->persist($userPhone);




            $city->setCityName("Mons")
                 ->setZip("3000")
                 ->addAdress($userAdress)
                 ->setCountry($country);
            $manager->persist($city);

            $user->setEmail($faker->email)
                 ->setUsername($faker->userName)
                 ->setPassword("testtest")
                 ->setName("Pqt")
                 ->setFirstname("Nico")
                 ->setBirthday($faker->dateTimeBetween('-6 years'))
                 ->setCreatedUser($faker->dateTimeBetween('-6 months'))
                 ->setBelt("noir")
                 ->setRole("Membre")
                 ->setCreatedMember($faker->dateTimeBetween('-3 months'));
            $manager-> persist($user);

            // créer 3 catégories fakées
            for ($i=1; $i<=3; $i++){
                $category = new Category();
                $category ->setTitle($faker->sentence())
                          ->setDescription($faker->paragraph());
                $manager -> persist($category);

                //créer 1 Article
                    $article=new Article();

                    $content = '<p>' . join($faker->paragraphs(5), '</p><p>') . '</p>';
                    $article->setTitle($faker->sentence())
                            -> setContent($content)
                            -> setImage($faker->imageUrl())
                            -> setCreatedAt($faker->dateTimeBetween('-6 months'))
                            -> setCategory($category);
                    $manager-> persist($article);

                    // entre 1 et 4 commentaires sur cet aric
                    $content = '<p>' . join($faker->paragraphs(2), '</p><p>') . '</p>';
                    $now = new \DateTime();
                    $interval = $now->diff($article->getCreatedAt());
                    $days = $interval->days;
                    $minimum = '-' . $days . ' days';

                    for ($k = 1; $k<=mt_rand(1,4); $k++){
                        $comment=new Comment();
                        $comment-> setContent($content)
                                -> setCreatedAt($faker->dateTimeBetween($minimum))
                                -> setArticle($article)
                                -> setUser($user);
                        $manager-> persist($comment);
                    }
                }
            $manager->flush();
        }
    }
}
