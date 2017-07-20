<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rate StructType
 * @subpackage Structs
 */
class Rate extends AbstractStructBase
{
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The distributor
     * @var string
     */
    public $distributor;
    /**
     * The shippingOption
     * @var string
     */
    public $shippingOption;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The rate
     * @var float
     */
    public $rate;
    /**
     * The rateDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $rateDiscount;
    /**
     * The transitDaysRange
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\NonNegativeIntegerRangeType
     */
    public $transitDaysRange;
    /**
     * Constructor method for rate
     * @uses Rate::setType()
     * @uses Rate::setDistributor()
     * @uses Rate::setShippingOption()
     * @uses Rate::setDescription()
     * @uses Rate::set0()
     * @uses Rate::setRateDiscount()
     * @uses Rate::setTransitDaysRange()
     * @param string $type
     * @param string $distributor
     * @param string $shippingOption
     * @param string $description
     * @param float $rate
     * @param float $rateDiscount
     * @param \Etrias\PaazlConnector\StructType\NonNegativeIntegerRangeType $transitDaysRange
     */
    public function __construct($type = null, $distributor = null, $shippingOption = null, $description = null, $rate = null, $rateDiscount = null, \Etrias\PaazlConnector\StructType\NonNegativeIntegerRangeType $transitDaysRange = null)
    {
        $this
            ->setType($type)
            ->setDistributor($distributor)
            ->setShippingOption($shippingOption)
            ->setDescription($description)
            ->set0($rate)
            ->setRateDiscount($rateDiscount)
            ->setTransitDaysRange($transitDaysRange);
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
     * @uses \Etrias\PaazlConnector\EnumType\DeliveryTypeType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\DeliveryTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Etrias\PaazlConnector\StructType\Rate
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\DeliveryTypeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Etrias\PaazlConnector\EnumType\DeliveryTypeType::getValidValues())), __LINE__);
        }
        $this->type = $type;
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
     * @return \Etrias\PaazlConnector\StructType\Rate
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
     * @return \Etrias\PaazlConnector\StructType\Rate
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
     * @return \Etrias\PaazlConnector\StructType\Rate
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
     * Get 0 value
     * @return 0
     */
    public function get0()
    {
        return $this->rate;
    }
    /**
     * Set rate value
     * @param float $rate
     * @return \Etrias\PaazlConnector\StructType\Rate
     */
    public function set0($rate = null)
    {
        $this->rate = $rate;
        return $this;
    }
    /**
     * Get rateDiscount value
     * @return float|null
     */
    public function getRateDiscount()
    {
        return $this->rateDiscount;
    }
    /**
     * Set rateDiscount value
     * @param float $rateDiscount
     * @return \Etrias\PaazlConnector\StructType\Rate
     */
    public function setRateDiscount($rateDiscount = null)
    {
        $this->rateDiscount = $rateDiscount;
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
     * @return \Etrias\PaazlConnector\StructType\Rate
     */
    public function setTransitDaysRange(\Etrias\PaazlConnector\StructType\NonNegativeIntegerRangeType $transitDaysRange = null)
    {
        $this->transitDaysRange = $transitDaysRange;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\Rate
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
