<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateReturnLabelsType StructType
 * @subpackage Structs
 */
class GenerateReturnLabelsType extends AbstractStructBase
{
    /**
     * The webshop
     * @var int
     */
    public $webshop;
    /**
     * The order
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Etrias\PaazlConnector\StructType\ReturnLabelsOrderType[]
     */
    public $order;
    /**
     * Constructor method for generateReturnLabelsType
     * @uses GenerateReturnLabelsType::setWebshop()
     * @uses GenerateReturnLabelsType::setOrder()
     * @param int $webshop
     * @param \Etrias\PaazlConnector\StructType\ReturnLabelsOrderType[] $order
     */
    public function __construct($webshop = null, array $order = array())
    {
        $this
            ->setWebshop($webshop)
            ->setOrder($order);
    }
    /**
     * Get webshop value
     * @return int|null
     */
    public function getWebshop()
    {
        return $this->webshop;
    }
    /**
     * Set webshop value
     * @param int $webshop
     * @return \Etrias\PaazlConnector\StructType\GenerateReturnLabelsType
     */
    public function setWebshop($webshop = null)
    {
        // validation for constraint: int
        if (!is_null($webshop) && !is_numeric($webshop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($webshop)), __LINE__);
        }
        $this->webshop = $webshop;
        return $this;
    }
    /**
     * Get order value
     * @return \Etrias\PaazlConnector\StructType\ReturnLabelsOrderType[]|null
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * Set order value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\ReturnLabelsOrderType[] $order
     * @return \Etrias\PaazlConnector\StructType\GenerateReturnLabelsType
     */
    public function setOrder(array $order = array())
    {
        foreach ($order as $generateReturnLabelsTypeOrderItem) {
            // validation for constraint: itemType
            if (!$generateReturnLabelsTypeOrderItem instanceof \Etrias\PaazlConnector\StructType\ReturnLabelsOrderType) {
                throw new \InvalidArgumentException(sprintf('The order property can only contain items of \Etrias\PaazlConnector\StructType\ReturnLabelsOrderType, "%s" given', is_object($generateReturnLabelsTypeOrderItem) ? get_class($generateReturnLabelsTypeOrderItem) : gettype($generateReturnLabelsTypeOrderItem)), __LINE__);
            }
        }
        $this->order = $order;
        return $this;
    }
    /**
     * Add item to order value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\ReturnLabelsOrderType $item
     * @return \Etrias\PaazlConnector\StructType\GenerateReturnLabelsType
     */
    public function addToOrder(\Etrias\PaazlConnector\StructType\ReturnLabelsOrderType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\ReturnLabelsOrderType) {
            throw new \InvalidArgumentException(sprintf('The order property can only contain items of \Etrias\PaazlConnector\StructType\ReturnLabelsOrderType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->order[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\GenerateReturnLabelsType
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