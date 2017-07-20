<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for time StructType
 * @subpackage Structs
 */
class Time extends AbstractStructBase
{
    /**
     * The day
     * @var string
     */
    public $day;
    /**
     * The alwaysOpen
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $alwaysOpen;
    /**
     * The openFromAfternoon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $openFromAfternoon;
    /**
     * The openFromMorning
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $openFromMorning;
    /**
     * The openTillAfternoon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $openTillAfternoon;
    /**
     * The openTillMorning
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $openTillMorning;
    /**
     * Constructor method for time
     * @uses Time::setDay()
     * @uses Time::setAlwaysOpen()
     * @uses Time::setOpenFromAfternoon()
     * @uses Time::setOpenFromMorning()
     * @uses Time::setOpenTillAfternoon()
     * @uses Time::setOpenTillMorning()
     * @param string $day
     * @param bool $alwaysOpen
     * @param string $openFromAfternoon
     * @param string $openFromMorning
     * @param string $openTillAfternoon
     * @param string $openTillMorning
     */
    public function __construct($day = null, $alwaysOpen = null, $openFromAfternoon = null, $openFromMorning = null, $openTillAfternoon = null, $openTillMorning = null)
    {
        $this
            ->setDay($day)
            ->setAlwaysOpen($alwaysOpen)
            ->setOpenFromAfternoon($openFromAfternoon)
            ->setOpenFromMorning($openFromMorning)
            ->setOpenTillAfternoon($openTillAfternoon)
            ->setOpenTillMorning($openTillMorning);
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
     * @return \Etrias\PaazlConnector\StructType\Time
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
     * Get alwaysOpen value
     * @return bool|null
     */
    public function getAlwaysOpen()
    {
        return $this->alwaysOpen;
    }
    /**
     * Set alwaysOpen value
     * @param bool $alwaysOpen
     * @return \Etrias\PaazlConnector\StructType\Time
     */
    public function setAlwaysOpen($alwaysOpen = null)
    {
        // validation for constraint: boolean
        if (!is_null($alwaysOpen) && !is_bool($alwaysOpen)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($alwaysOpen)), __LINE__);
        }
        $this->alwaysOpen = $alwaysOpen;
        return $this;
    }
    /**
     * Get openFromAfternoon value
     * @return string|null
     */
    public function getOpenFromAfternoon()
    {
        return $this->openFromAfternoon;
    }
    /**
     * Set openFromAfternoon value
     * @param string $openFromAfternoon
     * @return \Etrias\PaazlConnector\StructType\Time
     */
    public function setOpenFromAfternoon($openFromAfternoon = null)
    {
        // validation for constraint: string
        if (!is_null($openFromAfternoon) && !is_string($openFromAfternoon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($openFromAfternoon)), __LINE__);
        }
        $this->openFromAfternoon = $openFromAfternoon;
        return $this;
    }
    /**
     * Get openFromMorning value
     * @return string|null
     */
    public function getOpenFromMorning()
    {
        return $this->openFromMorning;
    }
    /**
     * Set openFromMorning value
     * @param string $openFromMorning
     * @return \Etrias\PaazlConnector\StructType\Time
     */
    public function setOpenFromMorning($openFromMorning = null)
    {
        // validation for constraint: string
        if (!is_null($openFromMorning) && !is_string($openFromMorning)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($openFromMorning)), __LINE__);
        }
        $this->openFromMorning = $openFromMorning;
        return $this;
    }
    /**
     * Get openTillAfternoon value
     * @return string|null
     */
    public function getOpenTillAfternoon()
    {
        return $this->openTillAfternoon;
    }
    /**
     * Set openTillAfternoon value
     * @param string $openTillAfternoon
     * @return \Etrias\PaazlConnector\StructType\Time
     */
    public function setOpenTillAfternoon($openTillAfternoon = null)
    {
        // validation for constraint: string
        if (!is_null($openTillAfternoon) && !is_string($openTillAfternoon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($openTillAfternoon)), __LINE__);
        }
        $this->openTillAfternoon = $openTillAfternoon;
        return $this;
    }
    /**
     * Get openTillMorning value
     * @return string|null
     */
    public function getOpenTillMorning()
    {
        return $this->openTillMorning;
    }
    /**
     * Set openTillMorning value
     * @param string $openTillMorning
     * @return \Etrias\PaazlConnector\StructType\Time
     */
    public function setOpenTillMorning($openTillMorning = null)
    {
        // validation for constraint: string
        if (!is_null($openTillMorning) && !is_string($openTillMorning)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($openTillMorning)), __LINE__);
        }
        $this->openTillMorning = $openTillMorning;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\Time
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
