<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for labelResponseType StructType
 * @subpackage Structs
 */
class LabelResponseType extends AbstractStructBase
{
    /**
     * The barcode
     * @var string
     */
    public $barcode;
    /**
     * The trackingNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $trackingNumber;
    /**
     * Constructor method for labelResponseType
     * @uses LabelResponseType::setBarcode()
     * @uses LabelResponseType::setTrackingNumber()
     * @param string $barcode
     * @param string $trackingNumber
     */
    public function __construct($barcode = null, $trackingNumber = null)
    {
        $this
            ->setBarcode($barcode)
            ->setTrackingNumber($trackingNumber);
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
     * @return \Etrias\PaazlConnector\StructType\LabelResponseType
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
     * Get trackingNumber value
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }
    /**
     * Set trackingNumber value
     * @param string $trackingNumber
     * @return \Etrias\PaazlConnector\StructType\LabelResponseType
     */
    public function setTrackingNumber($trackingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($trackingNumber) && !is_string($trackingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackingNumber)), __LINE__);
        }
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\LabelResponseType
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
