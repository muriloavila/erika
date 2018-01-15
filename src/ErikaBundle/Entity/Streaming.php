<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Streaming
 *
 * @ORM\Table(name="Streaming")
 * @ORM\Entity
 */
class Streaming
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
     * @var string
     *
     * @ORM\Column(name="SITE", type="string", length=200, nullable=false)
     */
    private $site;

    /**
     * @var string
     *
     * @ORM\Column(name="LOGO", type="string", length=200, nullable=false)
     */
    private $logo;


}
