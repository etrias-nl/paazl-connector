<?php

namespace Etrias\PaazlConnector\SoapTypes;

class AddressType
{

    /**
     * @var string
     */
    protected $street = null;

    /**
     * @var string
     */
    protected $housenumber = null;

    /**
     * @var string
     */
    protected $addition = null;

    /**
     * @var string
     */
    protected $address = null;

    /**
     * @var string
     */
    protected $additionalAddressLine = null;

    /**
     * @var string
     */
    protected $postcode = null;

    /**
     * @var string
     */
    protected $city = null;

    /**
     * @var string
     */
    protected $province = null;

    /**
     * @var string
     */
    protected $country = null;

    /**
     * Constructor
     *
     * @var string $street
     * @var string $housenumber
     * @var string $addition
     * @var string $address
     * @var string $additionalAddressLine
     * @var string $postcode
     * @var string $city
     * @var string $province
     * @var string $country
     */
    public function __construct($street, $housenumber, $addition, $address, $additionalAddressLine, $postcode, $city, $province, $country)
    {
        $this->street = $street;
        $this->housenumber = $housenumber;
        $this->addition = $addition;
        $this->address = $address;
        $this->additionalAddressLine = $additionalAddressLine;
        $this->postcode = $postcode;
        $this->city = $city;
        $this->province = $province;
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return $this
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getHousenumber()
    {
        return $this->housenumber;
    }

    /**
     * @param string $housenumber
     * @return $this
     */
    public function setHousenumber($housenumber)
    {
        $this->housenumber = $housenumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddition()
    {
        return $this->addition;
    }

    /**
     * @param string $addition
     * @return $this
     */
    public function setAddition($addition)
    {
        $this->addition = $addition;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalAddressLine()
    {
        return $this->additionalAddressLine;
    }

    /**
     * @param string $additionalAddressLine
     * @return $this
     */
    public function setAdditionalAddressLine($additionalAddressLine)
    {
        $this->additionalAddressLine = $additionalAddressLine;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param string $postcode
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
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
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param string $province
     * @return $this
     */
    public function setProvince($province)
    {
        $this->province = $province;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }


}

