<?php

namespace Etrias\PaazlConnector\SoapTypes;

class ActiveShippingOptions
{

    /**
     * @var activeShippingOption
     */
    protected $activeShippingOption = null;

    /**
     * Constructor
     *
     * @var activeShippingOption $activeShippingOption
     */
    public function __construct($activeShippingOption)
    {
        $this->activeShippingOption = $activeShippingOption;
    }

    /**
     * @return activeShippingOption
     */
    public function getActiveShippingOption()
    {
        return $this->activeShippingOption;
    }

    /**
     * @param activeShippingOption $activeShippingOption
     * @return $this
     */
    public function setActiveShippingOption($activeShippingOption)
    {
        $this->activeShippingOption = $activeShippingOption;
        return $this;
    }


}

