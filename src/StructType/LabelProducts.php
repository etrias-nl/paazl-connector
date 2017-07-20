<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for labelProducts StructType
 * @subpackage Structs
 */
class LabelProducts extends AbstractStructBase
{
    /**
     * The labelProduct
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\LabelProduct[]
     */
    public $labelProduct;
    /**
     * The mode
     * @var string
     */
    public $mode;
    /**
     * Constructor method for labelProducts
     * @uses LabelProducts::setLabelProduct()
     * @uses LabelProducts::setMode()
     * @param \Etrias\PaazlConnector\StructType\LabelProduct[] $labelProduct
     * @param string $mode
     */
    public function __construct(array $labelProduct = array(), $mode = null)
    {
        $this
            ->setLabelProduct($labelProduct)
            ->setMode($mode);
    }
    /**
     * Get labelProduct value
     * @return \Etrias\PaazlConnector\StructType\LabelProduct[]|null
     */
    public function getLabelProduct()
    {
        return $this->labelProduct;
    }
    /**
     * Set labelProduct value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\LabelProduct[] $labelProduct
     * @return \Etrias\PaazlConnector\StructType\LabelProducts
     */
    public function setLabelProduct(array $labelProduct = array())
    {
        foreach ($labelProduct as $labelProductsLabelProductItem) {
            // validation for constraint: itemType
            if (!$labelProductsLabelProductItem instanceof \Etrias\PaazlConnector\StructType\LabelProduct) {
                throw new \InvalidArgumentException(sprintf('The labelProduct property can only contain items of \Etrias\PaazlConnector\StructType\LabelProduct, "%s" given', is_object($labelProductsLabelProductItem) ? get_class($labelProductsLabelProductItem) : gettype($labelProductsLabelProductItem)), __LINE__);
            }
        }
        $this->labelProduct = $labelProduct;
        return $this;
    }
    /**
     * Add item to labelProduct value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\LabelProduct $item
     * @return \Etrias\PaazlConnector\StructType\LabelProducts
     */
    public function addToLabelProduct(\Etrias\PaazlConnector\StructType\LabelProduct $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\LabelProduct) {
            throw new \InvalidArgumentException(sprintf('The labelProduct property can only contain items of \Etrias\PaazlConnector\StructType\LabelProduct, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->labelProduct[] = $item;
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
     * @uses \Etrias\PaazlConnector\EnumType\LabelProductsModeType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\LabelProductsModeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mode
     * @return \Etrias\PaazlConnector\StructType\LabelProducts
     */
    public function setMode($mode = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\LabelProductsModeType::valueIsValid($mode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mode, implode(', ', \Etrias\PaazlConnector\EnumType\LabelProductsModeType::getValidValues())), __LINE__);
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
     * @return \Etrias\PaazlConnector\StructType\LabelProducts
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
