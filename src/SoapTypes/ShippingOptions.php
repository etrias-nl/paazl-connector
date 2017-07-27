<?php

namespace Etrias\PaazlConnector\SoapTypes;

class ShippingOptions
{

    /**
     * @var shippingOption
     */
    protected $shippingOption = null;

    /**
     * Constructor
     *
     * @var shippingOption $shippingOption
     */
    public function __construct($shippingOption)
    {
        $this->shippingOption = $shippingOption;
    }

    /**
     * @return shippingOption
     */
    public function getShippingOption()
    {
        return $this->shippingOption;
    }

    /**
     * @param shippingOption $shippingOption
     * @return $this
     */
    public function setShippingOption($shippingOption)
    {
        $this->shippingOption = $shippingOption;
        return $this;
    }


}

