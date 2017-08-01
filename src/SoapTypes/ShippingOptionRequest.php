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

use Phpro\SoapClient\Type\RequestInterface;

class ShippingOptionRequest implements RequestInterface
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
    protected $orderReference = null;

    /**
     * @var string
     */
    protected $postcode = null;

    /**
     * @var string
     */
    protected $country = null;

    /**
     * @var bool
     */
    protected $evening = null;

    /**
     * @var bool
     */
    protected $weekend = null;

    /**
     * @var bool
     */
    protected $extendedDeliveryDateDetails = null;

    /**
     * @var string
     */
    protected $shippingOption = null;

    /**
     * @var bool
     */
    protected $deliveryEstimate = null;

    /**
     * @var \DateTimeRangeType
     */
    protected $deliveryDateRange = null;

    /**
     * @var sources
     */
    protected $sources = null;

    /**
     * Constructor.
     *
     * @var string
     * @var int                $webshop
     * @var int                $targetWebshop
     * @var string             $orderReference
     * @var string             $postcode
     * @var string             $country
     * @var bool               $evening
     * @var bool               $weekend
     * @var bool               $extendedDeliveryDateDetails
     * @var string             $shippingOption
     * @var bool               $deliveryEstimate
     * @var \DateTimeRangeType $deliveryDateRange
     * @var sources            $sources
     *
     * @param mixed $hash
     * @param mixed $webshop
     * @param mixed $targetWebshop
     * @param mixed $orderReference
     * @param mixed $postcode
     * @param mixed $country
     * @param mixed $evening
     * @param mixed $weekend
     * @param mixed $extendedDeliveryDateDetails
     * @param mixed $shippingOption
     * @param mixed $deliveryEstimate
     * @param mixed $deliveryDateRange
     * @param mixed $sources
     */
    public function __construct($hash, $webshop, $targetWebshop, $orderReference, $postcode, $country, $evening, $weekend, $extendedDeliveryDateDetails, $shippingOption, $deliveryEstimate, $deliveryDateRange, $sources)
    {
        $this->hash = $hash;
        $this->webshop = $webshop;
        $this->targetWebshop = $targetWebshop;
        $this->orderReference = $orderReference;
        $this->postcode = $postcode;
        $this->country = $country;
        $this->evening = $evening;
        $this->weekend = $weekend;
        $this->extendedDeliveryDateDetails = $extendedDeliveryDateDetails;
        $this->shippingOption = $shippingOption;
        $this->deliveryEstimate = $deliveryEstimate;
        $this->deliveryDateRange = $deliveryDateRange;
        $this->sources = $sources;
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
     *
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
     *
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
     *
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
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @param string $orderReference
     *
     * @return $this
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;

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
     * @return bool
     */
    public function getEvening()
    {
        return $this->evening;
    }

    /**
     * @param bool $evening
     *
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
     *
     * @return $this
     */
    public function setWeekend($weekend)
    {
        $this->weekend = $weekend;

        return $this;
    }

    /**
     * @return bool
     */
    public function getExtendedDeliveryDateDetails()
    {
        return $this->extendedDeliveryDateDetails;
    }

    /**
     * @param bool $extendedDeliveryDateDetails
     *
     * @return $this
     */
    public function setExtendedDeliveryDateDetails($extendedDeliveryDateDetails)
    {
        $this->extendedDeliveryDateDetails = $extendedDeliveryDateDetails;

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
     *
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
    public function getDeliveryEstimate()
    {
        return $this->deliveryEstimate;
    }

    /**
     * @param bool $deliveryEstimate
     *
     * @return $this
     */
    public function setDeliveryEstimate($deliveryEstimate)
    {
        $this->deliveryEstimate = $deliveryEstimate;

        return $this;
    }

    /**
     * @return \DateTimeRangeType
     */
    public function getDeliveryDateRange()
    {
        return $this->deliveryDateRange;
    }

    /**
     * @param \DateTimeRangeType $deliveryDateRange
     *
     * @return $this
     */
    public function setDeliveryDateRange($deliveryDateRange)
    {
        $this->deliveryDateRange = $deliveryDateRange;

        return $this;
    }

    /**
     * @return sources
     */
    public function getSources()
    {
        return $this->sources;
    }

    /**
     * @param sources $sources
     *
     * @return $this
     */
    public function setSources($sources)
    {
        $this->sources = $sources;

        return $this;
    }
}
