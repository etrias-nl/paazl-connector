<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generatePdfLabelsResponse StructType
 * @subpackage Structs
 */
class GeneratePdfLabelsResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The labels
     * @var string
     */
    public $labels;
    /**
     * The metaData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\LabelMetaDataType[]
     */
    public $metaData;
    /**
     * Constructor method for generatePdfLabelsResponse
     * @uses GeneratePdfLabelsResponse::setError()
     * @uses GeneratePdfLabelsResponse::setLabels()
     * @uses GeneratePdfLabelsResponse::setMetaData()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param string $labels
     * @param \Etrias\PaazlConnector\StructType\LabelMetaDataType[] $metaData
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, $labels = null, array $metaData = array())
    {
        $this
            ->setError($error)
            ->setLabels($labels)
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
     * @return \Etrias\PaazlConnector\StructType\GeneratePdfLabelsResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get labels value
     * @return string|null
     */
    public function getLabels()
    {
        return $this->labels;
    }
    /**
     * Set labels value
     * @param string $labels
     * @return \Etrias\PaazlConnector\StructType\GeneratePdfLabelsResponse
     */
    public function setLabels($labels = null)
    {
        // validation for constraint: string
        if (!is_null($labels) && !is_string($labels)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($labels)), __LINE__);
        }
        $this->labels = $labels;
        return $this;
    }
    /**
     * Get metaData value
     * @return \Etrias\PaazlConnector\StructType\LabelMetaDataType[]|null
     */
    public function getMetaData()
    {
        return $this->metaData;
    }
    /**
     * Set metaData value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\LabelMetaDataType[] $metaData
     * @return \Etrias\PaazlConnector\StructType\GeneratePdfLabelsResponse
     */
    public function setMetaData(array $metaData = array())
    {
        foreach ($metaData as $generatePdfLabelsResponseMetaDataItem) {
            // validation for constraint: itemType
            if (!$generatePdfLabelsResponseMetaDataItem instanceof \Etrias\PaazlConnector\StructType\LabelMetaDataType) {
                throw new \InvalidArgumentException(sprintf('The metaData property can only contain items of \Etrias\PaazlConnector\StructType\LabelMetaDataType, "%s" given', is_object($generatePdfLabelsResponseMetaDataItem) ? get_class($generatePdfLabelsResponseMetaDataItem) : gettype($generatePdfLabelsResponseMetaDataItem)), __LINE__);
            }
        }
        $this->metaData = $metaData;
        return $this;
    }
    /**
     * Add item to metaData value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\LabelMetaDataType $item
     * @return \Etrias\PaazlConnector\StructType\GeneratePdfLabelsResponse
     */
    public function addToMetaData(\Etrias\PaazlConnector\StructType\LabelMetaDataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\LabelMetaDataType) {
            throw new \InvalidArgumentException(sprintf('The metaData property can only contain items of \Etrias\PaazlConnector\StructType\LabelMetaDataType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->metaData[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\GeneratePdfLabelsResponse
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
