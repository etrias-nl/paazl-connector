<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\ResultInterface;

class DeliveryEstimateResponse implements ResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var disambiguationCandi\DateTimeType
     */
    protected $disambiguationCandidate = null;

    /**
     * @var deliveryEstimateType
     */
    protected $deliveryEstimate = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var disambiguationCandi\DateTimeType $disambiguationCandidate
     * @var deliveryEstimateType $deliveryEstimate
     */
    public function __construct($error, $disambiguationCandidate, $deliveryEstimate)
    {
        $this->error = $error;
        $this->disambiguationCandidate = $disambiguationCandidate;
        $this->deliveryEstimate = $deliveryEstimate;
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
     * @return disambiguationCandi\DateTimeType
     */
    public function getDisambiguationCandidate()
    {
        return $this->disambiguationCandidate;
    }

    /**
     * @param disambiguationCandi\DateTimeType $disambiguationCandidate
     * @return $this
     */
    public function setDisambiguationCandidate($disambiguationCandidate)
    {
        $this->disambiguationCandidate = $disambiguationCandidate;
        return $this;
    }

    /**
     * @return deliveryEstimateType
     */
    public function getDeliveryEstimate()
    {
        return $this->deliveryEstimate;
    }

    /**
     * @param deliveryEstimateType $deliveryEstimate
     * @return $this
     */
    public function setDeliveryEstimate($deliveryEstimate)
    {
        $this->deliveryEstimate = $deliveryEstimate;
        return $this;
    }


}

