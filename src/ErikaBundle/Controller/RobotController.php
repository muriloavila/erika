<?php 
	
	namespace ErikaBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
		//https://api.themoviedb.org/3/search/movie?include_adult=false&page=1&language=pt-BR&api_key=c3d594f81aba4df6403f9f5441d639e0&query=Get+Out
		{
			// $headers = array('Accept' => 'application/json');
			// $query = array('api_key' => $this->container->getParameter('api_key'), 'language' => 'pt-BR', 'query' => $movie_name);
			// $response = Unirest\Request::get($this->container->getParameter('ErikaBundle.url_base').'/search/movie', $headers, $query);

			$query = array(
				'language' 	=> 	'pt-BR',
				'api_key'	=>	'c3d594f81aba4df6403f9f5441d639e0',
				'query'		=>	$movie_name
			);

			$url = "https://api.themoviedb.org/3/search/movie?include_adult=false&page=1&language=pt-BR&api_key=c3d594f81aba4df6403f9f5441d639e0&query=Get+Out";

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$curl_response = curl_exec($ch);

			if ($curl_response === false) {
				$info = curl_getinfo($ch);
				curl_close($ch);
			}
			return $this->render('ErikaBundle:Default:index.html.twig', array('name' => $curl_response));
		}
	}

?>