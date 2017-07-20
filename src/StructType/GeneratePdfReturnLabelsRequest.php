<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generatePdfReturnLabelsRequest StructType
 * @subpackage Structs
 */
class GeneratePdfReturnLabelsRequest extends GenerateReturnLabelsType
{
    /**
     * The printer
     * Meta informations extracted from the WSDL
     * - default: zebra
     * - minOccurs: 0
     * @var string
     */
    public $printer;
    /**
     * Constructor method for generatePdfReturnLabelsRequest
     * @uses GeneratePdfReturnLabelsRequest::setPrinter()
     * @param string $printer
     */
    public function __construct($printer = 'zebra')
    {
        $this
            ->setPrinter($printer);
    }
    /**
     * Get printer value
     * @return string|null
     */
    public function getPrinter()
    {
        return $this->printer;
    }
    /**
     * Set printer value
     * @uses \Etrias\PaazlConnector\EnumType\PrinterType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\PrinterType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $printer
     * @return \Etrias\PaazlConnector\StructType\GeneratePdfReturnLabelsRequest
     */
    public function setPrinter($printer = 'zebra')
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\PrinterType::valueIsValid($printer)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $printer, implode(', ', \Etrias\PaazlConnector\EnumType\PrinterType::getValidValues())), __LINE__);
        }
        $this->printer = $printer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\GeneratePdfReturnLabelsRequest
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
