<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\RequestInterface;

class PickupRequestOptionsRequest implements RequestInterface
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
    protected $internalReference = null;

    /**
     * @var string
     */
    protected $pickupCountry = null;

    /**
     * @var string
     */
    protected $deliveryCountry = null;

    /**
     * Constructor
     *
     * @var string $hash
     * @var int $webshop
     * @var int $targetWebshop
     * @var string $internalReference
     * @var string $pickupCountry
     * @var string $deliveryCountry
     */
    public function __construct($hash, $webshop, $targetWebshop, $internalReference, $pickupCountry, $deliveryCountry)
    {
        $this->hash = $hash;
        $this->webshop = $webshop;
        $this->targetWebshop = $targetWebshop;
        $this->internalReference = $internalReference;
        $this->pickupCountry = $pickupCountry;
        $this->deliveryCountry = $deliveryCountry;
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
    public function getInternalReference()
    {
        return $this->internalReference;
    }

    /**
     * @param string $internalReference
     * @return $this
     */
    public function setInternalReference($internalReference)
    {
        $this->internalReference = $internalReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupCountry()
    {
        return $this->pickupCountry;
    }

    /**
     * @param string $pickupCountry
     * @return $this
     */
    public function setPickupCountry($pickupCountry)
    {
        $this->pickupCountry = $pickupCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryCountry()
    {
        return $this->deliveryCountry;
    }

    /**
     * @param string $deliveryCountry
     * @return $this
     */
    public function setDeliveryCountry($deliveryCountry)
    {
        $this->deliveryCountry = $deliveryCountry;
        return $this;
    }


}

