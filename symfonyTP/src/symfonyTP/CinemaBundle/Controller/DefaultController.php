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
     * @Route("/films")
     */
    public function listAction()
    {
        $films = $this->getDoctrine()->getRepository('symfonyTPCinemaBundle:Film')->findAll();
        return $this->render('symfonyTPCinemaBundle:Film:list.html.twig');
    }

    /**
     * @Route("/film/{id}", requirements={"id": "\d+"})
     */
    public function showAction($id)
    {
        return $this->render('symfonyTPCinemaBundle:Film:show.html.twig');
    }
}