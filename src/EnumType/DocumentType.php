<?php

namespace Etrias\PaazlConnector\EnumType;

/**
 * This class stands for documentType EnumType
 * @subpackage Enumerations
 */
class DocumentType
{
    /**
     * Constant for value 'GIF'
     * @return string 'GIF'
     */
    const VALUE_GIF = 'GIF';
    /**
     * Constant for value 'JPG'
     * @return string 'JPG'
     */
    const VALUE_JPG = 'JPG';
    /**
     * Constant for value 'PDF'
     * @return string 'PDF'
     */
    const VALUE_PDF = 'PDF';
    /**
     * Constant for value 'PNG'
     * @return string 'PNG'
     */
    const VALUE_PNG = 'PNG';
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
     * @uses self::VALUE_GIF
     * @uses self::VALUE_JPG
     * @uses self::VALUE_PDF
     * @uses self::VALUE_PNG
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_GIF,
            self::VALUE_JPG,
            self::VALUE_PDF,
            self::VALUE_PNG,
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
