<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for changeProducts StructType
 * @subpackage Structs
 */
class ChangeProducts extends AbstractStructBase
{
    /**
     * The product
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\Product[]
     */
    public $product;
    /**
     * The mode
     * @var string
     */
    public $mode;
    /**
     * Constructor method for changeProducts
     * @uses ChangeProducts::setProduct()
     * @uses ChangeProducts::setMode()
     * @param \Etrias\PaazlConnector\StructType\Product[] $product
     * @param string $mode
     */
    public function __construct(array $product = array(), $mode = null)
    {
        $this
            ->setProduct($product)
            ->setMode($mode);
    }
    /**
     * Get product value
     * @return \Etrias\PaazlConnector\StructType\Product[]|null
     */
    public function getProduct()
    {
        return $this->product;
    }
    /**
     * Set product value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\Product[] $product
     * @return \Etrias\PaazlConnector\StructType\ChangeProducts
     */
    public function setProduct(array $product = array())
    {
        foreach ($product as $changeProductsProductItem) {
            // validation for constraint: itemType
            if (!$changeProductsProductItem instanceof \Etrias\PaazlConnector\StructType\Product) {
                throw new \InvalidArgumentException(sprintf('The product property can only contain items of \Etrias\PaazlConnector\StructType\Product, "%s" given', is_object($changeProductsProductItem) ? get_class($changeProductsProductItem) : gettype($changeProductsProductItem)), __LINE__);
            }
        }
        $this->product = $product;
        return $this;
    }
    /**
     * Add item to product value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\Product $item
     * @return \Etrias\PaazlConnector\StructType\ChangeProducts
     */
    public function addToProduct(\Etrias\PaazlConnector\StructType\Product $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\Product) {
            throw new \InvalidArgumentException(sprintf('The product property can only contain items of \Etrias\PaazlConnector\StructType\Product, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->product[] = $item;
        return $this;
    }
    /**
     * Get mode value
     * @return string|null
     */
    public function getMode()
    {
        return $this->mode;
    }
    /**
     * Set mode value
     * @uses \Etrias\PaazlConnector\EnumType\ChangeProductsModeType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\ChangeProductsModeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mode
     * @return \Etrias\PaazlConnector\StructType\ChangeProducts
     */
    public function setMode($mode = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\ChangeProductsModeType::valueIsValid($mode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mode, implode(', ', \Etrias\PaazlConnector\EnumType\ChangeProductsModeType::getValidValues())), __LINE__);
        }
        $this->mode = $mode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ChangeProducts
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
