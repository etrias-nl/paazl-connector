<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for orderSaveResponseType StructType
 * @subpackage Structs
 */
class OrderSaveResponseType extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The succes
     * @var string
     */
    public $succes;
    /**
     * Constructor method for orderSaveResponseType
     * @uses OrderSaveResponseType::setError()
     * @uses OrderSaveResponseType::setSucces()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param string $succes
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, $succes = null)
    {
        $this
            ->setError($error)
            ->setSucces($succes);
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
     * @return \Etrias\PaazlConnector\StructType\OrderSaveResponseType
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get succes value
     * @return string|null
     */
    public function getSucces()
    {
        return $this->succes;
    }
    /**
     * Set succes value
     * @param string $succes
     * @return \Etrias\PaazlConnector\StructType\OrderSaveResponseType
     */
    public function setSucces($succes = null)
    {
        // validation for constraint: string
        if (!is_null($succes) && !is_string($succes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($succes)), __LINE__);
        }
        $this->succes = $succes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\OrderSaveResponseType
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
