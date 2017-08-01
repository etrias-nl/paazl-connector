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

class Order
{
    /**
     * @var \DateTime
     */
    protected $createDate = null;

    /**
     * @var \DateTime
     */
    protected $lastModificationDate = null;

    /**
     * @var string
     */
    protected $orderReference = null;

    /**
     * @var orderStatusType
     */
    protected $status = null;

    /**
     * @var string
     */
    protected $distributor = null;

    /**
     * @var string
     */
    protected $shippingOption = null;

    /**
     * @var string
     */
    protected $companyName = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var string
     */
    protected $nameOther = null;

    /**
     * @var addressType
     */
    protected $shipToAddress = null;

    /**
     * @var servicePointDetailsType
     */
    protected $servicePointDetails = null;

    /**
     * @var string
     */
    protected $emailAddress = null;

    /**
     * @var string
     */
    protected $phoneNumber = null;

    /**
     * @var \DateTime
     */
    protected $expectedDeliveryDate = null;

    /**
     * @var timeRangeType
     */
    protected $expectedDeliveryTimeFrame = null;

    /**
     * @var \DateTime
     */
    protected $preferredDeliveryDate = null;

    /**
     * @var bool
     */
    protected $preferredDateChosen = null;

    /**
     * @var label
     */
    protected $label = null;

    /**
     * Constructor.
     *
     * @var \DateTime
     * @var \DateTime               $lastModificationDate
     * @var string                  $orderReference
     * @var orderStatusType         $status
     * @var string                  $distributor
     * @var string                  $shippingOption
     * @var string                  $companyName
     * @var string                  $name
     * @var string                  $nameOther
     * @var addressType             $shipToAddress
     * @var servicePointDetailsType $servicePointDetails
     * @var string                  $emailAddress
     * @var string                  $phoneNumber
     * @var \DateTime               $expectedDeliveryDate
     * @var timeRangeType           $expectedDeliveryTimeFrame
     * @var \DateTime               $preferredDeliveryDate
     * @var bool                    $preferredDateChosen
     * @var label                   $label
     *
     * @param mixed $createDate
     * @param mixed $lastModificationDate
     * @param mixed $orderReference
     * @param mixed $status
     * @param mixed $distributor
     * @param mixed $shippingOption
     * @param mixed $companyName
     * @param mixed $name
     * @param mixed $nameOther
     * @param mixed $shipToAddress
     * @param mixed $servicePointDetails
     * @param mixed $emailAddress
     * @param mixed $phoneNumber
     * @param mixed $expectedDeliveryDate
     * @param mixed $expectedDeliveryTimeFrame
     * @param mixed $preferredDeliveryDate
     * @param mixed $preferredDateChosen
     * @param mixed $label
     */
    public function __construct($createDate, $lastModificationDate, $orderReference, $status, $distributor, $shippingOption, $companyName, $name, $nameOther, $shipToAddress, $servicePointDetails, $emailAddress, $phoneNumber, $expectedDeliveryDate, $expectedDeliveryTimeFrame, $preferredDeliveryDate, $preferredDateChosen, $label)
    {
        $this->createDate = $createDate;
        $this->lastModificationDate = $lastModificationDate;
        $this->orderReference = $orderReference;
        $this->status = $status;
        $this->distributor = $distributor;
        $this->shippingOption = $shippingOption;
        $this->companyName = $companyName;
        $this->name = $name;
        $this->nameOther = $nameOther;
        $this->shipToAddress = $shipToAddress;
        $this->servicePointDetails = $servicePointDetails;
        $this->emailAddress = $emailAddress;
        $this->phoneNumber = $phoneNumber;
        $this->expectedDeliveryDate = $expectedDeliveryDate;
        $this->expectedDeliveryTimeFrame = $expectedDeliveryTimeFrame;
        $this->preferredDeliveryDate = $preferredDeliveryDate;
        $this->preferredDateChosen = $preferredDateChosen;
        $this->label = $label;
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
    public function getLastModificationDate()
    {
        return $this->lastModificationDate;
    }

    /**
     * @param \DateTime $lastModificationDate
     *
     * @return $this
     */
    public function setLastModificationDate($lastModificationDate)
    {
        $this->lastModificationDate = $lastModificationDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @param string $orderReference
     *
     * @return $this
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;

        return $this;
    }

    /**
     * @return orderStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param orderStatusType $status
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
    public function getDistributor()
    {
        return $this->distributor;
    }

    /**
     * @param string $distributor
     *
     * @return $this
     */
    public function setDistributor($distributor)
    {
        $this->distributor = $distributor;

        return $this;
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
     *
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
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     *
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getNameOther()
    {
        return $this->nameOther;
    }

    /**
     * @param string $nameOther
     *
     * @return $this
     */
    public function setNameOther($nameOther)
    {
        $this->nameOther = $nameOther;

        return $this;
    }

    /**
     * @return addressType
     */
    public function getShipToAddress()
    {
        return $this->shipToAddress;
    }

    /**
     * @param addressType $shipToAddress
     *
     * @return $this
     */
    public function setShipToAddress($shipToAddress)
    {
        $this->shipToAddress = $shipToAddress;

        return $this;
    }

    /**
     * @return servicePointDetailsType
     */
    public function getServicePointDetails()
    {
        return $this->servicePointDetails;
    }

    /**
     * @param servicePointDetailsType $servicePointDetails
     *
     * @return $this
     */
    public function setServicePointDetails($servicePointDetails)
    {
        $this->servicePointDetails = $servicePointDetails;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     *
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     *
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

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

    /**
     * @return label
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param label $label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }
}
