<?php

namespace Etrias\PaazlConnector\SoapTypes;

class ServicePointDetailsType
{

    /**
     * @var string
     */
    protected $code = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var string
     */
    protected $notificationEmail = null;

    /**
     * @var string
     */
    protected $notificationMobile = null;

    /**
     * @var addressType
     */
    protected $address = null;

    /**
     * Constructor
     *
     * @var string $code
     * @var string $name
     * @var string $notificationEmail
     * @var string $notificationMobile
     * @var addressType $address
     */
    public function __construct($code, $name, $notificationEmail, $notificationMobile, $address)
    {
        $this->code = $code;
        $this->name = $name;
        $this->notificationEmail = $notificationEmail;
        $this->notificationMobile = $notificationMobile;
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotificationEmail()
    {
        return $this->notificationEmail;
    }

    /**
     * @param string $notificationEmail
     * @return $this
     */
    public function setNotificationEmail($notificationEmail)
    {
        $this->notificationEmail = $notificationEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotificationMobile()
    {
        return $this->notificationMobile;
    }

    /**
     * @param string $notificationMobile
     * @return $this
     */
    public function setNotificationMobile($notificationMobile)
    {
        $this->notificationMobile = $notificationMobile;
        return $this;
    }

    /**
     * @return addressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param addressType $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }


}

