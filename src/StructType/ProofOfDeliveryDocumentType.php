<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for proofOfDeliveryDocumentType StructType
 * @subpackage Structs
 */
class ProofOfDeliveryDocumentType extends AbstractStructBase
{
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
     * Constructor method for proofOfDeliveryDocumentType
     * @uses ProofOfDeliveryDocumentType::setDocumentType()
     * @uses ProofOfDeliveryDocumentType::setDocument()
     * @param string $documentType
     * @param string $document
     */
    public function __construct($documentType = null, $document = null)
    {
        $this
            ->setDocumentType($documentType)
            ->setDocument($document);
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
     * @uses \Etrias\PaazlConnector\EnumType\DocumentType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\DocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $documentType
     * @return \Etrias\PaazlConnector\StructType\ProofOfDeliveryDocumentType
     */
    public function setDocumentType($documentType = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\DocumentType::valueIsValid($documentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $documentType, implode(', ', \Etrias\PaazlConnector\EnumType\DocumentType::getValidValues())), __LINE__);
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
     * @return \Etrias\PaazlConnector\StructType\ProofOfDeliveryDocumentType
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
     * @return \Etrias\PaazlConnector\StructType\ProofOfDeliveryDocumentType
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
