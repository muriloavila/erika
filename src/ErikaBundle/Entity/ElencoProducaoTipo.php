<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ElencoProducaoTipo
 *
 * @ORM\Table(name="Elenco_Producao_Tipo", indexes={@ORM\Index(name="PRD_ID", columns={"PRD_ID"}), @ORM\Index(name="TIPO_ELC_ID", columns={"TIPO_ELC_ID"}), @ORM\Index(name="ELC_ID", columns={"ELC_ID"})})
 * @ORM\Entity
 */
class ElencoProducaoTipo
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
     * @var \Producao
     *
     * @ORM\ManyToOne(targetEntity="Producao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PRD_ID", referencedColumnName="ID")
     * })
     */
    private $prd;

    /**
     * @var \TipoElenco
     *
     * @ORM\ManyToOne(targetEntity="TipoElenco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TIPO_ELC_ID", referencedColumnName="ID")
     * })
     */
    private $tipoElc;

    /**
     * @var \Elenco
     *
     * @ORM\ManyToOne(targetEntity="Elenco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ELC_ID", referencedColumnName="ID")
     * })
     */
    private $elc;


}
