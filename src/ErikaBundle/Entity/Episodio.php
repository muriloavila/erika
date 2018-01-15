<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Episodio
 *
 * @ORM\Table(name="Episodio", indexes={@ORM\Index(name="PRD_ID", columns={"PRD_ID"})})
 * @ORM\Entity
 */
class Episodio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOME", type="string", length=200, nullable=false)
     */
    private $nome;

    /**
     * @var integer
     *
     * @ORM\Column(name="TEMPORADA", type="integer", nullable=false)
     */
    private $temporada;

    /**
     * @var string
     *
     * @ORM\Column(name="RESUMO", type="text", length=65535, nullable=false)
     */
    private $resumo;

    /**
     * @var integer
     *
     * @ORM\Column(name="EPI_NUM", type="integer", nullable=false)
     */
    private $epiNum;

    /**
     * @var boolean
     *
     * @ORM\Column(name="VISTO", type="boolean", nullable=false)
     */
    private $visto;

    /**
     * @var \Producao
     *
     * @ORM\ManyToOne(targetEntity="Producao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PRD_ID", referencedColumnName="ID")
     * })
     */
    private $prd;


}
