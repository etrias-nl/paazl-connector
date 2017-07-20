<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for orderStatusContainerType StructType
 * @subpackage Structs
 */
class OrderStatusContainerType extends AbstractStructBase
{
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The shippingLabels
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\ShippingLabels
     */
    public $shippingLabels;
    /**
     * Constructor method for orderStatusContainerType
     * @uses OrderStatusContainerType::setStatus()
     * @uses OrderStatusContainerType::setShippingLabels()
     * @param string $status
     * @param \Etrias\PaazlConnector\StructType\ShippingLabels $shippingLabels
     */
    public function __construct($status = null, \Etrias\PaazlConnector\StructType\ShippingLabels $shippingLabels = null)
    {
        $this
            ->setStatus($status)
            ->setShippingLabels($shippingLabels);
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @uses \Etrias\PaazlConnector\EnumType\OrderStatusType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\OrderStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Etrias\PaazlConnector\StructType\OrderStatusContainerType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\OrderStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Etrias\PaazlConnector\EnumType\OrderStatusType::getValidValues())), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get shippingLabels value
     * @return \Etrias\PaazlConnector\StructType\ShippingLabels|null
     */
    public function getShippingLabels()
    {
        return $this->shippingLabels;
    }
    /**
     * Set shippingLabels value
     * @param \Etrias\PaazlConnector\StructType\ShippingLabels $shippingLabels
     * @return \Etrias\PaazlConnector\StructType\OrderStatusContainerType
     */
    public function setShippingLabels(\Etrias\PaazlConnector\StructType\ShippingLabels $shippingLabels = null)
    {
        $this->shippingLabels = $shippingLabels;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\OrderStatusContainerType
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
