<?php

namespace Etrias\PaazlConnector\EnumType;

/**
 * This class stands for additionalDocumentType EnumType
 * @subpackage Enumerations
 */
class AdditionalDocumentType
{
    /**
     * Constant for value 'codForm'
     * @return string 'codForm'
     */
    const VALUE_COD_FORM = 'codForm';
    /**
     * Constant for value 'customsDeclaration'
     * @return string 'customsDeclaration'
     */
    const VALUE_CUSTOMS_DECLARATION = 'customsDeclaration';
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
     * @uses self::VALUE_COD_FORM
     * @uses self::VALUE_CUSTOMS_DECLARATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COD_FORM,
            self::VALUE_CUSTOMS_DECLARATION,
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
