<?php

namespace ErikaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ErikaBundle:Default:index.html.twig', array('return' => "oi"));
    }
}
