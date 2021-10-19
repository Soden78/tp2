<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Article;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)

    {
        $faker = Factory::create('fr-FR');
        for ($i = 1; $i <= 30; $i++) {
            $article = new Article();
            $libelleArtice = $faker->sentence();
            $description = $faker->paragraph(1);
            $image = $faker->imageUrl(1000, 350);

            $article->setLibelleArticle($libelleArtice)
                ->setImage($image)
                ->setDescription($description)
                ->setPrix(mt_rand(40, 200));


            // for ($j = 1; $j <= mt_rand(2, 5); $j++) {
            //     $image = new Image();
            //     $image->setUrl($faker->imageUrl())
            //         ->setCaption($faker->sentence())
            //         ->setAd($ad);

            //     $manager->persist($image);
            // }
            $manager->persist($article);
        }
        $manager->flush();
    }
}
