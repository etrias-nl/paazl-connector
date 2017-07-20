<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateZplLabelsRequest StructType
 * @subpackage Structs
 */
class GenerateZplLabelsRequest extends AbstractStructBase
{
    /**
     * The webshop
     * @var int
     */
    public $webshop;
    /**
     * The printer
     * Meta informations extracted from the WSDL
     * - default: zebra
     * - minOccurs: 0
     * @var string
     */
    public $printer;
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
     * Constructor method for generateZplLabelsRequest
     * @uses GenerateZplLabelsRequest::setWebshop()
     * @uses GenerateZplLabelsRequest::setPrinter()
     * @uses GenerateZplLabelsRequest::setOrder()
     * @uses GenerateZplLabelsRequest::setIncludeMetaData()
     * @param int $webshop
     * @param string $printer
     * @param \Etrias\PaazlConnector\StructType\OrderType[] $order
     * @param bool $includeMetaData
     */
    public function __construct($webshop = null, $printer = 'zebra', array $order = array(), $includeMetaData = null)
    {
        $this
            ->setWebshop($webshop)
            ->setPrinter($printer)
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
     * @return \Etrias\PaazlConnector\StructType\GenerateZplLabelsRequest
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
     * Get printer value
     * @return string|null
     */
    public function getPrinter()
    {
        return $this->printer;
    }
    /**
     * Set printer value
     * @uses \Etrias\PaazlConnector\EnumType\PrinterType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\PrinterType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $printer
     * @return \Etrias\PaazlConnector\StructType\GenerateZplLabelsRequest
     */
    public function setPrinter($printer = 'zebra')
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\PrinterType::valueIsValid($printer)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $printer, implode(', ', \Etrias\PaazlConnector\EnumType\PrinterType::getValidValues())), __LINE__);
        }
        $this->printer = $printer;
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
     * @return \Etrias\PaazlConnector\StructType\GenerateZplLabelsRequest
     */
    public function setOrder(array $order = array())
    {
        foreach ($order as $generateZplLabelsRequestOrderItem) {
            // validation for constraint: itemType
            if (!$generateZplLabelsRequestOrderItem instanceof \Etrias\PaazlConnector\StructType\OrderType) {
                throw new \InvalidArgumentException(sprintf('The order property can only contain items of \Etrias\PaazlConnector\StructType\OrderType, "%s" given', is_object($generateZplLabelsRequestOrderItem) ? get_class($generateZplLabelsRequestOrderItem) : gettype($generateZplLabelsRequestOrderItem)), __LINE__);
            }
        }
        $this->order = $order;
        return $this;
    }
    /**
     * Add item to order value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\OrderType $item
     * @return \Etrias\PaazlConnector\StructType\GenerateZplLabelsRequest
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
     * @return \Etrias\PaazlConnector\StructType\GenerateZplLabelsRequest
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
     * @return \Etrias\PaazlConnector\StructType\GenerateZplLabelsRequest
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
