<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for additionalDocumentContainerType StructType
 * @subpackage Structs
 */
class AdditionalDocumentContainerType extends AbstractStructBase
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
     * The documentType
     * @var string
     */
    public $documentType;
    /**
     * The document
     * @var string
     */
    public $document;
    /**
     * Constructor method for additionalDocumentContainerType
     * @uses AdditionalDocumentContainerType::setOrderReference()
     * @uses AdditionalDocumentContainerType::setBarcode()
     * @uses AdditionalDocumentContainerType::setTrackingNumber()
     * @uses AdditionalDocumentContainerType::setBatch()
     * @uses AdditionalDocumentContainerType::setDocumentType()
     * @uses AdditionalDocumentContainerType::setDocument()
     * @param string $orderReference
     * @param string $barcode
     * @param string $trackingNumber
     * @param string $batch
     * @param string $documentType
     * @param string $document
     */
    public function __construct($orderReference = null, $barcode = null, $trackingNumber = null, $batch = null, $documentType = null, $document = null)
    {
        $this
            ->setOrderReference($orderReference)
            ->setBarcode($barcode)
            ->setTrackingNumber($trackingNumber)
            ->setBatch($batch)
            ->setDocumentType($documentType)
            ->setDocument($document);
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
     * @return \Etrias\PaazlConnector\StructType\AdditionalDocumentContainerType
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
     * @return \Etrias\PaazlConnector\StructType\AdditionalDocumentContainerType
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
     * @return \Etrias\PaazlConnector\StructType\AdditionalDocumentContainerType
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
     * @return \Etrias\PaazlConnector\StructType\AdditionalDocumentContainerType
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
     * Get documentType value
     * @return string|null
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }
    /**
     * Set documentType value
     * @uses \Etrias\PaazlConnector\EnumType\AdditionalDocumentType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\AdditionalDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $documentType
     * @return \Etrias\PaazlConnector\StructType\AdditionalDocumentContainerType
     */
    public function setDocumentType($documentType = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\AdditionalDocumentType::valueIsValid($documentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $documentType, implode(', ', \Etrias\PaazlConnector\EnumType\AdditionalDocumentType::getValidValues())), __LINE__);
        }
        $this->documentType = $documentType;
        return $this;
    }
    /**
     * Get document value
     * @return string|null
     */
    public function getDocument()
    {
        return $this->document;
    }
    /**
     * Set document value
     * @param string $document
     * @return \Etrias\PaazlConnector\StructType\AdditionalDocumentContainerType
     */
    public function setDocument($document = null)
    {
        // validation for constraint: string
        if (!is_null($document) && !is_string($document)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($document)), __LINE__);
        }
        $this->document = $document;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\AdditionalDocumentContainerType
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
