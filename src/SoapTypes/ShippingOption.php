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

class ShippingOption extends ShippingOptionDetailsType
{
    /**
     * @var string
     */
    protected $type = null;

    /**
     * @var string
     */
    protected $deliverySchemaLineId = null;

    /**
     * @var string
     */
    protected $partOfDay = null;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var float
     */
    protected $priceDiscount;

    /**
     * @var string
     */
    protected $deliveryDayOfWeekRange;

    /**
     * @var string
     */
    protected $deliveryWindowStart;

    /**
     * @var string
     */
    protected $deliveryWindowEnd;

    /**
     * @var bool
     */
    protected $datePreference;

    /**
     * @var bool
     */
    protected $cod;

    /**
     * @var bool
     */
    protected $insurance;

    /** @var bool */
    protected $needsServicePointAccountNumber;

    /**
     * @var bool
     */
    protected $shipperNotification;

    /**
     * @var bool
     */
    protected $needsAdditionalShipperNotification;

    /**
     * @var bool
     */
    protected $allowsAdditionalShipperNotification;

    /**
     * @var string
     */
    protected $distributor = null;

    /**
     * @var string
     */
    protected $shippingOption = null;

    /**
     * @var servicePointsType
     */
    protected $servicePoints = null;

    /**
     * Constructor.
     *
     * @param string $distributor
     * @param string $shippingOption
     *
     * @var servicePointsType $servicePoint
     *
     * @param string $contract
     * @param $option
     * @param $description
     * @param mixed $servicePoint
     * @param mixed $servicePoints
     */
    public function __construct($distributor, $shippingOption, $servicePoints, $contract, $option, $description)
    {
        parent::__construct($distributor, $contract, $option, $description);
        $this->distributor = $distributor;
        $this->shippingOption = $shippingOption;
        $this->servicePoints = $servicePoints;
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
     * @return servicePointsType
     */
    public function getServicePoints()
    {
        return $this->servicePoints;
    }

    /**
     * @param servicePointsType $servicePoints
     *
     * @return $this
     */
    public function setServicePoints($servicePoints)
    {
        $this->servicePoints = $servicePoints;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return ShippingOption
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliverySchemaLineId()
    {
        return $this->deliverySchemaLineId;
    }

    /**
     * @param string $deliverySchemaLineId
     *
     * @return ShippingOption
     */
    public function setDeliverySchemaLineId($deliverySchemaLineId)
    {
        $this->deliverySchemaLineId = $deliverySchemaLineId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPartOfDay()
    {
        return $this->partOfDay;
    }

    /**
     * @param string $partOfDay
     *
     * @return ShippingOption
     */
    public function setPartOfDay($partOfDay)
    {
        $this->partOfDay = $partOfDay;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return ShippingOption
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return float
     */
    public function getPriceDiscount()
    {
        return $this->priceDiscount;
    }

    /**
     * @param float $priceDiscount
     *
     * @return ShippingOption
     */
    public function setPriceDiscount($priceDiscount)
    {
        $this->priceDiscount = $priceDiscount;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryDayOfWeekRange()
    {
        return $this->deliveryDayOfWeekRange;
    }

    /**
     * @param string $deliveryDayOfWeekRange
     *
     * @return ShippingOption
     */
    public function setDeliveryDayOfWeekRange($deliveryDayOfWeekRange)
    {
        $this->deliveryDayOfWeekRange = $deliveryDayOfWeekRange;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryWindowStart()
    {
        return $this->deliveryWindowStart;
    }

    /**
     * @param string $deliveryWindowStart
     *
     * @return ShippingOption
     */
    public function setDeliveryWindowStart($deliveryWindowStart)
    {
        $this->deliveryWindowStart = $deliveryWindowStart;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryWindowEnd()
    {
        return $this->deliveryWindowEnd;
    }

    /**
     * @param string $deliveryWindowEnd
     *
     * @return ShippingOption
     */
    public function setDeliveryWindowEnd($deliveryWindowEnd)
    {
        $this->deliveryWindowEnd = $deliveryWindowEnd;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDatePreference()
    {
        return $this->datePreference;
    }

    /**
     * @param bool $datePreference
     *
     * @return ShippingOption
     */
    public function setDatePreference($datePreference)
    {
        $this->datePreference = $datePreference;

        return $this;
    }

    /**
     * @return bool
     */
    public function isCod()
    {
        return $this->cod;
    }

    /**
     * @param bool $cod
     *
     * @return ShippingOption
     */
    public function setCod($cod)
    {
        $this->cod = $cod;

        return $this;
    }

    /**
     * @return bool
     */
    public function isInsurance()
    {
        return $this->insurance;
    }

    /**
     * @param bool $insurance
     *
     * @return ShippingOption
     */
    public function setInsurance($insurance)
    {
        $this->insurance = $insurance;

        return $this;
    }

    /**
     * @return bool
     */
    public function isNeedsServicePointAccountNumber()
    {
        return $this->needsServicePointAccountNumber;
    }

    /**
     * @param bool $needsServicePointAccountNumber
     *
     * @return ShippingOption
     */
    public function setNeedsServicePointAccountNumber($needsServicePointAccountNumber)
    {
        $this->needsServicePointAccountNumber = $needsServicePointAccountNumber;

        return $this;
    }

    /**
     * @return bool
     */
    public function isShipperNotification()
    {
        return $this->shipperNotification;
    }

    /**
     * @param bool $shipperNotification
     *
     * @return ShippingOption
     */
    public function setShipperNotification($shipperNotification)
    {
        $this->shipperNotification = $shipperNotification;

        return $this;
    }

    /**
     * @return bool
     */
    public function isNeedsAdditionalShipperNotification()
    {
        return $this->needsAdditionalShipperNotification;
    }

    /**
     * @param bool $needsAdditionalShipperNotification
     *
     * @return ShippingOption
     */
    public function setNeedsAdditionalShipperNotification($needsAdditionalShipperNotification)
    {
        $this->needsAdditionalShipperNotification = $needsAdditionalShipperNotification;

        return $this;
    }

    /**
     * @return bool
     */
    public function isAllowsAdditionalShipperNotification()
    {
        return $this->allowsAdditionalShipperNotification;
    }

    /**
     * @param bool $allowsAdditionalShipperNotification
     *
     * @return ShippingOption
     */
    public function setAllowsAdditionalShipperNotification($allowsAdditionalShipperNotification)
    {
        $this->allowsAdditionalShipperNotification = $allowsAdditionalShipperNotification;

        return $this;
    }

    /**
     * @return string
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * @param string $contract
     *
     * @return ShippingOption
     */
    public function setContract($contract)
    {
        $this->contract = $contract;

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
     * @return ShippingOption
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
     * @return ShippingOption
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
