<?php

namespace Etrias\PaazlConnector\SoapTypes;

class TriggerBarcodeResponseType
{

    /**
     * @var string
     */
    protected $barcode = null;

    /**
     * @var triggerResponseStatus
     */
    protected $status = null;

    /**
     * @var string
     */
    protected $identifier = null;

    /**
     * Constructor
     *
     * @var string $barcode
     * @var triggerResponseStatus $status
     * @var string $identifier
     */
    public function __construct($barcode, $status, $identifier)
    {
        $this->barcode = $barcode;
        $this->status = $status;
        $this->identifier = $identifier;
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
     * @return triggerResponseStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param triggerResponseStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }


}

