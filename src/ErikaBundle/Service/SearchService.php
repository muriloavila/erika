<?php
/**
 * Created by PhpStorm.
 * User: desenvolvimento
 * Date: 08/02/18
 * Time: 14:29
 */

namespace ErikaBundle\Service;

use Doctrine\ORM\EntityManager;
use ErikaBundle\Entity\Producao;
use Symfony\Component\DependencyInjection\Container;
use ErikaBundle\Entity\Episodio;
use Symfony\Component\HttpFoundation\JsonResponse;

class SearchService
{
    private $entityManager;
    private $container;

    public function __construct(EntityManager $entityManager, Container $container)
    {
        $this->entityManager = $entityManager;
        $this->container = $container;
    }

    public function search($parametros){
        if(empty($parametros)){
            return array('resposta' => false, 'mensagem' => 'Erro! Um parâmetro de busca é necessário');
        }

        $em = $this->entityManager;

//        $query = $em
//            ->createQuery('
//            SELECT p, gp FROM ErikaBundle:Producao p
//            INNER JOIN ErikaBundle:GeneroProducao gp WITH gp.prd = p.id
//            WHERE p.titulo like :q'
//            )->setParameter('q', '%'.$parametros['q'].'%');


        $query = $em->createQueryBuilder()
            ->select('p', 'gp')
            ->from('ErikaBundle:Producao', 'p')
            ->from('ErikaBundle:GeneroProducao','gp')
            ->where('p.titulo like :q')
            ->setParameter('q', '%'.$parametros['q'].'%')
            ->andWhere('gp.prd = p.id');


        $query = $query->getQuery();
        dump($query->getResult());
        $resultado = array();

//        foreach ($query->getResult() as $key => $item) {
//            $resultado[$key] = $item->toArray();
//        }

        return $resultado;
    }
}