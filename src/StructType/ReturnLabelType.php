<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for returnLabelType StructType
 * @subpackage Structs
 */
class ReturnLabelType extends LabelType
{
    /**
     * The _
     * @var \Etrias\PaazlConnector\StructType\LabelType
     */
    public $_;
    /**
     * The returnOrderReference
     * @var string
     */
    public $returnOrderReference;
    /**
     * Constructor method for returnLabelType
     * @uses ReturnLabelType::set_()
     * @uses ReturnLabelType::setReturnOrderReference()
     * @param \Etrias\PaazlConnector\StructType\LabelType $_
     * @param string $returnOrderReference
     */
    public function __construct(\Etrias\PaazlConnector\StructType\LabelType $_ = null, $returnOrderReference = null)
    {
        $this
            ->set_($_)
            ->setReturnOrderReference($returnOrderReference);
    }
    /**
     * Get _ value
     * @return \Etrias\PaazlConnector\StructType\LabelType|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param \Etrias\PaazlConnector\StructType\LabelType $_
     * @return \Etrias\PaazlConnector\StructType\ReturnLabelType
     */
    public function set_(\Etrias\PaazlConnector\StructType\LabelType $_ = null)
    {
        $this->_ = $_;
        return $this;
    }
    /**
     * Get returnOrderReference value
     * @return string|null
     */
    public function getReturnOrderReference()
    {
        return $this->returnOrderReference;
    }
    /**
     * Set returnOrderReference value
     * @param string $returnOrderReference
     * @return \Etrias\PaazlConnector\StructType\ReturnLabelType
     */
    public function setReturnOrderReference($returnOrderReference = null)
    {
        // validation for constraint: string
        if (!is_null($returnOrderReference) && !is_string($returnOrderReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnOrderReference)), __LINE__);
        }
        $this->returnOrderReference = $returnOrderReference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ReturnLabelType
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
