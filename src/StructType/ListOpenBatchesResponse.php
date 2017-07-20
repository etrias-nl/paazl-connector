<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for listOpenBatchesResponse StructType
 * @subpackage Structs
 */
class ListOpenBatchesResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The batch
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $batch;
    /**
     * Constructor method for listOpenBatchesResponse
     * @uses ListOpenBatchesResponse::setError()
     * @uses ListOpenBatchesResponse::setBatch()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param string[] $batch
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, array $batch = array())
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
     * @return \Etrias\PaazlConnector\StructType\ListOpenBatchesResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get batch value
     * @return string[]|null
     */
    public function getBatch()
    {
        return $this->batch;
    }
    /**
     * Set batch value
     * @throws \InvalidArgumentException
     * @param string[] $batch
     * @return \Etrias\PaazlConnector\StructType\ListOpenBatchesResponse
     */
    public function setBatch(array $batch = array())
    {
        foreach ($batch as $listOpenBatchesResponseBatchItem) {
            // validation for constraint: itemType
            if (!is_string($listOpenBatchesResponseBatchItem)) {
                throw new \InvalidArgumentException(sprintf('The batch property can only contain items of string, "%s" given', is_object($listOpenBatchesResponseBatchItem) ? get_class($listOpenBatchesResponseBatchItem) : gettype($listOpenBatchesResponseBatchItem)), __LINE__);
            }
        }
        $this->batch = $batch;
        return $this;
    }
    /**
     * Add item to batch value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Etrias\PaazlConnector\StructType\ListOpenBatchesResponse
     */
    public function addToBatch($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The batch property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->batch[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ListOpenBatchesResponse
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
