<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for orderStatusResponse StructType
 * @subpackage Structs
 */
class OrderStatusResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The orderStatus
     * @var \Etrias\PaazlConnector\StructType\OrderStatusContainerType
     */
    public $orderStatus;
    /**
     * Constructor method for orderStatusResponse
     * @uses OrderStatusResponse::setError()
     * @uses OrderStatusResponse::setOrderStatus()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param \Etrias\PaazlConnector\StructType\OrderStatusContainerType $orderStatus
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, \Etrias\PaazlConnector\StructType\OrderStatusContainerType $orderStatus = null)
    {
        $this
            ->setError($error)
            ->setOrderStatus($orderStatus);
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
     * @return \Etrias\PaazlConnector\StructType\OrderStatusResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get orderStatus value
     * @return \Etrias\PaazlConnector\StructType\OrderStatusContainerType|null
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }
    /**
     * Set orderStatus value
     * @param \Etrias\PaazlConnector\StructType\OrderStatusContainerType $orderStatus
     * @return \Etrias\PaazlConnector\StructType\OrderStatusResponse
     */
    public function setOrderStatus(\Etrias\PaazlConnector\StructType\OrderStatusContainerType $orderStatus = null)
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\OrderStatusResponse
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
