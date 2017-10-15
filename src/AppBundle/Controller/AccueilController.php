<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class AccueilController extends Controller
{

    /**
     * @Route("/", name="accueilpage")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need

//        $user = $this->getUser();

        return $this->render('AppBundle:Default:index.html.twig', [
            'name' => 'etienne',
        ]);
    }

    /**
     * @Route("/prediction", name="predictionpage")
     */

    public function predictionAction()
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Prediction:index.html.twig', [
            'name' => 'etienne',
        ]);
    }

    /**
     * @Route("/horoscope", name="horoscopepage")
     */
    public function horoscopeAction()
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Horoscope:index.html.twig', [
            'name' => 'etienne',
        ]);
    }
}
