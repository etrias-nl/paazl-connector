<?php

namespace Etrias\PaazlConnector\EnumType;

/**
 * This class stands for directionType EnumType
 * @subpackage Enumerations
 */
class DirectionType
{
    /**
     * Constant for value 'pickup'
     * @return string 'pickup'
     */
    const VALUE_PICKUP = 'pickup';
    /**
     * Constant for value 'delivery'
     * @return string 'delivery'
     */
    const VALUE_DELIVERY = 'delivery';
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
     * @uses self::VALUE_PICKUP
     * @uses self::VALUE_DELIVERY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PICKUP,
            self::VALUE_DELIVERY,
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
