<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for labelMetaDataType StructType
 * @subpackage Structs
 */
class LabelMetaDataType extends AbstractStructBase
{
    /**
     * The orderReference
     * @var string
     */
    public $orderReference;
    /**
     * The barcode
     * @var string
     */
    public $barcode;
    /**
     * The trackingNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $trackingNumber;
    /**
     * The batch
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $batch;
    /**
     * The additionalDocument
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $additionalDocument;
    /**
     * Constructor method for labelMetaDataType
     * @uses LabelMetaDataType::setOrderReference()
     * @uses LabelMetaDataType::setBarcode()
     * @uses LabelMetaDataType::setTrackingNumber()
     * @uses LabelMetaDataType::setBatch()
     * @uses LabelMetaDataType::setAdditionalDocument()
     * @param string $orderReference
     * @param string $barcode
     * @param string $trackingNumber
     * @param string $batch
     * @param string[] $additionalDocument
     */
    public function __construct($orderReference = null, $barcode = null, $trackingNumber = null, $batch = null, array $additionalDocument = array())
    {
        $this
            ->setOrderReference($orderReference)
            ->setBarcode($barcode)
            ->setTrackingNumber($trackingNumber)
            ->setBatch($batch)
            ->setAdditionalDocument($additionalDocument);
    }
    /**
     * Get orderReference value
     * @return string|null
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }
    /**
     * Set orderReference value
     * @param string $orderReference
     * @return \Etrias\PaazlConnector\StructType\LabelMetaDataType
     */
    public function setOrderReference($orderReference = null)
    {
        // validation for constraint: string
        if (!is_null($orderReference) && !is_string($orderReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderReference)), __LINE__);
        }
        $this->orderReference = $orderReference;
        return $this;
    }
    /**
     * Get barcode value
     * @return string|null
     */
    public function getBarcode()
    {
        return $this->barcode;
    }
    /**
     * Set barcode value
     * @param string $barcode
     * @return \Etrias\PaazlConnector\StructType\LabelMetaDataType
     */
    public function setBarcode($barcode = null)
    {
        // validation for constraint: string
        if (!is_null($barcode) && !is_string($barcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($barcode)), __LINE__);
        }
        $this->barcode = $barcode;
        return $this;
    }
    /**
     * Get trackingNumber value
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }
    /**
     * Set trackingNumber value
     * @param string $trackingNumber
     * @return \Etrias\PaazlConnector\StructType\LabelMetaDataType
     */
    public function setTrackingNumber($trackingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($trackingNumber) && !is_string($trackingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackingNumber)), __LINE__);
        }
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Get batch value
     * @return string|null
     */
    public function getBatch()
    {
        return $this->batch;
    }
    /**
     * Set batch value
     * @param string $batch
     * @return \Etrias\PaazlConnector\StructType\LabelMetaDataType
     */
    public function setBatch($batch = null)
    {
        // validation for constraint: string
        if (!is_null($batch) && !is_string($batch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($batch)), __LINE__);
        }
        $this->batch = $batch;
        return $this;
    }
    /**
     * Get additionalDocument value
     * @return string[]|null
     */
    public function getAdditionalDocument()
    {
        return $this->additionalDocument;
    }
    /**
     * Set additionalDocument value
     * @uses \Etrias\PaazlConnector\EnumType\AdditionalDocumentType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\AdditionalDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $additionalDocument
     * @return \Etrias\PaazlConnector\StructType\LabelMetaDataType
     */
    public function setAdditionalDocument(array $additionalDocument = array())
    {
        $invalidValues = array();
        foreach ($additionalDocument as $labelMetaDataTypeAdditionalDocumentItem) {
            if (!\Etrias\PaazlConnector\EnumType\AdditionalDocumentType::valueIsValid($labelMetaDataTypeAdditionalDocumentItem)) {
                $invalidValues[] = var_export($labelMetaDataTypeAdditionalDocumentItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Etrias\PaazlConnector\EnumType\AdditionalDocumentType::getValidValues())), __LINE__);
        }
        $this->additionalDocument = $additionalDocument;
        return $this;
    }
    /**
     * Add item to additionalDocument value
     * @uses \Etrias\PaazlConnector\EnumType\AdditionalDocumentType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\AdditionalDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Etrias\PaazlConnector\StructType\LabelMetaDataType
     */
    public function addToAdditionalDocument($item)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\AdditionalDocumentType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Etrias\PaazlConnector\EnumType\AdditionalDocumentType::getValidValues())), __LINE__);
        }
        $this->additionalDocument[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\LabelMetaDataType
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
