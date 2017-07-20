<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pickupRequestOptionsResponse StructType
 * @subpackage Structs
 */
class PickupRequestOptionsResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The pickupRequestOption
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Etrias\PaazlConnector\StructType\PickupRequestOptionType[]
     */
    public $pickupRequestOption;
    /**
     * Constructor method for pickupRequestOptionsResponse
     * @uses PickupRequestOptionsResponse::setError()
     * @uses PickupRequestOptionsResponse::setPickupRequestOption()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param \Etrias\PaazlConnector\StructType\PickupRequestOptionType[] $pickupRequestOption
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, array $pickupRequestOption = array())
    {
        $this
            ->setError($error)
            ->setPickupRequestOption($pickupRequestOption);
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
     * @return \Etrias\PaazlConnector\StructType\PickupRequestOptionsResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get pickupRequestOption value
     * @return \Etrias\PaazlConnector\StructType\PickupRequestOptionType[]|null
     */
    public function getPickupRequestOption()
    {
        return $this->pickupRequestOption;
    }
    /**
     * Set pickupRequestOption value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\PickupRequestOptionType[] $pickupRequestOption
     * @return \Etrias\PaazlConnector\StructType\PickupRequestOptionsResponse
     */
    public function setPickupRequestOption(array $pickupRequestOption = array())
    {
        foreach ($pickupRequestOption as $pickupRequestOptionsResponsePickupRequestOptionItem) {
            // validation for constraint: itemType
            if (!$pickupRequestOptionsResponsePickupRequestOptionItem instanceof \Etrias\PaazlConnector\StructType\PickupRequestOptionType) {
                throw new \InvalidArgumentException(sprintf('The pickupRequestOption property can only contain items of \Etrias\PaazlConnector\StructType\PickupRequestOptionType, "%s" given', is_object($pickupRequestOptionsResponsePickupRequestOptionItem) ? get_class($pickupRequestOptionsResponsePickupRequestOptionItem) : gettype($pickupRequestOptionsResponsePickupRequestOptionItem)), __LINE__);
            }
        }
        $this->pickupRequestOption = $pickupRequestOption;
        return $this;
    }
    /**
     * Add item to pickupRequestOption value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\PickupRequestOptionType $item
     * @return \Etrias\PaazlConnector\StructType\PickupRequestOptionsResponse
     */
    public function addToPickupRequestOption(\Etrias\PaazlConnector\StructType\PickupRequestOptionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\PickupRequestOptionType) {
            throw new \InvalidArgumentException(sprintf('The pickupRequestOption property can only contain items of \Etrias\PaazlConnector\StructType\PickupRequestOptionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->pickupRequestOption[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\PickupRequestOptionsResponse
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
