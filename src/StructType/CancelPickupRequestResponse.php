<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelPickupRequestResponse StructType
 * @subpackage Structs
 */
class CancelPickupRequestResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The success
     * @var string
     */
    public $success;
    /**
     * Constructor method for cancelPickupRequestResponse
     * @uses CancelPickupRequestResponse::setError()
     * @uses CancelPickupRequestResponse::setSuccess()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param string $success
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, $success = null)
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
     * @return \Etrias\PaazlConnector\StructType\CancelPickupRequestResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get success value
     * @return string|null
     */
    public function getSuccess()
    {
        return $this->success;
    }
    /**
     * Set success value
     * @param string $success
     * @return \Etrias\PaazlConnector\StructType\CancelPickupRequestResponse
     */
    public function setSuccess($success = null)
    {
        // validation for constraint: string
        if (!is_null($success) && !is_string($success)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($success)), __LINE__);
        }
        $this->success = $success;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\CancelPickupRequestResponse
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
