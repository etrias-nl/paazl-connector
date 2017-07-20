<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deliveryDateOptionType StructType
 * @subpackage Structs
 */
class DeliveryDateOptionType extends AbstractStructBase
{
    /**
     * The pickupDate
     * @var string
     */
    public $pickupDate;
    /**
     * The deliveryDate
     * @var string
     */
    public $deliveryDate;
    /**
     * The deliveryTimeRange
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\TimeRangeType
     */
    public $deliveryTimeRange;
    /**
     * Constructor method for deliveryDateOptionType
     * @uses DeliveryDateOptionType::setPickupDate()
     * @uses DeliveryDateOptionType::setDeliveryDate()
     * @uses DeliveryDateOptionType::setDeliveryTimeRange()
     * @param string $pickupDate
     * @param string $deliveryDate
     * @param \Etrias\PaazlConnector\StructType\TimeRangeType $deliveryTimeRange
     */
    public function __construct($pickupDate = null, $deliveryDate = null, \Etrias\PaazlConnector\StructType\TimeRangeType $deliveryTimeRange = null)
    {
        $this
            ->setPickupDate($pickupDate)
            ->setDeliveryDate($deliveryDate)
            ->setDeliveryTimeRange($deliveryTimeRange);
    }
    /**
     * Get pickupDate value
     * @return string|null
     */
    public function getPickupDate()
    {
        return $this->pickupDate;
    }
    /**
     * Set pickupDate value
     * @param string $pickupDate
     * @return \Etrias\PaazlConnector\StructType\DeliveryDateOptionType
     */
    public function setPickupDate($pickupDate = null)
    {
        // validation for constraint: string
        if (!is_null($pickupDate) && !is_string($pickupDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupDate)), __LINE__);
        }
        $this->pickupDate = $pickupDate;
        return $this;
    }
    /**
     * Get deliveryDate value
     * @return string|null
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }
    /**
     * Set deliveryDate value
     * @param string $deliveryDate
     * @return \Etrias\PaazlConnector\StructType\DeliveryDateOptionType
     */
    public function setDeliveryDate($deliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryDate) && !is_string($deliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryDate)), __LINE__);
        }
        $this->deliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * Get deliveryTimeRange value
     * @return \Etrias\PaazlConnector\StructType\TimeRangeType|null
     */
    public function getDeliveryTimeRange()
    {
        return $this->deliveryTimeRange;
    }
    /**
     * Set deliveryTimeRange value
     * @param \Etrias\PaazlConnector\StructType\TimeRangeType $deliveryTimeRange
     * @return \Etrias\PaazlConnector\StructType\DeliveryDateOptionType
     */
    public function setDeliveryTimeRange(\Etrias\PaazlConnector\StructType\TimeRangeType $deliveryTimeRange = null)
    {
        $this->deliveryTimeRange = $deliveryTimeRange;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\DeliveryDateOptionType
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
