<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Watched
 *
 * @ORM\Table(name="Watched", indexes={@ORM\Index(name="PRD_ID", columns={"PRD_ID"})})
 * @ORM\Entity
 */
class Watched
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
     * @var integer
     *
     * @ORM\Column(name="NOTA", type="integer", nullable=false)
     */
    private $nota;

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
