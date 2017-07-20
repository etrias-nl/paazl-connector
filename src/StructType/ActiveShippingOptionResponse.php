<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for activeShippingOptionResponse StructType
 * @subpackage Structs
 */
class ActiveShippingOptionResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The activeShippingOptions
     * @var \Etrias\PaazlConnector\StructType\ActiveShippingOptions
     */
    public $activeShippingOptions;
    /**
     * Constructor method for activeShippingOptionResponse
     * @uses ActiveShippingOptionResponse::setError()
     * @uses ActiveShippingOptionResponse::setActiveShippingOptions()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param \Etrias\PaazlConnector\StructType\ActiveShippingOptions $activeShippingOptions
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, \Etrias\PaazlConnector\StructType\ActiveShippingOptions $activeShippingOptions = null)
    {
        $this
            ->setError($error)
            ->setActiveShippingOptions($activeShippingOptions);
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
     * @return \Etrias\PaazlConnector\StructType\ActiveShippingOptionResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get activeShippingOptions value
     * @return \Etrias\PaazlConnector\StructType\ActiveShippingOptions|null
     */
    public function getActiveShippingOptions()
    {
        return $this->activeShippingOptions;
    }
    /**
     * Set activeShippingOptions value
     * @param \Etrias\PaazlConnector\StructType\ActiveShippingOptions $activeShippingOptions
     * @return \Etrias\PaazlConnector\StructType\ActiveShippingOptionResponse
     */
    public function setActiveShippingOptions(\Etrias\PaazlConnector\StructType\ActiveShippingOptions $activeShippingOptions = null)
    {
        $this->activeShippingOptions = $activeShippingOptions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ActiveShippingOptionResponse
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
