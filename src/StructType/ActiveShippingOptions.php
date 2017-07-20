<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for activeShippingOptions StructType
 * @subpackage Structs
 */
class ActiveShippingOptions extends AbstractStructBase
{
    /**
     * The activeShippingOption
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Etrias\PaazlConnector\StructType\ActiveShippingOption[]
     */
    public $activeShippingOption;
    /**
     * Constructor method for activeShippingOptions
     * @uses ActiveShippingOptions::setActiveShippingOption()
     * @param \Etrias\PaazlConnector\StructType\ActiveShippingOption[] $activeShippingOption
     */
    public function __construct(array $activeShippingOption = array())
    {
        $this
            ->setActiveShippingOption($activeShippingOption);
    }
    /**
     * Get activeShippingOption value
     * @return \Etrias\PaazlConnector\StructType\ActiveShippingOption[]|null
     */
    public function getActiveShippingOption()
    {
        return $this->activeShippingOption;
    }
    /**
     * Set activeShippingOption value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\ActiveShippingOption[] $activeShippingOption
     * @return \Etrias\PaazlConnector\StructType\ActiveShippingOptions
     */
    public function setActiveShippingOption(array $activeShippingOption = array())
    {
        foreach ($activeShippingOption as $activeShippingOptionsActiveShippingOptionItem) {
            // validation for constraint: itemType
            if (!$activeShippingOptionsActiveShippingOptionItem instanceof \Etrias\PaazlConnector\StructType\ActiveShippingOption) {
                throw new \InvalidArgumentException(sprintf('The activeShippingOption property can only contain items of \Etrias\PaazlConnector\StructType\ActiveShippingOption, "%s" given', is_object($activeShippingOptionsActiveShippingOptionItem) ? get_class($activeShippingOptionsActiveShippingOptionItem) : gettype($activeShippingOptionsActiveShippingOptionItem)), __LINE__);
            }
        }
        $this->activeShippingOption = $activeShippingOption;
        return $this;
    }
    /**
     * Add item to activeShippingOption value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\ActiveShippingOption $item
     * @return \Etrias\PaazlConnector\StructType\ActiveShippingOptions
     */
    public function addToActiveShippingOption(\Etrias\PaazlConnector\StructType\ActiveShippingOption $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\ActiveShippingOption) {
            throw new \InvalidArgumentException(sprintf('The activeShippingOption property can only contain items of \Etrias\PaazlConnector\StructType\ActiveShippingOption, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->activeShippingOption[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ActiveShippingOptions
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
