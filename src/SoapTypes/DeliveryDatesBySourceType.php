<?php

namespace Etrias\PaazlConnector\SoapTypes;

class DeliveryDatesBySourceType
{

    /**
     * @var source
     */
    protected $source = null;

    /**
     * @var deliveryDatesType
     */
    protected $deliveryDates = null;

    /**
     * Constructor
     *
     * @var source $source
     * @var deliveryDatesType $deliveryDates
     */
    public function __construct($source, $deliveryDates)
    {
        $this->source = $source;
        $this->deliveryDates = $deliveryDates;
    }

    /**
     * @return source
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param source $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return deliveryDatesType
     */
    public function getDeliveryDates()
    {
        return $this->deliveryDates;
    }

    /**
     * @param deliveryDatesType $deliveryDates
     * @return $this
     */
    public function setDeliveryDates($deliveryDates)
    {
        $this->deliveryDates = $deliveryDates;
        return $this;
    }


}

