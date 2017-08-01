<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Etrias\PaazlConnector\Result\PaazlResultInterface;

class ShippingOptionResponse implements PaazlResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var string
     */
    protected $deliveryMatrix = null;

    /**
     * @var shippingOptions
     */
    protected $shippingOptions = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var string $deliveryMatrix
     * @var shippingOptions $shippingOptions
     */
    public function __construct($error, $deliveryMatrix, $shippingOptions)
    {
        $this->error = $error;
        $this->deliveryMatrix = $deliveryMatrix;
        $this->shippingOptions = $shippingOptions;
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
     * @return string
     */
    public function getDeliveryMatrix()
    {
        return $this->deliveryMatrix;
    }

    /**
     * @param string $deliveryMatrix
     * @return $this
     */
    public function setDeliveryMatrix($deliveryMatrix)
    {
        $this->deliveryMatrix = $deliveryMatrix;
        return $this;
    }

    /**
     * @return shippingOptions
     */
    public function getShippingOptions()
    {
        return $this->shippingOptions;
    }

    /**
     * @param shippingOptions $shippingOptions
     * @return $this
     */
    public function setShippingOptions($shippingOptions)
    {
        $this->shippingOptions = $shippingOptions;
        return $this;
    }


}

