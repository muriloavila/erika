<?php
	namespace ErikaBundle\Service;

	use Doctrine\ORM\EntityManager;
	use Symfony\Component\DependencyInjection\Container;
	use ErikaBundle\Entity\Producao;


	/**
	* 
	*/
	class ProducaoService
	{
		private $entityManager;
    	private $container;
		
    	public function __construct(EntityManager $entityManager, Container $container)
	    {
	        $this->entityManager = $entityManager;
	        $this->container = $container;
	    }

		function get()
		{
			return "OI";
		}

		public function setNewMovie($movie)
		{
			$id_mdb = $movie->id;
			
			$parameters = array(
                "api_key"   => "c3d594f81aba4df6403f9f5441d639e0",
                "language"  => "pt-BR",
            );

			$mcurl = $this->container->get('erika.mcurl');

			$mcurl->setBase_uri("https://api.themoviedb.org/3/");
			$filme_details = $mcurl->getJsonToObject('movie/'.$id_mdb, $parameters);
			$filme_credits = $mcurl->getJsonToObject('movie/'.$id_mdb.'/credits', $parameters);

			$generoService = $this->container->get('erika.genero');
			$generosSalvos = array();
			foreach ($filme_details->genres as $genero) {
				$generosSalvos[] = $generoService->newGenero($genero);
			}

			$produtoraService = $this->container->get('erika.produtora');
			$produtorasSalvas = array();
			foreach ($filme_details->production_companies as $produtora) {
				$produtorasSalvas[] = $produtoraService->newProdutora($produtora);
			}


			$elencoService = $this->container->get('erika.elenco');
			$actorsSalvos = array();
			$crewSalvos = array();

			foreach ($filme_credits->cast as $actor) {
				$actorsSalvos[] = $elencoService->newElencoActor($actor);
			}

			return $actorsSalvos;
		}
	}



?>