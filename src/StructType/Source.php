<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for source StructType
 * @subpackage Structs
 */
class Source extends AbstractStructBase
{
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - documentation: Name is either user-defined or will be constructed using the provided source fields.
     * - minOccurs: 0
     * @var string
     */
    public $name;
    /**
     * The postCode
     * Meta informations extracted from the WSDL
     * - documentation: Postal code is a mandatory field and refers the sender address postal code.
     * - maxLength: 32
     * @var string
     */
    public $postCode;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - documentation: City is a mandatory field and should be the full name of a city. It refers to the city of the sender address.
     * @var string
     */
    public $city;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - documentation: Country is a mandatory field and refers to the ISO Alpha-2 country code of a country. It refers to the country code of the sender address.
     * - maxLength: 2
     * - minLength: 2
     * - pattern: [a-zA-Z][a-zA-Z]
     * @var string
     */
    public $country;
    /**
     * The timeZoneId
     * Meta informations extracted from the WSDL
     * - documentation: Time zone Id is an optional field and should be provided as one of the AvailableZoneIds in the ZoneId class. It refers to the time zone of the sender. For more detail, see:
     * https://docs.oracle.com/javase/8/docs/api/java/time/ZoneId.html
     * - minOccurs: 0
     * @var string
     */
    public $timeZoneId;
    /**
     * Constructor method for source
     * @uses Source::setName()
     * @uses Source::setPostCode()
     * @uses Source::setCity()
     * @uses Source::setCountry()
     * @uses Source::setTimeZoneId()
     * @param string $name
     * @param string $postCode
     * @param string $city
     * @param string $country
     * @param string $timeZoneId
     */
    public function __construct($name = null, $postCode = null, $city = null, $country = null, $timeZoneId = null)
    {
        $this
            ->setName($name)
            ->setPostCode($postCode)
            ->setCity($city)
            ->setCountry($country)
            ->setTimeZoneId($timeZoneId);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Etrias\PaazlConnector\StructType\Source
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get postCode value
     * @return string|null
     */
    public function getPostCode()
    {
        return $this->postCode;
    }
    /**
     * Set postCode value
     * @param string $postCode
     * @return \Etrias\PaazlConnector\StructType\Source
     */
    public function setPostCode($postCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($postCode) && strlen($postCode) > 32) || (is_array($postCode) && count($postCode) > 32)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 32 element(s) or a scalar of 32 character(s) at most, "%d" length given', is_scalar($postCode) ? strlen($postCode) : count($postCode)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($postCode) && !is_string($postCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postCode)), __LINE__);
        }
        $this->postCode = $postCode;
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
     * @return \Etrias\PaazlConnector\StructType\Source
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
     * @return \Etrias\PaazlConnector\StructType\Source
     */
    public function setCountry($country = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($country) && strlen($country) > 2) || (is_array($country) && count($country) > 2)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 2 element(s) or a scalar of 2 character(s) at most, "%d" length given', is_scalar($country) ? strlen($country) : count($country)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($country) && strlen($country) < 2) || (is_array($country) && count($country) < 2)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 2 element(s) or a scalar of 2 character(s) at least', __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($country) && !preg_match('/[a-zA-Z][a-zA-Z]/', $country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z][a-zA-Z]", "%s" given', var_export($country, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get timeZoneId value
     * @return string|null
     */
    public function getTimeZoneId()
    {
        return $this->timeZoneId;
    }
    /**
     * Set timeZoneId value
     * @param string $timeZoneId
     * @return \Etrias\PaazlConnector\StructType\Source
     */
    public function setTimeZoneId($timeZoneId = null)
    {
        // validation for constraint: string
        if (!is_null($timeZoneId) && !is_string($timeZoneId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeZoneId)), __LINE__);
        }
        $this->timeZoneId = $timeZoneId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\Source
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
