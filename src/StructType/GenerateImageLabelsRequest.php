<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateImageLabelsRequest StructType
 * @subpackage Structs
 */
class GenerateImageLabelsRequest extends AbstractStructBase
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
     * @var \Etrias\PaazlConnector\StructType\OrderType[]
     */
    public $order;
    /**
     * The includeMetaData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $includeMetaData;
    /**
     * Constructor method for generateImageLabelsRequest
     * @uses GenerateImageLabelsRequest::setWebshop()
     * @uses GenerateImageLabelsRequest::setOrder()
     * @uses GenerateImageLabelsRequest::setIncludeMetaData()
     * @param int $webshop
     * @param \Etrias\PaazlConnector\StructType\OrderType[] $order
     * @param bool $includeMetaData
     */
    public function __construct($webshop = null, array $order = array(), $includeMetaData = null)
    {
        $this
            ->setWebshop($webshop)
            ->setOrder($order)
            ->setIncludeMetaData($includeMetaData);
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
     * @return \Etrias\PaazlConnector\StructType\GenerateImageLabelsRequest
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
     * @return \Etrias\PaazlConnector\StructType\OrderType[]|null
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * Set order value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\OrderType[] $order
     * @return \Etrias\PaazlConnector\StructType\GenerateImageLabelsRequest
     */
    public function setOrder(array $order = array())
    {
        foreach ($order as $generateImageLabelsRequestOrderItem) {
            // validation for constraint: itemType
            if (!$generateImageLabelsRequestOrderItem instanceof \Etrias\PaazlConnector\StructType\OrderType) {
                throw new \InvalidArgumentException(sprintf('The order property can only contain items of \Etrias\PaazlConnector\StructType\OrderType, "%s" given', is_object($generateImageLabelsRequestOrderItem) ? get_class($generateImageLabelsRequestOrderItem) : gettype($generateImageLabelsRequestOrderItem)), __LINE__);
            }
        }
        $this->order = $order;
        return $this;
    }
    /**
     * Add item to order value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\OrderType $item
     * @return \Etrias\PaazlConnector\StructType\GenerateImageLabelsRequest
     */
    public function addToOrder(\Etrias\PaazlConnector\StructType\OrderType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\OrderType) {
            throw new \InvalidArgumentException(sprintf('The order property can only contain items of \Etrias\PaazlConnector\StructType\OrderType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->order[] = $item;
        return $this;
    }
    /**
     * Get includeMetaData value
     * @return bool|null
     */
    public function getIncludeMetaData()
    {
        return $this->includeMetaData;
    }
    /**
     * Set includeMetaData value
     * @param bool $includeMetaData
     * @return \Etrias\PaazlConnector\StructType\GenerateImageLabelsRequest
     */
    public function setIncludeMetaData($includeMetaData = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeMetaData) && !is_bool($includeMetaData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeMetaData)), __LINE__);
        }
        $this->includeMetaData = $includeMetaData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\GenerateImageLabelsRequest
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
