<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\ResultInterface;

class ProofOfDeliveryResponse implements ResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var string
     */
    protected $signedBy = null;

    /**
     * @var proofOfDeliveryDocumentType
     */
    protected $proofOfDeliveryDocument = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var string $signedBy
     * @var proofOfDeliveryDocumentType $proofOfDeliveryDocument
     */
    public function __construct($error, $signedBy, $proofOfDeliveryDocument)
    {
        $this->error = $error;
        $this->signedBy = $signedBy;
        $this->proofOfDeliveryDocument = $proofOfDeliveryDocument;
    }

    /**
     * @return errorType
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param errorType $error
     * @return $this
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignedBy()
    {
        return $this->signedBy;
    }

    /**
     * @param string $signedBy
     * @return $this
     */
    public function setSignedBy($signedBy)
    {
        $this->signedBy = $signedBy;
        return $this;
    }

    /**
     * @return proofOfDeliveryDocumentType
     */
    public function getProofOfDeliveryDocument()
    {
        return $this->proofOfDeliveryDocument;
    }

    /**
     * @param proofOfDeliveryDocumentType $proofOfDeliveryDocument
     * @return $this
     */
    public function setProofOfDeliveryDocument($proofOfDeliveryDocument)
    {
        $this->proofOfDeliveryDocument = $proofOfDeliveryDocument;
        return $this;
    }


}

