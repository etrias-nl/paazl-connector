<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for servicePointType StructType
 * @subpackage Structs
 */
class ServicePointType extends AbstractStructBase
{
    /**
     * The code
     * @var string
     */
    public $code;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $address;
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
     * @var string
     */
    public $country;
    /**
     * The coordinates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\CoordinatesType
     */
    public $coordinates;
    /**
     * The distance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $distance;
    /**
     * The businessHours
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\BusinessHoursType[]
     */
    public $businessHours;
    /**
     * The extraDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\ServicePointExtraDetails
     */
    public $extraDetails;
    /**
     * Constructor method for servicePointType
     * @uses ServicePointType::setCode()
     * @uses ServicePointType::setName()
     * @uses ServicePointType::setAddress()
     * @uses ServicePointType::setPostcode()
     * @uses ServicePointType::setCity()
     * @uses ServicePointType::setProvince()
     * @uses ServicePointType::setCountry()
     * @uses ServicePointType::setCoordinates()
     * @uses ServicePointType::setDistance()
     * @uses ServicePointType::setBusinessHours()
     * @uses ServicePointType::setExtraDetails()
     * @param string $code
     * @param string $name
     * @param string[] $address
     * @param string $postcode
     * @param string $city
     * @param string $province
     * @param string $country
     * @param \Etrias\PaazlConnector\StructType\CoordinatesType $coordinates
     * @param float $distance
     * @param \Etrias\PaazlConnector\StructType\BusinessHoursType[] $businessHours
     * @param \Etrias\PaazlConnector\StructType\ServicePointExtraDetails $extraDetails
     */
    public function __construct($code = null, $name = null, array $address = array(), $postcode = null, $city = null, $province = null, $country = null, \Etrias\PaazlConnector\StructType\CoordinatesType $coordinates = null, $distance = null, array $businessHours = array(), \Etrias\PaazlConnector\StructType\ServicePointExtraDetails $extraDetails = null)
    {
        $this
            ->setCode($code)
            ->setName($name)
            ->setAddress($address)
            ->setPostcode($postcode)
            ->setCity($city)
            ->setProvince($province)
            ->setCountry($country)
            ->setCoordinates($coordinates)
            ->setDistance($distance)
            ->setBusinessHours($businessHours)
            ->setExtraDetails($extraDetails);
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Etrias\PaazlConnector\StructType\ServicePointType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
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
     * @return \Etrias\PaazlConnector\StructType\ServicePointType
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
     * Get address value
     * @return string[]|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @throws \InvalidArgumentException
     * @param string[] $address
     * @return \Etrias\PaazlConnector\StructType\ServicePointType
     */
    public function setAddress(array $address = array())
    {
        foreach ($address as $servicePointTypeAddressItem) {
            // validation for constraint: itemType
            if (!is_string($servicePointTypeAddressItem)) {
                throw new \InvalidArgumentException(sprintf('The address property can only contain items of string, "%s" given', is_object($servicePointTypeAddressItem) ? get_class($servicePointTypeAddressItem) : gettype($servicePointTypeAddressItem)), __LINE__);
            }
        }
        $this->address = $address;
        return $this;
    }
    /**
     * Add item to address value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Etrias\PaazlConnector\StructType\ServicePointType
     */
    public function addToAddress($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The address property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->address[] = $item;
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
     * @return \Etrias\PaazlConnector\StructType\ServicePointType
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
     * @return \Etrias\PaazlConnector\StructType\ServicePointType
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
     * @return \Etrias\PaazlConnector\StructType\ServicePointType
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
     * @return \Etrias\PaazlConnector\StructType\ServicePointType
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
     * Get coordinates value
     * @return \Etrias\PaazlConnector\StructType\CoordinatesType|null
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }
    /**
     * Set coordinates value
     * @param \Etrias\PaazlConnector\StructType\CoordinatesType $coordinates
     * @return \Etrias\PaazlConnector\StructType\ServicePointType
     */
    public function setCoordinates(\Etrias\PaazlConnector\StructType\CoordinatesType $coordinates = null)
    {
        $this->coordinates = $coordinates;
        return $this;
    }
    /**
     * Get distance value
     * @return float|null
     */
    public function getDistance()
    {
        return $this->distance;
    }
    /**
     * Set distance value
     * @param float $distance
     * @return \Etrias\PaazlConnector\StructType\ServicePointType
     */
    public function setDistance($distance = null)
    {
        $this->distance = $distance;
        return $this;
    }
    /**
     * Get businessHours value
     * @return \Etrias\PaazlConnector\StructType\BusinessHoursType[]|null
     */
    public function getBusinessHours()
    {
        return $this->businessHours;
    }
    /**
     * Set businessHours value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\BusinessHoursType[] $businessHours
     * @return \Etrias\PaazlConnector\StructType\ServicePointType
     */
    public function setBusinessHours(array $businessHours = array())
    {
        foreach ($businessHours as $servicePointTypeBusinessHoursItem) {
            // validation for constraint: itemType
            if (!$servicePointTypeBusinessHoursItem instanceof \Etrias\PaazlConnector\StructType\BusinessHoursType) {
                throw new \InvalidArgumentException(sprintf('The businessHours property can only contain items of \Etrias\PaazlConnector\StructType\BusinessHoursType, "%s" given', is_object($servicePointTypeBusinessHoursItem) ? get_class($servicePointTypeBusinessHoursItem) : gettype($servicePointTypeBusinessHoursItem)), __LINE__);
            }
        }
        $this->businessHours = $businessHours;
        return $this;
    }
    /**
     * Add item to businessHours value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\BusinessHoursType $item
     * @return \Etrias\PaazlConnector\StructType\ServicePointType
     */
    public function addToBusinessHours(\Etrias\PaazlConnector\StructType\BusinessHoursType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\BusinessHoursType) {
            throw new \InvalidArgumentException(sprintf('The businessHours property can only contain items of \Etrias\PaazlConnector\StructType\BusinessHoursType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->businessHours[] = $item;
        return $this;
    }
    /**
     * Get extraDetails value
     * @return \Etrias\PaazlConnector\StructType\ServicePointExtraDetails|null
     */
    public function getExtraDetails()
    {
        return $this->extraDetails;
    }
    /**
     * Set extraDetails value
     * @param \Etrias\PaazlConnector\StructType\ServicePointExtraDetails $extraDetails
     * @return \Etrias\PaazlConnector\StructType\ServicePointType
     */
    public function setExtraDetails(\Etrias\PaazlConnector\StructType\ServicePointExtraDetails $extraDetails = null)
    {
        $this->extraDetails = $extraDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ServicePointType
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
