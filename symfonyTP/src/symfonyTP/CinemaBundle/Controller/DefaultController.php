<?php

namespace symfonyTP\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('symfonyTPCinemaBundle:Default:index.html.twig');
    }

    /**
     * @Route("/film")
     */
    public function listAction()
    {
        return $this->render('symfonyTPCinemaBundle:film:list.html.twig');
    }

    /**
     * @Route("/film/{id}", requirements={"id": "\d+"})
     */
    public function showAction($id)
    {
        return $this->render('symfonyTPCinemaBundle:film:show.html.twig');
    }
}