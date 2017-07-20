<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for servicePointsResponse StructType
 * @subpackage Structs
 */
class ServicePointsResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The shippingOption
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\ShippingOption[]
     */
    public $shippingOption;
    /**
     * Constructor method for servicePointsResponse
     * @uses ServicePointsResponse::setError()
     * @uses ServicePointsResponse::setShippingOption()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param \Etrias\PaazlConnector\StructType\ShippingOption[] $shippingOption
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, array $shippingOption = array())
    {
        $this
            ->setError($error)
            ->setShippingOption($shippingOption);
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
     * @return \Etrias\PaazlConnector\StructType\ServicePointsResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get shippingOption value
     * @return \Etrias\PaazlConnector\StructType\ShippingOption[]|null
     */
    public function getShippingOption()
    {
        return $this->shippingOption;
    }
    /**
     * Set shippingOption value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\ShippingOption[] $shippingOption
     * @return \Etrias\PaazlConnector\StructType\ServicePointsResponse
     */
    public function setShippingOption(array $shippingOption = array())
    {
        foreach ($shippingOption as $servicePointsResponseShippingOptionItem) {
            // validation for constraint: itemType
            if (!$servicePointsResponseShippingOptionItem instanceof \Etrias\PaazlConnector\StructType\ShippingOption) {
                throw new \InvalidArgumentException(sprintf('The shippingOption property can only contain items of \Etrias\PaazlConnector\StructType\ShippingOption, "%s" given', is_object($servicePointsResponseShippingOptionItem) ? get_class($servicePointsResponseShippingOptionItem) : gettype($servicePointsResponseShippingOptionItem)), __LINE__);
            }
        }
        $this->shippingOption = $shippingOption;
        return $this;
    }
    /**
     * Add item to shippingOption value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\ShippingOption $item
     * @return \Etrias\PaazlConnector\StructType\ServicePointsResponse
     */
    public function addToShippingOption(\Etrias\PaazlConnector\StructType\ShippingOption $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\ShippingOption) {
            throw new \InvalidArgumentException(sprintf('The shippingOption property can only contain items of \Etrias\PaazlConnector\StructType\ShippingOption, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->shippingOption[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ServicePointsResponse
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
