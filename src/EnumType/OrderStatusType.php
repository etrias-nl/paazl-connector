<?php

namespace Etrias\PaazlConnector\EnumType;

/**
 * This class stands for orderStatusType EnumType
 * @subpackage Enumerations
 */
class OrderStatusType
{
    /**
     * Constant for value 'LABELS_NOT_CREATED'
     * @return string 'LABELS_NOT_CREATED'
     */
    const VALUE_LABELS_NOT_CREATED = 'LABELS_NOT_CREATED';
    /**
     * Constant for value 'LABELS_CREATED'
     * @return string 'LABELS_CREATED'
     */
    const VALUE_LABELS_CREATED = 'LABELS_CREATED';
    /**
     * Constant for value 'PREREGISTERED'
     * @return string 'PREREGISTERED'
     */
    const VALUE_PREREGISTERED = 'PREREGISTERED';
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
     * Constant for value 'PICKEDUP'
     * @return string 'PICKEDUP'
     */
    const VALUE_PICKEDUP = 'PICKEDUP';
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
     * @uses self::VALUE_LABELS_NOT_CREATED
     * @uses self::VALUE_LABELS_CREATED
     * @uses self::VALUE_PREREGISTERED
     * @uses self::VALUE_READY_TO_POST
     * @uses self::VALUE_SCANNED
     * @uses self::VALUE_DELIVERED
     * @uses self::VALUE_DELIVEREDBB
     * @uses self::VALUE_PICKEDUP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LABELS_NOT_CREATED,
            self::VALUE_LABELS_CREATED,
            self::VALUE_PREREGISTERED,
            self::VALUE_READY_TO_POST,
            self::VALUE_SCANNED,
            self::VALUE_DELIVERED,
            self::VALUE_DELIVEREDBB,
            self::VALUE_PICKEDUP,
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
