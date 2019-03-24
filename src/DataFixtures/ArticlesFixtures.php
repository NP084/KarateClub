<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Comment;
use App\Entity\User;
use App\Entity\Adress;
use App\Entity\Phone;



class ArticlesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');

        // créer 3 catégories fakées
        for ($i=1; $i<=3; $i++){
            $category = new Category();
            $category ->setTitle($faker->sentence())
                      ->setDescription($faker->paragraph());
            $manager -> persist($category);

            //créer entre 6 et 10 Articles
            for ($j=1; $j<=mt_rand(4,6);$j++){
                $article=new Article();

                $content = '<p>' . join($faker->paragraphs(5), '</p><p>') . '</p>';

                $article->setTitle($faker->sentence())
                        -> setContent($content)
                        -> setImageName($faker->imageUrl())
                        -> setCreatedAt($faker->dateTimeBetween('-6 months'))
                        -> setCategory($category);

                $manager-> persist($article);
            }
        }
        $manager->flush();
    }
}




/**
// entre 1 et 4 commentaires sur cet article
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
*/
