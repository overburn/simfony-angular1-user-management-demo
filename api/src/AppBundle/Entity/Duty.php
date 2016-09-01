<?php
  namespace AppBundle\Entity;

  use Doctrine\ORM\Mapping as ORM;

  /**
   * @ORM\Entity
   * @ORM\Table(name="duties")
   */
   class Duty
   {
      /**
       * @ORM\Id
       * @ORM\Column(type="integer")
       * @ORM\GeneratedValue(strategy="AUTO")
       */
      protected $id;

      /**
       * @ORM\Column(type="string", length=255)
       */
      protected $name;

      /**
       * @ORM\Column(name="created_at", type="datetime")
       */
      protected $created_at;

      /**
       * @ORM\Column(name="modified_at", type="datetime")
       */
      protected $modified_at;
   }
?>
