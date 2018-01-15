<?php

namespace ErikaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoElenco
 *
 * @ORM\Table(name="Tipo_Elenco")
 * @ORM\Entity
 */
class TipoElenco
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
     * @ORM\Column(name="DESCRICAO", type="string", length=200, nullable=false)
     */
    private $descricao;


}
