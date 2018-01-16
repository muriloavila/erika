<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wishlist
 */
class Wishlist
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $prioridade;

    /**
     * @var \ErikaBundle\Entity\Producao
     */
    private $prd;


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
     * Set prioridade
     *
     * @param integer $prioridade
     * @return Wishlist
     */
    public function setPrioridade($prioridade)
    {
        $this->prioridade = $prioridade;

        return $this;
    }

    /**
     * Get prioridade
     *
     * @return integer 
     */
    public function getPrioridade()
    {
        return $this->prioridade;
    }

    /**
     * Set prd
     *
     * @param \ErikaBundle\Entity\Producao $prd
     * @return Wishlist
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
}
