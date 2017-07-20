<?php

namespace Etrias\PaazlConnector\EnumType;

/**
 * This class stands for dayType EnumType
 * @subpackage Enumerations
 */
class DayType
{
    /**
     * Constant for value 'MONDAY'
     * @return string 'MONDAY'
     */
    const VALUE_MONDAY = 'MONDAY';
    /**
     * Constant for value 'TUESDAY'
     * @return string 'TUESDAY'
     */
    const VALUE_TUESDAY = 'TUESDAY';
    /**
     * Constant for value 'WEDNESDAY'
     * @return string 'WEDNESDAY'
     */
    const VALUE_WEDNESDAY = 'WEDNESDAY';
    /**
     * Constant for value 'THURSDAY'
     * @return string 'THURSDAY'
     */
    const VALUE_THURSDAY = 'THURSDAY';
    /**
     * Constant for value 'FRIDAY'
     * @return string 'FRIDAY'
     */
    const VALUE_FRIDAY = 'FRIDAY';
    /**
     * Constant for value 'SATURDAY'
     * @return string 'SATURDAY'
     */
    const VALUE_SATURDAY = 'SATURDAY';
    /**
     * Constant for value 'SUNDAY'
     * @return string 'SUNDAY'
     */
    const VALUE_SUNDAY = 'SUNDAY';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_MONDAY
     * @uses self::VALUE_TUESDAY
     * @uses self::VALUE_WEDNESDAY
     * @uses self::VALUE_THURSDAY
     * @uses self::VALUE_FRIDAY
     * @uses self::VALUE_SATURDAY
     * @uses self::VALUE_SUNDAY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MONDAY,
            self::VALUE_TUESDAY,
            self::VALUE_WEDNESDAY,
            self::VALUE_THURSDAY,
            self::VALUE_FRIDAY,
            self::VALUE_SATURDAY,
            self::VALUE_SUNDAY,
        );
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
