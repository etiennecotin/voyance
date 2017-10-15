<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prediction
 *
 * @ORM\Table(name="prediction")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PredictionRepository")
 */
class Prediction
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var array
     *
     * @ORM\ManyToOne(targetEntity="User", fetch="EAGER")
     */
    private $user;

    /**
     * @var array
     *
     * @ORM\ManyToOne(targetEntity="User", fetch="EAGER")
     */
    private $carteA;

    /**
     * @var array
     *
     * @ORM\ManyToOne(targetEntity="User", fetch="EAGER")
     */
    private $carteB;

    /**
     * @var array
     *
     * @ORM\ManyToOne(targetEntity="User", fetch="EAGER")
     */
    private $carteC;

    /**
     * @var date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;


    public function __construct()
    {

    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

