<?php

namespace ErikaBundle\Service;

use Doctrine\ORM\EntityManager;
use ErikaBundle\Entity\Producao;
use ErikaBundle\Entity\Wishlist;
use Symfony\Component\DependencyInjection\Container;

class WishlistService
{
    private $entityManager;
    private $container;

    public function __construct(EntityManager $entityManager, Container $container)
    {
        $this->entityManager = $entityManager;
        $this->container = $container;
    }

    public function getWishlist($producao){
        if(empty($producao)){
            return null;
        }

        $wish = $this->entityManager->getRepository(Wishlist::class)->findBy(array('prd' => $producao));

        if(empty($wish)){
            return false;
        } else {
            return $wish[0];
        }
    }

    public function postWishlist($id_producao, $parametros){
        if(empty($id_producao)){
            return null;
        }
        $em = $this->entityManager;

        $producao = $em->getRepository(Producao::class)->findOneBy(array('id' => $id_producao));

        if(empty($producao)){
            return null;
        }

        extract($parametros);

        $wish = $this->getWishlist($producao);

        if($wishlist == false){
            $em->remove($wish);
            $em->flush();

            return array('retorno' => true, 'mensagem' => 'Removido com sucesso da Wishlist');
        }

        if(empty($wish)){
            $wish = new Wishlist();
        }

        $wish->setPrd($producao);
        if(isset($prioridade)){
            $wish->setPrioridade($prioridade);
        }

        $em->persist($wish);
        $em->flush();

        return array('retorno' => true, 'mensagem' => 'Adicionado com sucesso a Wishlist');
    }
}