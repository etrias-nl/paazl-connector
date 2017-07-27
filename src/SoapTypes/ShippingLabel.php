<?php

namespace Etrias\PaazlConnector\SoapTypes;

class ShippingLabel
{

    /**
     * @var \DateTime
     */
    protected $createdDate = null;

    /**
     * @var \DateTime
     */
    protected $scannedDate = null;

    /**
     * @var \DateTime
     */
    protected $deliveredDate = null;

    /**
     * @var \DateTime
     */
    protected $deliveredbbDate = null;

    /**
     * @var labelStatusType
     */
    protected $currentStatus = null;

    /**
     * @var string
     */
    protected $labelCode = null;

    /**
     * @var string
     */
    protected $trackingNumber = null;

    /**
     * @var anyURI
     */
    protected $trackTraceUrl = null;

    /**
     * @var string
     */
    protected $batch = null;

    /**
     * @var carrierStatusHistoryType
     */
    protected $carrierStatus = null;

    /**
     * Constructor
     *
     * @var \DateTime $createdDate
     * @var \DateTime $scannedDate
     * @var \DateTime $deliveredDate
     * @var \DateTime $deliveredbbDate
     * @var labelStatusType $currentStatus
     * @var string $labelCode
     * @var string $trackingNumber
     * @var anyURI $trackTraceUrl
     * @var string $batch
     * @var carrierStatusHistoryType $carrierStatus
     */
    public function __construct($createdDate, $scannedDate, $deliveredDate, $deliveredbbDate, $currentStatus, $labelCode, $trackingNumber, $trackTraceUrl, $batch, $carrierStatus)
    {
        $this->createdDate = $createdDate;
        $this->scannedDate = $scannedDate;
        $this->deliveredDate = $deliveredDate;
        $this->deliveredbbDate = $deliveredbbDate;
        $this->currentStatus = $currentStatus;
        $this->labelCode = $labelCode;
        $this->trackingNumber = $trackingNumber;
        $this->trackTraceUrl = $trackTraceUrl;
        $this->batch = $batch;
        $this->carrierStatus = $carrierStatus;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param \DateTime $createdDate
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getScannedDate()
    {
        return $this->scannedDate;
    }

    /**
     * @param \DateTime $scannedDate
     * @return $this
     */
    public function setScannedDate($scannedDate)
    {
        $this->scannedDate = $scannedDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveredDate()
    {
        return $this->deliveredDate;
    }

    /**
     * @param \DateTime $deliveredDate
     * @return $this
     */
    public function setDeliveredDate($deliveredDate)
    {
        $this->deliveredDate = $deliveredDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveredbbDate()
    {
        return $this->deliveredbbDate;
    }

    /**
     * @param \DateTime $deliveredbbDate
     * @return $this
     */
    public function setDeliveredbbDate($deliveredbbDate)
    {
        $this->deliveredbbDate = $deliveredbbDate;
        return $this;
    }

    /**
     * @return labelStatusType
     */
    public function getCurrentStatus()
    {
        return $this->currentStatus;
    }

    /**
     * @param labelStatusType $currentStatus
     * @return $this
     */
    public function setCurrentStatus($currentStatus)
    {
        $this->currentStatus = $currentStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabelCode()
    {
        return $this->labelCode;
    }

    /**
     * @param string $labelCode
     * @return $this
     */
    public function setLabelCode($labelCode)
    {
        $this->labelCode = $labelCode;
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
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    /**
     * @return anyURI
     */
    public function getTrackTraceUrl()
    {
        return $this->trackTraceUrl;
    }

    /**
     * @param anyURI $trackTraceUrl
     * @return $this
     */
    public function setTrackTraceUrl($trackTraceUrl)
    {
        $this->trackTraceUrl = $trackTraceUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * @param string $batch
     * @return $this
     */
    public function setBatch($batch)
    {
        $this->batch = $batch;
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
     * @return $this
     */
    public function setCarrierStatus($carrierStatus)
    {
        $this->carrierStatus = $carrierStatus;
        return $this;
    }


}

