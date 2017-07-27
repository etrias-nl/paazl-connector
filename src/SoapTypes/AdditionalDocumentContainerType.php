<?php

namespace Etrias\PaazlConnector\SoapTypes;

class AdditionalDocumentContainerType
{

    /**
     * @var string
     */
    protected $orderReference = null;

    /**
     * @var string
     */
    protected $barcode = null;

    /**
     * @var string
     */
    protected $trackingNumber = null;

    /**
     * @var string
     */
    protected $batch = null;

    /**
     * @var additionalDocumentType
     */
    protected $documentType = null;

    /**
     * @var base64Binary
     */
    protected $document = null;

    /**
     * Constructor
     *
     * @var string $orderReference
     * @var string $barcode
     * @var string $trackingNumber
     * @var string $batch
     * @var additionalDocumentType $documentType
     * @var base64Binary $document
     */
    public function __construct($orderReference, $barcode, $trackingNumber, $batch, $documentType, $document)
    {
        $this->orderReference = $orderReference;
        $this->barcode = $barcode;
        $this->trackingNumber = $trackingNumber;
        $this->batch = $batch;
        $this->documentType = $documentType;
        $this->document = $document;
    }

    /**
     * @return string
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @param string $orderReference
     * @return $this
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @param string $barcode
     * @return $this
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * @param string $trackingNumber
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * @param string $batch
     * @return $this
     */
    public function setBatch($batch)
    {
        $this->batch = $batch;
        return $this;
    }

    /**
     * @return additionalDocumentType
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * @param additionalDocumentType $documentType
     * @return $this
     */
    public function setDocumentType($documentType)
    {
        $this->documentType = $documentType;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param base64Binary $document
     * @return $this
     */
    public function setDocument($document)
    {
        $this->document = $document;
        return $this;
    }


}

