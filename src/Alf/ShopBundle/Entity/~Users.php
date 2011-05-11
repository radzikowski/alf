<?php

namespace Alf\ShopBundle\Entity;

/**
 * Alf\ShopBundle\Entity\Users
 *
 * @orm:Table(name="users")
 * @orm:Entity
 */
class Users
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
     * @var string $firstName
     *
     * @orm:Column(name="first_name", type="string", length=30, nullable=true)
     */
    private $firstName;

    /**
     * @var string $lastName
     *
     * @orm:Column(name="last_name", type="string", length=70, nullable=true)
     */
    private $lastName;

    /**
     * @var string $sex
     *
     * @orm:Column(name="sex", type="string", length=10, nullable=true)
     */
    private $sex;

    /**
     * @var text $city
     *
     * @orm:Column(name="city", type="text", nullable=true)
     */
    private $city;

    /**
     * @var text $address
     *
     * @orm:Column(name="address", type="text", nullable=true)
     */
    private $address;

    /**
     * @var string $login
     *
     * @orm:Column(name="login", type="string", length=40, nullable=false)
     */
    private $login;

    /**
     * @var string $pass
     *
     * @orm:Column(name="pass", type="string", length=255, nullable=false)
     */
    private $pass;

    /**
     * @var string $email
     *
     * @orm:Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var datetime $createdAt
     *
     * @orm:Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;


}