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

class ChangeSenderAddress
{
    /**
     * @var string
     */
    protected $addresseeLine = null;

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
    protected $zipcode = null;

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
     * @var string
     */
    protected $additionalAddressLine = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string $street
     * @var string $housenumber
     * @var string $addition
     * @var string $zipcode
     * @var string $city
     * @var string $province
     * @var string $country
     * @var string $additionalAddressLine
     *
     * @param mixed $addresseeLine
     * @param mixed $street
     * @param mixed $housenumber
     * @param mixed $addition
     * @param mixed $zipcode
     * @param mixed $city
     * @param mixed $province
     * @param mixed $country
     * @param mixed $additionalAddressLine
     */
    public function __construct($addresseeLine, $street, $housenumber, $addition, $zipcode, $city, $province, $country, $additionalAddressLine)
    {
        $this->addresseeLine = $addresseeLine;
        $this->street = $street;
        $this->housenumber = $housenumber;
        $this->addition = $addition;
        $this->zipcode = $zipcode;
        $this->city = $city;
        $this->province = $province;
        $this->country = $country;
        $this->additionalAddressLine = $additionalAddressLine;
    }

    /**
     * @return string
     */
    public function getAddresseeLine()
    {
        return $this->addresseeLine;
    }

    /**
     * @param string $addresseeLine
     *
     * @return $this
     */
    public function setAddresseeLine($addresseeLine)
    {
        $this->addresseeLine = $addresseeLine;

        return $this;
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
     *
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
     *
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
     *
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
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     *
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

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
     * @return string
     */
    public function getAdditionalAddressLine()
    {
        return $this->additionalAddressLine;
    }

    /**
     * @param string $additionalAddressLine
     *
     * @return $this
     */
    public function setAdditionalAddressLine($additionalAddressLine)
    {
        $this->additionalAddressLine = $additionalAddressLine;

        return $this;
    }
}
