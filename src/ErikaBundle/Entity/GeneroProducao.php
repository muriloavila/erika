<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GeneroProducao
 */
class GeneroProducao
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
     * @var \ErikaBundle\Entity\Genero
     */
    private $gen;


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
     * @return GeneroProducao
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
     * Set gen
     *
     * @param \ErikaBundle\Entity\Genero $gen
     * @return GeneroProducao
     */
    public function setGen(\ErikaBundle\Entity\Genero $gen = null)
    {
        $this->gen = $gen;

        return $this;
    }

    /**
     * Get gen
     *
     * @return \ErikaBundle\Entity\Genero 
     */
    public function getGen()
    {
        return $this->gen;
    }
}
