<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ElencoProducaoTipo
 */
class ElencoProducaoTipo
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
     * @var \ErikaBundle\Entity\TipoElenco
     */
    private $tipoElc;

    /**
     * @var \ErikaBundle\Entity\Elenco
     */
    private $elc;


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
     * @return ElencoProducaoTipo
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
     * Set tipoElc
     *
     * @param \ErikaBundle\Entity\TipoElenco $tipoElc
     * @return ElencoProducaoTipo
     */
    public function setTipoElc(\ErikaBundle\Entity\TipoElenco $tipoElc = null)
    {
        $this->tipoElc = $tipoElc;

        return $this;
    }

    /**
     * Get tipoElc
     *
     * @return \ErikaBundle\Entity\TipoElenco 
     */
    public function getTipoElc()
    {
        return $this->tipoElc;
    }

    /**
     * Set elc
     *
     * @param \ErikaBundle\Entity\Elenco $elc
     * @return ElencoProducaoTipo
     */
    public function setElc(\ErikaBundle\Entity\Elenco $elc = null)
    {
        $this->elc = $elc;

        return $this;
    }

    /**
     * Get elc
     *
     * @return \ErikaBundle\Entity\Elenco 
     */
    public function getElc()
    {
        return $this->elc;
    }
}
