<?php

namespace Etrias\PaazlConnector\EnumType;

/**
 * This class stands for shipperNotificationTypeType EnumType
 * @subpackage Enumerations
 */
class ShipperNotificationTypeType
{
    /**
     * Constant for value 'email'
     * @return string 'email'
     */
    const VALUE_EMAIL = 'email';
    /**
     * Constant for value 'sms'
     * @return string 'sms'
     */
    const VALUE_SMS = 'sms';
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
     * @uses self::VALUE_EMAIL
     * @uses self::VALUE_SMS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EMAIL,
            self::VALUE_SMS,
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
