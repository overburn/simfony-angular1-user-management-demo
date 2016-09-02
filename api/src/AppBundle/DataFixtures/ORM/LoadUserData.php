<?php
  namespace AppBundle\DataFixtures\ORM;

  use Doctrine\Common\DataFixtures\FixtureInterface;
  use Doctrine\Common\Persistence\ObjectManager;
  use AppBundle\Entity\User;

  class LoadUserData implements FixtureInterface
  {
      public function load(ObjectManager $manager)
      {
          $user = new User();
          $user->setEmail('user@mail.com');
          $user->setPassword('pass');
          $user->setFirstName('Just');
          $user->setLastName('User');
          $user->setPhoto('placeholder_avatar.png');

          $supervisor = new User();
          $supervisor->setEmail('supervisor@mail.com');
          $supervisor->setPassword('spass');
          $supervisor->setFirstName('Just');
          $supervisor->setLastName('Supervisor');
          $supervisor->setPhoto('placeholder_avatar.png');

          $user->setSupervisor($supervisor);

          for($i = 0; $i < 10; $i++) {
            $randomUser = new User();
            $randomUser->setEmail('user'.$i.'@mail.com');
            $randomUser->setPassword('pass');
            $randomUser->setFirstName('User');
            $randomUser->setLastName($i);
            $randomUser->setPhoto('placeholder_avatar.png');
            $manager->persist($randomUser);
          }

          $manager->persist($user);
          $manager->persist($supervisor);
          $manager->flush();
      }
  }
