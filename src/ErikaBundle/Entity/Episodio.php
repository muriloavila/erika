<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Episodio
 */
class Episodio
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var integer
     */
    private $temporada;

    /**
     * @var string
     */
    private $resumo;

    /**
     * @var integer
     */
    private $epiNum;

    /**
     * @var boolean
     */
    private $visto;

    /**
     * @var integer
     */

    private $id_imdtb;

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
     * Set nome
     *
     * @param string $nome
     * @return Episodio
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set temporada
     *
     * @param integer $temporada
     * @return Episodio
     */
    public function setTemporada($temporada)
    {
        $this->temporada = $temporada;

        return $this;
    }

    /**
     * Get temporada
     *
     * @return integer 
     */
    public function getTemporada()
    {
        return $this->temporada;
    }

    /**
     * Set resumo
     *
     * @param string $resumo
     * @return Episodio
     */
    public function setResumo($resumo)
    {
        $this->resumo = $resumo;

        return $this;
    }

    /**
     * Get resumo
     *
     * @return string 
     */
    public function getResumo()
    {
        return $this->resumo;
    }

    /**
     * Set epiNum
     *
     * @param integer $epiNum
     * @return Episodio
     */
    public function setEpiNum($epiNum)
    {
        $this->epiNum = $epiNum;

        return $this;
    }

    /**
     * Get epiNum
     *
     * @return integer 
     */
    public function getEpiNum()
    {
        return $this->epiNum;
    }

    /**
     * Set visto
     *
     * @param boolean $visto
     * @return Episodio
     */
    public function setVisto($visto)
    {
        $this->visto = $visto;

        return $this;
    }

    /**
     * Get visto
     *
     * @return boolean 
     */
    public function getVisto()
    {
        return $this->visto;
    }

    /**
     * Set prd
     *
     * @param \ErikaBundle\Entity\Producao $prd
     * @return Episodio
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
     * @return mixed
     */
    public function getIdImdtb()
    {
        return $this->id_imdtb;
    }

    /**
     * @param mixed $id_imdtb
     */
    public function setIdImdtb($id_imdtb)
    {
        $this->id_imdtb = $id_imdtb;
    }

    public function toArray(){
        return array(
            'id' => $this->id,
            'nome' =>$this->nome,
            'temporada' => $this->temporada,
            'epiNum' =>$this->epiNum,
            'resumo' => $this->resumo,
            'visto' => $this->visto,
            'idTmdtb' => $this->id_imdtb,
            'serie' => array(
                'id' => $this->prd->getId(),
                'nome'=> $this->prd->getTitulo()
            )
        );
    }
}
