<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for stringRangeType StructType
 * @subpackage Structs
 */
class StringRangeType extends AbstractStructBase
{
    /**
     * The lowerBound
     * @var string
     */
    public $lowerBound;
    /**
     * The upperBound
     * @var string
     */
    public $upperBound;
    /**
     * Constructor method for stringRangeType
     * @uses StringRangeType::setLowerBound()
     * @uses StringRangeType::setUpperBound()
     * @param string $lowerBound
     * @param string $upperBound
     */
    public function __construct($lowerBound = null, $upperBound = null)
    {
        $this
            ->setLowerBound($lowerBound)
            ->setUpperBound($upperBound);
    }
    /**
     * Get lowerBound value
     * @return string|null
     */
    public function getLowerBound()
    {
        return $this->lowerBound;
    }
    /**
     * Set lowerBound value
     * @param string $lowerBound
     * @return \Etrias\PaazlConnector\StructType\StringRangeType
     */
    public function setLowerBound($lowerBound = null)
    {
        // validation for constraint: string
        if (!is_null($lowerBound) && !is_string($lowerBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lowerBound)), __LINE__);
        }
        $this->lowerBound = $lowerBound;
        return $this;
    }
    /**
     * Get upperBound value
     * @return string|null
     */
    public function getUpperBound()
    {
        return $this->upperBound;
    }
    /**
     * Set upperBound value
     * @param string $upperBound
     * @return \Etrias\PaazlConnector\StructType\StringRangeType
     */
    public function setUpperBound($upperBound = null)
    {
        // validation for constraint: string
        if (!is_null($upperBound) && !is_string($upperBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($upperBound)), __LINE__);
        }
        $this->upperBound = $upperBound;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\StringRangeType
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
