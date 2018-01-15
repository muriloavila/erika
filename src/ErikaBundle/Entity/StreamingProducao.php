<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StreamingProducao
 *
 * @ORM\Table(name="Streaming_Producao", indexes={@ORM\Index(name="STR_ID", columns={"STR_ID"}), @ORM\Index(name="PRD_ID", columns={"PRD_ID"})})
 * @ORM\Entity
 */
class StreamingProducao
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
     * @var \Streaming
     *
     * @ORM\ManyToOne(targetEntity="Streaming")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="STR_ID", referencedColumnName="ID")
     * })
     */
    private $str;

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
