<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deliveryEstimateDestination StructType
 * @subpackage Structs
 */
class DeliveryEstimateDestination extends AbstractStructBase
{
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The province
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $province;
    /**
     * The city
     * @var string
     */
    public $city;
    /**
     * The postcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $postcode;
    /**
     * The postcodeRange
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\StringRangeType
     */
    public $postcodeRange;
    /**
     * Constructor method for deliveryEstimateDestination
     * @uses DeliveryEstimateDestination::setCountry()
     * @uses DeliveryEstimateDestination::setProvince()
     * @uses DeliveryEstimateDestination::setCity()
     * @uses DeliveryEstimateDestination::setPostcode()
     * @uses DeliveryEstimateDestination::setPostcodeRange()
     * @param string $country
     * @param string $province
     * @param string $city
     * @param string $postcode
     * @param \Etrias\PaazlConnector\StructType\StringRangeType $postcodeRange
     */
    public function __construct($country = null, $province = null, $city = null, $postcode = null, \Etrias\PaazlConnector\StructType\StringRangeType $postcodeRange = null)
    {
        $this
            ->setCountry($country)
            ->setProvince($province)
            ->setCity($city)
            ->setPostcode($postcode)
            ->setPostcodeRange($postcodeRange);
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
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateDestination
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get province value
     * @return string|null
     */
    public function getProvince()
    {
        return $this->province;
    }
    /**
     * Set province value
     * @param string $province
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateDestination
     */
    public function setProvince($province = null)
    {
        // validation for constraint: string
        if (!is_null($province) && !is_string($province)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($province)), __LINE__);
        }
        $this->province = $province;
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateDestination
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->city = $city;
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
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateDestination
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
     * Get postcodeRange value
     * @return \Etrias\PaazlConnector\StructType\StringRangeType|null
     */
    public function getPostcodeRange()
    {
        return $this->postcodeRange;
    }
    /**
     * Set postcodeRange value
     * @param \Etrias\PaazlConnector\StructType\StringRangeType $postcodeRange
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateDestination
     */
    public function setPostcodeRange(\Etrias\PaazlConnector\StructType\StringRangeType $postcodeRange = null)
    {
        $this->postcodeRange = $postcodeRange;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateDestination
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
