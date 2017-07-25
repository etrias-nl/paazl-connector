<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for openOrClosedTimeRangeType StructType
 * @subpackage Structs
 */
class OpenOrClosedTimeRangeType extends AbstractStructBase
{
    /**
     * The lowerBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\Time
     */
    public $lowerBound;
    /**
     * The upperBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\Time
     */
    public $upperBound;
    /**
     * Constructor method for openOrClosedTimeRangeType
     * @uses OpenOrClosedTimeRangeType::setLowerBound()
     * @uses OpenOrClosedTimeRangeType::setUpperBound()
     * @param \Etrias\PaazlConnector\StructType\Time $lowerBound
     * @param \Etrias\PaazlConnector\StructType\Time $upperBound
     */
    public function __construct(\Etrias\PaazlConnector\StructType\Time $lowerBound = null, \Etrias\PaazlConnector\StructType\Time $upperBound = null)
    {
        $this
            ->setLowerBound($lowerBound)
            ->setUpperBound($upperBound);
    }
    /**
     * Get lowerBound value
     * @return \Etrias\PaazlConnector\StructType\Time|null
     */
    public function getLowerBound()
    {
        return $this->lowerBound;
    }
    /**
     * Set lowerBound value
     * @param \Etrias\PaazlConnector\StructType\Time $lowerBound
     * @return \Etrias\PaazlConnector\StructType\OpenOrClosedTimeRangeType
     */
    public function setLowerBound(\Etrias\PaazlConnector\StructType\Time $lowerBound = null)
    {
        $this->lowerBound = $lowerBound;
        return $this;
    }
    /**
     * Get upperBound value
     * @return \Etrias\PaazlConnector\StructType\Time|null
     */
    public function getUpperBound()
    {
        return $this->upperBound;
    }
    /**
     * Set upperBound value
     * @param \Etrias\PaazlConnector\StructType\Time $upperBound
     * @return \Etrias\PaazlConnector\StructType\OpenOrClosedTimeRangeType
     */
    public function setUpperBound(\Etrias\PaazlConnector\StructType\Time $upperBound = null)
    {
        $this->upperBound = $upperBound;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\OpenOrClosedTimeRangeType
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