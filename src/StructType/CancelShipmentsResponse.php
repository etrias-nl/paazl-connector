<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelShipmentsResponse StructType
 * @subpackage Structs
 */
class CancelShipmentsResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The label
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\LabelResponseType[]
     */
    public $label;
    /**
     * Constructor method for cancelShipmentsResponse
     * @uses CancelShipmentsResponse::setError()
     * @uses CancelShipmentsResponse::setLabel()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param \Etrias\PaazlConnector\StructType\LabelResponseType[] $label
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, array $label = array())
    {
        $this
            ->setError($error)
            ->setLabel($label);
    }
    /**
     * Get error value
     * @return \Etrias\PaazlConnector\StructType\ErrorType|null
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @return \Etrias\PaazlConnector\StructType\CancelShipmentsResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get label value
     * @return \Etrias\PaazlConnector\StructType\LabelResponseType[]|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\LabelResponseType[] $label
     * @return \Etrias\PaazlConnector\StructType\CancelShipmentsResponse
     */
    public function setLabel(array $label = array())
    {
        foreach ($label as $cancelShipmentsResponseLabelItem) {
            // validation for constraint: itemType
            if (!$cancelShipmentsResponseLabelItem instanceof \Etrias\PaazlConnector\StructType\LabelResponseType) {
                throw new \InvalidArgumentException(sprintf('The label property can only contain items of \Etrias\PaazlConnector\StructType\LabelResponseType, "%s" given', is_object($cancelShipmentsResponseLabelItem) ? get_class($cancelShipmentsResponseLabelItem) : gettype($cancelShipmentsResponseLabelItem)), __LINE__);
            }
        }
        $this->label = $label;
        return $this;
    }
    /**
     * Add item to label value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\LabelResponseType $item
     * @return \Etrias\PaazlConnector\StructType\CancelShipmentsResponse
     */
    public function addToLabel(\Etrias\PaazlConnector\StructType\LabelResponseType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\LabelResponseType) {
            throw new \InvalidArgumentException(sprintf('The label property can only contain items of \Etrias\PaazlConnector\StructType\LabelResponseType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \Etrias\PaazlConnector\StructType\CancelShipmentsResponse
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
