<?php

namespace Etrias\PaazlConnector\SoapTypes;

class ServicePointExtraDetailsStatus
{

    /**
     * @var bool
     */
    protected $available = null;

    /**
     * @var string
     */
    protected $code = null;

    /**
     * @var string
     */
    protected $value = null;

    /**
     * @var \DateTime
     */
    protected $referenceDate = null;

    /**
     * @var \DateTime
     */
    protected $referenceStartDate = null;

    /**
     * @var \DateTime
     */
    protected $referenceEndDate = null;

    /**
     * Constructor
     *
     * @var bool $available
     * @var string $code
     * @var string $value
     * @var \DateTime $referenceDate
     * @var \DateTime $referenceStartDate
     * @var \DateTime $referenceEndDate
     */
    public function __construct($available, $code, $value, $referenceDate, $referenceStartDate, $referenceEndDate)
    {
        $this->available = $available;
        $this->code = $code;
        $this->value = $value;
        $this->referenceDate = $referenceDate;
        $this->referenceStartDate = $referenceStartDate;
        $this->referenceEndDate = $referenceEndDate;
    }

    /**
     * @return bool
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @param bool $available
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->available = $available;
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
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReferenceDate()
    {
        return $this->referenceDate;
    }

    /**
     * @param \DateTime $referenceDate
     * @return $this
     */
    public function setReferenceDate($referenceDate)
    {
        $this->referenceDate = $referenceDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReferenceStartDate()
    {
        return $this->referenceStartDate;
    }

    /**
     * @param \DateTime $referenceStartDate
     * @return $this
     */
    public function setReferenceStartDate($referenceStartDate)
    {
        $this->referenceStartDate = $referenceStartDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReferenceEndDate()
    {
        return $this->referenceEndDate;
    }

    /**
     * @param \DateTime $referenceEndDate
     * @return $this
     */
    public function setReferenceEndDate($referenceEndDate)
    {
        $this->referenceEndDate = $referenceEndDate;
        return $this;
    }


}

