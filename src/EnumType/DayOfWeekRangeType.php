<?php

namespace Etrias\PaazlConnector\EnumType;

/**
 * This class stands for dayOfWeekRangeType EnumType
 * @subpackage Enumerations
 */
class DayOfWeekRangeType
{
    /**
     * Constant for value 'MONDAY'
     * @return string 'MONDAY'
     */
    const VALUE_MONDAY = 'MONDAY';
    /**
     * Constant for value 'MONDAY_FRIDAY'
     * @return string 'MONDAY_FRIDAY'
     */
    const VALUE_MONDAY_FRIDAY = 'MONDAY_FRIDAY';
    /**
     * Constant for value 'MONDAY_SATURDAY'
     * @return string 'MONDAY_SATURDAY'
     */
    const VALUE_MONDAY_SATURDAY = 'MONDAY_SATURDAY';
    /**
     * Constant for value 'MONDAY_SUNDAY'
     * @return string 'MONDAY_SUNDAY'
     */
    const VALUE_MONDAY_SUNDAY = 'MONDAY_SUNDAY';
    /**
     * Constant for value 'TUESDAY_FRIDAY'
     * @return string 'TUESDAY_FRIDAY'
     */
    const VALUE_TUESDAY_FRIDAY = 'TUESDAY_FRIDAY';
    /**
     * Constant for value 'TUESDAY_SATURDAY'
     * @return string 'TUESDAY_SATURDAY'
     */
    const VALUE_TUESDAY_SATURDAY = 'TUESDAY_SATURDAY';
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
     * Constant for value 'TUESDAY_AND_THURSDAY'
     * @return string 'TUESDAY_AND_THURSDAY'
     */
    const VALUE_TUESDAY_AND_THURSDAY = 'TUESDAY_AND_THURSDAY';
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
     * @uses self::VALUE_MONDAY_FRIDAY
     * @uses self::VALUE_MONDAY_SATURDAY
     * @uses self::VALUE_MONDAY_SUNDAY
     * @uses self::VALUE_TUESDAY_FRIDAY
     * @uses self::VALUE_TUESDAY_SATURDAY
     * @uses self::VALUE_SATURDAY
     * @uses self::VALUE_SUNDAY
     * @uses self::VALUE_TUESDAY_AND_THURSDAY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MONDAY,
            self::VALUE_MONDAY_FRIDAY,
            self::VALUE_MONDAY_SATURDAY,
            self::VALUE_MONDAY_SUNDAY,
            self::VALUE_TUESDAY_FRIDAY,
            self::VALUE_TUESDAY_SATURDAY,
            self::VALUE_SATURDAY,
            self::VALUE_SUNDAY,
            self::VALUE_TUESDAY_AND_THURSDAY,
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
