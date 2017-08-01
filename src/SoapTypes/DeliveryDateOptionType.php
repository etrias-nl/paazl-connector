<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Etrias\PaazlConnector\SoapTypes;

class DeliveryDateOptionType
{
    /**
     * @var \DateTime
     */
    protected $pickupDate = null;

    /**
     * @var \DateTime
     */
    protected $deliveryDate = null;

    /**
     * @var timeRangeType
     */
    protected $deliveryTimeRange = null;

    /**
     * Constructor.
     *
     * @var \DateTime
     * @var \DateTime     $deliveryDate
     * @var timeRangeType $deliveryTimeRange
     *
     * @param mixed $pickupDate
     * @param mixed $deliveryDate
     * @param mixed $deliveryTimeRange
     */
    public function __construct($pickupDate, $deliveryDate, $deliveryTimeRange)
    {
        $this->pickupDate = $pickupDate;
        $this->deliveryDate = $deliveryDate;
        $this->deliveryTimeRange = $deliveryTimeRange;
    }

    /**
     * @return \DateTime
     */
    public function getPickupDate()
    {
        return $this->pickupDate;
    }

    /**
     * @param \DateTime $pickupDate
     *
     * @return $this
     */
    public function setPickupDate($pickupDate)
    {
        $this->pickupDate = $pickupDate;

        return $this;
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
     *
     * @return $this
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * @return timeRangeType
     */
    public function getDeliveryTimeRange()
    {
        return $this->deliveryTimeRange;
    }

    /**
     * @param timeRangeType $deliveryTimeRange
     *
     * @return $this
     */
    public function setDeliveryTimeRange($deliveryTimeRange)
    {
        $this->deliveryTimeRange = $deliveryTimeRange;

        return $this;
    }
}
