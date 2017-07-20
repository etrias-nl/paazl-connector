<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for triggerBarcodeRequestType StructType
 * @subpackage Structs
 */
class TriggerBarcodeRequestType extends AbstractStructBase
{
    /**
     * The barcode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $barcode;
    /**
     * Constructor method for triggerBarcodeRequestType
     * @uses TriggerBarcodeRequestType::setBarcode()
     * @param string[] $barcode
     */
    public function __construct(array $barcode = array())
    {
        $this
            ->setBarcode($barcode);
    }
    /**
     * Get barcode value
     * @return string[]|null
     */
    public function getBarcode()
    {
        return $this->barcode;
    }
    /**
     * Set barcode value
     * @throws \InvalidArgumentException
     * @param string[] $barcode
     * @return \Etrias\PaazlConnector\StructType\TriggerBarcodeRequestType
     */
    public function setBarcode(array $barcode = array())
    {
        foreach ($barcode as $triggerBarcodeRequestTypeBarcodeItem) {
            // validation for constraint: itemType
            if (!is_string($triggerBarcodeRequestTypeBarcodeItem)) {
                throw new \InvalidArgumentException(sprintf('The barcode property can only contain items of string, "%s" given', is_object($triggerBarcodeRequestTypeBarcodeItem) ? get_class($triggerBarcodeRequestTypeBarcodeItem) : gettype($triggerBarcodeRequestTypeBarcodeItem)), __LINE__);
            }
        }
        $this->barcode = $barcode;
        return $this;
    }
    /**
     * Add item to barcode value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Etrias\PaazlConnector\StructType\TriggerBarcodeRequestType
     */
    public function addToBarcode($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The barcode property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->barcode[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\TriggerBarcodeRequestType
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
