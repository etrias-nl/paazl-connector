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

class Delivery
{
    /**
     * @var deliveryTypeType
     */
    protected $deliveryType = null;

    /**
     * @var string
     */
    protected $option = null;

    /**
     * @var string
     */
    protected $description = null;

    /**
     * @var float
     */
    protected $rate = null;

    /**
     * @var bool
     */
    protected $cod = null;

    /**
     * @var bool
     */
    protected $insurance = null;

    /**
     * @var bool
     */
    protected $signatureRequired = null;

    /**
     * @var bool
     */
    protected $directDeliveryOnly = null;

    /**
     * @var string
     */
    protected $servicePointBasePostalCode = null;

    /**
     * @var string
     */
    protected $servicePointBaseCity = null;

    /**
     * @var servicePointType
     */
    protected $servicePoint = null;

    /**
     * @var string
     */
    protected $servicePointAccountNumber = null;

    /**
     * @var \DateTime
     */
    protected $preferredDeliveryDate = null;

    /**
     * @var openOrClosedTimeRangeType
     */
    protected $timeFrame = null;

    /**
     * @var nonNegativeIntegerRangeType
     */
    protected $transitDaysRange = null;

    /**
     * @var bool
     */
    protected $preferredDateChosen = null;

    /**
     * Constructor.
     *
     * @var deliveryTypeType
     * @var string                      $option
     * @var string                      $description
     * @var float                       $rate
     * @var bool                        $cod
     * @var bool                        $insurance
     * @var bool                        $signatureRequired
     * @var bool                        $directDeliveryOnly
     * @var string                      $servicePointBasePostalCode
     * @var string                      $servicePointBaseCity
     * @var servicePointType            $servicePoint
     * @var string                      $servicePointAccountNumber
     * @var \DateTime                   $preferredDeliveryDate
     * @var openOrClosedTimeRangeType   $timeFrame
     * @var nonNegativeIntegerRangeType $transitDaysRange
     * @var bool                        $preferredDateChosen
     *
     * @param mixed $deliveryType
     * @param mixed $option
     * @param mixed $description
     * @param mixed $rate
     * @param mixed $cod
     * @param mixed $insurance
     * @param mixed $signatureRequired
     * @param mixed $directDeliveryOnly
     * @param mixed $servicePointBasePostalCode
     * @param mixed $servicePointBaseCity
     * @param mixed $servicePoint
     * @param mixed $servicePointAccountNumber
     * @param mixed $preferredDeliveryDate
     * @param mixed $timeFrame
     * @param mixed $transitDaysRange
     * @param mixed $preferredDateChosen
     */
    public function __construct($deliveryType, $option, $description, $rate, $cod, $insurance, $signatureRequired, $directDeliveryOnly, $servicePointBasePostalCode, $servicePointBaseCity, $servicePoint, $servicePointAccountNumber, $preferredDeliveryDate, $timeFrame, $transitDaysRange, $preferredDateChosen)
    {
        $this->deliveryType = $deliveryType;
        $this->option = $option;
        $this->description = $description;
        $this->rate = $rate;
        $this->cod = $cod;
        $this->insurance = $insurance;
        $this->signatureRequired = $signatureRequired;
        $this->directDeliveryOnly = $directDeliveryOnly;
        $this->servicePointBasePostalCode = $servicePointBasePostalCode;
        $this->servicePointBaseCity = $servicePointBaseCity;
        $this->servicePoint = $servicePoint;
        $this->servicePointAccountNumber = $servicePointAccountNumber;
        $this->preferredDeliveryDate = $preferredDeliveryDate;
        $this->timeFrame = $timeFrame;
        $this->transitDaysRange = $transitDaysRange;
        $this->preferredDateChosen = $preferredDateChosen;
    }

    /**
     * @return deliveryTypeType
     */
    public function getDeliveryType()
    {
        return $this->deliveryType;
    }

    /**
     * @param deliveryTypeType $deliveryType
     *
     * @return $this
     */
    public function setDeliveryType($deliveryType)
    {
        $this->deliveryType = $deliveryType;

        return $this;
    }

