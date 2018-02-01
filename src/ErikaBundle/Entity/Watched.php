<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Watched
 */
class Watched
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $nota;

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
     * Set nota
     *
     * @param integer $nota
     * @return Watched
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return integer 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set prd
     *
     * @param \ErikaBundle\Entity\Producao $prd
     * @return Watched
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

    public function toArray(){
        return array(
            'id' => $this->id,
            'nota' => $this->nota
        );
    }
}
