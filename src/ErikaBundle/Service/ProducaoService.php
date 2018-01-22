<?php
	namespace ErikaBundle\Service;

	use Doctrine\ORM\EntityManager;
	use Symfony\Component\DependencyInjection\Container;
	use ErikaBundle\Entity\Producao;
	use ErikaBundle\Entity\TipoProducao;


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

			$filme_obj = $this->saveMovie($filme_details);

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

			$count = 0;
			foreach ($filme_credits->cast as $actor) {
				$actorsSalvos[] = $elencoService->newElencoActor($actor);
				if($count == 10){
					break;
				}
				$count++;
			}

			$count = 0;
            foreach ($filme_credits->crew as $crew) {
                $crewSalvos[] = $elencoService->newElencoCrew($crew);
                if($count == 5){
                    break;
                }
                $count++;
			}

            $tipoElencoService = $this->container->get('erika.tipo_elenco');
            $te = $tipoElencoService->saveTipoElenco($crewSalvos);

            $elencoProducaoTipoService = $this->container->get('erika.elenco_prducao_tipo');
            $ept = $elencoProducaoTipoService->saveActors($actorsSalvos, $filme_obj);
            $cpt = $elencoProducaoTipoService->saveCrews($crewSalvos, $filme_obj);

            $generoProducaoService = $this->container->get('erika.genero_producao');
            $gp = $generoProducaoService->saveGeneroProducao($generosSalvos, $filme_obj);

            $produtoraProducaoService = $this->container->get('erika.produtora_producao');
            $pp = $produtoraProducaoService->saveProdutoraProducao($produtorasSalvas, $filme_obj);

            return $te;
		}

		public function saveMovie($movie_details)
		{
			$em = $this->entityManager;
			$producao = $em->getRepository(Producao::class)->findOneBy(array('idTmdb' => $movie_details->id));
            $tipoPrd = $em->getRepository(TipoProducao::class)->findOneBy(array('id' => 1));

            if(empty($producao) || $producao == null){
				$producao = new Producao();
				$ano = explode($movie_details->release_date, '-');

				$producao->setTitulo($movie_details->title);
				$producao->setPoster($movie_details->poster_path);
				$producao->setResumo($movie_details->overview);
				$producao->setAno($ano[0]);
				$producao->setClassIndicativa(null);
				$producao->setOrgTitulo($movie_details->original_title);
				$producao->setIdTmdb($movie_details->id);
				$producao->setTipoPrd($tipoPrd);

				$em->persist($producao);
				$em->flush();
			}

			return $producao;
		}
	}



?>