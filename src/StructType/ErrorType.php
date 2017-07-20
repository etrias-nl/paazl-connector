<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for errorType StructType
 * @subpackage Structs
 */
class ErrorType extends AbstractStructBase
{
    /**
     * The code
     * @var int
     */
    public $code;
    /**
     * The message
     * @var string
     */
    public $message;
    /**
     * Constructor method for errorType
     * @uses ErrorType::setCode()
     * @uses ErrorType::setMessage()
     * @param int $code
     * @param string $message
     */
    public function __construct($code = null, $message = null)
    {
        $this
            ->setCode($code)
            ->setMessage($message);
    }
    /**
     * Get code value
     * @return int|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param int $code
     * @return \Etrias\PaazlConnector\StructType\ErrorType
     */
    public function setCode($code = null)
    {
        // validation for constraint: int
        if (!is_null($code) && !is_numeric($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \Etrias\PaazlConnector\StructType\ErrorType
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->message = $message;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ErrorType
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
