<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for delivery StructType
 * @subpackage Structs
 */
class Delivery extends AbstractStructBase
{
    /**
     * The deliveryType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $deliveryType;
    /**
     * The option
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $option;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $description;
    /**
     * The rate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $rate;
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
     * The signatureRequired
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $signatureRequired;
    /**
     * The directDeliveryOnly
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $directDeliveryOnly;
    /**
     * The servicePointBasePostalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $servicePointBasePostalCode;
    /**
     * The servicePointBaseCity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $servicePointBaseCity;
    /**
     * The servicePoint
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\ServicePointType
     */
    public $servicePoint;
    /**
     * The servicePointAccountNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $servicePointAccountNumber;
    /**
     * The preferredDeliveryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $preferredDeliveryDate;
    /**
     * The timeFrame
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\OpenOrClosedTimeRangeType
     */
    public $timeFrame;
    /**
     * The transitDaysRange
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\NonNegativeIntegerRangeType
     */
    public $transitDaysRange;
    /**
     * The preferredDateChosen
     * Meta informations extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool
     */
    public $preferredDateChosen;
    /**
     * Constructor method for delivery
     * @uses Delivery::setDeliveryType()
     * @uses Delivery::setOption()
     * @uses Delivery::setDescription()
     * @uses Delivery::setRate()
     * @uses Delivery::setCod()
     * @uses Delivery::setInsurance()
     * @uses Delivery::setSignatureRequired()
     * @uses Delivery::setDirectDeliveryOnly()
     * @uses Delivery::setServicePointBasePostalCode()
     * @uses Delivery::setServicePointBaseCity()
     * @uses Delivery::setServicePoint()
     * @uses Delivery::setServicePointAccountNumber()
     * @uses Delivery::setPreferredDeliveryDate()
     * @uses Delivery::setTimeFrame()
     * @uses Delivery::setTransitDaysRange()
     * @uses Delivery::setPreferredDateChosen()
     * @param string $deliveryType
     * @param string $option
     * @param string $description
     * @param float $rate
     * @param bool $cod
     * @param bool $insurance
     * @param bool $signatureRequired
     * @param bool $directDeliveryOnly
     * @param string $servicePointBasePostalCode
     * @param string $servicePointBaseCity
     * @param \Etrias\PaazlConnector\StructType\ServicePointType $servicePoint
     * @param string $servicePointAccountNumber
     * @param string $preferredDeliveryDate
     * @param \Etrias\PaazlConnector\StructType\OpenOrClosedTimeRangeType $timeFrame
     * @param \Etrias\PaazlConnector\StructType\NonNegativeIntegerRangeType $transitDaysRange
     * @param bool $preferredDateChosen
     */
    public function __construct($deliveryType = null, $option = null, $description = null, $rate = null, $cod = null, $insurance = null, $signatureRequired = null, $directDeliveryOnly = null, $servicePointBasePostalCode = null, $servicePointBaseCity = null, \Etrias\PaazlConnector\StructType\ServicePointType $servicePoint = null, $servicePointAccountNumber = null, $preferredDeliveryDate = null, \Etrias\PaazlConnector\StructType\OpenOrClosedTimeRangeType $timeFrame = null, \Etrias\PaazlConnector\StructType\NonNegativeIntegerRangeType $transitDaysRange = null, $preferredDateChosen = false)
    {
        $this
            ->setDeliveryType($deliveryType)
            ->setOption($option)
            ->setDescription($description)
            ->setRate($rate)
            ->setCod($cod)
            ->setInsurance($insurance)
            ->setSignatureRequired($signatureRequired)
            ->setDirectDeliveryOnly($directDeliveryOnly)
            ->setServicePointBasePostalCode($servicePointBasePostalCode)
            ->setServicePointBaseCity($servicePointBaseCity)
            ->setServicePoint($servicePoint)
            ->setServicePointAccountNumber($servicePointAccountNumber)
            ->setPreferredDeliveryDate($preferredDeliveryDate)
            ->setTimeFrame($timeFrame)
            ->setTransitDaysRange($transitDaysRange)
            ->setPreferredDateChosen($preferredDateChosen);
    }
    /**
     * Get deliveryType value
     * @return string|null
     */
    public function getDeliveryType()
    {
        return $this->deliveryType;
    }
    /**
     * Set deliveryType value
     * @uses \Etrias\PaazlConnector\EnumType\DeliveryTypeType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\DeliveryTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deliveryType
     * @return \Etrias\PaazlConnector\StructType\Delivery
     */
    public function setDeliveryType($deliveryType = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\DeliveryTypeType::valueIsValid($deliveryType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deliveryType, implode(', ', \Etrias\PaazlConnector\EnumType\DeliveryTypeType::getValidValues())), __LINE__);
        }
        $this->deliveryType = $deliveryType;
        return $this;
    }
    /**
     * Get option value
     * @return string|null
     */
    public function getOption()
    {
        return $this->option;
    }
    /**
     * Set option value
     * @param string $option
     * @return \Etrias\PaazlConnector\StructType\Delivery
     */
    public function setOption($option = null)
    {
        // validation for constraint: string
        if (!is_null($option) && !is_string($option)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($option)), __LINE__);
        }
        $this->option = $option;
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
     * @return \Etrias\PaazlConnector\StructType\Delivery
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
     * Get rate value
     * @return float|null
     */
    public function getRate()
    {
        return $this->rate;
    }
    /**
     * Set rate value
     * @param float $rate
     * @return \Etrias\PaazlConnector\StructType\Delivery
     */
    public function setRate($rate = null)
    {
        $this->rate = $rate;
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
     * @return \Etrias\PaazlConnector\StructType\Delivery
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
     * @return \Etrias\PaazlConnector\StructType\Delivery
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
     * Get signatureRequired value
     * @return bool|null
     */
    public function getSignatureRequired()
    {
        return $this->signatureRequired;
    }
    /**
     * Set signatureRequired value
     * @param bool $signatureRequired
     * @return \Etrias\PaazlConnector\StructType\Delivery
     */
    public function setSignatureRequired($signatureRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($signatureRequired) && !is_bool($signatureRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($signatureRequired)), __LINE__);
        }
        $this->signatureRequired = $signatureRequired;
        return $this;
    }
    /**
     * Get directDeliveryOnly value
     * @return bool|null
     */
    public function getDirectDeliveryOnly()
    {
        return $this->directDeliveryOnly;
    }
    /**
     * Set directDeliveryOnly value
     * @param bool $directDeliveryOnly
     * @return \Etrias\PaazlConnector\StructType\Delivery
     */
    public function setDirectDeliveryOnly($directDeliveryOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($directDeliveryOnly) && !is_bool($directDeliveryOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($directDeliveryOnly)), __LINE__);
        }
        $this->directDeliveryOnly = $directDeliveryOnly;
        return $this;
    }
    /**
     * Get servicePointBasePostalCode value
     * @return string|null
     */
    public function getServicePointBasePostalCode()
    {
        return $this->servicePointBasePostalCode;
    }
    /**
     * Set servicePointBasePostalCode value
     * @param string $servicePointBasePostalCode
     * @return \Etrias\PaazlConnector\StructType\Delivery
     */
    public function setServicePointBasePostalCode($servicePointBasePostalCode = null)
    {
        // validation for constraint: string
        if (!is_null($servicePointBasePostalCode) && !is_string($servicePointBasePostalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($servicePointBasePostalCode)), __LINE__);
        }
        $this->servicePointBasePostalCode = $servicePointBasePostalCode;
        return $this;
    }
    /**
     * Get servicePointBaseCity value
     * @return string|null
     */
    public function getServicePointBaseCity()
    {
        return $this->servicePointBaseCity;
    }
    /**
     * Set servicePointBaseCity value
     * @param string $servicePointBaseCity
     * @return \Etrias\PaazlConnector\StructType\Delivery
     */
    public function setServicePointBaseCity($servicePointBaseCity = null)
    {
        // validation for constraint: string
        if (!is_null($servicePointBaseCity) && !is_string($servicePointBaseCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($servicePointBaseCity)), __LINE__);
        }
        $this->servicePointBaseCity = $servicePointBaseCity;
        return $this;
    }
    /**
     * Get servicePoint value
     * @return \Etrias\PaazlConnector\StructType\ServicePointType|null
     */
    public function getServicePoint()
    {
        return $this->servicePoint;
    }
    /**
     * Set servicePoint value
     * @param \Etrias\PaazlConnector\StructType\ServicePointType $servicePoint
     * @return \Etrias\PaazlConnector\StructType\Delivery
     */
    public function setServicePoint(\Etrias\PaazlConnector\StructType\ServicePointType $servicePoint = null)
    {
        $this->servicePoint = $servicePoint;
        return $this;
    }
    /**
     * Get servicePointAccountNumber value
     * @return string|null
     */
    public function getServicePointAccountNumber()
    {
        return $this->servicePointAccountNumber;
    }
    /**
     * Set servicePointAccountNumber value
     * @param string $servicePointAccountNumber
     * @return \Etrias\PaazlConnector\StructType\Delivery
     */
    public function setServicePointAccountNumber($servicePointAccountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($servicePointAccountNumber) && !is_string($servicePointAccountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($servicePointAccountNumber)), __LINE__);
        }
        $this->servicePointAccountNumber = $servicePointAccountNumber;
        return $this;
    }
    /**
     * Get preferredDeliveryDate value
     * @return string|null
     */
    public function getPreferredDeliveryDate()
    {
        return $this->preferredDeliveryDate;
    }
    /**
     * Set preferredDeliveryDate value
     * @param string $preferredDeliveryDate
     * @return \Etrias\PaazlConnector\StructType\Delivery
     */
    public function setPreferredDeliveryDate($preferredDeliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($preferredDeliveryDate) && !is_string($preferredDeliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($preferredDeliveryDate)), __LINE__);
        }
        $this->preferredDeliveryDate = $preferredDeliveryDate;
        return $this;
    }
    /**
     * Get timeFrame value
     * @return \Etrias\PaazlConnector\StructType\OpenOrClosedTimeRangeType|null
     */
    public function getTimeFrame()
    {
        return $this->timeFrame;
    }
    /**
     * Set timeFrame value
     * @param \Etrias\PaazlConnector\StructType\OpenOrClosedTimeRangeType $timeFrame
     * @return \Etrias\PaazlConnector\StructType\Delivery
     */
    public function setTimeFrame(\Etrias\PaazlConnector\StructType\OpenOrClosedTimeRangeType $timeFrame = null)
    {
        $this->timeFrame = $timeFrame;
        return $this;
    }
    /**
     * Get transitDaysRange value
     * @return \Etrias\PaazlConnector\StructType\NonNegativeIntegerRangeType|null
     */
    public function getTransitDaysRange()
    {
        return $this->transitDaysRange;
    }
    /**
     * Set transitDaysRange value
     * @param \Etrias\PaazlConnector\StructType\NonNegativeIntegerRangeType $transitDaysRange
     * @return \Etrias\PaazlConnector\StructType\Delivery
     */
    public function setTransitDaysRange(\Etrias\PaazlConnector\StructType\NonNegativeIntegerRangeType $transitDaysRange = null)
    {
        $this->transitDaysRange = $transitDaysRange;
        return $this;
    }
    /**
     * Get preferredDateChosen value
     * @return bool|null
     */
    public function getPreferredDateChosen()
    {
        return $this->preferredDateChosen;
    }
    /**
     * Set preferredDateChosen value
     * @param bool $preferredDateChosen
     * @return \Etrias\PaazlConnector\StructType\Delivery
     */
    public function setPreferredDateChosen($preferredDateChosen = false)
    {
        // validation for constraint: boolean
        if (!is_null($preferredDateChosen) && !is_bool($preferredDateChosen)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($preferredDateChosen)), __LINE__);
        }
        $this->preferredDateChosen = $preferredDateChosen;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\Delivery
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
