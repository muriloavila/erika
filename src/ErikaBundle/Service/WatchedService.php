<?php

namespace ErikaBundle\Service;

use Doctrine\ORM\EntityManager;
use ErikaBundle\Entity\Producao;
use ErikaBundle\Entity\Watched;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Security\Acl\Exception\Exception;

class WatchedService
{
    private $entityManager;
    private $container;

    public function __construct(EntityManager $entityManager, Container $container)
    {
        $this->entityManager = $entityManager;
        $this->container = $container;
    }

    public function getWatched($producao){
        if(empty($producao)){
            return null;
        }

        $em = $this->entityManager;
        $vistos = $em->getRepository(Watched::class)->findBy(array('prd' => $producao));

        if(empty($vistos)){
            return false;
        }

        return $vistos;
    }

    public function atualizaWatched($producao_id, $parametros){
        if(empty($producao_id)){
            return null;
        }

        extract($parametros);

        $em = $this->entityManager;
        $producao = $em->getRepository(Producao::class)->findOneBy(array('id' => $producao_id));

        $vistos = $em->getRepository(Watched::class)->findBy(array('prd' => $producao));

        if($parametros['visto'] == false){
            $em->remove($vistos);
            $em->flush();
            return array('retorno' => 'Filme retirado dos não vistos');
        }

        if(empty($vistos)){
            $vistos = new Watched();
        }

        $vistos->setPrd($producao);
        if(!empty($nota)){
            $vistos->setNota($nota);
        }

        $em->persist($vistos);
        $em->flush();

        return array('retorno' => 'Filme incluso nos Vistos');
    }

}