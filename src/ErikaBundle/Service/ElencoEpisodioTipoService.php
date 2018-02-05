<?php

namespace ErikaBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\Container;
use ErikaBundle\Entity\ElencoEpisodioTipo;
use ErikaBundle\Entity\TipoElenco;

class ElencoEpisodioTipoService
{
    private $entityManager;
    private $container;

    public function __construct(EntityManager $entityManager, Container $container)
    {
        $this->entityManager = $entityManager;
        $this->container = $container;
    }

    public function saveActors(array $actors, $episodio){
        $em = $this->entityManager;
        $salvos = array();

        $tipoElencoAtor = $em->getRepository(TipoElenco::class)->findOneBy(array("id" => 3));

        foreach ($actors as $actor) {
            $eet = $em->getRepository(ElencoEpisodioTipo::class)->findOneBy(array('epi' => $episodio,
                                                                                            "tipoElc" => $tipoElencoAtor,
                                                                                            "elc" => $actor['obj'],
                                                                                            "nomeChar" => $actor['char_name']
                                                                                        ));
            if(empty($eet) || $eet == null){
                $eet = new ElencoEpisodioTipo();
                $eet->setTipoElc($tipoElencoAtor);
                $eet->setElc($actor['obj']);
                $eet->setEpi($episodio);
                $eet->setNomeChar($actor['char_name']);

                $em->persist($eet);
                $em->flush();
            }

            $salvos[] = $eet;
        }

        return $salvos;
    }

    public function saveCrew(array $crews, $episodio){
        $salvos = array();

        $em = $this->entityManager;

        foreach ($crews as $crew) {
            $department = $em->getRepository(TipoElenco::class)->findOneBy(array('descricao' => $crew['department']));
            $crew_department = $em->getRepository(ElencoEpisodioTipo::class)->findOneBy(array(
                'epi' => $episodio,
                'tipoElc' => $department,
                'elc' => $crew['obj']
            ));
            if(empty($crew_department) || $crew_department == null){
                $crew_department = new ElencoEpisodioTipo();
                $crew_department->setEpi($episodio);
                $crew_department->setElc($crew['obj']);
                $crew_department->setTipoElc($department);

                $em->persist($crew_department);
                $em->flush();
            }

            $salvos[] = $crew_department;
        }

        return $salvos;
    }

    public function getElenco($episodio){
        if(empty($episodio)){
            return null;
        }

        $em = $this->entityManager;
        $elencoTipo = $em->getRepository(ElencoEpisodioTipo::class)->findBy(array('epi' => $episodio));

        if(empty($elencoTipo)){
            return null;
        }

        return $elencoTipo;
    }
}