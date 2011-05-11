<?php

namespace Alf\ShopBundle\Entity;

/**
 * Alf\ShopBundle\Entity\Products
 *
 * @orm:Table(name="products")
 * @orm:Entity
 */
class Products
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
     * @orm:Column(name="name", type="string", length=40, nullable=false)
     */
    private $name;

    /**
     * @var string $size
     *
     * @orm:Column(name="size", type="string", length=6, nullable=false)
     */
    private $size;

    /**
     * @var float $cost
     *
     * @orm:Column(name="cost", type="float", nullable=false)
     */
    private $cost;

    /**
     * @var integer $amount
     *
     * @orm:Column(name="amount", type="integer", nullable=false)
     */
    private $amount;

    /**
     * @var text $description
     *
     * @orm:Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string $imageName
     *
     * @orm:Column(name="image_name", type="string", length=255, nullable=false)
     */
    private $imageName;

    /**
     * @var datetime $createdAt
     *
     * @orm:Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var Catalogs
     *
     * @orm:ManyToOne(targetEntity="Catalogs")
     * @orm:JoinColumns({
     *   @orm:JoinColumn(name="catalog_id", referencedColumnName="id")
     * })
     */
    private $catalog;

    /**
     * @var Vats
     *
     * @orm:ManyToOne(targetEntity="Vats")
     * @orm:JoinColumns({
     *   @orm:JoinColumn(name="vat_type", referencedColumnName="name")
     * })
     */
    private $vatType;


}