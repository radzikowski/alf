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



    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set size
     *
     * @param string $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * Get size
     *
     * @return string $size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set cost
     *
     * @param float $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    /**
     * Get cost
     *
     * @return float $cost
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * Get amount
     *
     * @return integer $amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set imageName
     *
     * @param string $imageName
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;
    }

    /**
     * Get imageName
     *
     * @return string $imageName
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Get createdAt
     *
     * @return datetime $createdAt
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set catalog
     *
     * @param Alf\ShopBundle\Entity\Catalogs $catalog
     */
    public function setCatalog(\Alf\ShopBundle\Entity\Catalogs $catalog)
    {
        $this->catalog = $catalog;
    }

    /**
     * Get catalog
     *
     * @return Alf\ShopBundle\Entity\Catalogs $catalog
     */
    public function getCatalog()
    {
        return $this->catalog;
    }

    /**
     * Set vatType
     *
     * @param Alf\ShopBundle\Entity\Vats $vatType
     */
    public function setVatType(\Alf\ShopBundle\Entity\Vats $vatType)
    {
        $this->vatType = $vatType;
    }

    /**
     * Get vatType
     *
     * @return Alf\ShopBundle\Entity\Vats $vatType
     */
    public function getVatType()
    {
        return $this->vatType;
    }
}