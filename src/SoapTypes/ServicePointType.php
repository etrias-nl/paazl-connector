<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Etrias\PaazlConnector\SoapTypes;

class ServicePointType
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
    protected $address = null;

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
     * @var coordinatesType
     */
    protected $coordinates = null;

    /**
     * @var float
     */
    protected $distance = null;

    /**
     * @var businessHoursType
     */
    protected $businessHours = null;

    /**
     * @var servicePointExtraDetails
     */
    protected $extraDetails = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string                   $name
     * @var string                   $address
     * @var string                   $postcode
     * @var string                   $city
     * @var string                   $province
     * @var string                   $country
     * @var coordinatesType          $coordinates
     * @var float                    $distance
     * @var businessHoursType        $businessHours
     * @var servicePointExtraDetails $extraDetails
     *
     * @param mixed $code
     * @param mixed $name
     * @param mixed $address
     * @param mixed $postcode
     * @param mixed $city
     * @param mixed $province
     * @param mixed $country
     * @param mixed $coordinates
     * @param mixed $distance
     * @param mixed $businessHours
     * @param mixed $extraDetails
     */
    public function __construct($code, $name, $address, $postcode, $city, $province, $country, $coordinates, $distance, $businessHours, $extraDetails)
    {
        $this->code = $code;
        $this->name = $name;
        $this->address = $address;
        $this->postcode = $postcode;
        $this->city = $city;
        $this->province = $province;
        $this->country = $country;
        $this->coordinates = $coordinates;
        $this->distance = $distance;
        $this->businessHours = $businessHours;
        $this->extraDetails = $extraDetails;
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
     *
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
     *
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
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     *
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
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param string $postcode
     *
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
     *
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
     *
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
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

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
     *
     * @return $this
     */
    public function setCoordinates($coordinates)
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    /**
     * @return float
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param float $distance
     *
     * @return $this
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * @return businessHoursType
     */
    public function getBusinessHours()
    {
        return $this->businessHours;
    }

    /**
     * @param businessHoursType $businessHours
     *
     * @return $this
     */
    public function setBusinessHours($businessHours)
    {
        $this->businessHours = $businessHours;

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
     *
     * @return $this
     */
    public function setExtraDetails($extraDetails)
    {
        $this->extraDetails = $extraDetails;

        return $this;
    }
}
