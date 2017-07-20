<?php

namespace Etrias\PaazlConnector\EnumType;

/**
 * This class stands for returnContractTypeType EnumType
 * @subpackage Enumerations
 */
class ReturnContractTypeType
{
    /**
     * Constant for value 'unspecified'
     * @return string 'unspecified'
     */
    const VALUE_UNSPECIFIED = 'unspecified';
    /**
     * Constant for value 'outbound'
     * @return string 'outbound'
     */
    const VALUE_OUTBOUND = 'outbound';
    /**
     * Constant for value 'fixed'
     * @return string 'fixed'
     */
    const VALUE_FIXED = 'fixed';
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
     * @uses self::VALUE_UNSPECIFIED
     * @uses self::VALUE_OUTBOUND
     * @uses self::VALUE_FIXED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNSPECIFIED,
            self::VALUE_OUTBOUND,
            self::VALUE_FIXED,
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
