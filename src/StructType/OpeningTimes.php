<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for openingTimes StructType
 * @subpackage Structs
 */
class OpeningTimes extends AbstractStructBase
{
    /**
     * The time
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\Time[]
     */
    public $time;
    /**
     * Constructor method for openingTimes
     * @uses OpeningTimes::setTime()
     * @param \Etrias\PaazlConnector\StructType\Time[] $time
     */
    public function __construct(array $time = array())
    {
        $this
            ->setTime($time);
    }
    /**
     * Get time value
     * @return \Etrias\PaazlConnector\StructType\Time[]|null
     */
    public function getTime()
    {
        return $this->time;
    }
    /**
     * Set time value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\Time[] $time
     * @return \Etrias\PaazlConnector\StructType\OpeningTimes
     */
    public function setTime(array $time = array())
    {
        foreach ($time as $openingTimesTimeItem) {
            // validation for constraint: itemType
            if (!$openingTimesTimeItem instanceof \Etrias\PaazlConnector\StructType\Time) {
                throw new \InvalidArgumentException(sprintf('The time property can only contain items of \Etrias\PaazlConnector\StructType\Time, "%s" given', is_object($openingTimesTimeItem) ? get_class($openingTimesTimeItem) : gettype($openingTimesTimeItem)), __LINE__);
            }
        }
        $this->time = $time;
        return $this;
    }
    /**
     * Add item to time value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\Time $item
     * @return \Etrias\PaazlConnector\StructType\OpeningTimes
     */
    public function addToTime(\Etrias\PaazlConnector\StructType\Time $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\Time) {
            throw new \InvalidArgumentException(sprintf('The time property can only contain items of \Etrias\PaazlConnector\StructType\Time, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->time[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\OpeningTimes
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
