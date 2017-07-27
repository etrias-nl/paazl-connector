<?php

namespace Etrias\PaazlConnector\SoapTypes;

class DeliveryDatesType
{

    /**
     * @var \DateTime
     */
    protected $deliveryDate = null;

    /**
     * @var deliveryDateOptionType
     */
    protected $deliveryDateOption = null;

    /**
     * Constructor
     *
     * @var \DateTime $deliveryDate
     * @var deliveryDateOptionType $deliveryDateOption
     */
    public function __construct($deliveryDate, $deliveryDateOption)
    {
        $this->deliveryDate = $deliveryDate;
        $this->deliveryDateOption = $deliveryDateOption;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * @param \DateTime $deliveryDate
     * @return $this
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
        return $this;
    }

    /**
     * @return deliveryDateOptionType
     */
    public function getDeliveryDateOption()
    {
        return $this->deliveryDateOption;
    }

    /**
     * @param deliveryDateOptionType $deliveryDateOption
     * @return $this
     */
    public function setDeliveryDateOption($deliveryDateOption)
    {
        $this->deliveryDateOption = $deliveryDateOption;
        return $this;
    }


}

