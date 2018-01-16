<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ElencoEpisodioTipo
 */
class ElencoEpisodioTipo
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
     * @var \ErikaBundle\Entity\Elenco
     */
    private $elc;

    /**
     * @var \ErikaBundle\Entity\Episodio
     */
    private $epi;

    /**
     * @var \ErikaBundle\Entity\TipoElenco
     */
    private $tipoElc;


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
     * @return ElencoEpisodioTipo
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
     * Set elc
     *
     * @param \ErikaBundle\Entity\Elenco $elc
     * @return ElencoEpisodioTipo
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

    /**
     * Set epi
     *
     * @param \ErikaBundle\Entity\Episodio $epi
     * @return ElencoEpisodioTipo
     */
    public function setEpi(\ErikaBundle\Entity\Episodio $epi = null)
    {
        $this->epi = $epi;

        return $this;
    }

    /**
     * Get epi
     *
     * @return \ErikaBundle\Entity\Episodio 
     */
    public function getEpi()
    {
        return $this->epi;
    }

    /**
     * Set tipoElc
     *
     * @param \ErikaBundle\Entity\TipoElenco $tipoElc
     * @return ElencoEpisodioTipo
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
}
