<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingOptions StructType
 * @subpackage Structs
 */
class ShippingOptions extends AbstractStructBase
{
    /**
     * The shippingOption
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Etrias\PaazlConnector\StructType\ShippingOption[]
     */
    public $shippingOption;
    /**
     * Constructor method for shippingOptions
     * @uses ShippingOptions::setShippingOption()
     * @param \Etrias\PaazlConnector\StructType\ShippingOption[] $shippingOption
     */
    public function __construct(array $shippingOption = array())
    {
        $this
            ->setShippingOption($shippingOption);
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
     * @return \Etrias\PaazlConnector\StructType\ShippingOptions
     */
    public function setShippingOption(array $shippingOption = array())
    {
        foreach ($shippingOption as $shippingOptionsShippingOptionItem) {
            // validation for constraint: itemType
            if (!$shippingOptionsShippingOptionItem instanceof \Etrias\PaazlConnector\StructType\ShippingOption) {
                throw new \InvalidArgumentException(sprintf('The shippingOption property can only contain items of \Etrias\PaazlConnector\StructType\ShippingOption, "%s" given', is_object($shippingOptionsShippingOptionItem) ? get_class($shippingOptionsShippingOptionItem) : gettype($shippingOptionsShippingOptionItem)), __LINE__);
            }
        }
        $this->shippingOption = $shippingOption;
        return $this;
    }
    /**
     * Add item to shippingOption value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\ShippingOption $item
     * @return \Etrias\PaazlConnector\StructType\ShippingOptions
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
     * @return \Etrias\PaazlConnector\StructType\ShippingOptions
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
