<?php

namespace Etrias\PaazlConnector\EnumType;

/**
 * This class stands for dutiesPaymentType EnumType
 * @subpackage Enumerations
 */
class DutiesPaymentType
{
    /**
     * Constant for value 'SENDER'
     * @return string 'SENDER'
     */
    const VALUE_SENDER = 'SENDER';
    /**
     * Constant for value 'RECIPIENT'
     * @return string 'RECIPIENT'
     */
    const VALUE_RECIPIENT = 'RECIPIENT';
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
     * @uses self::VALUE_SENDER
     * @uses self::VALUE_RECIPIENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SENDER,
            self::VALUE_RECIPIENT,
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
