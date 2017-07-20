<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for existingLabelType StructType
 * @subpackage Structs
 */
class ExistingLabelType extends AbstractStructBase
{
    /**
     * The hash
     * @var string
     */
    public $hash;
    /**
     * The targetWebshop
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $targetWebshop;
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
     * Constructor method for existingLabelType
     * @uses ExistingLabelType::setHash()
     * @uses ExistingLabelType::setTargetWebshop()
     * @uses ExistingLabelType::setOrderReference()
     * @uses ExistingLabelType::setBarcode()
     * @param string $hash
     * @param int $targetWebshop
     * @param string $orderReference
     * @param string $barcode
     */
    public function __construct($hash = null, $targetWebshop = null, $orderReference = null, $barcode = null)
    {
        $this
            ->setHash($hash)
            ->setTargetWebshop($targetWebshop)
            ->setOrderReference($orderReference)
            ->setBarcode($barcode);
    }
    /**
     * Get hash value
     * @return string|null
     */
    public function getHash()
    {
        return $this->hash;
    }
    /**
     * Set hash value
     * @param string $hash
     * @return \Etrias\PaazlConnector\StructType\ExistingLabelType
     */
    public function setHash($hash = null)
    {
        // validation for constraint: string
        if (!is_null($hash) && !is_string($hash)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hash)), __LINE__);
        }
        $this->hash = $hash;
        return $this;
    }
    /**
     * Get targetWebshop value
     * @return int|null
     */
    public function getTargetWebshop()
    {
        return $this->targetWebshop;
    }
    /**
     * Set targetWebshop value
     * @param int $targetWebshop
     * @return \Etrias\PaazlConnector\StructType\ExistingLabelType
     */
    public function setTargetWebshop($targetWebshop = null)
    {
        // validation for constraint: int
        if (!is_null($targetWebshop) && !is_numeric($targetWebshop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($targetWebshop)), __LINE__);
        }
        $this->targetWebshop = $targetWebshop;
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
     * @return \Etrias\PaazlConnector\StructType\ExistingLabelType
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
     * @return \Etrias\PaazlConnector\StructType\ExistingLabelType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ExistingLabelType
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
