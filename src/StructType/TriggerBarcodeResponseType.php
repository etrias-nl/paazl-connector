<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for triggerBarcodeResponseType StructType
 * @subpackage Structs
 */
class TriggerBarcodeResponseType extends AbstractStructBase
{
    /**
     * The barcode
     * @var string
     */
    public $barcode;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The identifier
     * @var string
     */
    public $identifier;
    /**
     * Constructor method for triggerBarcodeResponseType
     * @uses TriggerBarcodeResponseType::setBarcode()
     * @uses TriggerBarcodeResponseType::setStatus()
     * @uses TriggerBarcodeResponseType::setIdentifier()
     * @param string $barcode
     * @param string $status
     * @param string $identifier
     */
    public function __construct($barcode = null, $status = null, $identifier = null)
    {
        $this
            ->setBarcode($barcode)
            ->setStatus($status)
            ->setIdentifier($identifier);
    }
    /**
     * Get barcode value
     * @return string|null
     */
    public function getBarcode()
    {
        return $this->barcode;
    }
    /**
     * Set barcode value
     * @param string $barcode
     * @return \Etrias\PaazlConnector\StructType\TriggerBarcodeResponseType
     */
    public function setBarcode($barcode = null)
    {
        // validation for constraint: string
        if (!is_null($barcode) && !is_string($barcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($barcode)), __LINE__);
        }
        $this->barcode = $barcode;
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
     * @uses \Etrias\PaazlConnector\EnumType\TriggerResponseStatus::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\TriggerResponseStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Etrias\PaazlConnector\StructType\TriggerBarcodeResponseType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\TriggerResponseStatus::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Etrias\PaazlConnector\EnumType\TriggerResponseStatus::getValidValues())), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get identifier value
     * @return string|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }
    /**
     * Set identifier value
     * @param string $identifier
     * @return \Etrias\PaazlConnector\StructType\TriggerBarcodeResponseType
     */
    public function setIdentifier($identifier = null)
    {
        // validation for constraint: string
        if (!is_null($identifier) && !is_string($identifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identifier)), __LINE__);
        }
        $this->identifier = $identifier;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\TriggerBarcodeResponseType
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
