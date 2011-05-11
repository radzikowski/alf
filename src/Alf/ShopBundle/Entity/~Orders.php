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


}