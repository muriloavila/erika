<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Elenco
 *
 * @ORM\Table(name="Elenco")
 * @ORM\Entity
 */
class Elenco
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
     * @ORM\Column(name="ABREV", type="string", length=200, nullable=false)
     */
    private $abrev;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDADE", type="integer", nullable=false)
     */
    private $idade;

    /**
     * @var string
     *
     * @ORM\Column(name="FOTO", type="string", length=200, nullable=false)
     */
    private $foto;

    /**
     * @var string
     *
     * @ORM\Column(name="TWITTER_LINK", type="string", length=200, nullable=false)
     */
    private $twitterLink;


}
