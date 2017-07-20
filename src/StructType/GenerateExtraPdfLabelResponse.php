<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateExtraPdfLabelResponse StructType
 * @subpackage Structs
 */
class GenerateExtraPdfLabelResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The label
     * @var string
     */
    public $label;
    /**
     * The metaData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\LabelMetaDataType
     */
    public $metaData;
    /**
     * Constructor method for generateExtraPdfLabelResponse
     * @uses GenerateExtraPdfLabelResponse::setError()
     * @uses GenerateExtraPdfLabelResponse::setLabel()
     * @uses GenerateExtraPdfLabelResponse::setMetaData()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param string $label
     * @param \Etrias\PaazlConnector\StructType\LabelMetaDataType $metaData
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, $label = null, \Etrias\PaazlConnector\StructType\LabelMetaDataType $metaData = null)
    {
        $this
            ->setError($error)
            ->setLabel($label)
            ->setMetaData($metaData);
    }
    /**
     * Get error value
     * @return \Etrias\PaazlConnector\StructType\ErrorType|null
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @return \Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get label value
     * @return string|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param string $label
     * @return \Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelResponse
     */
    public function setLabel($label = null)
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($label)), __LINE__);
        }
        $this->label = $label;
        return $this;
    }
    /**
     * Get metaData value
     * @return \Etrias\PaazlConnector\StructType\LabelMetaDataType|null
     */
    public function getMetaData()
    {
        return $this->metaData;
    }
    /**
     * Set metaData value
     * @param \Etrias\PaazlConnector\StructType\LabelMetaDataType $metaData
     * @return \Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelResponse
     */
    public function setMetaData(\Etrias\PaazlConnector\StructType\LabelMetaDataType $metaData = null)
    {
        $this->metaData = $metaData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelResponse
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
