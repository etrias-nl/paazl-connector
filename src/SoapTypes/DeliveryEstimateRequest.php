<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\RequestInterface;

class DeliveryEstimateRequest implements RequestInterface
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
    protected $shippingOption = null;

    /**
     * @var nonNegativeDecimal
     */
    protected $weight = null;

    /**
     * @var nonNegativeDecimal
     */
    protected $value = null;

    /**
     * @var currencyCode
     */
    protected $valueCurrency = null;

    /**
     * @var string
     */
    protected $senderCountry = null;

    /**
     * @var string
     */
    protected $senderCity = null;

    /**
     * @var string
     */
    protected $senderPostcode = null;

    /**
     * @var string
     */
    protected $consigneeCountry = null;

    /**
     * @var string
     */
    protected $consigneeCity = null;

    /**
     * @var string
     */
    protected $consigneePostcode = null;

    /**
     * Constructor
     *
     * @var string $hash
     * @var int $webshop
     * @var int $targetWebshop
     * @var string $orderReference
     * @var string $shippingOption
     * @var nonNegativeDecimal $weight
     * @var nonNegativeDecimal $value
     * @var currencyCode $valueCurrency
     * @var string $senderCountry
     * @var string $senderCity
     * @var string $senderPostcode
     * @var string $consigneeCountry
     * @var string $consigneeCity
     * @var string $consigneePostcode
     */
    public function __construct($hash, $webshop, $targetWebshop, $orderReference, $shippingOption, $weight, $value, $valueCurrency, $senderCountry, $senderCity, $senderPostcode, $consigneeCountry, $consigneeCity, $consigneePostcode)
    {
        $this->hash = $hash;
        $this->webshop = $webshop;
        $this->targetWebshop = $targetWebshop;
        $this->orderReference = $orderReference;
        $this->shippingOption = $shippingOption;
        $this->weight = $weight;
        $this->value = $value;
        $this->valueCurrency = $valueCurrency;
        $this->senderCountry = $senderCountry;
        $this->senderCity = $senderCity;
        $this->senderPostcode = $senderPostcode;
        $this->consigneeCountry = $consigneeCountry;
        $this->consigneeCity = $consigneeCity;
        $this->consigneePostcode = $consigneePostcode;
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
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @param string $orderReference
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
     * @return nonNegativeDecimal
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param nonNegativeDecimal $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return nonNegativeDecimal
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param nonNegativeDecimal $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return currencyCode
     */
    public function getValueCurrency()
    {
        return $this->valueCurrency;
    }

    /**
     * @param currencyCode $valueCurrency
     * @return $this
     */
    public function setValueCurrency($valueCurrency)
    {
        $this->valueCurrency = $valueCurrency;
        return $this;
    }

    /**
     * @return string
     */
    public function getSenderCountry()
    {
        return $this->senderCountry;
    }

    /**
     * @param string $senderCountry
     * @return $this
     */
    public function setSenderCountry($senderCountry)
    {
        $this->senderCountry = $senderCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getSenderCity()
    {
        return $this->senderCity;
    }

    /**
     * @param string $senderCity
     * @return $this
     */
    public function setSenderCity($senderCity)
    {
        $this->senderCity = $senderCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getSenderPostcode()
    {
        return $this->senderPostcode;
    }

    /**
     * @param string $senderPostcode
     * @return $this
     */
    public function setSenderPostcode($senderPostcode)
    {
        $this->senderPostcode = $senderPostcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeCountry()
    {
        return $this->consigneeCountry;
    }

    /**
     * @param string $consigneeCountry
     * @return $this
     */
    public function setConsigneeCountry($consigneeCountry)
    {
        $this->consigneeCountry = $consigneeCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeCity()
    {
        return $this->consigneeCity;
    }

    /**
     * @param string $consigneeCity
     * @return $this
     */
    public function setConsigneeCity($consigneeCity)
    {
        $this->consigneeCity = $consigneeCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneePostcode()
    {
        return $this->consigneePostcode;
    }

    /**
     * @param string $consigneePostcode
     * @return $this
     */
    public function setConsigneePostcode($consigneePostcode)
    {
        $this->consigneePostcode = $consigneePostcode;
        return $this;
    }


}

