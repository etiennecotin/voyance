<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CartePrediction
 *
 * @ORM\Table(name="carte_prediction")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CartePredictionRepository")
 */
class CartePrediction
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

