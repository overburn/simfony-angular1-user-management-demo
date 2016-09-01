<?php
  namespace AppBundle\Entity;

  use Doctrine\ORM\Mapping as ORM;

  /**
   * @ORM\Entity
   * @ORM\Table(name="users")
   */
   class User
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
      protected $first_name;

      /**
       * @ORM\Column(type="string", length=255)
       */
      protected $last_name;

      /**
       * @ORM\Column(type="string", length=255)
       */
      protected $email;

      /**
       * @ORM\Column(type="string", length=255)
       */
      protected $photo;

      /**
       * @ORM\Column(type="string", columnDefinition="ENUM('F', 'M')")
       */
      protected $gender;

      /**
       * @Orm\OneToOne(targetEntity="User")
       * @Orm\JoinColumn(name="supervisor", referencedColumnName="id")
       */
      protected $supervisor;

      /**
       * @Orm\ManyToMany(targetEntity="Duty")
       * @Orm\JoinTable(  name="users_duties",
       *              joinColumns={@Orm\JoinColumn(name="user_id", referencedColumnName="id")},
       *              inverseJoinColumns={@Orm\JoinColumn(name="group_id", referencedColumnName="id")}
       *          )
       */

      /**
       * @ORM\Column(type="datetime")
       */
      protected $last_login;

      /**
       * @ORM\Column(type="datetime")
       */
      protected $created_at;

      /**
       * @ORM\Column(type="datetime")
       */
      protected $modified_at;

      /**
       * @ORM\Column(type="datetime")
       */
      protected $deleted_at;

      public function __construct() {
        $this->duties = new \Doctrine\Common\Collections\ArrayCollection();
      }
   }
?>
