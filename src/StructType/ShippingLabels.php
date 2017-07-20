<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingLabels StructType
 * @subpackage Structs
 */
class ShippingLabels extends AbstractStructBase
{
    /**
     * The shippingLabel
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\ShippingLabel[]
     */
    public $shippingLabel;
    /**
     * Constructor method for shippingLabels
     * @uses ShippingLabels::setShippingLabel()
     * @param \Etrias\PaazlConnector\StructType\ShippingLabel[] $shippingLabel
     */
    public function __construct(array $shippingLabel = array())
    {
        $this
            ->setShippingLabel($shippingLabel);
    }
    /**
     * Get shippingLabel value
     * @return \Etrias\PaazlConnector\StructType\ShippingLabel[]|null
     */
    public function getShippingLabel()
    {
        return $this->shippingLabel;
    }
    /**
     * Set shippingLabel value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\ShippingLabel[] $shippingLabel
     * @return \Etrias\PaazlConnector\StructType\ShippingLabels
     */
    public function setShippingLabel(array $shippingLabel = array())
    {
        foreach ($shippingLabel as $shippingLabelsShippingLabelItem) {
            // validation for constraint: itemType
            if (!$shippingLabelsShippingLabelItem instanceof \Etrias\PaazlConnector\StructType\ShippingLabel) {
                throw new \InvalidArgumentException(sprintf('The shippingLabel property can only contain items of \Etrias\PaazlConnector\StructType\ShippingLabel, "%s" given', is_object($shippingLabelsShippingLabelItem) ? get_class($shippingLabelsShippingLabelItem) : gettype($shippingLabelsShippingLabelItem)), __LINE__);
            }
        }
        $this->shippingLabel = $shippingLabel;
        return $this;
    }
    /**
     * Add item to shippingLabel value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\ShippingLabel $item
     * @return \Etrias\PaazlConnector\StructType\ShippingLabels
     */
    public function addToShippingLabel(\Etrias\PaazlConnector\StructType\ShippingLabel $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\ShippingLabel) {
            throw new \InvalidArgumentException(sprintf('The shippingLabel property can only contain items of \Etrias\PaazlConnector\StructType\ShippingLabel, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->shippingLabel[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ShippingLabels
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
