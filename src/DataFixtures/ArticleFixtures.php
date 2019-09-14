<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Article;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <=10; $i++){
            $article= new Article();
            $article->setTitle("Titre de l'article n°$i")
                    ->setContent("<p>Contenu de l'article n°$i</p>")
                    ->setImage("htttp://placehold.it/350*200")
                    ->setCreatedAt(new \DateTime()); //classe qui fait parti du name space global de php

            $manager->persist($article); // préparation à faire persister mon article = préparation à exister ds la bdd
        }

        $manager->flush(); // existe reelement dans ma BDD
    }
}
