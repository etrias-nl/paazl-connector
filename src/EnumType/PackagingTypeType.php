<?php

namespace Etrias\PaazlConnector\EnumType;

/**
 * This class stands for packagingTypeType EnumType
 * @subpackage Enumerations
 */
class PackagingTypeType
{
    /**
     * Constant for value 'FEDEX_10_KG_BOX'
     * @return string 'FEDEX_10_KG_BOX'
     */
    const VALUE_FEDEX_10_KG_BOX = 'FEDEX_10_KG_BOX';
    /**
     * Constant for value 'FEDEX_25_KG_BOX'
     * @return string 'FEDEX_25_KG_BOX'
     */
    const VALUE_FEDEX_25_KG_BOX = 'FEDEX_25_KG_BOX';
    /**
     * Constant for value 'FEDEX_BOX'
     * @return string 'FEDEX_BOX'
     */
    const VALUE_FEDEX_BOX = 'FEDEX_BOX';
    /**
     * Constant for value 'FEDEX_ENVELOPE'
     * @return string 'FEDEX_ENVELOPE'
     */
    const VALUE_FEDEX_ENVELOPE = 'FEDEX_ENVELOPE';
    /**
     * Constant for value 'FEDEX_PAK'
     * @return string 'FEDEX_PAK'
     */
    const VALUE_FEDEX_PAK = 'FEDEX_PAK';
    /**
     * Constant for value 'FEDEX_TUBE'
     * @return string 'FEDEX_TUBE'
     */
    const VALUE_FEDEX_TUBE = 'FEDEX_TUBE';
    /**
     * Constant for value 'YOUR_PACKAGING'
     * @return string 'YOUR_PACKAGING'
     */
    const VALUE_YOUR_PACKAGING = 'YOUR_PACKAGING';
    /**
     * Constant for value 'UPS_LETTER'
     * @return string 'UPS_LETTER'
     */
    const VALUE_UPS_LETTER = 'UPS_LETTER';
    /**
     * Constant for value 'CUSTOMER_SUPPLIED_PACKAGE'
     * @return string 'CUSTOMER_SUPPLIED_PACKAGE'
     */
    const VALUE_CUSTOMER_SUPPLIED_PACKAGE = 'CUSTOMER_SUPPLIED_PACKAGE';
    /**
     * Constant for value 'TUBE'
     * @return string 'TUBE'
     */
    const VALUE_TUBE = 'TUBE';
    /**
     * Constant for value 'PAK'
     * @return string 'PAK'
     */
    const VALUE_PAK = 'PAK';
    /**
     * Constant for value 'UPS_EXPRESS_BOX'
     * @return string 'UPS_EXPRESS_BOX'
     */
    const VALUE_UPS_EXPRESS_BOX = 'UPS_EXPRESS_BOX';
    /**
     * Constant for value 'UPS_25KG_BOX'
     * @return string 'UPS_25KG_BOX'
     */
    const VALUE_UPS_25_KG_BOX = 'UPS_25KG_BOX';
    /**
     * Constant for value 'UPS_10KG_BOX'
     * @return string 'UPS_10KG_BOX'
     */
    const VALUE_UPS_10_KG_BOX = 'UPS_10KG_BOX';
    /**
     * Constant for value 'SMALL_EXPRESS_BOX'
     * @return string 'SMALL_EXPRESS_BOX'
     */
    const VALUE_SMALL_EXPRESS_BOX = 'SMALL_EXPRESS_BOX';
    /**
     * Constant for value 'MEDIUM_EXPRESS_BOX'
     * @return string 'MEDIUM_EXPRESS_BOX'
     */
    const VALUE_MEDIUM_EXPRESS_BOX = 'MEDIUM_EXPRESS_BOX';
    /**
     * Constant for value 'LARGE_EXPRESS_BOX'
     * @return string 'LARGE_EXPRESS_BOX'
     */
    const VALUE_LARGE_EXPRESS_BOX = 'LARGE_EXPRESS_BOX';
    /**
     * Constant for value 'VAN_SPREUWEL_COLLI'
     * @return string 'VAN_SPREUWEL_COLLI'
     */
    const VALUE_VAN_SPREUWEL_COLLI = 'VAN_SPREUWEL_COLLI';
    /**
     * Constant for value 'VAN_SPREUWEL_BLOCKPALLET'
     * @return string 'VAN_SPREUWEL_BLOCKPALLET'
     */
    const VALUE_VAN_SPREUWEL_BLOCKPALLET = 'VAN_SPREUWEL_BLOCKPALLET';
    /**
     * Constant for value 'VAN_SPREUWEL_EUROPALLET'
     * @return string 'VAN_SPREUWEL_EUROPALLET'
     */
    const VALUE_VAN_SPREUWEL_EUROPALLET = 'VAN_SPREUWEL_EUROPALLET';
    /**
     * Constant for value 'VAN_SPREUWEL_TROLLEY'
     * @return string 'VAN_SPREUWEL_TROLLEY'
     */
    const VALUE_VAN_SPREUWEL_TROLLEY = 'VAN_SPREUWEL_TROLLEY';
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
     * @uses self::VALUE_FEDEX_10_KG_BOX
     * @uses self::VALUE_FEDEX_25_KG_BOX
     * @uses self::VALUE_FEDEX_BOX
     * @uses self::VALUE_FEDEX_ENVELOPE
     * @uses self::VALUE_FEDEX_PAK
     * @uses self::VALUE_FEDEX_TUBE
     * @uses self::VALUE_YOUR_PACKAGING
     * @uses self::VALUE_UPS_LETTER
     * @uses self::VALUE_CUSTOMER_SUPPLIED_PACKAGE
     * @uses self::VALUE_TUBE
     * @uses self::VALUE_PAK
     * @uses self::VALUE_UPS_EXPRESS_BOX
     * @uses self::VALUE_UPS_25_KG_BOX
     * @uses self::VALUE_UPS_10_KG_BOX
     * @uses self::VALUE_SMALL_EXPRESS_BOX
     * @uses self::VALUE_MEDIUM_EXPRESS_BOX
     * @uses self::VALUE_LARGE_EXPRESS_BOX
     * @uses self::VALUE_VAN_SPREUWEL_COLLI
     * @uses self::VALUE_VAN_SPREUWEL_BLOCKPALLET
     * @uses self::VALUE_VAN_SPREUWEL_EUROPALLET
     * @uses self::VALUE_VAN_SPREUWEL_TROLLEY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FEDEX_10_KG_BOX,
            self::VALUE_FEDEX_25_KG_BOX,
            self::VALUE_FEDEX_BOX,
            self::VALUE_FEDEX_ENVELOPE,
            self::VALUE_FEDEX_PAK,
            self::VALUE_FEDEX_TUBE,
            self::VALUE_YOUR_PACKAGING,
            self::VALUE_UPS_LETTER,
            self::VALUE_CUSTOMER_SUPPLIED_PACKAGE,
            self::VALUE_TUBE,
            self::VALUE_PAK,
            self::VALUE_UPS_EXPRESS_BOX,
            self::VALUE_UPS_25_KG_BOX,
            self::VALUE_UPS_10_KG_BOX,
            self::VALUE_SMALL_EXPRESS_BOX,
            self::VALUE_MEDIUM_EXPRESS_BOX,
            self::VALUE_LARGE_EXPRESS_BOX,
            self::VALUE_VAN_SPREUWEL_COLLI,
            self::VALUE_VAN_SPREUWEL_BLOCKPALLET,
            self::VALUE_VAN_SPREUWEL_EUROPALLET,
            self::VALUE_VAN_SPREUWEL_TROLLEY,
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
