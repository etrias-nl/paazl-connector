<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for labelType StructType
 * @subpackage Structs
 */
class LabelType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The orderReference
     * @var string
     */
    public $orderReference;
    /**
     * The barcode
     * @var string
     */
    public $barcode;
    /**
     * The trackingNumber
     * @var string
     */
    public $trackingNumber;
    /**
     * The batch
     * @var string
     */
    public $batch;
    /**
     * Constructor method for labelType
     * @uses LabelType::set_()
     * @uses LabelType::setOrderReference()
     * @uses LabelType::setBarcode()
     * @uses LabelType::setTrackingNumber()
     * @uses LabelType::setBatch()
     * @param string $_
     * @param string $orderReference
     * @param string $barcode
     * @param string $trackingNumber
     * @param string $batch
     */
    public function __construct($_ = null, $orderReference = null, $barcode = null, $trackingNumber = null, $batch = null)
    {
        $this
            ->set_($_)
            ->setOrderReference($orderReference)
            ->setBarcode($barcode)
            ->setTrackingNumber($trackingNumber)
            ->setBatch($batch);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Etrias\PaazlConnector\StructType\LabelType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get orderReference value
     * @return string|null
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }
    /**
     * Set orderReference value
     * @param string $orderReference
     * @return \Etrias\PaazlConnector\StructType\LabelType
     */
    public function setOrderReference($orderReference = null)
    {
        // validation for constraint: string
        if (!is_null($orderReference) && !is_string($orderReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderReference)), __LINE__);
        }
        $this->orderReference = $orderReference;
        return $this;
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
     * @return \Etrias\PaazlConnector\StructType\LabelType
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
     * @return \Etrias\PaazlConnector\StructType\LabelType
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
     * Get batch value
     * @return string|null
     */
    public function getBatch()
    {
        return $this->batch;
    }
    /**
     * Set batch value
     * @param string $batch
     * @return \Etrias\PaazlConnector\StructType\LabelType
     */
    public function setBatch($batch = null)
    {
        // validation for constraint: string
        if (!is_null($batch) && !is_string($batch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($batch)), __LINE__);
        }
        $this->batch = $batch;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\LabelType
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
