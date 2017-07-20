<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingOptionResponse StructType
 * @subpackage Structs
 */
class ShippingOptionResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The deliveryMatrix
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $deliveryMatrix;
    /**
     * The shippingOptions
     * @var \Etrias\PaazlConnector\StructType\ShippingOptions
     */
    public $shippingOptions;
    /**
     * Constructor method for shippingOptionResponse
     * @uses ShippingOptionResponse::setError()
     * @uses ShippingOptionResponse::setDeliveryMatrix()
     * @uses ShippingOptionResponse::setShippingOptions()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param string $deliveryMatrix
     * @param \Etrias\PaazlConnector\StructType\ShippingOptions $shippingOptions
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, $deliveryMatrix = null, \Etrias\PaazlConnector\StructType\ShippingOptions $shippingOptions = null)
    {
        $this
            ->setError($error)
            ->setDeliveryMatrix($deliveryMatrix)
            ->setShippingOptions($shippingOptions);
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
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get deliveryMatrix value
     * @return string|null
     */
    public function getDeliveryMatrix()
    {
        return $this->deliveryMatrix;
    }
    /**
     * Set deliveryMatrix value
     * @param string $deliveryMatrix
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionResponse
     */
    public function setDeliveryMatrix($deliveryMatrix = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryMatrix) && !is_string($deliveryMatrix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryMatrix)), __LINE__);
        }
        $this->deliveryMatrix = $deliveryMatrix;
        return $this;
    }
    /**
     * Get shippingOptions value
     * @return \Etrias\PaazlConnector\StructType\ShippingOptions|null
     */
    public function getShippingOptions()
    {
        return $this->shippingOptions;
    }
    /**
     * Set shippingOptions value
     * @param \Etrias\PaazlConnector\StructType\ShippingOptions $shippingOptions
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionResponse
     */
    public function setShippingOptions(\Etrias\PaazlConnector\StructType\ShippingOptions $shippingOptions = null)
    {
        $this->shippingOptions = $shippingOptions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionResponse
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
