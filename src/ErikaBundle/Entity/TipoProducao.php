<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoProducao
 *
 * @ORM\Table(name="Tipo_Producao")
 * @ORM\Entity
 */
class TipoProducao
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


}
