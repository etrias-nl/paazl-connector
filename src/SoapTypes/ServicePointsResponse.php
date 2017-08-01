<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Etrias\PaazlConnector\Result\PaazlResultInterface;

class ServicePointsResponse implements PaazlResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var shippingOption
     */
    protected $shippingOption = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var shippingOption $shippingOption
     */
    public function __construct($error, $shippingOption)
    {
        $this->error = $error;
        $this->shippingOption = $shippingOption;
    }

    /**
     * @return errorType
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param errorType $error
     * @return $this
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
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

