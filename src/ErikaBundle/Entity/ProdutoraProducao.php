<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProdutoraProducao
 */
class ProdutoraProducao
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ErikaBundle\Entity\Producao
     */
    private $prd;

    /**
     * @var \ErikaBundle\Entity\Produtora
     */
    private $pdt;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set prd
     *
     * @param \ErikaBundle\Entity\Producao $prd
     * @return ProdutoraProducao
     */
    public function setPrd(\ErikaBundle\Entity\Producao $prd = null)
    {
        $this->prd = $prd;

        return $this;
    }

    /**
     * Get prd
     *
     * @return \ErikaBundle\Entity\Producao 
     */
    public function getPrd()
    {
        return $this->prd;
    }

    /**
     * Set pdt
     *
     * @param \ErikaBundle\Entity\Produtora $pdt
     * @return ProdutoraProducao
     */
    public function setPdt(\ErikaBundle\Entity\Produtora $pdt = null)
    {
        $this->pdt = $pdt;

        return $this;
    }

    /**
     * Get pdt
     *
     * @return \ErikaBundle\Entity\Produtora 
     */
    public function getPdt()
    {
        return $this->pdt;
    }
}
