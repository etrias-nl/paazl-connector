<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for closeBatchResponse StructType
 * @subpackage Structs
 */
class CloseBatchResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The summary
     * @var \Etrias\PaazlConnector\StructType\BatchStatusType
     */
    public $summary;
    /**
     * Constructor method for closeBatchResponse
     * @uses CloseBatchResponse::setError()
     * @uses CloseBatchResponse::setSummary()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param \Etrias\PaazlConnector\StructType\BatchStatusType $summary
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, \Etrias\PaazlConnector\StructType\BatchStatusType $summary = null)
    {
        $this
            ->setError($error)
            ->setSummary($summary);
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
     * @return \Etrias\PaazlConnector\StructType\CloseBatchResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get summary value
     * @return \Etrias\PaazlConnector\StructType\BatchStatusType|null
     */
    public function getSummary()
    {
        return $this->summary;
    }
    /**
     * Set summary value
     * @param \Etrias\PaazlConnector\StructType\BatchStatusType $summary
     * @return \Etrias\PaazlConnector\StructType\CloseBatchResponse
     */
    public function setSummary(\Etrias\PaazlConnector\StructType\BatchStatusType $summary = null)
    {
        $this->summary = $summary;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\CloseBatchResponse
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
