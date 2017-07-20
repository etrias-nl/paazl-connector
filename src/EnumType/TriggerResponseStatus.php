<?php

namespace Etrias\PaazlConnector\EnumType;

/**
 * This class stands for triggerResponseStatus EnumType
 * @subpackage Enumerations
 */
class TriggerResponseStatus
{
    /**
     * Constant for value 'QUEUED'
     * @return string 'QUEUED'
     */
    const VALUE_QUEUED = 'QUEUED';
    /**
     * Constant for value 'ALREADY_PROCESSED'
     * @return string 'ALREADY_PROCESSED'
     */
    const VALUE_ALREADY_PROCESSED = 'ALREADY_PROCESSED';
    /**
     * Constant for value 'NOT_ALLOWED'
     * @return string 'NOT_ALLOWED'
     */
    const VALUE_NOT_ALLOWED = 'NOT_ALLOWED';
    /**
     * Constant for value 'UNKNOWN'
     * @return string 'UNKNOWN'
     */
    const VALUE_UNKNOWN = 'UNKNOWN';
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
     * @uses self::VALUE_QUEUED
     * @uses self::VALUE_ALREADY_PROCESSED
     * @uses self::VALUE_NOT_ALLOWED
     * @uses self::VALUE_UNKNOWN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_QUEUED,
            self::VALUE_ALREADY_PROCESSED,
            self::VALUE_NOT_ALLOWED,
            self::VALUE_UNKNOWN,
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
