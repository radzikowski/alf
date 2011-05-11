<?php

namespace Alf\ShopBundle\Entity;

/**
 * Alf\ShopBundle\Entity\Logs
 *
 * @orm:Table(name="logs")
 * @orm:Entity
 */
class Logs
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
     * @var integer $userId
     *
     * @orm:Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var string $type
     *
     * @orm:Column(name="type", type="string", length=50, nullable=false)
     */
    private $type;

    /**
     * @var text $message
     *
     * @orm:Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var text $details
     *
     * @orm:Column(name="details", type="text", nullable=false)
     */
    private $details;

    /**
     * @var datetime $createdAt
     *
     * @orm:Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;


}