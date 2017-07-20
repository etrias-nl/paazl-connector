<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pickupRequestOptionsRequest StructType
 * @subpackage Structs
 */
class PickupRequestOptionsRequest extends AbstractStructBase
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
     * The internalReference
     * @var string
     */
    public $internalReference;
    /**
     * The pickupCountry
     * Meta informations extracted from the WSDL
     * - default: NL
     * - minOccurs: 0
     * @var string
     */
    public $pickupCountry;
    /**
     * The deliveryCountry
     * Meta informations extracted from the WSDL
     * - default: NL
     * - minOccurs: 0
     * @var string
     */
    public $deliveryCountry;
    /**
     * Constructor method for pickupRequestOptionsRequest
     * @uses PickupRequestOptionsRequest::setHash()
     * @uses PickupRequestOptionsRequest::setWebshop()
     * @uses PickupRequestOptionsRequest::setTargetWebshop()
     * @uses PickupRequestOptionsRequest::setInternalReference()
     * @uses PickupRequestOptionsRequest::setPickupCountry()
     * @uses PickupRequestOptionsRequest::setDeliveryCountry()
     * @param string $hash
     * @param int $webshop
     * @param int $targetWebshop
     * @param string $internalReference
     * @param string $pickupCountry
     * @param string $deliveryCountry
     */
    public function __construct($hash = null, $webshop = null, $targetWebshop = null, $internalReference = null, $pickupCountry = 'NL', $deliveryCountry = 'NL')
    {
        $this
            ->setHash($hash)
            ->setWebshop($webshop)
            ->setTargetWebshop($targetWebshop)
            ->setInternalReference($internalReference)
            ->setPickupCountry($pickupCountry)
            ->setDeliveryCountry($deliveryCountry);
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestOptionsRequest
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestOptionsRequest
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestOptionsRequest
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
     * Get internalReference value
     * @return string|null
     */
    public function getInternalReference()
    {
        return $this->internalReference;
    }
    /**
     * Set internalReference value
     * @param string $internalReference
     * @return \Etrias\PaazlConnector\StructType\PickupRequestOptionsRequest
     */
    public function setInternalReference($internalReference = null)
    {
        // validation for constraint: string
        if (!is_null($internalReference) && !is_string($internalReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($internalReference)), __LINE__);
        }
        $this->internalReference = $internalReference;
        return $this;
    }
    /**
     * Get pickupCountry value
     * @return string|null
     */
    public function getPickupCountry()
    {
        return $this->pickupCountry;
    }
    /**
     * Set pickupCountry value
     * @param string $pickupCountry
     * @return \Etrias\PaazlConnector\StructType\PickupRequestOptionsRequest
     */
    public function setPickupCountry($pickupCountry = 'NL')
    {
        // validation for constraint: string
        if (!is_null($pickupCountry) && !is_string($pickupCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupCountry)), __LINE__);
        }
        $this->pickupCountry = $pickupCountry;
        return $this;
    }
    /**
     * Get deliveryCountry value
     * @return string|null
     */
    public function getDeliveryCountry()
    {
        return $this->deliveryCountry;
    }
    /**
     * Set deliveryCountry value
     * @param string $deliveryCountry
     * @return \Etrias\PaazlConnector\StructType\PickupRequestOptionsRequest
     */
    public function setDeliveryCountry($deliveryCountry = 'NL')
    {
        // validation for constraint: string
        if (!is_null($deliveryCountry) && !is_string($deliveryCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryCountry)), __LINE__);
        }
        $this->deliveryCountry = $deliveryCountry;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\PickupRequestOptionsRequest
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
