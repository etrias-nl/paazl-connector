<?php

namespace Etrias\PaazlConnector\SoapTypes;

class ServicePoint
{

    /**
     * @var string
     */
    protected $distributor = null;

    /**
     * @var string
     */
    protected $shippingOption = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var string
     */
    protected $postcode = null;

    /**
     * @var string
     */
    protected $address = null;

    /**
     * @var string
     */
    protected $city = null;

    /**
     * @var string
     */
    protected $province = null;

    /**
     * @var coordinatesType
     */
    protected $coordinates = null;

    /**
     * @var string
     */
    protected $distance = null;

    /**
     * @var string
     */
    protected $code = null;

    /**
     * @var float
     */
    protected $price = null;

    /**
     * @var openingTimes
     */
    protected $openingTimes = null;

    /**
     * @var servicePointExtraDetails
     */
    protected $extraDetails = null;

    /**
     * Constructor
     *
     * @var string $distributor
     * @var string $shippingOption
     * @var string $name
     * @var string $postcode
     * @var string $address
     * @var string $city
     * @var string $province
     * @var coordinatesType $coordinates
     * @var string $distance
     * @var string $code
     * @var float $price
     * @var openingTimes $openingTimes
     * @var servicePointExtraDetails $extraDetails
     */
    public function __construct($distributor, $shippingOption, $name, $postcode, $address, $city, $province, $coordinates, $distance, $code, $price, $openingTimes, $extraDetails)
    {
        $this->distributor = $distributor;
        $this->shippingOption = $shippingOption;
        $this->name = $name;
        $this->postcode = $postcode;
        $this->address = $address;
        $this->city = $city;
        $this->province = $province;
        $this->coordinates = $coordinates;
        $this->distance = $distance;
        $this->code = $code;
        $this->price = $price;
        $this->openingTimes = $openingTimes;
        $this->extraDetails = $extraDetails;
    }

    /**
     * @return string
     */
    public function getDistributor()
    {
        return $this->distributor;
    }

    /**
     * @param string $distributor
     * @return $this
     */
    public function setDistributor($distributor)
    {
        $this->distributor = $distributor;
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
     * @return coordinatesType
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * @param coordinatesType $coordinates
     * @return $this
     */
    public function setCoordinates($coordinates)
    {
        $this->coordinates = $coordinates;
        return $this;
    }

    /**
     * @return string
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param string $distance
     * @return $this
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
        return $this;
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
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return openingTimes
     */
    public function getOpeningTimes()
    {
        return $this->openingTimes;
    }

    /**
     * @param openingTimes $openingTimes
     * @return $this
     */
    public function setOpeningTimes($openingTimes)
    {
        $this->openingTimes = $openingTimes;
        return $this;
    }

    /**
     * @return servicePointExtraDetails
     */
    public function getExtraDetails()
    {
        return $this->extraDetails;
    }

    /**
     * @param servicePointExtraDetails $extraDetails
     * @return $this
     */
    public function setExtraDetails($extraDetails)
    {
        $this->extraDetails = $extraDetails;
        return $this;
    }


}

