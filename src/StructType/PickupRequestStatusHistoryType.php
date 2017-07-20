<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pickupRequestStatusHistoryType StructType
 * @subpackage Structs
 */
class PickupRequestStatusHistoryType extends AbstractStructBase
{
    /**
     * The statusEntry
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Etrias\PaazlConnector\StructType\PickupRequestStatusEntryType[]
     */
    public $statusEntry;
    /**
     * Constructor method for pickupRequestStatusHistoryType
     * @uses PickupRequestStatusHistoryType::setStatusEntry()
     * @param \Etrias\PaazlConnector\StructType\PickupRequestStatusEntryType[] $statusEntry
     */
    public function __construct(array $statusEntry = array())
    {
        $this
            ->setStatusEntry($statusEntry);
    }
    /**
     * Get statusEntry value
     * @return \Etrias\PaazlConnector\StructType\PickupRequestStatusEntryType[]|null
     */
    public function getStatusEntry()
    {
        return $this->statusEntry;
    }
    /**
     * Set statusEntry value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\PickupRequestStatusEntryType[] $statusEntry
     * @return \Etrias\PaazlConnector\StructType\PickupRequestStatusHistoryType
     */
    public function setStatusEntry(array $statusEntry = array())
    {
        foreach ($statusEntry as $pickupRequestStatusHistoryTypeStatusEntryItem) {
            // validation for constraint: itemType
            if (!$pickupRequestStatusHistoryTypeStatusEntryItem instanceof \Etrias\PaazlConnector\StructType\PickupRequestStatusEntryType) {
                throw new \InvalidArgumentException(sprintf('The statusEntry property can only contain items of \Etrias\PaazlConnector\StructType\PickupRequestStatusEntryType, "%s" given', is_object($pickupRequestStatusHistoryTypeStatusEntryItem) ? get_class($pickupRequestStatusHistoryTypeStatusEntryItem) : gettype($pickupRequestStatusHistoryTypeStatusEntryItem)), __LINE__);
            }
        }
        $this->statusEntry = $statusEntry;
        return $this;
    }
    /**
     * Add item to statusEntry value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\PickupRequestStatusEntryType $item
     * @return \Etrias\PaazlConnector\StructType\PickupRequestStatusHistoryType
     */
    public function addToStatusEntry(\Etrias\PaazlConnector\StructType\PickupRequestStatusEntryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\PickupRequestStatusEntryType) {
            throw new \InvalidArgumentException(sprintf('The statusEntry property can only contain items of \Etrias\PaazlConnector\StructType\PickupRequestStatusEntryType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->statusEntry[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\PickupRequestStatusHistoryType
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
