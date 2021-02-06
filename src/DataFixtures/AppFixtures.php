<?php

namespace App\DataFixtures;

use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{

    private $password;
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->password = $encoder;
    }

    public function load(ObjectManager $manager)
    {

        // $product = new Product();
        // $manager->persist($product);
        // $use


        $manager->flush();
    }
}
