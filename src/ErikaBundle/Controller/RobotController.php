<?php 
	
	namespace ErikaBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Lsw\ApiCallerBundle\Call\HttpGetJson;

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
            $parameters = array(
                "api_key"   => "c3d594f81aba4df6403f9f5441d639e0",
                "language"  => "pt-BR",
                "query"     => $movie_name
            );

            $mcurl = $this->get('erika.mcurl');
            $mcurl->setBase_uri("https://api.themoviedb.org/3/");

            $retorno = $mcurl->getJsonToObject('search/movie', $parameters);

            $teste = $retorno->results[0];

            $service = $this->get('erika.producao');
            $oi = $service->setNewMovie($teste);

            dump($oi);
            return $this->render('ErikaBundle:Default:index.html.twig', array('name' => "OI"));
            // return $this->render('ErikaBundle:Default:search.html.twig', array('movies' => $resposta['results'], 'busca' => $movie_name));
		}
	}

?>