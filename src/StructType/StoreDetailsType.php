<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for storeDetailsType StructType
 * @subpackage Structs
 */
class StoreDetailsType extends AbstractStructBase
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
     * @var \Etrias\PaazlConnector\StructType\AddressType
     */
    public $address;
    /**
     * The coordinates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\CoordinatesType
     */
    public $coordinates;
    /**
     * The businessHours
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\BusinessHoursType[]
     */
    public $businessHours;
    /**
     * Constructor method for storeDetailsType
     * @uses StoreDetailsType::setCode()
     * @uses StoreDetailsType::setName()
     * @uses StoreDetailsType::setAddress()
     * @uses StoreDetailsType::setCoordinates()
     * @uses StoreDetailsType::setBusinessHours()
     * @param string $code
     * @param string $name
     * @param \Etrias\PaazlConnector\StructType\AddressType $address
     * @param \Etrias\PaazlConnector\StructType\CoordinatesType $coordinates
     * @param \Etrias\PaazlConnector\StructType\BusinessHoursType[] $businessHours
     */
    public function __construct($code = null, $name = null, \Etrias\PaazlConnector\StructType\AddressType $address = null, \Etrias\PaazlConnector\StructType\CoordinatesType $coordinates = null, array $businessHours = array())
    {
        $this
            ->setCode($code)
            ->setName($name)
            ->setAddress($address)
            ->setCoordinates($coordinates)
            ->setBusinessHours($businessHours);
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
     * @return \Etrias\PaazlConnector\StructType\StoreDetailsType
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
     * @return \Etrias\PaazlConnector\StructType\StoreDetailsType
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
     * @return \Etrias\PaazlConnector\StructType\AddressType|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \Etrias\PaazlConnector\StructType\AddressType $address
     * @return \Etrias\PaazlConnector\StructType\StoreDetailsType
     */
    public function setAddress(\Etrias\PaazlConnector\StructType\AddressType $address = null)
    {
        $this->address = $address;
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
     * @return \Etrias\PaazlConnector\StructType\StoreDetailsType
     */
    public function setCoordinates(\Etrias\PaazlConnector\StructType\CoordinatesType $coordinates = null)
    {
        $this->coordinates = $coordinates;
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
     * @return \Etrias\PaazlConnector\StructType\StoreDetailsType
     */
    public function setBusinessHours(array $businessHours = array())
    {
        foreach ($businessHours as $storeDetailsTypeBusinessHoursItem) {
            // validation for constraint: itemType
            if (!$storeDetailsTypeBusinessHoursItem instanceof \Etrias\PaazlConnector\StructType\BusinessHoursType) {
                throw new \InvalidArgumentException(sprintf('The businessHours property can only contain items of \Etrias\PaazlConnector\StructType\BusinessHoursType, "%s" given', is_object($storeDetailsTypeBusinessHoursItem) ? get_class($storeDetailsTypeBusinessHoursItem) : gettype($storeDetailsTypeBusinessHoursItem)), __LINE__);
            }
        }
        $this->businessHours = $businessHours;
        return $this;
    }
    /**
     * Add item to businessHours value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\BusinessHoursType $item
     * @return \Etrias\PaazlConnector\StructType\StoreDetailsType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\StoreDetailsType
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
