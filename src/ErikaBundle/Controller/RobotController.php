<?php 
	
	namespace ErikaBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Lsw\ApiCallerBundle\Call\HttpGetJson;
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
			return $this->render('ErikaBundle:Default:index.html.twig', array('name' => "Robot Index"));
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
            dump($retorno);
            return $this->render('ErikaBundle:Default:search.html.twig', array('busca' => urldecode($movie_name), 'movies' => $retorno->results));
		}

		public function saveMovieAction(Request $request)
        {
            $movies = json_decode($request->request->get('movies'));

            foreach ($movies as $movie_id) {
                $service = $this->get('erika.producao');
                try{
                    $oi = $service->setNewMovie($movie_id);
                }catch (Exception $e){
                    $oi = false;
                    break;
                }
            }

            return new JsonResponse(array('resposta' => $oi));

        }
    }

?>