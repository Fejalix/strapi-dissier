<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 10; $i++){
            $post = new Post();
            $post->setTitle('Titre 1' . $i);
            $post ->setContent('Lorem ipsum' . $i);
            $post ->setSubtitle('Lorem ipsum' . $i);
            $post->setCreatedAt(new \DateTime());
            $post ->setImage('null');;
            $manager->persist($post);
        }
        $manager->flush();
    }
}
