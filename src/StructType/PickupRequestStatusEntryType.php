<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pickupRequestStatusEntryType StructType
 * @subpackage Structs
 */
class PickupRequestStatusEntryType extends AbstractStructBase
{
    /**
     * The timestamp
     * @var string
     */
    public $timestamp;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $status;
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $code;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $description;
    /**
     * Constructor method for pickupRequestStatusEntryType
     * @uses PickupRequestStatusEntryType::setTimestamp()
     * @uses PickupRequestStatusEntryType::setStatus()
     * @uses PickupRequestStatusEntryType::setCode()
     * @uses PickupRequestStatusEntryType::setDescription()
     * @param string $timestamp
     * @param string $status
     * @param string $code
     * @param string $description
     */
    public function __construct($timestamp = null, $status = null, $code = null, $description = null)
    {
        $this
            ->setTimestamp($timestamp)
            ->setStatus($status)
            ->setCode($code)
            ->setDescription($description);
    }
    /**
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \Etrias\PaazlConnector\StructType\PickupRequestStatusEntryType
     */
    public function setTimestamp($timestamp = null)
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @uses \Etrias\PaazlConnector\EnumType\PickupRequestStatusType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\PickupRequestStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Etrias\PaazlConnector\StructType\PickupRequestStatusEntryType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\PickupRequestStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Etrias\PaazlConnector\EnumType\PickupRequestStatusType::getValidValues())), __LINE__);
        }
        $this->status = $status;
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestStatusEntryType
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
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Etrias\PaazlConnector\StructType\PickupRequestStatusEntryType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\PickupRequestStatusEntryType
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
