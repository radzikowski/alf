<?php

namespace Alf\ShopBundle\Entity;

/**
 * Alf\ShopBundle\Entity\Vats
 *
 * @orm:Table(name="vats")
 * @orm:Entity
 */
class Vats
{
    /**
     * @var integer $id
     *
     * @orm:Column(name="id", type="integer", nullable=false)
     * @orm:Id
     * @orm:GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $name
     *
     * @orm:Column(name="name", type="string", length=1, nullable=false)
     */
    private $name;

    /**
     * @var float $value
     *
     * @orm:Column(name="value", type="float", nullable=false)
     */
    private $value;


}