<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deliveryEstimateRequest StructType
 * @subpackage Structs
 */
class DeliveryEstimateRequest extends AbstractStructBase
{
    /**
     * The hash
     * @var string
     */
    public $hash;
    /**
     * The webshop
     * @var int
     */
    public $webshop;
    /**
     * The targetWebshop
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $targetWebshop;
    /**
     * The orderReference
     * @var string
     */
    public $orderReference;
    /**
     * The shippingOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shippingOption;
    /**
     * The weight
     * Meta informations extracted from the WSDL
     * - minInclusive: 0
     * @var float
     */
    public $weight;
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - minInclusive: 0
     * @var float
     */
    public $value;
    /**
     * The valueCurrency
     * Meta informations extracted from the WSDL
     * - default: EUR
     * - minOccurs: 0
     * - length: 3
     * - pattern: [A-Z]{3}
     * @var string
     */
    public $valueCurrency;
    /**
     * The senderCountry
     * Meta informations extracted from the WSDL
     * - default: NL
     * - minOccurs: 0
     * @var string
     */
    public $senderCountry;
    /**
     * The senderCity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $senderCity;
    /**
     * The senderPostcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $senderPostcode;
    /**
     * The consigneeCountry
     * Meta informations extracted from the WSDL
     * - default: NL
     * - minOccurs: 0
     * @var string
     */
    public $consigneeCountry;
    /**
     * The consigneeCity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $consigneeCity;
    /**
     * The consigneePostcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $consigneePostcode;
    /**
     * Constructor method for deliveryEstimateRequest
     * @uses DeliveryEstimateRequest::setHash()
     * @uses DeliveryEstimateRequest::setWebshop()
     * @uses DeliveryEstimateRequest::setTargetWebshop()
     * @uses DeliveryEstimateRequest::setOrderReference()
     * @uses DeliveryEstimateRequest::setShippingOption()
     * @uses DeliveryEstimateRequest::setWeight()
     * @uses DeliveryEstimateRequest::setValue()
     * @uses DeliveryEstimateRequest::setValueCurrency()
     * @uses DeliveryEstimateRequest::setSenderCountry()
     * @uses DeliveryEstimateRequest::setSenderCity()
     * @uses DeliveryEstimateRequest::setSenderPostcode()
     * @uses DeliveryEstimateRequest::setConsigneeCountry()
     * @uses DeliveryEstimateRequest::setConsigneeCity()
     * @uses DeliveryEstimateRequest::setConsigneePostcode()
     * @param string $hash
     * @param int $webshop
     * @param int $targetWebshop
     * @param string $orderReference
     * @param string $shippingOption
     * @param float $weight
     * @param float $value
     * @param string $valueCurrency
     * @param string $senderCountry
     * @param string $senderCity
     * @param string $senderPostcode
     * @param string $consigneeCountry
     * @param string $consigneeCity
     * @param string $consigneePostcode
     */
    public function __construct($hash = null, $webshop = null, $targetWebshop = null, $orderReference = null, $shippingOption = null, $weight = null, $value = null, $valueCurrency = 'EUR', $senderCountry = 'NL', $senderCity = null, $senderPostcode = null, $consigneeCountry = 'NL', $consigneeCity = null, $consigneePostcode = null)
    {
        $this
            ->setHash($hash)
            ->setWebshop($webshop)
            ->setTargetWebshop($targetWebshop)
            ->setOrderReference($orderReference)
            ->setShippingOption($shippingOption)
            ->setWeight($weight)
            ->setValue($value)
            ->setValueCurrency($valueCurrency)
            ->setSenderCountry($senderCountry)
            ->setSenderCity($senderCity)
            ->setSenderPostcode($senderPostcode)
            ->setConsigneeCountry($consigneeCountry)
            ->setConsigneeCity($consigneeCity)
            ->setConsigneePostcode($consigneePostcode);
    }
    /**
     * Get hash value
     * @return string|null
     */
    public function getHash()
    {
        return $this->hash;
    }
    /**
     * Set hash value
     * @param string $hash
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateRequest
     */
    public function setHash($hash = null)
    {
        // validation for constraint: string
        if (!is_null($hash) && !is_string($hash)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hash)), __LINE__);
        }
        $this->hash = $hash;
        return $this;
    }
    /**
     * Get webshop value
     * @return int|null
     */
    public function getWebshop()
    {
        return $this->webshop;
    }
    /**
     * Set webshop value
     * @param int $webshop
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateRequest
     */
    public function setWebshop($webshop = null)
    {
        // validation for constraint: int
        if (!is_null($webshop) && !is_numeric($webshop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($webshop)), __LINE__);
        }
        $this->webshop = $webshop;
        return $this;
    }
    /**
     * Get targetWebshop value
     * @return int|null
     */
    public function getTargetWebshop()
    {
        return $this->targetWebshop;
    }
    /**
     * Set targetWebshop value
     * @param int $targetWebshop
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateRequest
     */
    public function setTargetWebshop($targetWebshop = null)
    {
        // validation for constraint: int
        if (!is_null($targetWebshop) && !is_numeric($targetWebshop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($targetWebshop)), __LINE__);
        }
        $this->targetWebshop = $targetWebshop;
        return $this;
    }
    /**
     * Get orderReference value
     * @return string|null
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }
    /**
     * Set orderReference value
     * @param string $orderReference
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateRequest
     */
    public function setOrderReference($orderReference = null)
    {
        // validation for constraint: string
        if (!is_null($orderReference) && !is_string($orderReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderReference)), __LINE__);
        }
        $this->orderReference = $orderReference;
        return $this;
    }
    /**
     * Get shippingOption value
     * @return string|null
     */
    public function getShippingOption()
    {
        return $this->shippingOption;
    }
    /**
     * Set shippingOption value
     * @param string $shippingOption
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateRequest
     */
    public function setShippingOption($shippingOption = null)
    {
        // validation for constraint: string
        if (!is_null($shippingOption) && !is_string($shippingOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingOption)), __LINE__);
        }
        $this->shippingOption = $shippingOption;
        return $this;
    }
    /**
     * Get weight value
     * @return float|null
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param float $weight
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateRequest
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: minInclusive
        if ($weight < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $weight), __LINE__);
        }
        $this->weight = $weight;
        return $this;
    }
    /**
     * Get value value
     * @return float|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param float $value
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateRequest
     */
    public function setValue($value = null)
    {
        // validation for constraint: minInclusive
        if ($value < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $value), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Get valueCurrency value
     * @return string|null
     */
    public function getValueCurrency()
    {
        return $this->valueCurrency;
    }
    /**
     * Set valueCurrency value
     * @param string $valueCurrency
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateRequest
     */
    public function setValueCurrency($valueCurrency = 'EUR')
    {
        // validation for constraint: length
        if ((is_scalar($valueCurrency) && strlen($valueCurrency) !== 3) || (is_array($valueCurrency) && count($valueCurrency) !== 3)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 3 element(s) or a scalar of 3 character(s)', __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($valueCurrency) && !preg_match('/[A-Z]{3}/', $valueCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{3}", "%s" given', var_export($valueCurrency, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($valueCurrency) && !is_string($valueCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($valueCurrency)), __LINE__);
        }
        $this->valueCurrency = $valueCurrency;
        return $this;
    }
    /**
     * Get senderCountry value
     * @return string|null
     */
    public function getSenderCountry()
    {
        return $this->senderCountry;
    }
    /**
     * Set senderCountry value
     * @param string $senderCountry
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateRequest
     */
    public function setSenderCountry($senderCountry = 'NL')
    {
        // validation for constraint: string
        if (!is_null($senderCountry) && !is_string($senderCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderCountry)), __LINE__);
        }
        $this->senderCountry = $senderCountry;
        return $this;
    }
    /**
     * Get senderCity value
     * @return string|null
     */
    public function getSenderCity()
    {
        return $this->senderCity;
    }
    /**
     * Set senderCity value
     * @param string $senderCity
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateRequest
     */
    public function setSenderCity($senderCity = null)
    {
        // validation for constraint: string
        if (!is_null($senderCity) && !is_string($senderCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderCity)), __LINE__);
        }
        $this->senderCity = $senderCity;
        return $this;
    }
    /**
     * Get senderPostcode value
     * @return string|null
     */
    public function getSenderPostcode()
    {
        return $this->senderPostcode;
    }
    /**
     * Set senderPostcode value
     * @param string $senderPostcode
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateRequest
     */
    public function setSenderPostcode($senderPostcode = null)
    {
        // validation for constraint: string
        if (!is_null($senderPostcode) && !is_string($senderPostcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderPostcode)), __LINE__);
        }
        $this->senderPostcode = $senderPostcode;
        return $this;
    }
    /**
     * Get consigneeCountry value
     * @return string|null
     */
    public function getConsigneeCountry()
    {
        return $this->consigneeCountry;
    }
    /**
     * Set consigneeCountry value
     * @param string $consigneeCountry
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateRequest
     */
    public function setConsigneeCountry($consigneeCountry = 'NL')
    {
        // validation for constraint: string
        if (!is_null($consigneeCountry) && !is_string($consigneeCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($consigneeCountry)), __LINE__);
        }
        $this->consigneeCountry = $consigneeCountry;
        return $this;
    }
    /**
     * Get consigneeCity value
     * @return string|null
     */
    public function getConsigneeCity()
    {
        return $this->consigneeCity;
    }
    /**
     * Set consigneeCity value
     * @param string $consigneeCity
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateRequest
     */
    public function setConsigneeCity($consigneeCity = null)
    {
        // validation for constraint: string
        if (!is_null($consigneeCity) && !is_string($consigneeCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($consigneeCity)), __LINE__);
        }
        $this->consigneeCity = $consigneeCity;
        return $this;
    }
    /**
     * Get consigneePostcode value
     * @return string|null
     */
    public function getConsigneePostcode()
    {
        return $this->consigneePostcode;
    }
    /**
     * Set consigneePostcode value
     * @param string $consigneePostcode
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateRequest
     */
    public function setConsigneePostcode($consigneePostcode = null)
    {
        // validation for constraint: string
        if (!is_null($consigneePostcode) && !is_string($consigneePostcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($consigneePostcode)), __LINE__);
        }
        $this->consigneePostcode = $consigneePostcode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateRequest
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
