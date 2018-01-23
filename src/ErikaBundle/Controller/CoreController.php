<?php

namespace ErikaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{
    public function indexAction()
    {
        return $this->render('ErikaBundle:Default:index.html.twig', array('name' => "Core Index"));
    }

    public function searchMovieAction($movie_id)
    {
        $service = $this->get('erika.producao');
        $movie = $service->getMovie($movie_id);
        dump($movie);
        return $this->render('ErikaBundle:Default:index.html.twig', array('name' => "OI"));
    }

}