    /**
     * @return string
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param string $option
     *
     * @return $this
     */
    public function setOption($option)
    {
        $this->option = $option;

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
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * @return bool
     */
    public function getCod()
    {
        return $this->cod;
    }

    /**
     * @param bool $cod
     *
     * @return $this
     */
    public function setCod($cod)
    {
        $this->cod = $cod;

        return $this;
    }

    /**
     * @return bool
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * @param bool $insurance
     *
     * @return $this
     */
    public function setInsurance($insurance)
    {
        $this->insurance = $insurance;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSignatureRequired()
    {
        return $this->signatureRequired;
    }

    /**
     * @param bool $signatureRequired
     *
     * @return $this
     */
    public function setSignatureRequired($signatureRequired)
    {
        $this->signatureRequired = $signatureRequired;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDirectDeliveryOnly()
    {
        return $this->directDeliveryOnly;
    }

    /**
     * @param bool $directDeliveryOnly
     *
     * @return $this
     */
    public function setDirectDeliveryOnly($directDeliveryOnly)
    {
        $this->directDeliveryOnly = $directDeliveryOnly;

        return $this;
    }

    /**
     * @return string
     */
    public function getServicePointBasePostalCode()
    {
        return $this->servicePointBasePostalCode;
    }

    /**
     * @param string $servicePointBasePostalCode
     *
     * @return $this
     */
    public function setServicePointBasePostalCode($servicePointBasePostalCode)
    {
        $this->servicePointBasePostalCode = $servicePointBasePostalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getServicePointBaseCity()
    {
        return $this->servicePointBaseCity;
    }

    /**
     * @param string $servicePointBaseCity
     *
     * @return $this
     */
    public function setServicePointBaseCity($servicePointBaseCity)
    {
        $this->servicePointBaseCity = $servicePointBaseCity;

        return $this;
    }

    /**
     * @return servicePointType
     */
    public function getServicePoint()
    {
        return $this->servicePoint;
    }

    /**
     * @param servicePointType $servicePoint
     *
     * @return $this
     */
    public function setServicePoint($servicePoint)
    {
        $this->servicePoint = $servicePoint;

        return $this;
    }

    /**
     * @return string
     */
    public function getServicePointAccountNumber()
    {
        return $this->servicePointAccountNumber;
    }

    /**
     * @param string $servicePointAccountNumber
     *
     * @return $this
     */
    public function setServicePointAccountNumber($servicePointAccountNumber)
    {
        $this->servicePointAccountNumber = $servicePointAccountNumber;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPreferredDeliveryDate()
    {
        return $this->preferredDeliveryDate;
    }

    /**
     * @param \DateTime $preferredDeliveryDate
     *
     * @return $this
     */
    public function setPreferredDeliveryDate($preferredDeliveryDate)
    {
        $this->preferredDeliveryDate = $preferredDeliveryDate;

        return $this;
    }

    /**
     * @return openOrClosedTimeRangeType
     */
    public function getTimeFrame()
    {
        return $this->timeFrame;
    }

    /**
     * @param openOrClosedTimeRangeType $timeFrame
     *
     * @return $this
     */
    public function setTimeFrame($timeFrame)
    {
        $this->timeFrame = $timeFrame;

        return $this;
    }

    /**
     * @return nonNegativeIntegerRangeType
     */
    public function getTransitDaysRange()
    {
        return $this->transitDaysRange;
    }

    /**
     * @param nonNegativeIntegerRangeType $transitDaysRange
     *
     * @return $this
     */
    public function setTransitDaysRange($transitDaysRange)
    {
        $this->transitDaysRange = $transitDaysRange;

        return $this;
    }

    /**
     * @return bool
     */
    public function getPreferredDateChosen()
    {
        return $this->preferredDateChosen;
    }

    /**
     * @param bool $preferredDateChosen
     *
     * @return $this
     */
    public function setPreferredDateChosen($preferredDateChosen)
    {
        $this->preferredDateChosen = $preferredDateChosen;

        return $this;
    }
}
