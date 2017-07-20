<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for changeShippingAddress StructType
 * @subpackage Structs
 */
class ChangeShippingAddress extends AbstractStructBase
{
    /**
     * The accountNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $accountNumber;
    /**
     * The customerName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 255
     * @var string
     */
    public $customerName;
    /**
     * The companyName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 255
     * @var string
     */
    public $companyName;
    /**
     * The nameOther
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 255
     * @var string
     */
    public $nameOther;
    /**
     * The street
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $street;
    /**
     * The housenumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
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
     * The additionalAddressLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $additionalAddressLine;
    /**
     * The zipcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $zipcode;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
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
     * The localAddressValidation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $localAddressValidation;
    /**
     * The additionalInstruction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $additionalInstruction;
    /**
     * Constructor method for changeShippingAddress
     * @uses ChangeShippingAddress::setAccountNumber()
     * @uses ChangeShippingAddress::setCustomerName()
     * @uses ChangeShippingAddress::setCompanyName()
     * @uses ChangeShippingAddress::setNameOther()
     * @uses ChangeShippingAddress::setStreet()
     * @uses ChangeShippingAddress::setHousenumber()
     * @uses ChangeShippingAddress::setAddition()
     * @uses ChangeShippingAddress::setAdditionalAddressLine()
     * @uses ChangeShippingAddress::setZipcode()
     * @uses ChangeShippingAddress::setCity()
     * @uses ChangeShippingAddress::setProvince()
     * @uses ChangeShippingAddress::setCountry()
     * @uses ChangeShippingAddress::setLocalAddressValidation()
     * @uses ChangeShippingAddress::setAdditionalInstruction()
     * @param string $accountNumber
     * @param string $customerName
     * @param string $companyName
     * @param string $nameOther
     * @param string $street
     * @param string $housenumber
     * @param string $addition
     * @param string[] $additionalAddressLine
     * @param string $zipcode
     * @param string $city
     * @param string $province
     * @param string $country
     * @param bool $localAddressValidation
     * @param string $additionalInstruction
     */
    public function __construct($accountNumber = null, $customerName = null, $companyName = null, $nameOther = null, $street = null, $housenumber = null, $addition = null, array $additionalAddressLine = array(), $zipcode = null, $city = null, $province = null, $country = 'NL', $localAddressValidation = null, $additionalInstruction = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setCustomerName($customerName)
            ->setCompanyName($companyName)
            ->setNameOther($nameOther)
            ->setStreet($street)
            ->setHousenumber($housenumber)
            ->setAddition($addition)
            ->setAdditionalAddressLine($additionalAddressLine)
            ->setZipcode($zipcode)
            ->setCity($city)
            ->setProvince($province)
            ->setCountry($country)
            ->setLocalAddressValidation($localAddressValidation)
            ->setAdditionalInstruction($additionalInstruction);
    }
    /**
     * Get accountNumber value
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $accountNumber
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingAddress
     */
    public function setAccountNumber($accountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * Get customerName value
     * @return string|null
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }
    /**
     * Set customerName value
     * @param string $customerName
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingAddress
     */
    public function setCustomerName($customerName = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($customerName) && strlen($customerName) > 255) || (is_array($customerName) && count($customerName) > 255)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 255 element(s) or a scalar of 255 character(s) at most, "%d" length given', is_scalar($customerName) ? strlen($customerName) : count($customerName)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerName)), __LINE__);
        }
        $this->customerName = $customerName;
        return $this;
    }
    /**
     * Get companyName value
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }
    /**
     * Set companyName value
     * @param string $companyName
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingAddress
     */
    public function setCompanyName($companyName = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($companyName) && strlen($companyName) > 255) || (is_array($companyName) && count($companyName) > 255)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 255 element(s) or a scalar of 255 character(s) at most, "%d" length given', is_scalar($companyName) ? strlen($companyName) : count($companyName)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyName)), __LINE__);
        }
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * Get nameOther value
     * @return string|null
     */
    public function getNameOther()
    {
        return $this->nameOther;
    }
    /**
     * Set nameOther value
     * @param string $nameOther
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingAddress
     */
    public function setNameOther($nameOther = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($nameOther) && strlen($nameOther) > 255) || (is_array($nameOther) && count($nameOther) > 255)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 255 element(s) or a scalar of 255 character(s) at most, "%d" length given', is_scalar($nameOther) ? strlen($nameOther) : count($nameOther)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($nameOther) && !is_string($nameOther)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nameOther)), __LINE__);
        }
        $this->nameOther = $nameOther;
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
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingAddress
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
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingAddress
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
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingAddress
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
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingAddress
     */
    public function setAdditionalAddressLine(array $additionalAddressLine = array())
    {
        foreach ($additionalAddressLine as $changeShippingAddressAdditionalAddressLineItem) {
            // validation for constraint: itemType
            if (!is_string($changeShippingAddressAdditionalAddressLineItem)) {
                throw new \InvalidArgumentException(sprintf('The additionalAddressLine property can only contain items of string, "%s" given', is_object($changeShippingAddressAdditionalAddressLineItem) ? get_class($changeShippingAddressAdditionalAddressLineItem) : gettype($changeShippingAddressAdditionalAddressLineItem)), __LINE__);
            }
        }
        $this->additionalAddressLine = $additionalAddressLine;
        return $this;
    }
    /**
     * Add item to additionalAddressLine value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingAddress
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
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingAddress
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
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingAddress
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
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingAddress
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
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingAddress
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
     * Get localAddressValidation value
     * @return bool|null
     */
    public function getLocalAddressValidation()
    {
        return $this->localAddressValidation;
    }
    /**
     * Set localAddressValidation value
     * @param bool $localAddressValidation
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingAddress
     */
    public function setLocalAddressValidation($localAddressValidation = null)
    {
        // validation for constraint: boolean
        if (!is_null($localAddressValidation) && !is_bool($localAddressValidation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($localAddressValidation)), __LINE__);
        }
        $this->localAddressValidation = $localAddressValidation;
        return $this;
    }
    /**
     * Get additionalInstruction value
     * @return string|null
     */
    public function getAdditionalInstruction()
    {
        return $this->additionalInstruction;
    }
    /**
     * Set additionalInstruction value
     * @param string $additionalInstruction
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingAddress
     */
    public function setAdditionalInstruction($additionalInstruction = null)
    {
        // validation for constraint: string
        if (!is_null($additionalInstruction) && !is_string($additionalInstruction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalInstruction)), __LINE__);
        }
        $this->additionalInstruction = $additionalInstruction;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ChangeShippingAddress
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
