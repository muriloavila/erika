<?php 

	namespace ErikaBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Request;

	/**
	* 
	*/
	class RobotController extends Controller
	{
		
		public function indexAction()
		{
			return $this->render('ErikaBundle:Default:index.html.twig', array('name' => "Robot Index"));
		}

		public function searchMovieAction($movie_name)
		{
			return $this->render('ErikaBundle:Default:index.html.twig', array('name' => "Search for: " . $movie_name));
		}
	}

?>