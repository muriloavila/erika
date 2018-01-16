<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Elenco
 */
class Elenco
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
     * @var string
     */
    private $abrev;

    /**
     * @var integer
     */
    private $idade;

    /**
     * @var string
     */
    private $foto;

    /**
     * @var string
     */
    private $twitterLink;

    /**
     * @var integer
     */
    private $idTmdbElc;

    /**
     * @var \DateTime
     */
    private $dtNascimento;

    /**
     * @var \DateTime
     */
    private $dtFalecimento;


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
     * @return Elenco
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
     * Set abrev
     *
     * @param string $abrev
     * @return Elenco
     */
    public function setAbrev($abrev)
    {
        $this->abrev = $abrev;

        return $this;
    }

    /**
     * Get abrev
     *
     * @return string 
     */
    public function getAbrev()
    {
        return $this->abrev;
    }

    /**
     * Set idade
     *
     * @param integer $idade
     * @return Elenco
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get idade
     *
     * @return integer 
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return Elenco
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set twitterLink
     *
     * @param string $twitterLink
     * @return Elenco
     */
    public function setTwitterLink($twitterLink)
    {
        $this->twitterLink = $twitterLink;

        return $this;
    }

    /**
     * Get twitterLink
     *
     * @return string 
     */
    public function getTwitterLink()
    {
        return $this->twitterLink;
    }

    /**
     * Set idTmdbElc
     *
     * @param integer $idTmdbElc
     * @return Elenco
     */
    public function setIdTmdbElc($idTmdbElc)
    {
        $this->idTmdbElc = $idTmdbElc;

        return $this;
    }

    /**
     * Get idTmdbElc
     *
     * @return integer 
     */
    public function getIdTmdbElc()
    {
        return $this->idTmdbElc;
    }

    /**
     * Set dtNascimento
     *
     * @param \DateTime $dtNascimento
     * @return Elenco
     */
    public function setDtNascimento($dtNascimento)
    {
        $this->dtNascimento = $dtNascimento;

        return $this;
    }

    /**
     * Get dtNascimento
     *
     * @return \DateTime 
     */
    public function getDtNascimento()
    {
        return $this->dtNascimento;
    }

    /**
     * Set dtFalecimento
     *
     * @param \DateTime $dtFalecimento
     * @return Elenco
     */
    public function setDtFalecimento($dtFalecimento)
    {
        $this->dtFalecimento = $dtFalecimento;

        return $this;
    }

    /**
     * Get dtFalecimento
     *
     * @return \DateTime 
     */
    public function getDtFalecimento()
    {
        return $this->dtFalecimento;
    }
}
