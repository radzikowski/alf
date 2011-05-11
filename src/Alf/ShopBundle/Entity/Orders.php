<?php

namespace Alf\ShopBundle\Entity;

/**
 * Alf\ShopBundle\Entity\Orders
 *
 * @orm:Table(name="orders")
 * @orm:Entity
 */
class Orders
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
     * @var text $userNip
     *
     * @orm:Column(name="user_nip", type="text", nullable=true)
     */
    private $userNip;

    /**
     * @var text $productsList
     *
     * @orm:Column(name="products_list", type="text", nullable=false)
     */
    private $productsList;

    /**
     * @var text $deliveryAddress
     *
     * @orm:Column(name="delivery_address", type="text", nullable=false)
     */
    private $deliveryAddress;

    /**
     * @var float $orderCost
     *
     * @orm:Column(name="order_cost", type="float", nullable=false)
     */
    private $orderCost;

    /**
     * @var float $deliveryCost
     *
     * @orm:Column(name="delivery_cost", type="float", nullable=false)
     */
    private $deliveryCost;

    /**
     * @var datetime $createdAt
     *
     * @orm:Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var Users
     *
     * @orm:ManyToOne(targetEntity="Users")
     * @orm:JoinColumns({
     *   @orm:JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



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
     * Set userNip
     *
     * @param text $userNip
     */
    public function setUserNip($userNip)
    {
        $this->userNip = $userNip;
    }

    /**
     * Get userNip
     *
     * @return text $userNip
     */
    public function getUserNip()
    {
        return $this->userNip;
    }

    /**
     * Set productsList
     *
     * @param text $productsList
     */
    public function setProductsList($productsList)
    {
        $this->productsList = $productsList;
    }

    /**
     * Get productsList
     *
     * @return text $productsList
     */
    public function getProductsList()
    {
        return $this->productsList;
    }

    /**
     * Set deliveryAddress
     *
     * @param text $deliveryAddress
     */
    public function setDeliveryAddress($deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
    }

    /**
     * Get deliveryAddress
     *
     * @return text $deliveryAddress
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * Set orderCost
     *
     * @param float $orderCost
     */
    public function setOrderCost($orderCost)
    {
        $this->orderCost = $orderCost;
    }

    /**
     * Get orderCost
     *
     * @return float $orderCost
     */
    public function getOrderCost()
    {
        return $this->orderCost;
    }

    /**
     * Set deliveryCost
     *
     * @param float $deliveryCost
     */
    public function setDeliveryCost($deliveryCost)
    {
        $this->deliveryCost = $deliveryCost;
    }

    /**
     * Get deliveryCost
     *
     * @return float $deliveryCost
     */
    public function getDeliveryCost()
    {
        return $this->deliveryCost;
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
     * Set user
     *
     * @param Alf\ShopBundle\Entity\Users $user
     */
    public function setUser(\Alf\ShopBundle\Entity\Users $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return Alf\ShopBundle\Entity\Users $user
     */
    public function getUser()
    {
        return $this->user;
    }
}