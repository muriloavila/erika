<?php


namespace ErikaBundle\Service;

use Doctrine\ORM\EntityManager;
use ErikaBundle\Entity\Producao;
use Symfony\Component\DependencyInjection\Container;
use ErikaBundle\Entity\Episodio;


class EpisodioService
{
    private $entityManager;
    private $container;

    public function __construct(EntityManager $entityManager, Container $container)
    {
        $this->entityManager = $entityManager;
        $this->container = $container;
    }

    public function saveEpisodio($temporada, Producao $serie){
        if(empty($temporada)){
            return null;
        }

        $em = $this->entityManager;
        $retorno = array();

        foreach ($temporada as $episodio){
            $episodio_salvo = $em->getRepository(Episodio::class)->findOneBy(array('id_imdtb' => $episodio->id, 'prd' => $serie));
            if(empty($episodio_salvo) || $episodio_salvo == null){
                $episodio_salvo = new Episodio();
                $episodio_salvo->setPrd($serie);
                $episodio_salvo->setEpiNum($episodio->episode_number);
                $episodio_salvo->setTemporada($episodio->season_number);
                $episodio_salvo->setIdImdtb($episodio->id);
                $episodio_salvo->setNome($episodio->name);
                $episodio_salvo->setResumo($episodio->overview);

                $em->persist($episodio_salvo);
                $em->flush();

            }

//            $retorno[]['episodioSalvo'] = $episodio_salvo;
            $retorno[]['actorsSalvo'] = $this->saveEpisodioCreditos($episodio_salvo, $serie->getIdTmdb());
            break;
        }

        return $retorno;
    }

    public function EpisodioTemporada($id, $temporada){
        $parameters = array(
            "api_key"   => "c3d594f81aba4df6403f9f5441d639e0",
            "language"  => "pt-BR",
        );

        $mcurl = $this->container->get('erika.mcurl');
        $mcurl->setBase_uri("https://api.themoviedb.org/3/");

        $episodes = $mcurl->getJsonToObject("tv/{$id}/season/{$temporada->season_number}", $parameters);

        return $episodes->episodes;
    }

    public function saveEpisodioCreditos(Episodio $episodio, $id_serie){
        $parameters = array(
            "api_key"   => "c3d594f81aba4df6403f9f5441d639e0",
            "language"  => "pt-BR",
        );

        $mcurl = $this->container->get('erika.mcurl');
        $mcurl->setBase_uri("https://api.themoviedb.org/3/");

        $credits = $mcurl->getJsonToObject("tv/{$id_serie}/season/{$episodio->getTemporada()}/episode/{$episodio->getEpiNum()}/credits", $parameters);
        return $credits;
    }
}