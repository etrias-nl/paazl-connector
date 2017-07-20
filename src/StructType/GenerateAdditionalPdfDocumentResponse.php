<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateAdditionalPdfDocumentResponse StructType
 * @subpackage Structs
 */
class GenerateAdditionalPdfDocumentResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The document
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Etrias\PaazlConnector\StructType\AdditionalDocumentContainerType[]
     */
    public $document;
    /**
     * Constructor method for generateAdditionalPdfDocumentResponse
     * @uses GenerateAdditionalPdfDocumentResponse::setError()
     * @uses GenerateAdditionalPdfDocumentResponse::setDocument()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param \Etrias\PaazlConnector\StructType\AdditionalDocumentContainerType[] $document
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, array $document = array())
    {
        $this
            ->setError($error)
            ->setDocument($document);
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
     * @return \Etrias\PaazlConnector\StructType\GenerateAdditionalPdfDocumentResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get document value
     * @return \Etrias\PaazlConnector\StructType\AdditionalDocumentContainerType[]|null
     */
    public function getDocument()
    {
        return $this->document;
    }
    /**
     * Set document value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\AdditionalDocumentContainerType[] $document
     * @return \Etrias\PaazlConnector\StructType\GenerateAdditionalPdfDocumentResponse
     */
    public function setDocument(array $document = array())
    {
        foreach ($document as $generateAdditionalPdfDocumentResponseDocumentItem) {
            // validation for constraint: itemType
            if (!$generateAdditionalPdfDocumentResponseDocumentItem instanceof \Etrias\PaazlConnector\StructType\AdditionalDocumentContainerType) {
                throw new \InvalidArgumentException(sprintf('The document property can only contain items of \Etrias\PaazlConnector\StructType\AdditionalDocumentContainerType, "%s" given', is_object($generateAdditionalPdfDocumentResponseDocumentItem) ? get_class($generateAdditionalPdfDocumentResponseDocumentItem) : gettype($generateAdditionalPdfDocumentResponseDocumentItem)), __LINE__);
            }
        }
        $this->document = $document;
        return $this;
    }
    /**
     * Add item to document value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\AdditionalDocumentContainerType $item
     * @return \Etrias\PaazlConnector\StructType\GenerateAdditionalPdfDocumentResponse
     */
    public function addToDocument(\Etrias\PaazlConnector\StructType\AdditionalDocumentContainerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\AdditionalDocumentContainerType) {
            throw new \InvalidArgumentException(sprintf('The document property can only contain items of \Etrias\PaazlConnector\StructType\AdditionalDocumentContainerType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->document[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\GenerateAdditionalPdfDocumentResponse
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
