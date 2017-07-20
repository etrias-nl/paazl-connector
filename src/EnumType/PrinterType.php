<?php

namespace Etrias\PaazlConnector\EnumType;

/**
 * This class stands for printerType EnumType
 * @subpackage Enumerations
 */
class PrinterType
{
    /**
     * Constant for value 'laser'
     * @return string 'laser'
     */
    const VALUE_LASER = 'laser';
    /**
     * Constant for value 'zebra'
     * @return string 'zebra'
     */
    const VALUE_ZEBRA = 'zebra';
    /**
     * Constant for value 'zebra_10x15'
     * @return string 'zebra_10x15'
     */
    const VALUE_ZEBRA_10_X_15 = 'zebra_10x15';
    /**
     * Constant for value 'zebra_10x21'
     * @return string 'zebra_10x21'
     */
    const VALUE_ZEBRA_10_X_21 = 'zebra_10x21';
    /**
     * Constant for value 'a4'
     * @return string 'a4'
     */
    const VALUE_A_4 = 'a4';
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
     * @uses self::VALUE_LASER
     * @uses self::VALUE_ZEBRA
     * @uses self::VALUE_ZEBRA_10_X_15
     * @uses self::VALUE_ZEBRA_10_X_21
     * @uses self::VALUE_A_4
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LASER,
            self::VALUE_ZEBRA,
            self::VALUE_ZEBRA_10_X_15,
            self::VALUE_ZEBRA_10_X_21,
            self::VALUE_A_4,
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
