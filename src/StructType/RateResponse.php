<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rateResponse StructType
 * @subpackage Structs
 */
class RateResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The rate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Etrias\PaazlConnector\StructType\Rate[]
     */
    public $rate;
    /**
     * Constructor method for rateResponse
     * @uses RateResponse::setError()
     * @uses RateResponse::setRate()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param \Etrias\PaazlConnector\StructType\Rate[] $rate
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, array $rate = array())
    {
        $this
            ->setError($error)
            ->setRate($rate);
    }
    /**
     * Get error value
     * @return \Etrias\PaazlConnector\StructType\ErrorType|null
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @return \Etrias\PaazlConnector\StructType\RateResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get rate value
     * @return \Etrias\PaazlConnector\StructType\Rate[]|null
     */
    public function getRate()
    {
        return $this->rate;
    }
    /**
     * Set rate value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\Rate[] $rate
     * @return \Etrias\PaazlConnector\StructType\RateResponse
     */
    public function setRate(array $rate = array())
    {
        foreach ($rate as $rateResponseRateItem) {
            // validation for constraint: itemType
            if (!$rateResponseRateItem instanceof \Etrias\PaazlConnector\StructType\Rate) {
                throw new \InvalidArgumentException(sprintf('The rate property can only contain items of \Etrias\PaazlConnector\StructType\Rate, "%s" given', is_object($rateResponseRateItem) ? get_class($rateResponseRateItem) : gettype($rateResponseRateItem)), __LINE__);
            }
        }
        $this->rate = $rate;
        return $this;
    }
    /**
     * Add item to rate value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\Rate $item
     * @return \Etrias\PaazlConnector\StructType\RateResponse
     */
    public function addToRate(\Etrias\PaazlConnector\StructType\Rate $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\Rate) {
            throw new \InvalidArgumentException(sprintf('The rate property can only contain items of \Etrias\PaazlConnector\StructType\Rate, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->rate[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\RateResponse
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
