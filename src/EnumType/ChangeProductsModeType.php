<?php

namespace Etrias\PaazlConnector\EnumType;

/**
 * This class stands for changeProductsModeType EnumType
 * @subpackage Enumerations
 */
class ChangeProductsModeType
{
    /**
     * Constant for value 'add'
     * @return string 'add'
     */
    const VALUE_ADD = 'add';
    /**
     * Constant for value 'replace'
     * @return string 'replace'
     */
    const VALUE_REPLACE = 'replace';
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
     * @uses self::VALUE_ADD
     * @uses self::VALUE_REPLACE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADD,
            self::VALUE_REPLACE,
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
