<?php

namespace Etrias\PaazlConnector\EnumType;

/**
 * This class stands for partOfDayType EnumType
 * @subpackage Enumerations
 */
class PartOfDayType
{
    /**
     * Constant for value 'ochtend'
     * @return string 'ochtend'
     */
    const VALUE_OCHTEND = 'ochtend';
    /**
     * Constant for value 'middag'
     * @return string 'middag'
     */
    const VALUE_MIDDAG = 'middag';
    /**
     * Constant for value 'avond'
     * @return string 'avond'
     */
    const VALUE_AVOND = 'avond';
    /**
     * Constant for value 'hele dag'
     * @return string 'hele dag'
     */
    const VALUE_HELE_DAG = 'hele dag';
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
     * @uses self::VALUE_OCHTEND
     * @uses self::VALUE_MIDDAG
     * @uses self::VALUE_AVOND
     * @uses self::VALUE_HELE_DAG
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OCHTEND,
            self::VALUE_MIDDAG,
            self::VALUE_AVOND,
            self::VALUE_HELE_DAG,
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
