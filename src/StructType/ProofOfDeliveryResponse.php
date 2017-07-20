<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for proofOfDeliveryResponse StructType
 * @subpackage Structs
 */
class ProofOfDeliveryResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The signedBy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $signedBy;
    /**
     * The proofOfDeliveryDocument
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\ProofOfDeliveryDocumentType
     */
    public $proofOfDeliveryDocument;
    /**
     * Constructor method for proofOfDeliveryResponse
     * @uses ProofOfDeliveryResponse::setError()
     * @uses ProofOfDeliveryResponse::setSignedBy()
     * @uses ProofOfDeliveryResponse::setProofOfDeliveryDocument()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param string $signedBy
     * @param \Etrias\PaazlConnector\StructType\ProofOfDeliveryDocumentType $proofOfDeliveryDocument
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, $signedBy = null, \Etrias\PaazlConnector\StructType\ProofOfDeliveryDocumentType $proofOfDeliveryDocument = null)
    {
        $this
            ->setError($error)
            ->setSignedBy($signedBy)
            ->setProofOfDeliveryDocument($proofOfDeliveryDocument);
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
     * @return \Etrias\PaazlConnector\StructType\ProofOfDeliveryResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get signedBy value
     * @return string|null
     */
    public function getSignedBy()
    {
        return $this->signedBy;
    }
    /**
     * Set signedBy value
     * @param string $signedBy
     * @return \Etrias\PaazlConnector\StructType\ProofOfDeliveryResponse
     */
    public function setSignedBy($signedBy = null)
    {
        // validation for constraint: string
        if (!is_null($signedBy) && !is_string($signedBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($signedBy)), __LINE__);
        }
        $this->signedBy = $signedBy;
        return $this;
    }
    /**
     * Get proofOfDeliveryDocument value
     * @return \Etrias\PaazlConnector\StructType\ProofOfDeliveryDocumentType|null
     */
    public function getProofOfDeliveryDocument()
    {
        return $this->proofOfDeliveryDocument;
    }
    /**
     * Set proofOfDeliveryDocument value
     * @param \Etrias\PaazlConnector\StructType\ProofOfDeliveryDocumentType $proofOfDeliveryDocument
     * @return \Etrias\PaazlConnector\StructType\ProofOfDeliveryResponse
     */
    public function setProofOfDeliveryDocument(\Etrias\PaazlConnector\StructType\ProofOfDeliveryDocumentType $proofOfDeliveryDocument = null)
    {
        $this->proofOfDeliveryDocument = $proofOfDeliveryDocument;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ProofOfDeliveryResponse
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
