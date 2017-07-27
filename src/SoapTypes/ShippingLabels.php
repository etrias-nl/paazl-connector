<?php

namespace Etrias\PaazlConnector\SoapTypes;

class ShippingLabels
{

    /**
     * @var triggerBarcodeResponseType
     */
    protected $shippingLabel = null;

    /**
     * Constructor
     *
     * @var triggerBarcodeResponseType $shippingLabel
     */
    public function __construct($shippingLabel)
    {
        $this->shippingLabel = $shippingLabel;
    }

    /**
     * @return triggerBarcodeResponseType
     */
    public function getShippingLabel()
    {
        return $this->shippingLabel;
    }

    /**
     * @param triggerBarcodeResponseType $shippingLabel
     * @return $this
     */
    public function setShippingLabel($shippingLabel)
    {
        $this->shippingLabel = $shippingLabel;
        return $this;
    }


}

