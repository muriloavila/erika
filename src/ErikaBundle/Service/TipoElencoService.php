<?php


namespace ErikaBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\Container;
use ErikaBundle\Entity\TipoElenco;


class TipoElencoService
{
    private $entityManager;
    private $container;

    public function __construct(EntityManager $entityManager, Container $container)
    {
        $this->entityManager = $entityManager;
        $this->container = $container;
    }

    public function saveTipoElenco($elenco){
        $em = $this->entityManager;
        $salvos = array();
        foreach ($elenco as $el) {
            
            $el_prd_mv = $em->getRepository(TipoElenco::class)->findOneBy(array('descricao' => $el['department']));

            if(empty($el_prd_mv) || $el_prd_mv == null){
                $el_prd_mv = new TipoElenco();
                $el_prd_mv->setDescricao($el['department']);
                $em->persist($el_prd_mv);
                $em->flush();
            }

            $salvos[] = $el_prd_mv;
        }

        return $salvos;
    }

}