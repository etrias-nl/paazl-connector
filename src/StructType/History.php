<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for history StructType
 * @subpackage Structs
 */
class History extends AbstractStructBase
{
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\CarrierStatusType[]
     */
    public $status;
    /**
     * Constructor method for history
     * @uses History::setStatus()
     * @param \Etrias\PaazlConnector\StructType\CarrierStatusType[] $status
     */
    public function __construct(array $status = array())
    {
        $this
            ->setStatus($status);
    }
    /**
     * Get status value
     * @return \Etrias\PaazlConnector\StructType\CarrierStatusType[]|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\CarrierStatusType[] $status
     * @return \Etrias\PaazlConnector\StructType\History
     */
    public function setStatus(array $status = array())
    {
        foreach ($status as $historyStatusItem) {
            // validation for constraint: itemType
            if (!$historyStatusItem instanceof \Etrias\PaazlConnector\StructType\CarrierStatusType) {
                throw new \InvalidArgumentException(sprintf('The status property can only contain items of \Etrias\PaazlConnector\StructType\CarrierStatusType, "%s" given', is_object($historyStatusItem) ? get_class($historyStatusItem) : gettype($historyStatusItem)), __LINE__);
            }
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Add item to status value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\CarrierStatusType $item
     * @return \Etrias\PaazlConnector\StructType\History
     */
    public function addToStatus(\Etrias\PaazlConnector\StructType\CarrierStatusType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\CarrierStatusType) {
            throw new \InvalidArgumentException(sprintf('The status property can only contain items of \Etrias\PaazlConnector\StructType\CarrierStatusType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->status[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\History
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
