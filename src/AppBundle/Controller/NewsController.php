<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NewsController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:News:index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/news")
     */
    public function listAction()
    {
        return $this->render('AppBundle:News:list.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/news/show")
     */
    public function showAction()
    {
        return $this->render('AppBundle:News:show.html.twig', array(
            // ...
        ));
    }

}
