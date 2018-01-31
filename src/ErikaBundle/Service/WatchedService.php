<?php

namespace ErikaBundle\Service;

use Doctrine\ORM\EntityManager;
use ErikaBundle\Entity\Watched;
use Symfony\Component\DependencyInjection\Container;

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

        return true;
    }

}