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

class Label
{
    /**
     * @var \DateTime
     */
    protected $createDate = null;

    /**
     * @var \DateTime
     */
    protected $deliveryDate = null;

    /**
     * @var labelStatusType
     */
    protected $status = null;

    /**
     * @var string
     */
    protected $barcode = null;

    /**
     * @var string
     */
    protected $trackingNumber = null;

    /**
     * @var \DateTime
     */
    protected $expectedDeliveryDate = null;

    /**
     * @var timeRangeType
     */
    protected $expectedDeliveryTimeFrame = null;

    /**
     * @var carrierStatusHistoryType
     */
    protected $carrierStatus = null;

    /**
     * @var string
     */
    protected $deliveryInformation = null;

    /**
     * Constructor.
     *
     * @var \DateTime
     * @var \DateTime                $deliveryDate
     * @var labelStatusType          $status
     * @var string                   $barcode
     * @var string                   $trackingNumber
     * @var \DateTime                $expectedDeliveryDate
     * @var timeRangeType            $expectedDeliveryTimeFrame
     * @var carrierStatusHistoryType $carrierStatus
     * @var string                   $deliveryInformation
     *
     * @param mixed $createDate
     * @param mixed $deliveryDate
     * @param mixed $status
     * @param mixed $barcode
     * @param mixed $trackingNumber
     * @param mixed $expectedDeliveryDate
     * @param mixed $expectedDeliveryTimeFrame
     * @param mixed $carrierStatus
     * @param mixed $deliveryInformation
     */
    public function __construct($createDate, $deliveryDate, $status, $barcode, $trackingNumber, $expectedDeliveryDate, $expectedDeliveryTimeFrame, $carrierStatus, $deliveryInformation)
    {
        $this->createDate = $createDate;
        $this->deliveryDate = $deliveryDate;
        $this->status = $status;
        $this->barcode = $barcode;
        $this->trackingNumber = $trackingNumber;
        $this->expectedDeliveryDate = $expectedDeliveryDate;
        $this->expectedDeliveryTimeFrame = $expectedDeliveryTimeFrame;
        $this->carrierStatus = $carrierStatus;
        $this->deliveryInformation = $deliveryInformation;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * @param \DateTime $createDate
     *
     * @return $this
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

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
     * @return labelStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param labelStatusType $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @param string $barcode
     *
     * @return $this
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * @param string $trackingNumber
     *
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;

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
     *
     * @return $this
     */
    public function setExpectedDeliveryDate($expectedDeliveryDate)
    {
        $this->expectedDeliveryDate = $expectedDeliveryDate;

        return $this;
    }

    /**
     * @return timeRangeType
     */
    public function getExpectedDeliveryTimeFrame()
    {
        return $this->expectedDeliveryTimeFrame;
    }

    /**
     * @param timeRangeType $expectedDeliveryTimeFrame
     *
     * @return $this
     */
    public function setExpectedDeliveryTimeFrame($expectedDeliveryTimeFrame)
    {
        $this->expectedDeliveryTimeFrame = $expectedDeliveryTimeFrame;

        return $this;
    }

    /**
     * @return carrierStatusHistoryType
     */
    public function getCarrierStatus()
    {
        return $this->carrierStatus;
    }

    /**
     * @param carrierStatusHistoryType $carrierStatus
     *
     * @return $this
     */
    public function setCarrierStatus($carrierStatus)
    {
        $this->carrierStatus = $carrierStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryInformation()
    {
        return $this->deliveryInformation;
    }

    /**
     * @param string $deliveryInformation
     *
     * @return $this
     */
    public function setDeliveryInformation($deliveryInformation)
    {
        $this->deliveryInformation = $deliveryInformation;

        return $this;
    }
}
