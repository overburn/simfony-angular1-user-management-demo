<?php
  namespace AppBundle\DataFixtures\ORM;

  use Doctrine\Common\DataFixtures\FixtureInterface;
  use Doctrine\Common\Persistence\ObjectManager;
  use AppBundle\Entity\Duty;

  class LoadDutyData implements FixtureInterface
  {
      public function load(ObjectManager $manager)
      {
          for($i = 1; $i < 10; $i++) {
            $duty = new Duty();
            $duty->setName('duty'.$i);

            $manager->persist($duty);
          }

          $manager->flush();
      }
  }
