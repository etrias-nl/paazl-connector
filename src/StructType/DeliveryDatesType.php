<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deliveryDatesType StructType
 * @subpackage Structs
 */
class DeliveryDatesType extends AbstractStructBase
{
    /**
     * The deliveryDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $deliveryDate;
    /**
     * The deliveryDateOption
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\DeliveryDateOptionType[]
     */
    public $deliveryDateOption;
    /**
     * Constructor method for deliveryDatesType
     * @uses DeliveryDatesType::setDeliveryDate()
     * @uses DeliveryDatesType::setDeliveryDateOption()
     * @param string[] $deliveryDate
     * @param \Etrias\PaazlConnector\StructType\DeliveryDateOptionType[] $deliveryDateOption
     */
    public function __construct(array $deliveryDate = array(), array $deliveryDateOption = array())
    {
        $this
            ->setDeliveryDate($deliveryDate)
            ->setDeliveryDateOption($deliveryDateOption);
    }
    /**
     * Get deliveryDate value
     * @return string[]|null
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }
    /**
     * Set deliveryDate value
     * @throws \InvalidArgumentException
     * @param string[] $deliveryDate
     * @return \Etrias\PaazlConnector\StructType\DeliveryDatesType
     */
    public function setDeliveryDate(array $deliveryDate = array())
    {
        foreach ($deliveryDate as $deliveryDatesTypeDeliveryDateItem) {
            // validation for constraint: itemType
            if (!is_string($deliveryDatesTypeDeliveryDateItem)) {
                throw new \InvalidArgumentException(sprintf('The deliveryDate property can only contain items of date, "%s" given', is_object($deliveryDatesTypeDeliveryDateItem) ? get_class($deliveryDatesTypeDeliveryDateItem) : gettype($deliveryDatesTypeDeliveryDateItem)), __LINE__);
            }
        }
        $this->deliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * Add item to deliveryDate value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Etrias\PaazlConnector\StructType\DeliveryDatesType
     */
    public function addToDeliveryDate($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The deliveryDate property can only contain items of date, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->deliveryDate[] = $item;
        return $this;
    }
    /**
     * Get deliveryDateOption value
     * @return \Etrias\PaazlConnector\StructType\DeliveryDateOptionType[]|null
     */
    public function getDeliveryDateOption()
    {
        return $this->deliveryDateOption;
    }
    /**
     * Set deliveryDateOption value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\DeliveryDateOptionType[] $deliveryDateOption
     * @return \Etrias\PaazlConnector\StructType\DeliveryDatesType
     */
    public function setDeliveryDateOption(array $deliveryDateOption = array())
    {
        foreach ($deliveryDateOption as $deliveryDatesTypeDeliveryDateOptionItem) {
            // validation for constraint: itemType
            if (!$deliveryDatesTypeDeliveryDateOptionItem instanceof \Etrias\PaazlConnector\StructType\DeliveryDateOptionType) {
                throw new \InvalidArgumentException(sprintf('The deliveryDateOption property can only contain items of \Etrias\PaazlConnector\StructType\DeliveryDateOptionType, "%s" given', is_object($deliveryDatesTypeDeliveryDateOptionItem) ? get_class($deliveryDatesTypeDeliveryDateOptionItem) : gettype($deliveryDatesTypeDeliveryDateOptionItem)), __LINE__);
            }
        }
        $this->deliveryDateOption = $deliveryDateOption;
        return $this;
    }
    /**
     * Add item to deliveryDateOption value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\DeliveryDateOptionType $item
     * @return \Etrias\PaazlConnector\StructType\DeliveryDatesType
     */
    public function addToDeliveryDateOption(\Etrias\PaazlConnector\StructType\DeliveryDateOptionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\DeliveryDateOptionType) {
            throw new \InvalidArgumentException(sprintf('The deliveryDateOption property can only contain items of \Etrias\PaazlConnector\StructType\DeliveryDateOptionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->deliveryDateOption[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\DeliveryDatesType
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
