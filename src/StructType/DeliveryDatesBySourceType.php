<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deliveryDatesBySourceType StructType
 * @subpackage Structs
 */
class DeliveryDatesBySourceType extends AbstractStructBase
{
    /**
     * The source
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\Source
     */
    public $source;
    /**
     * The deliveryDates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\DeliveryDatesType
     */
    public $deliveryDates;
    /**
     * Constructor method for deliveryDatesBySourceType
     * @uses DeliveryDatesBySourceType::setSource()
     * @uses DeliveryDatesBySourceType::setDeliveryDates()
     * @param \Etrias\PaazlConnector\StructType\Source $source
     * @param \Etrias\PaazlConnector\StructType\DeliveryDatesType $deliveryDates
     */
    public function __construct(\Etrias\PaazlConnector\StructType\Source $source = null, \Etrias\PaazlConnector\StructType\DeliveryDatesType $deliveryDates = null)
    {
        $this
            ->setSource($source)
            ->setDeliveryDates($deliveryDates);
    }
    /**
     * Get source value
     * @return \Etrias\PaazlConnector\StructType\Source|null
     */
    public function getSource()
    {
        return $this->source;
    }
    /**
     * Set source value
     * @param \Etrias\PaazlConnector\StructType\Source $source
     * @return \Etrias\PaazlConnector\StructType\DeliveryDatesBySourceType
     */
    public function setSource(\Etrias\PaazlConnector\StructType\Source $source = null)
    {
        $this->source = $source;
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
     * @return \Etrias\PaazlConnector\StructType\DeliveryDatesBySourceType
     */
    public function setDeliveryDates(\Etrias\PaazlConnector\StructType\DeliveryDatesType $deliveryDates = null)
    {
        $this->deliveryDates = $deliveryDates;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\DeliveryDatesBySourceType
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
