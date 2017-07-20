<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generatePdfCustomsDocumentsResponse StructType
 * @subpackage Structs
 */
class GeneratePdfCustomsDocumentsResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The documents
     * @var string
     */
    public $documents;
    /**
     * Constructor method for generatePdfCustomsDocumentsResponse
     * @uses GeneratePdfCustomsDocumentsResponse::setError()
     * @uses GeneratePdfCustomsDocumentsResponse::setDocuments()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param string $documents
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, $documents = null)
    {
        $this
            ->setError($error)
            ->setDocuments($documents);
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
     * @return \Etrias\PaazlConnector\StructType\GeneratePdfCustomsDocumentsResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get documents value
     * @return string|null
     */
    public function getDocuments()
    {
        return $this->documents;
    }
    /**
     * Set documents value
     * @param string $documents
     * @return \Etrias\PaazlConnector\StructType\GeneratePdfCustomsDocumentsResponse
     */
    public function setDocuments($documents = null)
    {
        // validation for constraint: string
        if (!is_null($documents) && !is_string($documents)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documents)), __LINE__);
        }
        $this->documents = $documents;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\GeneratePdfCustomsDocumentsResponse
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
