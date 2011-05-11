<?php

namespace Alf\ShopBundle\Entity;

/**
 * Alf\ShopBundle\Entity\Catalogs
 *
 * @orm:Table(name="catalogs")
 * @orm:Entity
 */
class Catalogs
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
     * @orm:Column(name="name", type="string", length=70, nullable=false)
     */
    private $name;

    /**
     * @var boolean $isVisible
     *
     * @orm:Column(name="is_visible", type="boolean", nullable=false)
     */
    private $isVisible;

    /**
     * @var text $description
     *
     * @orm:Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var Categories
     *
     * @orm:ManyToOne(targetEntity="Categories")
     * @orm:JoinColumns({
     *   @orm:JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getIsVisible()
    {
        return $this->isVisible;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getCategory()
    {
        $this->category;
    }
    
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * Set isVisible
     *
     * @param boolean $isVisible
     */
    public function setIsVisible($isVisible)
    {
        $this->isVisible = $isVisible;
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
}