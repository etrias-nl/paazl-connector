<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for products StructType
 * @subpackage Structs
 */
class Products extends AbstractStructBase
{
    /**
     * The product
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Etrias\PaazlConnector\StructType\ProductType[]
     */
    public $product;
    /**
     * Constructor method for products
     * @uses Products::setProduct()
     * @param \Etrias\PaazlConnector\StructType\ProductType[] $product
     */
    public function __construct(array $product = array())
    {
        $this
            ->setProduct($product);
    }
    /**
     * Get product value
     * @return \Etrias\PaazlConnector\StructType\ProductType[]|null
     */
    public function getProduct()
    {
        return $this->product;
    }
    /**
     * Set product value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\ProductType[] $product
     * @return \Etrias\PaazlConnector\StructType\Products
     */
    public function setProduct(array $product = array())
    {
        foreach ($product as $productsProductItem) {
            // validation for constraint: itemType
            if (!$productsProductItem instanceof \Etrias\PaazlConnector\StructType\ProductType) {
                throw new \InvalidArgumentException(sprintf('The product property can only contain items of \Etrias\PaazlConnector\StructType\ProductType, "%s" given', is_object($productsProductItem) ? get_class($productsProductItem) : gettype($productsProductItem)), __LINE__);
            }
        }
        $this->product = $product;
        return $this;
    }
    /**
     * Add item to product value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\ProductType $item
     * @return \Etrias\PaazlConnector\StructType\Products
     */
    public function addToProduct(\Etrias\PaazlConnector\StructType\ProductType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\ProductType) {
            throw new \InvalidArgumentException(sprintf('The product property can only contain items of \Etrias\PaazlConnector\StructType\ProductType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->product[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\Products
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
