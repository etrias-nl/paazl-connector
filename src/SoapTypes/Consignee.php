<?php

namespace Etrias\PaazlConnector\SoapTypes;

class Consignee
{

    /**
     * @var string
     */
    protected $country = null;

    /**
     * @var string
     */
    protected $postcode = null;

    /**
     * @var string
     */
    protected $city = null;

    /**
     * Constructor
     *
     * @var string $country
     * @var string $postcode
     * @var string $city
     */
    public function __construct($country, $postcode, $city)
    {
        $this->country = $country;
        $this->postcode = $postcode;
        $this->city = $city;
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


}

