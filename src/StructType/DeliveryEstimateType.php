<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deliveryEstimateType StructType
 * @subpackage Structs
 */
class DeliveryEstimateType extends AbstractStructBase
{
    /**
     * The shippingOption
     * @var string
     */
    public $shippingOption;
    /**
     * The distributor
     * @var string
     */
    public $distributor;
    /**
     * The destination
     * @var \Etrias\PaazlConnector\StructType\DeliveryEstimateDestination
     */
    public $destination;
    /**
     * The expectedDeliveryDateFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $expectedDeliveryDateFrom;
    /**
     * The expectedDeliveryDate
     * @var string
     */
    public $expectedDeliveryDate;
    /**
     * The transitDays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $transitDays;
    /**
     * The guarantee
     * @var bool
     */
    public $guarantee;
    /**
     * Constructor method for deliveryEstimateType
     * @uses DeliveryEstimateType::setShippingOption()
     * @uses DeliveryEstimateType::setDistributor()
     * @uses DeliveryEstimateType::setDestination()
     * @uses DeliveryEstimateType::setExpectedDeliveryDateFrom()
     * @uses DeliveryEstimateType::setExpectedDeliveryDate()
     * @uses DeliveryEstimateType::setTransitDays()
     * @uses DeliveryEstimateType::setGuarantee()
     * @param string $shippingOption
     * @param string $distributor
     * @param \Etrias\PaazlConnector\StructType\DeliveryEstimateDestination $destination
     * @param string $expectedDeliveryDateFrom
     * @param string $expectedDeliveryDate
     * @param int $transitDays
     * @param bool $guarantee
     */
    public function __construct($shippingOption = null, $distributor = null, \Etrias\PaazlConnector\StructType\DeliveryEstimateDestination $destination = null, $expectedDeliveryDateFrom = null, $expectedDeliveryDate = null, $transitDays = null, $guarantee = null)
    {
        $this
            ->setShippingOption($shippingOption)
            ->setDistributor($distributor)
            ->setDestination($destination)
            ->setExpectedDeliveryDateFrom($expectedDeliveryDateFrom)
            ->setExpectedDeliveryDate($expectedDeliveryDate)
            ->setTransitDays($transitDays)
            ->setGuarantee($guarantee);
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
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateType
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
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateType
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
     * Get destination value
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateDestination|null
     */
    public function getDestination()
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param \Etrias\PaazlConnector\StructType\DeliveryEstimateDestination $destination
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateType
     */
    public function setDestination(\Etrias\PaazlConnector\StructType\DeliveryEstimateDestination $destination = null)
    {
        $this->destination = $destination;
        return $this;
    }
    /**
     * Get expectedDeliveryDateFrom value
     * @return string|null
     */
    public function getExpectedDeliveryDateFrom()
    {
        return $this->expectedDeliveryDateFrom;
    }
    /**
     * Set expectedDeliveryDateFrom value
     * @param string $expectedDeliveryDateFrom
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateType
     */
    public function setExpectedDeliveryDateFrom($expectedDeliveryDateFrom = null)
    {
        // validation for constraint: string
        if (!is_null($expectedDeliveryDateFrom) && !is_string($expectedDeliveryDateFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expectedDeliveryDateFrom)), __LINE__);
        }
        $this->expectedDeliveryDateFrom = $expectedDeliveryDateFrom;
        return $this;
    }
    /**
     * Get expectedDeliveryDate value
     * @return string|null
     */
    public function getExpectedDeliveryDate()
    {
        return $this->expectedDeliveryDate;
    }
    /**
     * Set expectedDeliveryDate value
     * @param string $expectedDeliveryDate
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateType
     */
    public function setExpectedDeliveryDate($expectedDeliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($expectedDeliveryDate) && !is_string($expectedDeliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expectedDeliveryDate)), __LINE__);
        }
        $this->expectedDeliveryDate = $expectedDeliveryDate;
        return $this;
    }
    /**
     * Get transitDays value
     * @return int|null
     */
    public function getTransitDays()
    {
        return $this->transitDays;
    }
    /**
     * Set transitDays value
     * @param int $transitDays
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateType
     */
    public function setTransitDays($transitDays = null)
    {
        // validation for constraint: int
        if (!is_null($transitDays) && !is_numeric($transitDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($transitDays)), __LINE__);
        }
        $this->transitDays = $transitDays;
        return $this;
    }
    /**
     * Get guarantee value
     * @return bool|null
     */
    public function getGuarantee()
    {
        return $this->guarantee;
    }
    /**
     * Set guarantee value
     * @param bool $guarantee
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateType
     */
    public function setGuarantee($guarantee = null)
    {
        // validation for constraint: boolean
        if (!is_null($guarantee) && !is_bool($guarantee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($guarantee)), __LINE__);
        }
        $this->guarantee = $guarantee;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateType
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
