<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deleteOrderResponse StructType
 * @subpackage Structs
 */
class DeleteOrderResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The success
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $success;
    /**
     * Constructor method for deleteOrderResponse
     * @uses DeleteOrderResponse::setError()
     * @uses DeleteOrderResponse::setSuccess()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param string[] $success
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, array $success = array())
    {
        $this
            ->setError($error)
            ->setSuccess($success);
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
     * @return \Etrias\PaazlConnector\StructType\DeleteOrderResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get success value
     * @return string[]|null
     */
    public function getSuccess()
    {
        return $this->success;
    }
    /**
     * Set success value
     * @throws \InvalidArgumentException
     * @param string[] $success
     * @return \Etrias\PaazlConnector\StructType\DeleteOrderResponse
     */
    public function setSuccess(array $success = array())
    {
        foreach ($success as $deleteOrderResponseSuccessItem) {
            // validation for constraint: itemType
            if (!is_string($deleteOrderResponseSuccessItem)) {
                throw new \InvalidArgumentException(sprintf('The success property can only contain items of string, "%s" given', is_object($deleteOrderResponseSuccessItem) ? get_class($deleteOrderResponseSuccessItem) : gettype($deleteOrderResponseSuccessItem)), __LINE__);
            }
        }
        $this->success = $success;
        return $this;
    }
    /**
     * Add item to success value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Etrias\PaazlConnector\StructType\DeleteOrderResponse
     */
    public function addToSuccess($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The success property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->success[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\DeleteOrderResponse
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
