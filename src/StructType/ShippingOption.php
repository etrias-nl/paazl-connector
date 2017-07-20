<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingOption StructType
 * @subpackage Structs
 */
class ShippingOption extends AbstractStructBase
{
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The deliverySchemeLineId
     * @var int
     */
    public $deliverySchemeLineId;
    /**
     * The distributor
     * @var string
     */
    public $distributor;
    /**
     * The partOfDay
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $partOfDay;
    /**
     * The price
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $price;
    /**
     * The priceDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $priceDiscount;
    /**
     * The deliveryDayOfWeekRange
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $deliveryDayOfWeekRange;
    /**
     * The deliveryWindowStart
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\Time
     */
    public $deliveryWindowStart;
    /**
     * The deliveryWindowEnd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\Time
     */
    public $deliveryWindowEnd;
    /**
     * The datePreference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $datePreference;
    /**
     * The cod
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $cod;
    /**
     * The insurance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $insurance;
    /**
     * The needsServicePointAccountNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $needsServicePointAccountNumber;
    /**
     * The shipperNotification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $shipperNotification;
    /**
     * The needsAdditionalShipperNotification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $needsAdditionalShipperNotification;
    /**
     * The allowsAdditionalShipperNotification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $allowsAdditionalShipperNotification;
    /**
     * The servicePoints
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\ServicePointsType
     */
    public $servicePoints;
    /**
     * The deliveryDates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\DeliveryDatesType
     */
    public $deliveryDates;
    /**
     * The shippingOption
     * @var string
     */
    public $shippingOption;
    /**
     * The servicePoint
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\ServicePointType[]
     */
    public $servicePoint;
    /**
     * Constructor method for shippingOption
     * @uses ShippingOption::setType()
     * @uses ShippingOption::setDescription()
     * @uses ShippingOption::setDeliverySchemeLineId()
     * @uses ShippingOption::setDistributor()
     * @uses ShippingOption::setPartOfDay()
     * @uses ShippingOption::setPrice()
     * @uses ShippingOption::setPriceDiscount()
     * @uses ShippingOption::setDeliveryDayOfWeekRange()
     * @uses ShippingOption::setDeliveryWindowStart()
     * @uses ShippingOption::setDeliveryWindowEnd()
     * @uses ShippingOption::setDatePreference()
     * @uses ShippingOption::setCod()
     * @uses ShippingOption::setInsurance()
     * @uses ShippingOption::setNeedsServicePointAccountNumber()
     * @uses ShippingOption::setShipperNotification()
     * @uses ShippingOption::setNeedsAdditionalShipperNotification()
     * @uses ShippingOption::setAllowsAdditionalShipperNotification()
     * @uses ShippingOption::setServicePoints()
     * @uses ShippingOption::setDeliveryDates()
     * @uses ShippingOption::setShippingOption()
     * @uses ShippingOption::setServicePoint()
     * @param string $type
     * @param string $description
     * @param int $deliverySchemeLineId
     * @param string $distributor
     * @param string $partOfDay
     * @param float $price
     * @param float $priceDiscount
     * @param string $deliveryDayOfWeekRange
     * @param \Etrias\PaazlConnector\StructType\Time $deliveryWindowStart
     * @param \Etrias\PaazlConnector\StructType\Time $deliveryWindowEnd
     * @param bool $datePreference
     * @param bool $cod
     * @param bool $insurance
     * @param bool $needsServicePointAccountNumber
     * @param bool $shipperNotification
     * @param bool $needsAdditionalShipperNotification
     * @param bool $allowsAdditionalShipperNotification
     * @param \Etrias\PaazlConnector\StructType\ServicePointsType $servicePoints
     * @param \Etrias\PaazlConnector\StructType\DeliveryDatesType $deliveryDates
     * @param string $shippingOption
     * @param \Etrias\PaazlConnector\StructType\ServicePointType[] $servicePoint
     */
    public function __construct($type = null, $description = null, $deliverySchemeLineId = null, $distributor = null, $partOfDay = null, $price = null, $priceDiscount = null, $deliveryDayOfWeekRange = null, \Etrias\PaazlConnector\StructType\Time $deliveryWindowStart = null, \Etrias\PaazlConnector\StructType\Time $deliveryWindowEnd = null, $datePreference = null, $cod = null, $insurance = null, $needsServicePointAccountNumber = null, $shipperNotification = null, $needsAdditionalShipperNotification = null, $allowsAdditionalShipperNotification = null, \Etrias\PaazlConnector\StructType\ServicePointsType $servicePoints = null, \Etrias\PaazlConnector\StructType\DeliveryDatesType $deliveryDates = null, $shippingOption = null, array $servicePoint = array())
    {
        $this
            ->setType($type)
            ->setDescription($description)
            ->setDeliverySchemeLineId($deliverySchemeLineId)
            ->setDistributor($distributor)
            ->setPartOfDay($partOfDay)
            ->setPrice($price)
            ->setPriceDiscount($priceDiscount)
            ->setDeliveryDayOfWeekRange($deliveryDayOfWeekRange)
            ->setDeliveryWindowStart($deliveryWindowStart)
            ->setDeliveryWindowEnd($deliveryWindowEnd)
            ->setDatePreference($datePreference)
            ->setCod($cod)
            ->setInsurance($insurance)
            ->setNeedsServicePointAccountNumber($needsServicePointAccountNumber)
            ->setShipperNotification($shipperNotification)
            ->setNeedsAdditionalShipperNotification($needsAdditionalShipperNotification)
            ->setAllowsAdditionalShipperNotification($allowsAdditionalShipperNotification)
            ->setServicePoints($servicePoints)
            ->setDeliveryDates($deliveryDates)
            ->setShippingOption($shippingOption)
            ->setServicePoint($servicePoint);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Etrias\PaazlConnector\StructType\ShippingOption
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Etrias\PaazlConnector\StructType\ShippingOption
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get deliverySchemeLineId value
     * @return int|null
     */
    public function getDeliverySchemeLineId()
    {
        return $this->deliverySchemeLineId;
    }
    /**
     * Set deliverySchemeLineId value
     * @param int $deliverySchemeLineId
     * @return \Etrias\PaazlConnector\StructType\ShippingOption
     */
    public function setDeliverySchemeLineId($deliverySchemeLineId = null)
    {
        // validation for constraint: int
        if (!is_null($deliverySchemeLineId) && !is_numeric($deliverySchemeLineId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($deliverySchemeLineId)), __LINE__);
        }
        $this->deliverySchemeLineId = $deliverySchemeLineId;
        return $this;
    }
    /**
     * Get distributor value
     * @return string|null
     */
    public function getDistributor()
    {
        return $this->distributor;
    }
    /**
     * Set distributor value
     * @param string $distributor
     * @return \Etrias\PaazlConnector\StructType\ShippingOption
     */
    public function setDistributor($distributor = null)
    {
        // validation for constraint: string
        if (!is_null($distributor) && !is_string($distributor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($distributor)), __LINE__);
        }
        $this->distributor = $distributor;
        return $this;
    }
    /**
     * Get partOfDay value
     * @return string|null
     */
    public function getPartOfDay()
    {
        return $this->partOfDay;
    }
    /**
     * Set partOfDay value
     * @uses \Etrias\PaazlConnector\EnumType\PartOfDayType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\PartOfDayType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $partOfDay
     * @return \Etrias\PaazlConnector\StructType\ShippingOption
     */
    public function setPartOfDay($partOfDay = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\PartOfDayType::valueIsValid($partOfDay)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $partOfDay, implode(', ', \Etrias\PaazlConnector\EnumType\PartOfDayType::getValidValues())), __LINE__);
        }
        $this->partOfDay = $partOfDay;
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Etrias\PaazlConnector\StructType\ShippingOption
     */
    public function setPrice($price = null)
    {
        $this->price = $price;
        return $this;
    }
    /**
     * Get priceDiscount value
     * @return float|null
     */
    public function getPriceDiscount()
    {
        return $this->priceDiscount;
    }
    /**
     * Set priceDiscount value
     * @param float $priceDiscount
     * @return \Etrias\PaazlConnector\StructType\ShippingOption
     */
    public function setPriceDiscount($priceDiscount = null)
    {
        $this->priceDiscount = $priceDiscount;
        return $this;
    }
    /**
     * Get deliveryDayOfWeekRange value
     * @return string|null
     */
    public function getDeliveryDayOfWeekRange()
    {
        return $this->deliveryDayOfWeekRange;
    }
    /**
     * Set deliveryDayOfWeekRange value
     * @uses \Etrias\PaazlConnector\EnumType\DayOfWeekRangeType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\DayOfWeekRangeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deliveryDayOfWeekRange
     * @return \Etrias\PaazlConnector\StructType\ShippingOption
     */
    public function setDeliveryDayOfWeekRange($deliveryDayOfWeekRange = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\DayOfWeekRangeType::valueIsValid($deliveryDayOfWeekRange)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deliveryDayOfWeekRange, implode(', ', \Etrias\PaazlConnector\EnumType\DayOfWeekRangeType::getValidValues())), __LINE__);
        }
        $this->deliveryDayOfWeekRange = $deliveryDayOfWeekRange;
        return $this;
    }
    /**
     * Get deliveryWindowStart value
     * @return \Etrias\PaazlConnector\StructType\Time|null
     */
    public function getDeliveryWindowStart()
    {
        return $this->deliveryWindowStart;
    }
    /**
     * Set deliveryWindowStart value
     * @param \Etrias\PaazlConnector\StructType\Time $deliveryWindowStart
     * @return \Etrias\PaazlConnector\StructType\ShippingOption
     */
    public function setDeliveryWindowStart(\Etrias\PaazlConnector\StructType\Time $deliveryWindowStart = null)
    {
        $this->deliveryWindowStart = $deliveryWindowStart;
        return $this;
    }
    /**
     * Get deliveryWindowEnd value
     * @return \Etrias\PaazlConnector\StructType\Time|null
     */
    public function getDeliveryWindowEnd()
    {
        return $this->deliveryWindowEnd;
    }
    /**
     * Set deliveryWindowEnd value
     * @param \Etrias\PaazlConnector\StructType\Time $deliveryWindowEnd
     * @return \Etrias\PaazlConnector\StructType\ShippingOption
     */
    public function setDeliveryWindowEnd(\Etrias\PaazlConnector\StructType\Time $deliveryWindowEnd = null)
    {
        $this->deliveryWindowEnd = $deliveryWindowEnd;
        return $this;
    }
    /**
     * Get datePreference value
     * @return bool|null
     */
    public function getDatePreference()
    {
        return $this->datePreference;
    }
    /**
     * Set datePreference value
     * @param bool $datePreference
     * @return \Etrias\PaazlConnector\StructType\ShippingOption
     */
    public function setDatePreference($datePreference = null)
    {
        // validation for constraint: boolean
        if (!is_null($datePreference) && !is_bool($datePreference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($datePreference)), __LINE__);
        }
        $this->datePreference = $datePreference;
        return $this;
    }
    /**
     * Get cod value
     * @return bool|null
     */
    public function getCod()
    {
        return $this->cod;
    }
    /**
     * Set cod value
     * @param bool $cod
     * @return \Etrias\PaazlConnector\StructType\ShippingOption
     */
    public function setCod($cod = null)
    {
        // validation for constraint: boolean
        if (!is_null($cod) && !is_bool($cod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($cod)), __LINE__);
        }
        $this->cod = $cod;
        return $this;
    }
    /**
     * Get insurance value
     * @return bool|null
     */
    public function getInsurance()
    {
        return $this->insurance;
    }
    /**
     * Set insurance value
     * @param bool $insurance
     * @return \Etrias\PaazlConnector\StructType\ShippingOption
     */
    public function setInsurance($insurance = null)
    {
        // validation for constraint: boolean
        if (!is_null($insurance) && !is_bool($insurance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($insurance)), __LINE__);
        }
        $this->insurance = $insurance;
        return $this;
    }
    /**
     * Get needsServicePointAccountNumber value
     * @return bool|null
     */
    public function getNeedsServicePointAccountNumber()
    {
        return $this->needsServicePointAccountNumber;
    }
    /**
     * Set needsServicePointAccountNumber value
     * @param bool $needsServicePointAccountNumber
     * @return \Etrias\PaazlConnector\StructType\ShippingOption
     */
    public function setNeedsServicePointAccountNumber($needsServicePointAccountNumber = null)
    {
        // validation for constraint: boolean
        if (!is_null($needsServicePointAccountNumber) && !is_bool($needsServicePointAccountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($needsServicePointAccountNumber)), __LINE__);
        }
        $this->needsServicePointAccountNumber = $needsServicePointAccountNumber;
        return $this;
    }
    /**
     * Get shipperNotification value
     * @return bool|null
     */
    public function getShipperNotification()
    {
        return $this->shipperNotification;
    }
    /**
     * Set shipperNotification value
     * @param bool $shipperNotification
     * @return \Etrias\PaazlConnector\StructType\ShippingOption
     */
    public function setShipperNotification($shipperNotification = null)
    {
        // validation for constraint: boolean
        if (!is_null($shipperNotification) && !is_bool($shipperNotification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($shipperNotification)), __LINE__);
        }
        $this->shipperNotification = $shipperNotification;
        return $this;
    }
    /**
     * Get needsAdditionalShipperNotification value
     * @return bool|null
     */
    public function getNeedsAdditionalShipperNotification()
    {
        return $this->needsAdditionalShipperNotification;
    }
    /**
     * Set needsAdditionalShipperNotification value
     * @param bool $needsAdditionalShipperNotification
     * @return \Etrias\PaazlConnector\StructType\ShippingOption
     */
    public function setNeedsAdditionalShipperNotification($needsAdditionalShipperNotification = null)
    {
        // validation for constraint: boolean
        if (!is_null($needsAdditionalShipperNotification) && !is_bool($needsAdditionalShipperNotification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($needsAdditionalShipperNotification)), __LINE__);
        }
        $this->needsAdditionalShipperNotification = $needsAdditionalShipperNotification;
        return $this;
    }
    /**
     * Get allowsAdditionalShipperNotification value
     * @return bool|null
     */
    public function getAllowsAdditionalShipperNotification()
    {
        return $this->allowsAdditionalShipperNotification;
    }
    /**
     * Set allowsAdditionalShipperNotification value
     * @param bool $allowsAdditionalShipperNotification
     * @return \Etrias\PaazlConnector\StructType\ShippingOption
     */
    public function setAllowsAdditionalShipperNotification($allowsAdditionalShipperNotification = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowsAdditionalShipperNotification) && !is_bool($allowsAdditionalShipperNotification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowsAdditionalShipperNotification)), __LINE__);
        }
        $this->allowsAdditionalShipperNotification = $allowsAdditionalShipperNotification;
        return $this;
    }
    /**
     * Get servicePoints value
     * @return \Etrias\PaazlConnector\StructType\ServicePointsType|null
     */
    public function getServicePoints()
    {
        return $this->servicePoints;
    }
    /**
     * Set servicePoints value
     * @param \Etrias\PaazlConnector\StructType\ServicePointsType $servicePoints
     * @return \Etrias\PaazlConnector\StructType\ShippingOption
     */
    public function setServicePoints(\Etrias\PaazlConnector\StructType\ServicePointsType $servicePoints = null)
    {
        $this->servicePoints = $servicePoints;
        return $this;
    }
    /**
     * Get deliveryDates value
     * @return \Etrias\PaazlConnector\StructType\DeliveryDatesType|null
     */
    public function getDeliveryDates()
    {
        return $this->deliveryDates;
    }
    /**
     * Set deliveryDates value
     * @param \Etrias\PaazlConnector\StructType\DeliveryDatesType $deliveryDates
     * @return \Etrias\PaazlConnector\StructType\ShippingOption
     */
    public function setDeliveryDates(\Etrias\PaazlConnector\StructType\DeliveryDatesType $deliveryDates = null)
    {
        $this->deliveryDates = $deliveryDates;
        return $this;
    }
    /**
     * Get shippingOption value
     * @return string|null
     */
    public function getShippingOption()
    {
        return $this->shippingOption;
    }
    /**
     * Set shippingOption value
     * @param string $shippingOption
     * @return \Etrias\PaazlConnector\StructType\ShippingOption
     */
    public function setShippingOption($shippingOption = null)
    {
        // validation for constraint: string
        if (!is_null($shippingOption) && !is_string($shippingOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingOption)), __LINE__);
        }
        $this->shippingOption = $shippingOption;
        return $this;
    }
    /**
     * Get servicePoint value
     * @return \Etrias\PaazlConnector\StructType\ServicePointType[]|null
     */
    public function getServicePoint()
    {
        return $this->servicePoint;
    }
    /**
     * Set servicePoint value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\ServicePointType[] $servicePoint
     * @return \Etrias\PaazlConnector\StructType\ShippingOption
     */
    public function setServicePoint(array $servicePoint = array())
    {
        foreach ($servicePoint as $shippingOptionServicePointItem) {
            // validation for constraint: itemType
            if (!$shippingOptionServicePointItem instanceof \Etrias\PaazlConnector\StructType\ServicePointType) {
                throw new \InvalidArgumentException(sprintf('The servicePoint property can only contain items of \Etrias\PaazlConnector\StructType\ServicePointType, "%s" given', is_object($shippingOptionServicePointItem) ? get_class($shippingOptionServicePointItem) : gettype($shippingOptionServicePointItem)), __LINE__);
            }
        }
        $this->servicePoint = $servicePoint;
        return $this;
    }
    /**
     * Add item to servicePoint value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\ServicePointType $item
     * @return \Etrias\PaazlConnector\StructType\ShippingOption
     */
    public function addToServicePoint(\Etrias\PaazlConnector\StructType\ServicePointType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\ServicePointType) {
            throw new \InvalidArgumentException(sprintf('The servicePoint property can only contain items of \Etrias\PaazlConnector\StructType\ServicePointType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->servicePoint[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ShippingOption
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
