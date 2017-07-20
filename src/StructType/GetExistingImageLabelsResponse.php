<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getExistingImageLabelsResponse StructType
 * @subpackage Structs
 */
class GetExistingImageLabelsResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The label
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Etrias\PaazlConnector\StructType\LabelType[]
     */
    public $label;
    /**
     * The metaData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\LabelMetaDataType[]
     */
    public $metaData;
    /**
     * Constructor method for getExistingImageLabelsResponse
     * @uses GetExistingImageLabelsResponse::setError()
     * @uses GetExistingImageLabelsResponse::setLabel()
     * @uses GetExistingImageLabelsResponse::setMetaData()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param \Etrias\PaazlConnector\StructType\LabelType[] $label
     * @param \Etrias\PaazlConnector\StructType\LabelMetaDataType[] $metaData
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, array $label = array(), array $metaData = array())
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
     * @return \Etrias\PaazlConnector\StructType\GetExistingImageLabelsResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get label value
     * @return \Etrias\PaazlConnector\StructType\LabelType[]|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\LabelType[] $label
     * @return \Etrias\PaazlConnector\StructType\GetExistingImageLabelsResponse
     */
    public function setLabel(array $label = array())
    {
        foreach ($label as $getExistingImageLabelsResponseLabelItem) {
            // validation for constraint: itemType
            if (!$getExistingImageLabelsResponseLabelItem instanceof \Etrias\PaazlConnector\StructType\LabelType) {
                throw new \InvalidArgumentException(sprintf('The label property can only contain items of \Etrias\PaazlConnector\StructType\LabelType, "%s" given', is_object($getExistingImageLabelsResponseLabelItem) ? get_class($getExistingImageLabelsResponseLabelItem) : gettype($getExistingImageLabelsResponseLabelItem)), __LINE__);
            }
        }
        $this->label = $label;
        return $this;
    }
    /**
     * Add item to label value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\LabelType $item
     * @return \Etrias\PaazlConnector\StructType\GetExistingImageLabelsResponse
     */
    public function addToLabel(\Etrias\PaazlConnector\StructType\LabelType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\LabelType) {
            throw new \InvalidArgumentException(sprintf('The label property can only contain items of \Etrias\PaazlConnector\StructType\LabelType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->label[] = $item;
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
     * @return \Etrias\PaazlConnector\StructType\GetExistingImageLabelsResponse
     */
    public function setMetaData(array $metaData = array())
    {
        foreach ($metaData as $getExistingImageLabelsResponseMetaDataItem) {
            // validation for constraint: itemType
            if (!$getExistingImageLabelsResponseMetaDataItem instanceof \Etrias\PaazlConnector\StructType\LabelMetaDataType) {
                throw new \InvalidArgumentException(sprintf('The metaData property can only contain items of \Etrias\PaazlConnector\StructType\LabelMetaDataType, "%s" given', is_object($getExistingImageLabelsResponseMetaDataItem) ? get_class($getExistingImageLabelsResponseMetaDataItem) : gettype($getExistingImageLabelsResponseMetaDataItem)), __LINE__);
            }
        }
        $this->metaData = $metaData;
        return $this;
    }
    /**
     * Add item to metaData value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\LabelMetaDataType $item
     * @return \Etrias\PaazlConnector\StructType\GetExistingImageLabelsResponse
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
     * @return \Etrias\PaazlConnector\StructType\GetExistingImageLabelsResponse
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
