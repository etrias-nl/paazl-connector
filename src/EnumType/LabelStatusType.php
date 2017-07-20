<?php

namespace Etrias\PaazlConnector\EnumType;

/**
 * This class stands for labelStatusType EnumType
 * @subpackage Enumerations
 */
class LabelStatusType
{
    /**
     * Constant for value 'CREATED'
     * @return string 'CREATED'
     */
    const VALUE_CREATED = 'CREATED';
    /**
     * Constant for value 'DELETED'
     * @return string 'DELETED'
     */
    const VALUE_DELETED = 'DELETED';
    /**
     * Constant for value 'READY_TO_POST'
     * @return string 'READY_TO_POST'
     */
    const VALUE_READY_TO_POST = 'READY_TO_POST';
    /**
     * Constant for value 'SCANNED'
     * @return string 'SCANNED'
     */
    const VALUE_SCANNED = 'SCANNED';
    /**
     * Constant for value 'AVAILABLE_AT_PICKUP_POINT'
     * @return string 'AVAILABLE_AT_PICKUP_POINT'
     */
    const VALUE_AVAILABLE_AT_PICKUP_POINT = 'AVAILABLE_AT_PICKUP_POINT';
    /**
     * Constant for value 'DELIVERED'
     * @return string 'DELIVERED'
     */
    const VALUE_DELIVERED = 'DELIVERED';
    /**
     * Constant for value 'DELIVEREDBB'
     * @return string 'DELIVEREDBB'
     */
    const VALUE_DELIVEREDBB = 'DELIVEREDBB';
    /**
     * Constant for value 'RETOUR'
     * @return string 'RETOUR'
     */
    const VALUE_RETOUR = 'RETOUR';
    /**
     * Constant for value 'PICKEDUP'
     * @return string 'PICKEDUP'
     */
    const VALUE_PICKEDUP = 'PICKEDUP';
    /**
     * Constant for value 'UITLEVERING'
     * @return string 'UITLEVERING'
     */
    const VALUE_UITLEVERING = 'UITLEVERING';
    /**
     * Constant for value 'UNKNOWN'
     * @return string 'UNKNOWN'
     */
    const VALUE_UNKNOWN = 'UNKNOWN';
    /**
     * Constant for value 'MANCO'
     * @return string 'MANCO'
     */
    const VALUE_MANCO = 'MANCO';
    /**
     * Constant for value 'NOT_AT_HOME'
     * @return string 'NOT_AT_HOME'
     */
    const VALUE_NOT_AT_HOME = 'NOT_AT_HOME';
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
     * @uses self::VALUE_DELETED
     * @uses self::VALUE_READY_TO_POST
     * @uses self::VALUE_SCANNED
     * @uses self::VALUE_AVAILABLE_AT_PICKUP_POINT
     * @uses self::VALUE_DELIVERED
     * @uses self::VALUE_DELIVEREDBB
     * @uses self::VALUE_RETOUR
     * @uses self::VALUE_PICKEDUP
     * @uses self::VALUE_UITLEVERING
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_MANCO
     * @uses self::VALUE_NOT_AT_HOME
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CREATED,
            self::VALUE_DELETED,
            self::VALUE_READY_TO_POST,
            self::VALUE_SCANNED,
            self::VALUE_AVAILABLE_AT_PICKUP_POINT,
            self::VALUE_DELIVERED,
            self::VALUE_DELIVEREDBB,
            self::VALUE_RETOUR,
            self::VALUE_PICKEDUP,
            self::VALUE_UITLEVERING,
            self::VALUE_UNKNOWN,
            self::VALUE_MANCO,
            self::VALUE_NOT_AT_HOME,
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
