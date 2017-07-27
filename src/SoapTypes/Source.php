<?php

namespace Etrias\PaazlConnector\SoapTypes;

class Source
{

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var postCode
     */
    protected $postCode = null;

    /**
     * @var string
     */
    protected $city = null;

    /**
     * @var country
     */
    protected $country = null;

    /**
     * @var string
     */
    protected $timeZoneId = null;

    /**
     * Constructor
     *
     * @var string $name
     * @var postCode $postCode
     * @var string $city
     * @var country $country
     * @var string $timeZoneId
     */
    public function __construct($name, $postCode, $city, $country, $timeZoneId)
    {
        $this->name = $name;
        $this->postCode = $postCode;
        $this->city = $city;
        $this->country = $country;
        $this->timeZoneId = $timeZoneId;
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
     * @return postCode
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * @param postCode $postCode
     * @return $this
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param country $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeZoneId()
    {
        return $this->timeZoneId;
    }

    /**
     * @param string $timeZoneId
     * @return $this
     */
    public function setTimeZoneId($timeZoneId)
    {
        $this->timeZoneId = $timeZoneId;
        return $this;
    }


}

