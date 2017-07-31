<?php

namespace Etrias\PaazlConnector\SoapTypes;

class CancelShipmentType
{
    /**
     * @var string
     */
    protected $orderReference;

    /**
     * @var string
     */
    protected $barcode;

    /**
     * Constructor
     * @param string $orderReference
     * @param string $barcode
     */
    public function __construct($orderReference, $barcode)
    {

        $this->orderReference = $orderReference;
        $this->barcode = $barcode;
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
     * @return CancelShipmentType
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;

        return $this;
    }

    /**
     * @return string
     */
    public function getBarcode(): string
    {
        return $this->barcode;
    }

    /**
     * @param string $barcode
     * @return CancelShipmentType
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
        return $this;
    }


}

