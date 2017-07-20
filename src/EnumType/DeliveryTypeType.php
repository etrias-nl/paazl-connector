<?php

namespace Etrias\PaazlConnector\EnumType;

/**
 * This class stands for deliveryTypeType EnumType
 * @subpackage Enumerations
 */
class DeliveryTypeType
{
    /**
     * Constant for value 'delivery'
     * @return string 'delivery'
     */
    const VALUE_DELIVERY = 'delivery';
    /**
     * Constant for value 'servicepoint'
     * @return string 'servicepoint'
     */
    const VALUE_SERVICEPOINT = 'servicepoint';
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
     * @uses self::VALUE_DELIVERY
     * @uses self::VALUE_SERVICEPOINT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DELIVERY,
            self::VALUE_SERVICEPOINT,
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
