<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for returnLabelsOrderType StructType
 * @subpackage Structs
 */
class ReturnLabelsOrderType extends AbstractStructBase
{
    /**
     * The hash
     * @var string
     */
    public $hash;
    /**
     * The targetWebshop
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $targetWebshop;
    /**
     * The orderReference
     * @var string
     */
    public $orderReference;
    /**
     * The labelProducts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\LabelProducts
     */
    public $labelProducts;
    /**
     * The shippingOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shippingOption;
    /**
     * Constructor method for returnLabelsOrderType
     * @uses ReturnLabelsOrderType::setHash()
     * @uses ReturnLabelsOrderType::setTargetWebshop()
     * @uses ReturnLabelsOrderType::setOrderReference()
     * @uses ReturnLabelsOrderType::setLabelProducts()
     * @uses ReturnLabelsOrderType::setShippingOption()
     * @param string $hash
     * @param int $targetWebshop
     * @param string $orderReference
     * @param \Etrias\PaazlConnector\StructType\LabelProducts $labelProducts
     * @param string $shippingOption
     */
    public function __construct($hash = null, $targetWebshop = null, $orderReference = null, \Etrias\PaazlConnector\StructType\LabelProducts $labelProducts = null, $shippingOption = null)
    {
        $this
            ->setHash($hash)
            ->setTargetWebshop($targetWebshop)
            ->setOrderReference($orderReference)
            ->setLabelProducts($labelProducts)
            ->setShippingOption($shippingOption);
    }
    /**
     * Get hash value
     * @return string|null
     */
    public function getHash()
    {
        return $this->hash;
    }
    /**
     * Set hash value
     * @param string $hash
     * @return \Etrias\PaazlConnector\StructType\ReturnLabelsOrderType
     */
    public function setHash($hash = null)
    {
        // validation for constraint: string
        if (!is_null($hash) && !is_string($hash)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hash)), __LINE__);
        }
        $this->hash = $hash;
        return $this;
    }
    /**
     * Get targetWebshop value
     * @return int|null
     */
    public function getTargetWebshop()
    {
        return $this->targetWebshop;
    }
    /**
     * Set targetWebshop value
     * @param int $targetWebshop
     * @return \Etrias\PaazlConnector\StructType\ReturnLabelsOrderType
     */
    public function setTargetWebshop($targetWebshop = null)
    {
        // validation for constraint: int
        if (!is_null($targetWebshop) && !is_numeric($targetWebshop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($targetWebshop)), __LINE__);
        }
        $this->targetWebshop = $targetWebshop;
        return $this;
    }
    /**
     * Get orderReference value
     * @return string|null
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }
    /**
     * Set orderReference value
     * @param string $orderReference
     * @return \Etrias\PaazlConnector\StructType\ReturnLabelsOrderType
     */
    public function setOrderReference($orderReference = null)
    {
        // validation for constraint: string
        if (!is_null($orderReference) && !is_string($orderReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderReference)), __LINE__);
        }
        $this->orderReference = $orderReference;
        return $this;
    }
    /**
     * Get labelProducts value
     * @return \Etrias\PaazlConnector\StructType\LabelProducts|null
     */
    public function getLabelProducts()
    {
        return $this->labelProducts;
    }
    /**
     * Set labelProducts value
     * @param \Etrias\PaazlConnector\StructType\LabelProducts $labelProducts
     * @return \Etrias\PaazlConnector\StructType\ReturnLabelsOrderType
     */
    public function setLabelProducts(\Etrias\PaazlConnector\StructType\LabelProducts $labelProducts = null)
    {
        $this->labelProducts = $labelProducts;
        return $this;
    }
    /**
     * Get shippingOption value
     * @return string|null
     */
    public function getShippingOption()
    {
        return $this->shippingOption;
    }
    /**
     * Set shippingOption value
     * @param string $shippingOption
     * @return \Etrias\PaazlConnector\StructType\ReturnLabelsOrderType
     */
    public function setShippingOption($shippingOption = null)
    {
        // validation for constraint: string
        if (!is_null($shippingOption) && !is_string($shippingOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingOption)), __LINE__);
        }
        $this->shippingOption = $shippingOption;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ReturnLabelsOrderType
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
