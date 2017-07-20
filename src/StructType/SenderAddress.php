<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for senderAddress StructType
 * @subpackage Structs
 */
class SenderAddress extends AbstractStructBase
{
    /**
     * The addresseeLine
     * @var string
     */
    public $addresseeLine;
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
     * The zipcode
     * @var string
     */
    public $zipcode;
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
     * - default: NL
     * - minOccurs: 0
     * @var string
     */
    public $country;
    /**
     * The additionalAddressLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $additionalAddressLine;
    /**
     * Constructor method for senderAddress
     * @uses SenderAddress::setAddresseeLine()
     * @uses SenderAddress::setStreet()
     * @uses SenderAddress::setHousenumber()
     * @uses SenderAddress::setAddition()
     * @uses SenderAddress::setZipcode()
     * @uses SenderAddress::setCity()
     * @uses SenderAddress::setProvince()
     * @uses SenderAddress::setCountry()
     * @uses SenderAddress::setAdditionalAddressLine()
     * @param string $addresseeLine
     * @param string $street
     * @param string $housenumber
     * @param string $addition
     * @param string $zipcode
     * @param string $city
     * @param string $province
     * @param string $country
     * @param string[] $additionalAddressLine
     */
    public function __construct($addresseeLine = null, $street = null, $housenumber = null, $addition = null, $zipcode = null, $city = null, $province = null, $country = 'NL', array $additionalAddressLine = array())
    {
        $this
            ->setAddresseeLine($addresseeLine)
            ->setStreet($street)
            ->setHousenumber($housenumber)
            ->setAddition($addition)
            ->setZipcode($zipcode)
            ->setCity($city)
            ->setProvince($province)
            ->setCountry($country)
            ->setAdditionalAddressLine($additionalAddressLine);
    }
    /**
     * Get addresseeLine value
     * @return string|null
     */
    public function getAddresseeLine()
    {
        return $this->addresseeLine;
    }
    /**
     * Set addresseeLine value
     * @param string $addresseeLine
     * @return \Etrias\PaazlConnector\StructType\SenderAddress
     */
    public function setAddresseeLine($addresseeLine = null)
    {
        // validation for constraint: string
        if (!is_null($addresseeLine) && !is_string($addresseeLine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addresseeLine)), __LINE__);
        }
        $this->addresseeLine = $addresseeLine;
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
     * @return \Etrias\PaazlConnector\StructType\SenderAddress
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
     * @return \Etrias\PaazlConnector\StructType\SenderAddress
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
     * @return \Etrias\PaazlConnector\StructType\SenderAddress
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
     * @return \Etrias\PaazlConnector\StructType\SenderAddress
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
     * @return \Etrias\PaazlConnector\StructType\SenderAddress
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
     * @return \Etrias\PaazlConnector\StructType\SenderAddress
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
     * @return \Etrias\PaazlConnector\StructType\SenderAddress
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
     * @return \Etrias\PaazlConnector\StructType\SenderAddress
     */
    public function setAdditionalAddressLine(array $additionalAddressLine = array())
    {
        foreach ($additionalAddressLine as $senderAddressAdditionalAddressLineItem) {
            // validation for constraint: itemType
            if (!is_string($senderAddressAdditionalAddressLineItem)) {
                throw new \InvalidArgumentException(sprintf('The additionalAddressLine property can only contain items of string, "%s" given', is_object($senderAddressAdditionalAddressLineItem) ? get_class($senderAddressAdditionalAddressLineItem) : gettype($senderAddressAdditionalAddressLineItem)), __LINE__);
            }
        }
        $this->additionalAddressLine = $additionalAddressLine;
        return $this;
    }
    /**
     * Add item to additionalAddressLine value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Etrias\PaazlConnector\StructType\SenderAddress
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\SenderAddress
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
