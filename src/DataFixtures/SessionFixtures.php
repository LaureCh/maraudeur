<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Session;

class SessionFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     * @throws \Exception
     */
    public function load(ObjectManager $manager)
    {
        $session1 = new Session();
        $session1->setName('php #1');
        $session1->setEndDate(new \DateTime('2020-01-28'));
        $session1->setStartDate(new \DateTime('2019-05-15'));

        $manager->persist($session1);
        $manager->flush();
    }
}
