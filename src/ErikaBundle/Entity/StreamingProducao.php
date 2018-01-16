<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StreamingProducao
 */
class StreamingProducao
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ErikaBundle\Entity\Streaming
     */
    private $str;

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
     * Set str
     *
     * @param \ErikaBundle\Entity\Streaming $str
     * @return StreamingProducao
     */
    public function setStr(\ErikaBundle\Entity\Streaming $str = null)
    {
        $this->str = $str;

        return $this;
    }

    /**
     * Get str
     *
     * @return \ErikaBundle\Entity\Streaming 
     */
    public function getStr()
    {
        return $this->str;
    }

    /**
     * Set prd
     *
     * @param \ErikaBundle\Entity\Producao $prd
     * @return StreamingProducao
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
