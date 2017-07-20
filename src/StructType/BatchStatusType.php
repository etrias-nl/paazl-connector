<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for batchStatusType StructType
 * @subpackage Structs
 */
class BatchStatusType extends AbstractStructBase
{
    /**
     * The order
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\BatchStatusOrderType[]
     */
    public $order;
    /**
     * Constructor method for batchStatusType
     * @uses BatchStatusType::setOrder()
     * @param \Etrias\PaazlConnector\StructType\BatchStatusOrderType[] $order
     */
    public function __construct(array $order = array())
    {
        $this
            ->setOrder($order);
    }
    /**
     * Get order value
     * @return \Etrias\PaazlConnector\StructType\BatchStatusOrderType[]|null
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * Set order value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\BatchStatusOrderType[] $order
     * @return \Etrias\PaazlConnector\StructType\BatchStatusType
     */
    public function setOrder(array $order = array())
    {
        foreach ($order as $batchStatusTypeOrderItem) {
            // validation for constraint: itemType
            if (!$batchStatusTypeOrderItem instanceof \Etrias\PaazlConnector\StructType\BatchStatusOrderType) {
                throw new \InvalidArgumentException(sprintf('The order property can only contain items of \Etrias\PaazlConnector\StructType\BatchStatusOrderType, "%s" given', is_object($batchStatusTypeOrderItem) ? get_class($batchStatusTypeOrderItem) : gettype($batchStatusTypeOrderItem)), __LINE__);
            }
        }
        $this->order = $order;
        return $this;
    }
    /**
     * Add item to order value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\BatchStatusOrderType $item
     * @return \Etrias\PaazlConnector\StructType\BatchStatusType
     */
    public function addToOrder(\Etrias\PaazlConnector\StructType\BatchStatusOrderType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\BatchStatusOrderType) {
            throw new \InvalidArgumentException(sprintf('The order property can only contain items of \Etrias\PaazlConnector\StructType\BatchStatusOrderType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->order[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\BatchStatusType
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
