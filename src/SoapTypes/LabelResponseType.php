<?php

namespace Etrias\PaazlConnector\SoapTypes;

class LabelResponseType
{

    /**
     * @var string
     */
    protected $barcode = null;

    /**
     * @var string
     */
    protected $trackingNumber = null;

    /**
     * Constructor
     *
     * @var string $barcode
     * @var string $trackingNumber
     */
    public function __construct($barcode, $trackingNumber)
    {
        $this->barcode = $barcode;
        $this->trackingNumber = $trackingNumber;
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


}

