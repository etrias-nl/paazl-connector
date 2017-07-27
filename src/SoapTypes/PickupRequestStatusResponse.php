<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\ResultInterface;

class PickupRequestStatusResponse implements ResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var string
     */
    protected $internalReference = null;

    /**
     * @var int
     */
    protected $webshop = null;

    /**
     * @var pickupRequestStatusType
     */
    protected $status = null;

    /**
     * @var \DateTime
     */
    protected $date = null;

    /**
     * @var pickupRequestStatusHistoryType
     */
    protected $statusHistory = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var string $internalReference
     * @var int $webshop
     * @var pickupRequestStatusType $status
     * @var \DateTime $date
     * @var pickupRequestStatusHistoryType $statusHistory
     */
    public function __construct($error, $internalReference, $webshop, $status, $date, $statusHistory)
    {
        $this->error = $error;
        $this->internalReference = $internalReference;
        $this->webshop = $webshop;
        $this->status = $status;
        $this->date = $date;
        $this->statusHistory = $statusHistory;
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
     * @return string
     */
    public function getInternalReference()
    {
        return $this->internalReference;
    }

    /**
     * @param string $internalReference
     * @return $this
     */
    public function setInternalReference($internalReference)
    {
        $this->internalReference = $internalReference;
        return $this;
    }

    /**
     * @return int
     */
    public function getWebshop()
    {
        return $this->webshop;
    }

    /**
     * @param int $webshop
     * @return $this
     */
    public function setWebshop($webshop)
    {
        $this->webshop = $webshop;
        return $this;
    }

    /**
     * @return pickupRequestStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param pickupRequestStatusType $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return pickupRequestStatusHistoryType
     */
    public function getStatusHistory()
    {
        return $this->statusHistory;
    }

    /**
     * @param pickupRequestStatusHistoryType $statusHistory
     * @return $this
     */
    public function setStatusHistory($statusHistory)
    {
        $this->statusHistory = $statusHistory;
        return $this;
    }


}

