<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produtora
 */
class Produtora
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
    private $idTmdbPdt;


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
     * @return Produtora
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
     * Set idTmdbPdt
     *
     * @param integer $idTmdbPdt
     * @return Produtora
     */
    public function setIdTmdbPdt($idTmdbPdt)
    {
        $this->idTmdbPdt = $idTmdbPdt;

        return $this;
    }

    /**
     * Get idTmdbPdt
     *
     * @return integer 
     */
    public function getIdTmdbPdt()
    {
        return $this->idTmdbPdt;
    }

    public function toArray(){
        return array(
            'id' => $this->id,
            'nome' => $this->nome,
            'idTmdbPdt' => $this->idTmdbPdt
        );
    }
}
