<?php

namespace Etrias\PaazlConnector\EnumType;

/**
 * This class stands for labelFormatType EnumType
 * @subpackage Enumerations
 */
class LabelFormatType
{
    /**
     * Constant for value 'PDF'
     * @return string 'PDF'
     */
    const VALUE_PDF = 'PDF';
    /**
     * Constant for value 'ZPL'
     * @return string 'ZPL'
     */
    const VALUE_ZPL = 'ZPL';
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
     * @uses self::VALUE_PDF
     * @uses self::VALUE_ZPL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PDF,
            self::VALUE_ZPL,
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
