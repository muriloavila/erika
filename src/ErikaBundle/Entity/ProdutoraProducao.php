<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProdutoraProducao
 *
 * @ORM\Table(name="Produtora_Producao", indexes={@ORM\Index(name="PRD_ID", columns={"PRD_ID"}), @ORM\Index(name="PDT_ID", columns={"PDT_ID"})})
 * @ORM\Entity
 */
class ProdutoraProducao
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
     * @var \Produtora
     *
     * @ORM\ManyToOne(targetEntity="Produtora")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PDT_ID", referencedColumnName="ID")
     * })
     */
    private $pdt;


}
