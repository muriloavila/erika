<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GeneroProducao
 *
 * @ORM\Table(name="Genero_Producao", indexes={@ORM\Index(name="PRD_ID", columns={"PRD_ID"}), @ORM\Index(name="GEN_ID", columns={"GEN_ID"})})
 * @ORM\Entity
 */
class GeneroProducao
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
     * @var \Genero
     *
     * @ORM\ManyToOne(targetEntity="Genero")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GEN_ID", referencedColumnName="ID")
     * })
     */
    private $gen;


}
