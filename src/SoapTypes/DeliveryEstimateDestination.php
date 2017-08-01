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

class DeliveryEstimateDestination
{
    /**
     * @var string
     */
    protected $country = null;

    /**
     * @var string
     */
    protected $province = null;

    /**
     * @var string
     */
    protected $city = null;

    /**
     * @var string
     */
    protected $postcode = null;

    /**
     * @var stringRangeType
     */
    protected $postcodeRange = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string          $province
     * @var string          $city
     * @var string          $postcode
     * @var stringRangeType $postcodeRange
     *
     * @param mixed $country
     * @param mixed $province
     * @param mixed $city
     * @param mixed $postcode
     * @param mixed $postcodeRange
     */
    public function __construct($country, $province, $city, $postcode, $postcodeRange)
    {
        $this->country = $country;
        $this->province = $province;
        $this->city = $city;
        $this->postcode = $postcode;
        $this->postcodeRange = $postcodeRange;
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
     * @return stringRangeType
     */
    public function getPostcodeRange()
    {
        return $this->postcodeRange;
    }

    /**
     * @param stringRangeType $postcodeRange
     *
     * @return $this
     */
    public function setPostcodeRange($postcodeRange)
    {
        $this->postcodeRange = $postcodeRange;

        return $this;
    }
}
