<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingOptionRequest StructType
 * @subpackage Structs
 */
class ShippingOptionRequest extends AbstractStructBase
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
     * The evening
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $evening;
    /**
     * The weekend
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $weekend;
    /**
     * The extendedDeliveryDateDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $extendedDeliveryDateDetails;
    /**
     * The shippingOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shippingOption;
    /**
     * The deliveryEstimate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $deliveryEstimate;
    /**
     * The deliveryDateRange
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\DateRangeType
     */
    public $deliveryDateRange;
    /**
     * The sources
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\Sources
     */
    public $sources;
    /**
     * Constructor method for shippingOptionRequest
     * @uses ShippingOptionRequest::setHash()
     * @uses ShippingOptionRequest::setWebshop()
     * @uses ShippingOptionRequest::setTargetWebshop()
     * @uses ShippingOptionRequest::setOrderReference()
     * @uses ShippingOptionRequest::setPostcode()
     * @uses ShippingOptionRequest::setCountry()
     * @uses ShippingOptionRequest::setEvening()
     * @uses ShippingOptionRequest::setWeekend()
     * @uses ShippingOptionRequest::setExtendedDeliveryDateDetails()
     * @uses ShippingOptionRequest::setShippingOption()
     * @uses ShippingOptionRequest::setDeliveryEstimate()
     * @uses ShippingOptionRequest::setDeliveryDateRange()
     * @uses ShippingOptionRequest::setSources()
     * @param string $hash
     * @param int $webshop
     * @param int $targetWebshop
     * @param string $orderReference
     * @param string $postcode
     * @param string $country
     * @param bool $evening
     * @param bool $weekend
     * @param bool $extendedDeliveryDateDetails
     * @param string $shippingOption
     * @param bool $deliveryEstimate
     * @param \Etrias\PaazlConnector\StructType\DateRangeType $deliveryDateRange
     * @param \Etrias\PaazlConnector\StructType\Sources $sources
     */
    public function __construct($hash = null, $webshop = null, $targetWebshop = null, $orderReference = null, $postcode = null, $country = 'NL', $evening = null, $weekend = null, $extendedDeliveryDateDetails = null, $shippingOption = null, $deliveryEstimate = null, \Etrias\PaazlConnector\StructType\DateRangeType $deliveryDateRange = null, \Etrias\PaazlConnector\StructType\Sources $sources = null)
    {
        $this
            ->setHash($hash)
            ->setWebshop($webshop)
            ->setTargetWebshop($targetWebshop)
            ->setOrderReference($orderReference)
            ->setPostcode($postcode)
            ->setCountry($country)
            ->setEvening($evening)
            ->setWeekend($weekend)
            ->setExtendedDeliveryDateDetails($extendedDeliveryDateDetails)
            ->setShippingOption($shippingOption)
            ->setDeliveryEstimate($deliveryEstimate)
            ->setDeliveryDateRange($deliveryDateRange)
            ->setSources($sources);
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
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionRequest
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
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionRequest
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
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionRequest
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
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionRequest
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
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionRequest
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
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionRequest
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
     * Get evening value
     * @return bool|null
     */
    public function getEvening()
    {
        return $this->evening;
    }
    /**
     * Set evening value
     * @param bool $evening
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionRequest
     */
    public function setEvening($evening = null)
    {
        // validation for constraint: boolean
        if (!is_null($evening) && !is_bool($evening)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($evening)), __LINE__);
        }
        $this->evening = $evening;
        return $this;
    }
    /**
     * Get weekend value
     * @return bool|null
     */
    public function getWeekend()
    {
        return $this->weekend;
    }
    /**
     * Set weekend value
     * @param bool $weekend
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionRequest
     */
    public function setWeekend($weekend = null)
    {
        // validation for constraint: boolean
        if (!is_null($weekend) && !is_bool($weekend)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($weekend)), __LINE__);
        }
        $this->weekend = $weekend;
        return $this;
    }
    /**
     * Get extendedDeliveryDateDetails value
     * @return bool|null
     */
    public function getExtendedDeliveryDateDetails()
    {
        return $this->extendedDeliveryDateDetails;
    }
    /**
     * Set extendedDeliveryDateDetails value
     * @param bool $extendedDeliveryDateDetails
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionRequest
     */
    public function setExtendedDeliveryDateDetails($extendedDeliveryDateDetails = null)
    {
        // validation for constraint: boolean
        if (!is_null($extendedDeliveryDateDetails) && !is_bool($extendedDeliveryDateDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($extendedDeliveryDateDetails)), __LINE__);
        }
        $this->extendedDeliveryDateDetails = $extendedDeliveryDateDetails;
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
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionRequest
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
     * Get deliveryEstimate value
     * @return bool|null
     */
    public function getDeliveryEstimate()
    {
        return $this->deliveryEstimate;
    }
    /**
     * Set deliveryEstimate value
     * @param bool $deliveryEstimate
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionRequest
     */
    public function setDeliveryEstimate($deliveryEstimate = null)
    {
        // validation for constraint: boolean
        if (!is_null($deliveryEstimate) && !is_bool($deliveryEstimate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($deliveryEstimate)), __LINE__);
        }
        $this->deliveryEstimate = $deliveryEstimate;
        return $this;
    }
    /**
     * Get deliveryDateRange value
     * @return \Etrias\PaazlConnector\StructType\DateRangeType|null
     */
    public function getDeliveryDateRange()
    {
        return $this->deliveryDateRange;
    }
    /**
     * Set deliveryDateRange value
     * @param \Etrias\PaazlConnector\StructType\DateRangeType $deliveryDateRange
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionRequest
     */
    public function setDeliveryDateRange(\Etrias\PaazlConnector\StructType\DateRangeType $deliveryDateRange = null)
    {
        $this->deliveryDateRange = $deliveryDateRange;
        return $this;
    }
    /**
     * Get sources value
     * @return \Etrias\PaazlConnector\StructType\Sources|null
     */
    public function getSources()
    {
        return $this->sources;
    }
    /**
     * Set sources value
     * @param \Etrias\PaazlConnector\StructType\Sources $sources
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionRequest
     */
    public function setSources(\Etrias\PaazlConnector\StructType\Sources $sources = null)
    {
        $this->sources = $sources;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionRequest
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
