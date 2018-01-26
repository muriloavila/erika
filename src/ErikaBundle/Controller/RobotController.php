<?php 
	
	namespace ErikaBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\JsonResponse;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Security\Acl\Exception\Exception;

    /**
	* 
	*/
	class RobotController extends Controller
	{
		
		public function indexAction()
		{
			return $this->render('ErikaBundle:Default:index.html.twig', array('return' => "Robot Index"));
		}

		public function searchMovieAction($movie_name)
		{
            $parameters = array(
                "api_key"   => "c3d594f81aba4df6403f9f5441d639e0",
                "language"  => "pt-BR",
                "query"     => $movie_name
            );

            $mcurl = $this->get('erika.mcurl');
            $mcurl->setBase_uri("https://api.themoviedb.org/3/");

            $retorno = $mcurl->getJsonToObject('search/movie', $parameters);

            return $this->render('ErikaBundle:Default:search.html.twig', array('busca' => urldecode($movie_name), 'movies' => $retorno->results));
		}


        public function searchSerieAction($serie_name){

            $parameters = array(
                "api_key"   => "c3d594f81aba4df6403f9f5441d639e0",
                "language"  => "pt-BR",
                "query"     => $serie_name
            );

            $mcurl = $this->get('erika.mcurl');
            $mcurl->setBase_uri("https://api.themoviedb.org/3/");

            $retorno = $mcurl->getJsonToObject('search/tv', $parameters);

            return $this->render('ErikaBundle:Default:series.html.twig', array('busca' => urldecode($serie_name), 'series' => $retorno->results));
        }

        public function saveMovieAction(Request $request)
        {
            $movies = json_decode($request->request->get('movies'));
            $service = $this->get('erika.producao');


            foreach ($movies as $movie_id) {
                try{
                    $retorno = $service->setNewMovie($movie_id);
                }catch (Exception $e){
                    $retorno = false;
                    break;
                }
            }

            return new JsonResponse(array('resposta' => $retorno));

        }

        public function saveSerieAction(Request $request){
            $series = json_decode($request->request->get('series'));

	        $service = $this->get('erika.producao');
            foreach ($series as $serie_id) {
                $retorno = $service->setNewSerie($serie_id);
            }

            dump($retorno);
            return $this->render('ErikaBundle:Default:index.html.twig', array('return' => $retorno->getIdTmdb()));
        }

        public function saveSeasonAction(Request $request)
        {
            $serie_id = json_decode($request->request->get('serie_id'));
            $season = json_decode($request->request->get('season'));

            $parameters = array(
                "api_key"   => "c3d594f81aba4df6403f9f5441d639e0",
                "language"  => "pt-BR",
            );

            $mcurl = $this->get('erika.mcurl');
            $mcurl->setBase_uri("https://api.themoviedb.org/3/");

            $season_obj = $mcurl->getJsonToObject("tv/{$serie_id}/season/{$season}", $parameters);

            $service = $this->get('erika.episodio');
            $retorno = $service->saveSeason($serie_id, $season_obj);

            return new JsonResponse(array('resposta' => $season));
        }

        public function searchSeasonAction(Request $request){
            $serie_id = json_decode($request->request->get('serie_id'));
            if(empty($serie_id)){
                return new JsonResponse(array());
            }


            $mcurl = $this->get('erika.mcurl');
            $mcurl->setBase_uri("https://api.themoviedb.org/3/");

            $parameters = array(
                "api_key"   => "c3d594f81aba4df6403f9f5441d639e0",
                "language"  => "pt-BR",
            );

            $serie_details = $mcurl->getJsonToObject("tv/{$serie_id}", $parameters);

            return new JsonResponse(array('temporadas' => $serie_details->number_of_seasons));

        }

    }

?>