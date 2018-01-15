<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producao
 *
 * @ORM\Table(name="Producao", indexes={@ORM\Index(name="TIPO_PRD", columns={"TIPO_PRD"})})
 * @ORM\Entity
 */
class Producao
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
     * @ORM\Column(name="TITULO", type="string", length=200, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="POSTER", type="string", length=200, nullable=false)
     */
    private $poster;

    /**
     * @var string
     *
     * @ORM\Column(name="RESUMO", type="text", length=65535, nullable=false)
     */
    private $resumo;

    /**
     * @var string
     *
     * @ORM\Column(name="ANO", type="string", length=4, nullable=false)
     */
    private $ano;

    /**
     * @var string
     *
     * @ORM\Column(name="CLASS_INDICATIVA", type="string", length=50, nullable=false)
     */
    private $classIndicativa;

    /**
     * @var \TipoProducao
     *
     * @ORM\ManyToOne(targetEntity="TipoProducao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TIPO_PRD", referencedColumnName="ID")
     * })
     */
    private $tipoPrd;


}
