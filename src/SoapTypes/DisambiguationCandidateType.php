<?php

namespace Etrias\PaazlConnector\SoapTypes;

class DisambiguationCandidateType
{

    /**
     * @var string
     */
    protected $shippingOption = null;

    /**
     * @var string
     */
    protected $distributor = null;

    /**
     * @var deliveryEstimateDestination
     */
    protected $candidate = null;

    /**
     * Constructor
     *
     * @var string $shippingOption
     * @var string $distributor
     * @var deliveryEstimateDestination $candidate
     */
    public function __construct($shippingOption, $distributor, $candidate)
    {
        $this->shippingOption = $shippingOption;
        $this->distributor = $distributor;
        $this->candidate = $candidate;
    }

    /**
     * @return string
     */
    public function getShippingOption()
    {
        return $this->shippingOption;
    }

    /**
     * @param string $shippingOption
     * @return $this
     */
    public function setShippingOption($shippingOption)
    {
        $this->shippingOption = $shippingOption;
        return $this;
    }

    /**
     * @return string
     */
    public function getDistributor()
    {
        return $this->distributor;
    }

    /**
     * @param string $distributor
     * @return $this
     */
    public function setDistributor($distributor)
    {
        $this->distributor = $distributor;
        return $this;
    }

    /**
     * @return deliveryEstimateDestination
     */
    public function getCandidate()
    {
        return $this->candidate;
    }

    /**
     * @param deliveryEstimateDestination $candidate
     * @return $this
     */
    public function setCandidate($candidate)
    {
        $this->candidate = $candidate;
        return $this;
    }


}

