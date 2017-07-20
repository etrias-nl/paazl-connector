<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rateRequest StructType
 * @subpackage Structs
 */
class RateRequest extends AbstractStructBase
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
     * The country
     * Meta informations extracted from the WSDL
     * - default: NL
     * - minOccurs: 0
     * @var string
     */
    public $country;
    /**
     * The postalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $postalCode;
    /**
     * The shippingOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shippingOption;
    /**
     * Constructor method for rateRequest
     * @uses RateRequest::setHash()
     * @uses RateRequest::setWebshop()
     * @uses RateRequest::setTargetWebshop()
     * @uses RateRequest::setOrderReference()
     * @uses RateRequest::setCountry()
     * @uses RateRequest::setPostalCode()
     * @uses RateRequest::setShippingOption()
     * @param string $hash
     * @param int $webshop
     * @param int $targetWebshop
     * @param string $orderReference
     * @param string $country
     * @param string $postalCode
     * @param string $shippingOption
     */
    public function __construct($hash = null, $webshop = null, $targetWebshop = null, $orderReference = null, $country = 'NL', $postalCode = null, $shippingOption = null)
    {
        $this
            ->setHash($hash)
            ->setWebshop($webshop)
            ->setTargetWebshop($targetWebshop)
            ->setOrderReference($orderReference)
            ->setCountry($country)
            ->setPostalCode($postalCode)
            ->setShippingOption($shippingOption);
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
     * @return \Etrias\PaazlConnector\StructType\RateRequest
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
     * @return \Etrias\PaazlConnector\StructType\RateRequest
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
     * @return \Etrias\PaazlConnector\StructType\RateRequest
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
     * @return \Etrias\PaazlConnector\StructType\RateRequest
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
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Etrias\PaazlConnector\StructType\RateRequest
     */
    public function setCountry($country = 'NL')
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get postalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }
    /**
     * Set postalCode value
     * @param string $postalCode
     * @return \Etrias\PaazlConnector\StructType\RateRequest
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        $this->postalCode = $postalCode;
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
     * @return \Etrias\PaazlConnector\StructType\RateRequest
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\RateRequest
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
