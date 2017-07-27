<?php

namespace Etrias\PaazlConnector\SoapTypes;

class LabelMetaDataType
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
    protected $additionalDocument = null;

    /**
     * Constructor
     *
     * @var string $orderReference
     * @var string $barcode
     * @var string $trackingNumber
     * @var string $batch
     * @var additionalDocumentType $additionalDocument
     */
    public function __construct($orderReference, $barcode, $trackingNumber, $batch, $additionalDocument)
    {
        $this->orderReference = $orderReference;
        $this->barcode = $barcode;
        $this->trackingNumber = $trackingNumber;
        $this->batch = $batch;
        $this->additionalDocument = $additionalDocument;
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
    public function getAdditionalDocument()
    {
        return $this->additionalDocument;
    }

    /**
     * @param additionalDocumentType $additionalDocument
     * @return $this
     */
    public function setAdditionalDocument($additionalDocument)
    {
        $this->additionalDocument = $additionalDocument;
        return $this;
    }


}

