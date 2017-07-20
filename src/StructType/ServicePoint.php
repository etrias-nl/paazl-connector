<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for servicePoint StructType
 * @subpackage Structs
 */
class ServicePoint extends AbstractStructBase
{
    /**
     * The distributor
     * @var string
     */
    public $distributor;
    /**
     * The shippingOption
     * @var string
     */
    public $shippingOption;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The postcode
     * @var string
     */
    public $postcode;
    /**
     * The address
     * @var string
     */
    public $address;
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
     * @var string
     */
    public $distance;
    /**
     * The code
     * @var string
     */
    public $code;
    /**
     * The price
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $price;
    /**
     * The openingTimes
     * @var \Etrias\PaazlConnector\StructType\OpeningTimes
     */
    public $openingTimes;
    /**
     * The extraDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\ServicePointExtraDetails
     */
    public $extraDetails;
    /**
     * Constructor method for servicePoint
     * @uses ServicePoint::setDistributor()
     * @uses ServicePoint::setShippingOption()
     * @uses ServicePoint::setName()
     * @uses ServicePoint::setPostcode()
     * @uses ServicePoint::setAddress()
     * @uses ServicePoint::setCity()
     * @uses ServicePoint::setProvince()
     * @uses ServicePoint::setCoordinates()
     * @uses ServicePoint::setDistance()
     * @uses ServicePoint::setCode()
     * @uses ServicePoint::setPrice()
     * @uses ServicePoint::setOpeningTimes()
     * @uses ServicePoint::setExtraDetails()
     * @param string $distributor
     * @param string $shippingOption
     * @param string $name
     * @param string $postcode
     * @param string $address
     * @param string $city
     * @param string $province
     * @param \Etrias\PaazlConnector\StructType\CoordinatesType $coordinates
     * @param string $distance
     * @param string $code
     * @param float $price
     * @param \Etrias\PaazlConnector\StructType\OpeningTimes $openingTimes
     * @param \Etrias\PaazlConnector\StructType\ServicePointExtraDetails $extraDetails
     */
    public function __construct($distributor = null, $shippingOption = null, $name = null, $postcode = null, $address = null, $city = null, $province = null, \Etrias\PaazlConnector\StructType\CoordinatesType $coordinates = null, $distance = null, $code = null, $price = null, \Etrias\PaazlConnector\StructType\OpeningTimes $openingTimes = null, \Etrias\PaazlConnector\StructType\ServicePointExtraDetails $extraDetails = null)
    {
        $this
            ->setDistributor($distributor)
            ->setShippingOption($shippingOption)
            ->setName($name)
            ->setPostcode($postcode)
            ->setAddress($address)
            ->setCity($city)
            ->setProvince($province)
            ->setCoordinates($coordinates)
            ->setDistance($distance)
            ->setCode($code)
            ->setPrice($price)
            ->setOpeningTimes($openingTimes)
            ->setExtraDetails($extraDetails);
    }
    /**
     * Get distributor value
     * @return string|null
     */
    public function getDistributor()
    {
        return $this->distributor;
    }
    /**
     * Set distributor value
     * @param string $distributor
     * @return \Etrias\PaazlConnector\StructType\ServicePoint
     */
    public function setDistributor($distributor = null)
    {
        // validation for constraint: string
        if (!is_null($distributor) && !is_string($distributor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($distributor)), __LINE__);
        }
        $this->distributor = $distributor;
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
     * @return \Etrias\PaazlConnector\StructType\ServicePoint
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
     * @return \Etrias\PaazlConnector\StructType\ServicePoint
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
     * @return \Etrias\PaazlConnector\StructType\ServicePoint
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
     * @return \Etrias\PaazlConnector\StructType\ServicePoint
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
     * @return \Etrias\PaazlConnector\StructType\ServicePoint
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
     * @return \Etrias\PaazlConnector\StructType\ServicePoint
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
     * @return \Etrias\PaazlConnector\StructType\ServicePoint
     */
    public function setCoordinates(\Etrias\PaazlConnector\StructType\CoordinatesType $coordinates = null)
    {
        $this->coordinates = $coordinates;
        return $this;
    }
    /**
     * Get distance value
     * @return string|null
     */
    public function getDistance()
    {
        return $this->distance;
    }
    /**
     * Set distance value
     * @param string $distance
     * @return \Etrias\PaazlConnector\StructType\ServicePoint
     */
    public function setDistance($distance = null)
    {
        // validation for constraint: string
        if (!is_null($distance) && !is_string($distance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($distance)), __LINE__);
        }
        $this->distance = $distance;
        return $this;
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
     * @return \Etrias\PaazlConnector\StructType\ServicePoint
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
     * Get price value
     * @return float|null
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Etrias\PaazlConnector\StructType\ServicePoint
     */
    public function setPrice($price = null)
    {
        $this->price = $price;
        return $this;
    }
    /**
     * Get openingTimes value
     * @return \Etrias\PaazlConnector\StructType\OpeningTimes|null
     */
    public function getOpeningTimes()
    {
        return $this->openingTimes;
    }
    /**
     * Set openingTimes value
     * @param \Etrias\PaazlConnector\StructType\OpeningTimes $openingTimes
     * @return \Etrias\PaazlConnector\StructType\ServicePoint
     */
    public function setOpeningTimes(\Etrias\PaazlConnector\StructType\OpeningTimes $openingTimes = null)
    {
        $this->openingTimes = $openingTimes;
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
     * @return \Etrias\PaazlConnector\StructType\ServicePoint
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
     * @return \Etrias\PaazlConnector\StructType\ServicePoint
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
