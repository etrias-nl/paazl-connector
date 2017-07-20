<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for googleMapSearchstringRequest StructType
 * @subpackage Structs
 */
class GoogleMapSearchstringRequest extends AbstractStructBase
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
     * @var string
     */
    public $shippingOption;
    /**
     * The postcode
     * @var string
     */
    public $postcode;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - default: NL
     * - minOccurs: 0
     * @var string
     */
    public $country;
    /**
     * The servicepoint
     * @var int
     */
    public $servicepoint;
    /**
     * Constructor method for googleMapSearchstringRequest
     * @uses GoogleMapSearchstringRequest::setHash()
     * @uses GoogleMapSearchstringRequest::setWebshop()
     * @uses GoogleMapSearchstringRequest::setTargetWebshop()
     * @uses GoogleMapSearchstringRequest::setOrderReference()
     * @uses GoogleMapSearchstringRequest::setShippingOption()
     * @uses GoogleMapSearchstringRequest::setPostcode()
     * @uses GoogleMapSearchstringRequest::setCountry()
     * @uses GoogleMapSearchstringRequest::setServicepoint()
     * @param string $hash
     * @param int $webshop
     * @param int $targetWebshop
     * @param string $orderReference
     * @param string $shippingOption
     * @param string $postcode
     * @param string $country
     * @param int $servicepoint
     */
    public function __construct($hash = null, $webshop = null, $targetWebshop = null, $orderReference = null, $shippingOption = null, $postcode = null, $country = 'NL', $servicepoint = null)
    {
        $this
            ->setHash($hash)
            ->setWebshop($webshop)
            ->setTargetWebshop($targetWebshop)
            ->setOrderReference($orderReference)
            ->setShippingOption($shippingOption)
            ->setPostcode($postcode)
            ->setCountry($country)
            ->setServicepoint($servicepoint);
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
     * @return \Etrias\PaazlConnector\StructType\GoogleMapSearchstringRequest
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
     * @return \Etrias\PaazlConnector\StructType\GoogleMapSearchstringRequest
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
     * @return \Etrias\PaazlConnector\StructType\GoogleMapSearchstringRequest
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
     * @return \Etrias\PaazlConnector\StructType\GoogleMapSearchstringRequest
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
     * @return \Etrias\PaazlConnector\StructType\GoogleMapSearchstringRequest
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
     * Get postcode value
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->postcode;
    }
    /**
     * Set postcode value
     * @param string $postcode
     * @return \Etrias\PaazlConnector\StructType\GoogleMapSearchstringRequest
     */
    public function setPostcode($postcode = null)
    {
        // validation for constraint: string
        if (!is_null($postcode) && !is_string($postcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postcode)), __LINE__);
        }
        $this->postcode = $postcode;
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
     * @return \Etrias\PaazlConnector\StructType\GoogleMapSearchstringRequest
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
     * Get servicepoint value
     * @return int|null
     */
    public function getServicepoint()
    {
        return $this->servicepoint;
    }
    /**
     * Set servicepoint value
     * @param int $servicepoint
     * @return \Etrias\PaazlConnector\StructType\GoogleMapSearchstringRequest
     */
    public function setServicepoint($servicepoint = null)
    {
        // validation for constraint: int
        if (!is_null($servicepoint) && !is_numeric($servicepoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($servicepoint)), __LINE__);
        }
        $this->servicepoint = $servicepoint;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\GoogleMapSearchstringRequest
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
