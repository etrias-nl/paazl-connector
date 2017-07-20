<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelShipmentsRequest StructType
 * @subpackage Structs
 */
class CancelShipmentsRequest extends AbstractStructBase
{
    /**
     * The webshop
     * @var int
     */
    public $webshop;
    /**
     * The label
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\ExistingLabelType[]
     */
    public $label;
    /**
     * Constructor method for cancelShipmentsRequest
     * @uses CancelShipmentsRequest::setWebshop()
     * @uses CancelShipmentsRequest::setLabel()
     * @param int $webshop
     * @param \Etrias\PaazlConnector\StructType\ExistingLabelType[] $label
     */
    public function __construct($webshop = null, array $label = array())
    {
        $this
            ->setWebshop($webshop)
            ->setLabel($label);
    }
    /**
     * Get webshop value
     * @return int|null
     */
    public function getWebshop()
    {
        return $this->webshop;
    }
    /**
     * Set webshop value
     * @param int $webshop
     * @return \Etrias\PaazlConnector\StructType\CancelShipmentsRequest
     */
    public function setWebshop($webshop = null)
    {
        // validation for constraint: int
        if (!is_null($webshop) && !is_numeric($webshop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($webshop)), __LINE__);
        }
        $this->webshop = $webshop;
        return $this;
    }
    /**
     * Get label value
     * @return \Etrias\PaazlConnector\StructType\ExistingLabelType[]|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\ExistingLabelType[] $label
     * @return \Etrias\PaazlConnector\StructType\CancelShipmentsRequest
     */
    public function setLabel(array $label = array())
    {
        foreach ($label as $cancelShipmentsRequestLabelItem) {
            // validation for constraint: itemType
            if (!$cancelShipmentsRequestLabelItem instanceof \Etrias\PaazlConnector\StructType\ExistingLabelType) {
                throw new \InvalidArgumentException(sprintf('The label property can only contain items of \Etrias\PaazlConnector\StructType\ExistingLabelType, "%s" given', is_object($cancelShipmentsRequestLabelItem) ? get_class($cancelShipmentsRequestLabelItem) : gettype($cancelShipmentsRequestLabelItem)), __LINE__);
            }
        }
        $this->label = $label;
        return $this;
    }
    /**
     * Add item to label value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\ExistingLabelType $item
     * @return \Etrias\PaazlConnector\StructType\CancelShipmentsRequest
     */
    public function addToLabel(\Etrias\PaazlConnector\StructType\ExistingLabelType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\ExistingLabelType) {
            throw new \InvalidArgumentException(sprintf('The label property can only contain items of \Etrias\PaazlConnector\StructType\ExistingLabelType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->label[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\CancelShipmentsRequest
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
