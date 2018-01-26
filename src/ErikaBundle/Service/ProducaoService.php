<?php
	namespace ErikaBundle\Service;

	use Doctrine\ORM\EntityManager;
	use Symfony\Component\DependencyInjection\Container;
	use ErikaBundle\Entity\Producao;
	use ErikaBundle\Entity\TipoProducao;
    use Symfony\Component\Security\Acl\Exception\Exception;


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

		function getMovie($id)
		{
			$em = $this->entityManager;
			$movie = $em->getRepository(Producao::class)->findBy(array('id' => $id));
			return $movie;
		}

		public function setNewMovie($movie)
		{
			$id_mdb = $movie;

			$parameters = array(
                "api_key"   => "c3d594f81aba4df6403f9f5441d639e0",
                "language"  => "pt-BR",
            );

			$mcurl = $this->container->get('erika.mcurl');

			$mcurl->setBase_uri("https://api.themoviedb.org/3/");
			$filme_details = $mcurl->getJsonToObject('movie/'.$id_mdb, $parameters);
			$filme_credits = $mcurl->getJsonToObject('movie/'.$id_mdb.'/credits', $parameters);
            try{

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

                return $filme_obj->getTitulo();
            }catch (Exception $e){
                throw new Exception($e->getMessage(), 1);
            }
		}

        public function setNewSerie($serie){
            $parameters = array(
                "api_key"   => "c3d594f81aba4df6403f9f5441d639e0",
                "language"  => "pt-BR",
            );

            $mcurl = $this->container->get('erika.mcurl');
            $mcurl->setBase_uri("https://api.themoviedb.org/3/");

            $serie_details = $mcurl->getJsonToObject("tv/{$serie}", $parameters);
            $serie_credit = $mcurl->getJsonToObject("tv/{$serie}/credits", $parameters);

            try{
                $serie_obj = $this->saveSerie($serie_details);

                $generosSalvos = $this->saveGenres($serie_details->genres);

                $produtoras_salvas = $this->saveProductions($serie_details->production_companies);
                foreach ($serie_details->created_by as $key => $creator){
                    $serie_details->created_by[$key]->department = 'Creator';
                }
                $serie_credit->cast = array();
                $serie_credit->crew = $serie_details->created_by;

                $elenco_salvo = $this->saveActorsAndCrew($serie_credit);

                $tipoElencoService = $this->container->get('erika.tipo_elenco');
                $te = $tipoElencoService->saveTipoElenco($elenco_salvo['crewSalvos']);

                $elencoProducaoTipoService = $this->container->get('erika.elenco_prducao_tipo');
                $ept = $elencoProducaoTipoService->saveActors($elenco_salvo['actorsSalvos'], $serie_obj);
                $cpt = $elencoProducaoTipoService->saveCrews($elenco_salvo['crewSalvos'], $serie_obj);

                $generoProducaoService = $this->container->get('erika.genero_producao');
                $gp = $generoProducaoService->saveGeneroProducao($generosSalvos, $serie_obj);

                $produtoraProducaoService = $this->container->get('erika.produtora_producao');
                $pp = $produtoraProducaoService->saveProdutoraProducao($produtoras_salvas, $serie_obj);

                return $serie_obj;
            }catch (Exception $e){
                throw new Exception($e->getMessage(), 1);
            }
        }

        public function saveActorsAndCrew($credits){
            $elencoService = $this->container->get('erika.elenco');
            $actorsSalvos = array();
            $crewSalvos = array();

            $count = 0;
            foreach ($credits->cast as $actor) {
                $actorsSalvos[] = $elencoService->newElencoActor($actor);
                if($count == 5){
                    break;
                }
                $count++;
            }

            $count = 0;
            foreach ($credits->crew as $crew) {
                $crewSalvos[] = $elencoService->newElencoCrew($crew);
                if($count == 5){
                    break;
                }
                $count++;
            }

            return array('actorsSalvos' => $actorsSalvos, 'crewSalvos' => $crewSalvos);
        }

        private function saveSerie($serie_details){
            $em = $this->entityManager;

            $producao = $em->getRepository(Producao::class)->findOneBy(array('idTmdb' => $serie_details->id));


            if(empty($producao) || $producao == null){
                $tipoPrd = $em->getRepository(TipoProducao::class)->findOneBy(array('id' => 2));
                $ano = explode('-', $serie_details->first_air_date);
                $producao = new Producao();

                $producao->setTitulo($serie_details->name);
                $producao->setPoster($serie_details->poster_path);
                $producao->setResumo($serie_details->overview);
                $producao->setAno($ano[0]);
                $producao->setClassIndicativa(null);
                $producao->setOrgTitulo($serie_details->original_name);
                $producao->setIdTmdb($serie_details->id);
                $producao->setTipoPrd($tipoPrd);

                $em->persist($producao);
                $em->flush();
            }

            return $producao;
        }

        private function saveGenres($genres){
            $generoService = $this->container->get('erika.genero');
            $generosSalvos = array();
            foreach ($genres as $genero) {
                $generosSalvos[] = $generoService->newGenero($genero);
            }

            return $generosSalvos;
        }

        private function saveMovie($movie_details)
        {
            $em = $this->entityManager;
            $producao = $em->getRepository(Producao::class)->findOneBy(array('idTmdb' => $movie_details->id));
            $tipoPrd = $em->getRepository(TipoProducao::class)->findOneBy(array('id' => 1));

            if(empty($producao) || $producao == null){
                $producao = new Producao();
                $ano = explode('-', $movie_details->release_date);

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

        private function saveProductions($production_companies){
            $produtoraService = $this->container->get('erika.produtora');
            $produtorasSalvas = array();
            foreach ($production_companies as $produtora) {
                $produtorasSalvas[] = $produtoraService->newProdutora($produtora);
            }

            return $produtorasSalvas;
        }


    }
?>