<?php


namespace ErikaBundle\Service;

use Doctrine\ORM\EntityManager;
use ErikaBundle\Entity\Producao;
use Symfony\Component\DependencyInjection\Container;
use ErikaBundle\Entity\Episodio;
use Symfony\Component\HttpFoundation\JsonResponse;


class EpisodioService
{
    private $entityManager;
    private $container;

    public function __construct(EntityManager $entityManager, Container $container)
    {
        $this->entityManager = $entityManager;
        $this->container = $container;
    }

    public function getSeason($producao_id, $season){
        if(empty($producao_id)){
            return null;
        }

        if(empty($season)){
            return null;
        }

        $em = $this->entityManager;

        $producao = $em->getRepository(Producao::class)->findOneBy(array('id' => $producao_id));
        $episodios = $em->getRepository(Episodio::class)->findBy(array('prd' => $producao, 'temporada' => $season));

        return $episodios;
    }

    public function saveSeason($serie_id, $season){
        if(empty($season)){
            return;
        }

        $parameters = array(
            "api_key"   => "c3d594f81aba4df6403f9f5441d639e0",
            "language"  => "pt-BR",
        );

        $mcurl = $this->container->get('erika.mcurl');
        $mcurl->setBase_uri("https://api.themoviedb.org/3/");

        $elencoEpisodioTipoService = $this->container->get('erika.elenco_episodio_tipo');

        $season_credits = array();
        $season_episodes = array();
        foreach ($season->episodes as $key => $episode) {
            $season_episodes[] = $this->saveNewEpisode($serie_id, $episode);
            $credits = $mcurl->getJsonToObject("tv/{$serie_id}/season/{$episode->season_number}/episode/{$episode->episode_number}/credits", $parameters);
            $season_credits[] = $this->saveEpisodeActorsCrew($credits);

            $actorsSalvosDB[] = $elencoEpisodioTipoService->saveActors($season_credits[$key]['actorsSalvos'], $season_episodes[$key]);

            $tipoElencoService = $this->container->get('erika.tipo_elenco');
            $te = $tipoElencoService->saveTipoElenco($season_credits[$key]['crewSalvos']);

            $crewSalvosDB[] = $elencoEpisodioTipoService->saveCrew($season_credits[$key]['crewSalvos'], $season_episodes[$key]);
        }

        return new JsonResponse(array('resposta' => true));
    }

    public function saveNewEpisode($serie_id, $episode){
        $em = $this->entityManager;

        $episodio_serie = $em->getRepository(Episodio::class)->findOneBy(array('id_imdtb' => $episode->id));

        if(empty($episodio_serie) || $episodio_serie == null){
            $serie = $em->getRepository(Producao::class)->findOneBy(array('idTmdb' => $serie_id));

            if($serie == null || empty($serie)){
                $producaoService = $this->container->get('erika.producao');
                $serie = $producaoService->setNewSerie($serie_id);
            }

            $episodio_serie = new Episodio();
            $episodio_serie->setEpiNum($episode->episode_number);
            $episodio_serie->setTemporada($episode->season_number);
            $episodio_serie->setNome($episode->name);
            $episodio_serie->setResumo($episode->overview);
            $episodio_serie->setPrd($serie);
            $episodio_serie->setIdImdtb($serie_id);

            $em->persist($episodio_serie);
            $em->flush();
        }

        return $episodio_serie;

    }

    public function saveEpisodeActorsCrew($credits){
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

    public function setEpisodeWatched($serie_id, $season, $episode, $parameters){


    }
}