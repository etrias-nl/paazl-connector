<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for batchStatusResponse StructType
 * @subpackage Structs
 */
class BatchStatusResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The batch
     * @var \Etrias\PaazlConnector\StructType\BatchStatusType
     */
    public $batch;
    /**
     * Constructor method for batchStatusResponse
     * @uses BatchStatusResponse::setError()
     * @uses BatchStatusResponse::setBatch()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param \Etrias\PaazlConnector\StructType\BatchStatusType $batch
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, \Etrias\PaazlConnector\StructType\BatchStatusType $batch = null)
    {
        $this
            ->setError($error)
            ->setBatch($batch);
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
     * @return \Etrias\PaazlConnector\StructType\BatchStatusResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get batch value
     * @return \Etrias\PaazlConnector\StructType\BatchStatusType|null
     */
    public function getBatch()
    {
        return $this->batch;
    }
    /**
     * Set batch value
     * @param \Etrias\PaazlConnector\StructType\BatchStatusType $batch
     * @return \Etrias\PaazlConnector\StructType\BatchStatusResponse
     */
    public function setBatch(\Etrias\PaazlConnector\StructType\BatchStatusType $batch = null)
    {
        $this->batch = $batch;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\BatchStatusResponse
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
