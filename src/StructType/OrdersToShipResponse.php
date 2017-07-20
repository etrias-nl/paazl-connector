<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ordersToShipResponse StructType
 * @subpackage Structs
 */
class OrdersToShipResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The order
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\OrderToShipType[]
     */
    public $order;
    /**
     * Constructor method for ordersToShipResponse
     * @uses OrdersToShipResponse::setError()
     * @uses OrdersToShipResponse::setOrder()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param \Etrias\PaazlConnector\StructType\OrderToShipType[] $order
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, array $order = array())
    {
        $this
            ->setError($error)
            ->setOrder($order);
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
     * @return \Etrias\PaazlConnector\StructType\OrdersToShipResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get order value
     * @return \Etrias\PaazlConnector\StructType\OrderToShipType[]|null
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * Set order value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\OrderToShipType[] $order
     * @return \Etrias\PaazlConnector\StructType\OrdersToShipResponse
     */
    public function setOrder(array $order = array())
    {
        foreach ($order as $ordersToShipResponseOrderItem) {
            // validation for constraint: itemType
            if (!$ordersToShipResponseOrderItem instanceof \Etrias\PaazlConnector\StructType\OrderToShipType) {
                throw new \InvalidArgumentException(sprintf('The order property can only contain items of \Etrias\PaazlConnector\StructType\OrderToShipType, "%s" given', is_object($ordersToShipResponseOrderItem) ? get_class($ordersToShipResponseOrderItem) : gettype($ordersToShipResponseOrderItem)), __LINE__);
            }
        }
        $this->order = $order;
        return $this;
    }
    /**
     * Add item to order value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\OrderToShipType $item
     * @return \Etrias\PaazlConnector\StructType\OrdersToShipResponse
     */
    public function addToOrder(\Etrias\PaazlConnector\StructType\OrderToShipType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\OrderToShipType) {
            throw new \InvalidArgumentException(sprintf('The order property can only contain items of \Etrias\PaazlConnector\StructType\OrderToShipType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \Etrias\PaazlConnector\StructType\OrdersToShipResponse
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
