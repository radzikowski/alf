<?php

namespace Alf\ShopBundle\Entity;

/**
 * Alf\ShopBundle\Entity\Categories
 *
 * @orm:Table(name="categories")
 * @orm:Entity
 */
class Categories
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
     * @var text $name
     *
     * @orm:Column(name="name", type="text", nullable=false)
     */
    private $name;

    /**
     * @var boolean $isVisible
     *
     * @orm:Column(name="is_visible", type="boolean", nullable=false)
     */
    private $isVisible;



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
     * @param text $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return text $name
     */
    public function getName()
    {
        return $this->name;
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
     * Get isVisible
     *
     * @return boolean $isVisible
     */
    public function getIsVisible()
    {
        return $this->isVisible;
    }
}