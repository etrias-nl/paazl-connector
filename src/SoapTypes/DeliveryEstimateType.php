<?php

namespace Etrias\PaazlConnector\SoapTypes;

class DeliveryEstimateType
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
    protected $destination = null;

    /**
     * @var \DateTime
     */
    protected $expectedDeliveryDateFrom = null;

    /**
     * @var \DateTime
     */
    protected $expectedDeliveryDate = null;

    /**
     * @var nonNegativeInteger
     */
    protected $transitDays = null;

    /**
     * @var bool
     */
    protected $guarantee = null;

    /**
     * Constructor
     *
     * @var string $shippingOption
     * @var string $distributor
     * @var deliveryEstimateDestination $destination
     * @var \DateTime $expectedDeliveryDateFrom
     * @var \DateTime $expectedDeliveryDate
     * @var nonNegativeInteger $transitDays
     * @var bool $guarantee
     */
    public function __construct($shippingOption, $distributor, $destination, $expectedDeliveryDateFrom, $expectedDeliveryDate, $transitDays, $guarantee)
    {
        $this->shippingOption = $shippingOption;
        $this->distributor = $distributor;
        $this->destination = $destination;
        $this->expectedDeliveryDateFrom = $expectedDeliveryDateFrom;
        $this->expectedDeliveryDate = $expectedDeliveryDate;
        $this->transitDays = $transitDays;
        $this->guarantee = $guarantee;
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
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param deliveryEstimateDestination $destination
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedDeliveryDateFrom()
    {
        return $this->expectedDeliveryDateFrom;
    }

    /**
     * @param \DateTime $expectedDeliveryDateFrom
     * @return $this
     */
    public function setExpectedDeliveryDateFrom($expectedDeliveryDateFrom)
    {
        $this->expectedDeliveryDateFrom = $expectedDeliveryDateFrom;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedDeliveryDate()
    {
        return $this->expectedDeliveryDate;
    }

    /**
     * @param \DateTime $expectedDeliveryDate
     * @return $this
     */
    public function setExpectedDeliveryDate($expectedDeliveryDate)
    {
        $this->expectedDeliveryDate = $expectedDeliveryDate;
        return $this;
    }

    /**
     * @return nonNegativeInteger
     */
    public function getTransitDays()
    {
        return $this->transitDays;
    }

    /**
     * @param nonNegativeInteger $transitDays
     * @return $this
     */
    public function setTransitDays($transitDays)
    {
        $this->transitDays = $transitDays;
        return $this;
    }

    /**
     * @return bool
     */
    public function getGuarantee()
    {
        return $this->guarantee;
    }

    /**
     * @param bool $guarantee
     * @return $this
     */
    public function setGuarantee($guarantee)
    {
        $this->guarantee = $guarantee;
        return $this;
    }


}

