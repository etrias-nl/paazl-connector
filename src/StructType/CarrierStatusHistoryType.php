<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for carrierStatusHistoryType StructType
 * @subpackage Structs
 */
class CarrierStatusHistoryType extends AbstractStructBase
{
    /**
     * The current
     * @var \Etrias\PaazlConnector\StructType\CarrierStatusType
     */
    public $current;
    /**
     * The history
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\History
     */
    public $history;
    /**
     * Constructor method for carrierStatusHistoryType
     * @uses CarrierStatusHistoryType::setCurrent()
     * @uses CarrierStatusHistoryType::setHistory()
     * @param \Etrias\PaazlConnector\StructType\CarrierStatusType $current
     * @param \Etrias\PaazlConnector\StructType\History $history
     */
    public function __construct(\Etrias\PaazlConnector\StructType\CarrierStatusType $current = null, \Etrias\PaazlConnector\StructType\History $history = null)
    {
        $this
            ->setCurrent($current)
            ->setHistory($history);
    }
    /**
     * Get current value
     * @return \Etrias\PaazlConnector\StructType\CarrierStatusType|null
     */
    public function getCurrent()
    {
        return $this->current;
    }
    /**
     * Set current value
     * @param \Etrias\PaazlConnector\StructType\CarrierStatusType $current
     * @return \Etrias\PaazlConnector\StructType\CarrierStatusHistoryType
     */
    public function setCurrent(\Etrias\PaazlConnector\StructType\CarrierStatusType $current = null)
    {
        $this->current = $current;
        return $this;
    }
    /**
     * Get history value
     * @return \Etrias\PaazlConnector\StructType\History|null
     */
    public function getHistory()
    {
        return $this->history;
    }
    /**
     * Set history value
     * @param \Etrias\PaazlConnector\StructType\History $history
     * @return \Etrias\PaazlConnector\StructType\CarrierStatusHistoryType
     */
    public function setHistory(\Etrias\PaazlConnector\StructType\History $history = null)
    {
        $this->history = $history;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\CarrierStatusHistoryType
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
