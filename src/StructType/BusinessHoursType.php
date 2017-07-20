<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for businessHoursType StructType
 * @subpackage Structs
 */
class BusinessHoursType extends AbstractStructBase
{
    /**
     * The day
     * @var string
     */
    public $day;
    /**
     * The from
     * @var \Etrias\PaazlConnector\StructType\Time
     */
    public $from;
    /**
     * The until
     * @var \Etrias\PaazlConnector\StructType\Time
     */
    public $until;
    /**
     * Constructor method for businessHoursType
     * @uses BusinessHoursType::setDay()
     * @uses BusinessHoursType::setFrom()
     * @uses BusinessHoursType::setUntil()
     * @param string $day
     * @param \Etrias\PaazlConnector\StructType\Time $from
     * @param \Etrias\PaazlConnector\StructType\Time $until
     */
    public function __construct($day = null, \Etrias\PaazlConnector\StructType\Time $from = null, \Etrias\PaazlConnector\StructType\Time $until = null)
    {
        $this
            ->setDay($day)
            ->setFrom($from)
            ->setUntil($until);
    }
    /**
     * Get day value
     * @return string|null
     */
    public function getDay()
    {
        return $this->day;
    }
    /**
     * Set day value
     * @uses \Etrias\PaazlConnector\EnumType\DayType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\DayType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $day
     * @return \Etrias\PaazlConnector\StructType\BusinessHoursType
     */
    public function setDay($day = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\DayType::valueIsValid($day)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $day, implode(', ', \Etrias\PaazlConnector\EnumType\DayType::getValidValues())), __LINE__);
        }
        $this->day = $day;
        return $this;
    }
    /**
     * Get from value
     * @return \Etrias\PaazlConnector\StructType\Time|null
     */
    public function getFrom()
    {
        return $this->from;
    }
    /**
     * Set from value
     * @param \Etrias\PaazlConnector\StructType\Time $from
     * @return \Etrias\PaazlConnector\StructType\BusinessHoursType
     */
    public function setFrom(\Etrias\PaazlConnector\StructType\Time $from = null)
    {
        $this->from = $from;
        return $this;
    }
    /**
     * Get until value
     * @return \Etrias\PaazlConnector\StructType\Time|null
     */
    public function getUntil()
    {
        return $this->until;
    }
    /**
     * Set until value
     * @param \Etrias\PaazlConnector\StructType\Time $until
     * @return \Etrias\PaazlConnector\StructType\BusinessHoursType
     */
    public function setUntil(\Etrias\PaazlConnector\StructType\Time $until = null)
    {
        $this->until = $until;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\BusinessHoursType
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
