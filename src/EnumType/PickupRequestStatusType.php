<?php

namespace Etrias\PaazlConnector\EnumType;

/**
 * This class stands for pickupRequestStatusType EnumType
 * @subpackage Enumerations
 */
class PickupRequestStatusType
{
    /**
     * Constant for value 'created'
     * @return string 'created'
     */
    const VALUE_CREATED = 'created';
    /**
     * Constant for value 'registered'
     * @return string 'registered'
     */
    const VALUE_REGISTERED = 'registered';
    /**
     * Constant for value 'temporaryFailure'
     * @return string 'temporaryFailure'
     */
    const VALUE_TEMPORARY_FAILURE = 'temporaryFailure';
    /**
     * Constant for value 'permanentFailure'
     * @return string 'permanentFailure'
     */
    const VALUE_PERMANENT_FAILURE = 'permanentFailure';
    /**
     * Constant for value 'pickedup'
     * @return string 'pickedup'
     */
    const VALUE_PICKEDUP = 'pickedup';
    /**
     * Constant for value 'canceled'
     * @return string 'canceled'
     */
    const VALUE_CANCELED = 'canceled';
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
     * @uses self::VALUE_CREATED
     * @uses self::VALUE_REGISTERED
     * @uses self::VALUE_TEMPORARY_FAILURE
     * @uses self::VALUE_PERMANENT_FAILURE
     * @uses self::VALUE_PICKEDUP
     * @uses self::VALUE_CANCELED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CREATED,
            self::VALUE_REGISTERED,
            self::VALUE_TEMPORARY_FAILURE,
            self::VALUE_PERMANENT_FAILURE,
            self::VALUE_PICKEDUP,
            self::VALUE_CANCELED,
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
