<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for consignee StructType
 * @subpackage Structs
 */
class Consignee extends AbstractStructBase
{
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $country;
    /**
     * The postcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $postcode;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $city;
    /**
     * Constructor method for consignee
     * @uses Consignee::setCountry()
     * @uses Consignee::setPostcode()
     * @uses Consignee::setCity()
     * @param string $country
     * @param string $postcode
     * @param string $city
     */
    public function __construct($country = null, $postcode = null, $city = null)
    {
        $this
            ->setCountry($country)
            ->setPostcode($postcode)
            ->setCity($city);
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
     * @return \Etrias\PaazlConnector\StructType\Consignee
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
     * @return \Etrias\PaazlConnector\StructType\Consignee
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
     * @return \Etrias\PaazlConnector\StructType\Consignee
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\Consignee
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
