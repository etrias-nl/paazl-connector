<?php

namespace Etrias\PaazlConnector\SoapTypes;

class TriggerBarcodeRequestType
{

    /**
     * @var string
     */
    protected $barcode = null;

    /**
     * Constructor
     *
     * @var string $barcode
     */
    public function __construct($barcode)
    {
        $this->barcode = $barcode;
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


}

