<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @var string
     *
     * @ORM\Column(type="string", length=100, nullable = true)
     */
    protected $userPrenom;


    /**
     *
     * @var string
     *
     * @ORM\Column(type="string", length=70, nullable = true)
     */
    protected $userNom;


    /**
     *
     * @var date
     *
     * @ORM\Column(type="date", length=70, nullable = true)
     */
    protected $userBirthday;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $userDateInscription;

    /**
     *
     * @var boolean
     *
     * @ORM\Column(type="boolean", length=70, nullable = true)
     */
    protected $userPrediction;

    public function __construct()
    {
        parent::__construct();
        // your own logic

        $this->userDateInscription(new \DateTime("now"));
    }

    /**
     * Set userPrenom
     *
     * @param string $userPrenom
     *
     * @return User
     */
    public function setUserPrenom($userPrenom)
    {
        $this->userPrenom = $userPrenom;

        return $this;
    }

    /**
     * Get userPrenom
     *
     * @return string
     */
    public function getUserPrenom()
    {
        return $this->userPrenom;
    }

    /**
     * Set userNom
     *
     * @param string $userNom
     *
     * @return User
     */
    public function setUserNom($userNom)
    {
        $this->userNom = $userNom;

        return $this;
    }

    /**
     * Get userNom
     *
     * @return string
     */
    public function getUserNom()
    {
        return $this->userNom;
    }

    /**
     * Set userBirthday
     *
     * @param \DateTime $userBirthday
     *
     * @return User
     */
    public function setUserBirthday($userBirthday)
    {
        $this->userBirthday = $userBirthday;

        return $this;
    }

    /**
     * Get userBirthday
     *
     * @return \DateTime
     */
    public function getUserBirthday()
    {
        return $this->userBirthday;
    }

    /**
     * Set userDateInscription
     *
     * @param \DateTime $userDateInscription
     *
     * @return User
     */
    public function setUserDateInscription($userDateInscription)
    {
        $this->userDateInscription = $userDateInscription;

        return $this;
    }

    /**
     * Get userDateInscription
     *
     * @return \DateTime
     */
    public function getUserDateInscription()
    {
        return $this->userDateInscription;
    }

    /**
     * Set userPrediction
     *
     * @param boolean $userPrediction
     *
     * @return User
     */
    public function setUserPrediction($userPrediction)
    {
        $this->userPrediction = $userPrediction;

        return $this;
    }

    /**
     * Get userPrediction
     *
     * @return boolean
     */
    public function getUserPrediction()
    {
        return $this->userPrediction;
    }
}
