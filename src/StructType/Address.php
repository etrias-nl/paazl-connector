<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for address StructType
 * @subpackage Structs
 */
class Address extends AbstractStructBase
{
    /**
     * The zipcode
     * @var string
     */
    public $zipcode;
    /**
     * The housenumber
     * @var string
     */
    public $housenumber;
    /**
     * The street
     * @var string
     */
    public $street;
    /**
     * The city
     * @var string
     */
    public $city;
    /**
     * The addition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $addition;
    /**
     * Constructor method for address
     * @uses Address::setZipcode()
     * @uses Address::setHousenumber()
     * @uses Address::setStreet()
     * @uses Address::setCity()
     * @uses Address::setAddition()
     * @param string $zipcode
     * @param string $housenumber
     * @param string $street
     * @param string $city
     * @param string $addition
     */
    public function __construct($zipcode = null, $housenumber = null, $street = null, $city = null, $addition = null)
    {
        $this
            ->setZipcode($zipcode)
            ->setHousenumber($housenumber)
            ->setStreet($street)
            ->setCity($city)
            ->setAddition($addition);
    }
    /**
     * Get zipcode value
     * @return string|null
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }
    /**
     * Set zipcode value
     * @param string $zipcode
     * @return \Etrias\PaazlConnector\StructType\Address
     */
    public function setZipcode($zipcode = null)
    {
        // validation for constraint: string
        if (!is_null($zipcode) && !is_string($zipcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zipcode)), __LINE__);
        }
        $this->zipcode = $zipcode;
        return $this;
    }
    /**
     * Get housenumber value
     * @return string|null
     */
    public function getHousenumber()
    {
        return $this->housenumber;
    }
    /**
     * Set housenumber value
     * @param string $housenumber
     * @return \Etrias\PaazlConnector\StructType\Address
     */
    public function setHousenumber($housenumber = null)
    {
        // validation for constraint: string
        if (!is_null($housenumber) && !is_string($housenumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($housenumber)), __LINE__);
        }
        $this->housenumber = $housenumber;
        return $this;
    }
    /**
     * Get street value
     * @return string|null
     */
    public function getStreet()
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \Etrias\PaazlConnector\StructType\Address
     */
    public function setStreet($street = null)
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street)), __LINE__);
        }
        $this->street = $street;
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
     * @return \Etrias\PaazlConnector\StructType\Address
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
     * Get addition value
     * @return string|null
     */
    public function getAddition()
    {
        return $this->addition;
    }
    /**
     * Set addition value
     * @param string $addition
     * @return \Etrias\PaazlConnector\StructType\Address
     */
    public function setAddition($addition = null)
    {
        // validation for constraint: string
        if (!is_null($addition) && !is_string($addition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addition)), __LINE__);
        }
        $this->addition = $addition;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\Address
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
