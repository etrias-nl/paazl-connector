<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for batchStatusOrderType StructType
 * @subpackage Structs
 */
class BatchStatusOrderType extends AbstractStructBase
{
    /**
     * The label
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\BatchStatusLabelType[]
     */
    public $label;
    /**
     * The reference
     * @var string
     */
    public $reference;
    /**
     * Constructor method for batchStatusOrderType
     * @uses BatchStatusOrderType::setLabel()
     * @uses BatchStatusOrderType::setReference()
     * @param \Etrias\PaazlConnector\StructType\BatchStatusLabelType[] $label
     * @param string $reference
     */
    public function __construct(array $label = array(), $reference = null)
    {
        $this
            ->setLabel($label)
            ->setReference($reference);
    }
    /**
     * Get label value
     * @return \Etrias\PaazlConnector\StructType\BatchStatusLabelType[]|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\BatchStatusLabelType[] $label
     * @return \Etrias\PaazlConnector\StructType\BatchStatusOrderType
     */
    public function setLabel(array $label = array())
    {
        foreach ($label as $batchStatusOrderTypeLabelItem) {
            // validation for constraint: itemType
            if (!$batchStatusOrderTypeLabelItem instanceof \Etrias\PaazlConnector\StructType\BatchStatusLabelType) {
                throw new \InvalidArgumentException(sprintf('The label property can only contain items of \Etrias\PaazlConnector\StructType\BatchStatusLabelType, "%s" given', is_object($batchStatusOrderTypeLabelItem) ? get_class($batchStatusOrderTypeLabelItem) : gettype($batchStatusOrderTypeLabelItem)), __LINE__);
            }
        }
        $this->label = $label;
        return $this;
    }
    /**
     * Add item to label value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\BatchStatusLabelType $item
     * @return \Etrias\PaazlConnector\StructType\BatchStatusOrderType
     */
    public function addToLabel(\Etrias\PaazlConnector\StructType\BatchStatusLabelType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\BatchStatusLabelType) {
            throw new \InvalidArgumentException(sprintf('The label property can only contain items of \Etrias\PaazlConnector\StructType\BatchStatusLabelType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->label[] = $item;
        return $this;
    }
    /**
     * Get reference value
     * @return string|null
     */
    public function getReference()
    {
        return $this->reference;
    }
    /**
     * Set reference value
     * @param string $reference
     * @return \Etrias\PaazlConnector\StructType\BatchStatusOrderType
     */
    public function setReference($reference = null)
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reference)), __LINE__);
        }
        $this->reference = $reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\BatchStatusOrderType
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
