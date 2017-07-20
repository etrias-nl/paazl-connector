<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addressType StructType
 * @subpackage Structs
 */
class AddressType extends AbstractStructBase
{
    /**
     * The street
     * @var string
     */
    public $street;
    /**
     * The housenumber
     * @var string
     */
    public $housenumber;
    /**
     * The addition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $addition;
    /**
     * The address
     * @var string
     */
    public $address;
    /**
     * The additionalAddressLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $additionalAddressLine;
    /**
     * The postcode
     * @var string
     */
    public $postcode;
    /**
     * The city
     * @var string
     */
    public $city;
    /**
     * The province
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $province;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $country;
    /**
     * Constructor method for addressType
     * @uses AddressType::setStreet()
     * @uses AddressType::setHousenumber()
     * @uses AddressType::setAddition()
     * @uses AddressType::setAddress()
     * @uses AddressType::setAdditionalAddressLine()
     * @uses AddressType::setPostcode()
     * @uses AddressType::setCity()
     * @uses AddressType::setProvince()
     * @uses AddressType::setCountry()
     * @param string $street
     * @param string $housenumber
     * @param string $addition
     * @param string $address
     * @param string[] $additionalAddressLine
     * @param string $postcode
     * @param string $city
     * @param string $province
     * @param string $country
     */
    public function __construct($street = null, $housenumber = null, $addition = null, $address = null, array $additionalAddressLine = array(), $postcode = null, $city = null, $province = null, $country = null)
    {
        $this
            ->setStreet($street)
            ->setHousenumber($housenumber)
            ->setAddition($addition)
            ->setAddress($address)
            ->setAdditionalAddressLine($additionalAddressLine)
            ->setPostcode($postcode)
            ->setCity($city)
            ->setProvince($province)
            ->setCountry($country);
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
     * @return \Etrias\PaazlConnector\StructType\AddressType
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
     * @return \Etrias\PaazlConnector\StructType\AddressType
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
     * @return \Etrias\PaazlConnector\StructType\AddressType
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
     * Get address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \Etrias\PaazlConnector\StructType\AddressType
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        $this->address = $address;
        return $this;
    }
    /**
     * Get additionalAddressLine value
     * @return string[]|null
     */
    public function getAdditionalAddressLine()
    {
        return $this->additionalAddressLine;
    }
    /**
     * Set additionalAddressLine value
     * @throws \InvalidArgumentException
     * @param string[] $additionalAddressLine
     * @return \Etrias\PaazlConnector\StructType\AddressType
     */
    public function setAdditionalAddressLine(array $additionalAddressLine = array())
    {
        foreach ($additionalAddressLine as $addressTypeAdditionalAddressLineItem) {
            // validation for constraint: itemType
            if (!is_string($addressTypeAdditionalAddressLineItem)) {
                throw new \InvalidArgumentException(sprintf('The additionalAddressLine property can only contain items of string, "%s" given', is_object($addressTypeAdditionalAddressLineItem) ? get_class($addressTypeAdditionalAddressLineItem) : gettype($addressTypeAdditionalAddressLineItem)), __LINE__);
            }
        }
        $this->additionalAddressLine = $additionalAddressLine;
        return $this;
    }
    /**
     * Add item to additionalAddressLine value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Etrias\PaazlConnector\StructType\AddressType
     */
    public function addToAdditionalAddressLine($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The additionalAddressLine property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->additionalAddressLine[] = $item;
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
     * @return \Etrias\PaazlConnector\StructType\AddressType
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
     * @return \Etrias\PaazlConnector\StructType\AddressType
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
     * @return \Etrias\PaazlConnector\StructType\AddressType
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
     * @return \Etrias\PaazlConnector\StructType\AddressType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\AddressType
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
