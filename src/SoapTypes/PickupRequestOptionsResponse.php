<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\ResultInterface;

class PickupRequestOptionsResponse implements ResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var pickupRequestOptionType
     */
    protected $pickupRequestOption = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var pickupRequestOptionType $pickupRequestOption
     */
    public function __construct($error, $pickupRequestOption)
    {
        $this->error = $error;
        $this->pickupRequestOption = $pickupRequestOption;
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
     * @return pickupRequestOptionType
     */
    public function getPickupRequestOption()
    {
        return $this->pickupRequestOption;
    }

    /**
     * @param pickupRequestOptionType $pickupRequestOption
     * @return $this
     */
    public function setPickupRequestOption($pickupRequestOption)
    {
        $this->pickupRequestOption = $pickupRequestOption;
        return $this;
    }


}

