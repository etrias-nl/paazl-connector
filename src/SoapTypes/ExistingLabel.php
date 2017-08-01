<?php

namespace Etrias\PaazlConnector\SoapTypes;

class ExistingLabel
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
    protected $targetWebShop;

    /**
     * Constructor
     *
     * @param string $orderReference
     * @param string $barcode
     * @param null $targetWebShop
     * @internal param string $orderReference
     * @internal param string $barcode
     */
    public function __construct($orderReference, $barcode, $targetWebShop = null)
    {
        $this->orderReference = $orderReference;
        $this->barcode = $barcode;
        $this->targetWebShop = $targetWebShop;
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
    public function getTargetWebShop(): string
    {
        return $this->targetWebShop;
    }

    /**
     * @param string $targetWebShop
     * @return ExistingLabel
     */
    public function setTargetWebShop(string $targetWebShop): ExistingLabel
    {
        $this->targetWebShop = $targetWebShop;

        return $this;
    }




}

