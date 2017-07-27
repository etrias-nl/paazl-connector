<?php

namespace Etrias\PaazlConnector\SoapTypes;

class PickupRequestStatusEntryType
{

    /**
     * @var \DateTime
     */
    protected $timestamp = null;

    /**
     * @var pickupRequestStatusType
     */
    protected $status = null;

    /**
     * @var string
     */
    protected $code = null;

    /**
     * @var string
     */
    protected $description = null;

    /**
     * Constructor
     *
     * @var \DateTime $timestamp
     * @var pickupRequestStatusType $status
     * @var string $code
     * @var string $description
     */
    public function __construct($timestamp, $status, $code, $description)
    {
        $this->timestamp = $timestamp;
        $this->status = $status;
        $this->code = $code;
        $this->description = $description;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param \DateTime $timestamp
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
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
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

