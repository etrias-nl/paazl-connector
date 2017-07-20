<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for nonNegativeIntegerRangeType StructType
 * @subpackage Structs
 */
class NonNegativeIntegerRangeType extends AbstractStructBase
{
    /**
     * The lowerBound
     * @var int
     */
    public $lowerBound;
    /**
     * The upperBound
     * @var int
     */
    public $upperBound;
    /**
     * Constructor method for nonNegativeIntegerRangeType
     * @uses NonNegativeIntegerRangeType::setLowerBound()
     * @uses NonNegativeIntegerRangeType::setUpperBound()
     * @param int $lowerBound
     * @param int $upperBound
     */
    public function __construct($lowerBound = null, $upperBound = null)
    {
        $this
            ->setLowerBound($lowerBound)
            ->setUpperBound($upperBound);
    }
    /**
     * Get lowerBound value
     * @return int|null
     */
    public function getLowerBound()
    {
        return $this->lowerBound;
    }
    /**
     * Set lowerBound value
     * @param int $lowerBound
     * @return \Etrias\PaazlConnector\StructType\NonNegativeIntegerRangeType
     */
    public function setLowerBound($lowerBound = null)
    {
        // validation for constraint: int
        if (!is_null($lowerBound) && !is_numeric($lowerBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($lowerBound)), __LINE__);
        }
        $this->lowerBound = $lowerBound;
        return $this;
    }
    /**
     * Get upperBound value
     * @return int|null
     */
    public function getUpperBound()
    {
        return $this->upperBound;
    }
    /**
     * Set upperBound value
     * @param int $upperBound
     * @return \Etrias\PaazlConnector\StructType\NonNegativeIntegerRangeType
     */
    public function setUpperBound($upperBound = null)
    {
        // validation for constraint: int
        if (!is_null($upperBound) && !is_numeric($upperBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($upperBound)), __LINE__);
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
     * @return \Etrias\PaazlConnector\StructType\NonNegativeIntegerRangeType
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
