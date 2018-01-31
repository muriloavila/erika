<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producao
 */
class Producao
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $poster;

    /**
     * @var string
     */
    private $resumo;

    /**
     * @var string
     */
    private $ano;

    /**
     * @var string
     */
    private $classIndicativa;

    /**
     * @var string
     */
    private $orgTitulo;

    /**
     * @var integer
     */
    private $idTmdb;

    /**
     * @var \ErikaBundle\Entity\TipoProducao
     */
    private $tipoPrd;


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
     * Set titulo
     *
     * @param string $titulo
     * @return Producao
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set poster
     *
     * @param string $poster
     * @return Producao
     */
    public function setPoster($poster)
    {
        $this->poster = $poster;

        return $this;
    }

    /**
     * Get poster
     *
     * @return string 
     */
    public function getPoster()
    {
        return $this->poster;
    }

    /**
     * Set resumo
     *
     * @param string $resumo
     * @return Producao
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
     * Set ano
     *
     * @param string $ano
     * @return Producao
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return string 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set classIndicativa
     *
     * @param string $classIndicativa
     * @return Producao
     */
    public function setClassIndicativa($classIndicativa)
    {
        $this->classIndicativa = $classIndicativa;

        return $this;
    }

    /**
     * Get classIndicativa
     *
     * @return string 
     */
    public function getClassIndicativa()
    {
        return $this->classIndicativa;
    }

    /**
     * Set orgTitulo
     *
     * @param string $orgTitulo
     * @return Producao
     */
    public function setOrgTitulo($orgTitulo)
    {
        $this->orgTitulo = $orgTitulo;

        return $this;
    }

    /**
     * Get orgTitulo
     *
     * @return string 
     */
    public function getOrgTitulo()
    {
        return $this->orgTitulo;
    }

    /**
     * Set idTmdb
     *
     * @param integer $idTmdb
     * @return Producao
     */
    public function setIdTmdb($idTmdb)
    {
        $this->idTmdb = $idTmdb;

        return $this;
    }

    /**
     * Get idTmdb
     *
     * @return integer 
     */
    public function getIdTmdb()
    {
        return $this->idTmdb;
    }

    /**
     * Set tipoPrd
     *
     * @param \ErikaBundle\Entity\TipoProducao $tipoPrd
     * @return Producao
     */
    public function setTipoPrd(\ErikaBundle\Entity\TipoProducao $tipoPrd = null)
    {
        $this->tipoPrd = $tipoPrd;

        return $this;
    }

    /**
     * Get tipoPrd
     *
     * @return \ErikaBundle\Entity\TipoProducao 
     */
    public function getTipoPrd()
    {
        return $this->tipoPrd;
    }

    public function toArray(){
        return array(
            'id' => $this->id,
            'titulo' => $this->titulo,
            'poster' => 'https://image.tmdb.org/t/p/w500'.$this->poster,
            'resumo' => $this->resumo,
            'ano'    => $this->ano,
            'classIndicativa' => $this->classIndicativa,
            'orgTitulo' => $this->orgTitulo,
            'idTmdb' => $this->idTmdb,
            'tipoPrd' => $this->tipoPrd->getNome()
        );
    }

}
