<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ElencoEpisodioTipo
 *
 * @ORM\Table(name="Elenco_Episodio_Tipo", indexes={@ORM\Index(name="FK_ElencoID", columns={"ELC_ID"}), @ORM\Index(name="FK_EpisodioID", columns={"EPI_ID"}), @ORM\Index(name="FK_TipoElencoID", columns={"TIPO_ELC_ID"})})
 * @ORM\Entity
 */
class ElencoEpisodioTipo
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
     * @ORM\Column(name="NOME", type="string", length=200, nullable=true)
     */
    private $nome;

    /**
     * @var \Elenco
     *
     * @ORM\ManyToOne(targetEntity="Elenco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ELC_ID", referencedColumnName="ID")
     * })
     */
    private $elc;

    /**
     * @var \Episodio
     *
     * @ORM\ManyToOne(targetEntity="Episodio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EPI_ID", referencedColumnName="ID")
     * })
     */
    private $epi;

    /**
     * @var \TipoElenco
     *
     * @ORM\ManyToOne(targetEntity="TipoElenco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TIPO_ELC_ID", referencedColumnName="ID")
     * })
     */
    private $tipoElc;


}
