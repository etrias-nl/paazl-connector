<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateAdditionalImageDocumentResponse StructType
 * @subpackage Structs
 */
class GenerateAdditionalImageDocumentResponse extends AbstractStructBase
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
     * Constructor method for generateAdditionalImageDocumentResponse
     * @uses GenerateAdditionalImageDocumentResponse::setError()
     * @uses GenerateAdditionalImageDocumentResponse::setDocument()
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
     * @return \Etrias\PaazlConnector\StructType\GenerateAdditionalImageDocumentResponse
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
     * @return \Etrias\PaazlConnector\StructType\GenerateAdditionalImageDocumentResponse
     */
    public function setDocument(array $document = array())
    {
        foreach ($document as $generateAdditionalImageDocumentResponseDocumentItem) {
            // validation for constraint: itemType
            if (!$generateAdditionalImageDocumentResponseDocumentItem instanceof \Etrias\PaazlConnector\StructType\AdditionalDocumentContainerType) {
                throw new \InvalidArgumentException(sprintf('The document property can only contain items of \Etrias\PaazlConnector\StructType\AdditionalDocumentContainerType, "%s" given', is_object($generateAdditionalImageDocumentResponseDocumentItem) ? get_class($generateAdditionalImageDocumentResponseDocumentItem) : gettype($generateAdditionalImageDocumentResponseDocumentItem)), __LINE__);
            }
        }
        $this->document = $document;
        return $this;
    }
    /**
     * Add item to document value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\AdditionalDocumentContainerType $item
     * @return \Etrias\PaazlConnector\StructType\GenerateAdditionalImageDocumentResponse
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
     * @return \Etrias\PaazlConnector\StructType\GenerateAdditionalImageDocumentResponse
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
