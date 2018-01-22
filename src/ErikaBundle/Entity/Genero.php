<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genero
 */
class Genero
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
    private $idTmdbGnr;


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
     * @return Genero
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
     * Set idTmdbGnr
     *
     * @param integer $idTmdbGnr
     * @return Genero
     */
    public function setIdTmdbGnr($idTmdbGnr)
    {
        $this->idTmdbGnr = $idTmdbGnr;

        return $this;
    }

    /**
     * Get idTmdbGnr
     *
     * @return integer 
     */
    public function getIdTmdbGnr()
    {
        return $this->idTmdbGnr;
    }
}
