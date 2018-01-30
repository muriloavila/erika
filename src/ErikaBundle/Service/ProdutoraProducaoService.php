<?php


namespace ErikaBundle\Service;

use Doctrine\Entity;
use Doctrine\ORM\EntityManager;
use ErikaBundle\Entity\ProdutoraProducao;
use Symfony\Component\DependencyInjection\Container;

class ProdutoraProducaoService
{
    private $entityManager;
    private $container;

    public function __construct(EntityManager $entityManager, Container $container)
    {
        $this->entityManager = $entityManager;
        $this->container = $container;
    }

    public function getProdutoras($producao){
        if(empty($producao)){
            return null;
        }

        $em = $this->entityManager;
        $produtoras  = $em->getRepository(ProdutoraProducao::class)->findBy(array('prd' => $producao));

        if(empty($produtoras)){
            return null;
        }

        return $produtoras;
    }

    public function saveProdutoraProducao($produtoras, $filme){
        $em = $this->entityManager;
        $salvos = array();
        foreach ($produtoras as $produtora) {
            $produtora_producao = $em->getRepository(ProdutoraProducao::class)->findOneBy(array('prd' => $filme, 'pdt' => $produtora));

            if(empty($produtora_producao) || $produtora_producao == null){
                $produtora_producao = new ProdutoraProducao();
                $produtora_producao->setPrd($filme);
                $produtora_producao->setPdt($produtora);

                $em->persist($produtora_producao);
                $em->flush();
            }

            $salvos[] = $produtora_producao;
        }

        return $salvos;
    }
}