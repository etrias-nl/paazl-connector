<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\RequestInterface;

class ServicePointsRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $hash = null;

    /**
     * @var int
     */
    protected $webshop = null;

    /**
     * @var int
     */
    protected $targetWebshop = null;

    /**
     * @var string
     */
    protected $shippingOption = null;

    /**
     * @var bool
     */
    protected $evening = null;

    /**
     * @var bool
     */
    protected $weekend = null;

    /**
     * @var string
     */
    protected $country = null;

    /**
     * @var string
     */
    protected $postcode = null;

    /**
     * @var nonNegativeInteger
     */
    protected $limit = null;

    /**
     * @var coordinatesType
     */
    protected $southWest = null;

    /**
     * @var coordinatesType
     */
    protected $northEast = null;

    /**
     * Constructor
     *
     * @var string $hash
     * @var int $webshop
     * @var int $targetWebshop
     * @var string $shippingOption
     * @var bool $evening
     * @var bool $weekend
     * @var string $country
     * @var string $postcode
     * @var nonNegativeInteger $limit
     * @var coordinatesType $southWest
     * @var coordinatesType $northEast
     */
    public function __construct($hash, $webshop, $targetWebshop, $shippingOption, $evening, $weekend, $country, $postcode, $limit, $southWest, $northEast)
    {
        $this->hash = $hash;
        $this->webshop = $webshop;
        $this->targetWebshop = $targetWebshop;
        $this->shippingOption = $shippingOption;
        $this->evening = $evening;
        $this->weekend = $weekend;
        $this->country = $country;
        $this->postcode = $postcode;
        $this->limit = $limit;
        $this->southWest = $southWest;
        $this->northEast = $northEast;
    }

    /**
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
        return $this;
    }

    /**
     * @return int
     */
    public function getWebshop()
    {
        return $this->webshop;
    }

    /**
     * @param int $webshop
     * @return $this
     */
    public function setWebshop($webshop)
    {
        $this->webshop = $webshop;
        return $this;
    }

    /**
     * @return int
     */
    public function getTargetWebshop()
    {
        return $this->targetWebshop;
    }

    /**
     * @param int $targetWebshop
     * @return $this
     */
    public function setTargetWebshop($targetWebshop)
    {
        $this->targetWebshop = $targetWebshop;
        return $this;
    }

    /**
     * @return string
     */
    public function getShippingOption()
    {
        return $this->shippingOption;
    }

    /**
     * @param string $shippingOption
     * @return $this
     */
    public function setShippingOption($shippingOption)
    {
        $this->shippingOption = $shippingOption;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEvening()
    {
        return $this->evening;
    }

    /**
     * @param bool $evening
     * @return $this
     */
    public function setEvening($evening)
    {
        $this->evening = $evening;
        return $this;
    }

    /**
     * @return bool
     */
    public function getWeekend()
    {
        return $this->weekend;
    }

    /**
     * @param bool $weekend
     * @return $this
     */
    public function setWeekend($weekend)
    {
        $this->weekend = $weekend;
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
     * @return nonNegativeInteger
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param nonNegativeInteger $limit
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return coordinatesType
     */
    public function getSouthWest()
    {
        return $this->southWest;
    }

    /**
     * @param coordinatesType $southWest
     * @return $this
     */
    public function setSouthWest($southWest)
    {
        $this->southWest = $southWest;
        return $this;
    }

    /**
     * @return coordinatesType
     */
    public function getNorthEast()
    {
        return $this->northEast;
    }

    /**
     * @param coordinatesType $northEast
     * @return $this
     */
    public function setNorthEast($northEast)
    {
        $this->northEast = $northEast;
        return $this;
    }


}

