<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\ResultInterface;

class TriggerCarrierRegistrationResponse implements ResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var shippingLabels
     */
    protected $shippingLabels = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var shippingLabels $shippingLabels
     */
    public function __construct($error, $shippingLabels)
    {
        $this->error = $error;
        $this->shippingLabels = $shippingLabels;
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
     * @return shippingLabels
     */
    public function getShippingLabels()
    {
        return $this->shippingLabels;
    }

    /**
     * @param shippingLabels $shippingLabels
     * @return $this
     */
    public function setShippingLabels($shippingLabels)
    {
        $this->shippingLabels = $shippingLabels;
        return $this;
    }


}

