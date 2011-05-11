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
     * Set firstName
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Get firstName
     *
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Get lastName
     *
     * @return string $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set sex
     *
     * @param string $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * Get sex
     *
     * @return string $sex
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set city
     *
     * @param text $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * Get city
     *
     * @return text $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set address
     *
     * @param text $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Get address
     *
     * @return text $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set login
     *
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * Get login
     *
     * @return string $login
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set pass
     *
     * @param string $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    /**
     * Get pass
     *
     * @return string $pass
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
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
}