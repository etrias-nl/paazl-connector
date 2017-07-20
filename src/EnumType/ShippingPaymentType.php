<?php

namespace Etrias\PaazlConnector\EnumType;

/**
 * This class stands for shippingPaymentType EnumType
 * @subpackage Enumerations
 */
class ShippingPaymentType
{
    /**
     * Constant for value 'shipper'
     * @return string 'shipper'
     */
    const VALUE_SHIPPER = 'shipper';
    /**
     * Constant for value 'consignee'
     * @return string 'consignee'
     */
    const VALUE_CONSIGNEE = 'consignee';
    /**
     * Constant for value 'thirdParty'
     * @return string 'thirdParty'
     */
    const VALUE_THIRD_PARTY = 'thirdParty';
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
     * @uses self::VALUE_SHIPPER
     * @uses self::VALUE_CONSIGNEE
     * @uses self::VALUE_THIRD_PARTY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SHIPPER,
            self::VALUE_CONSIGNEE,
            self::VALUE_THIRD_PARTY,
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
