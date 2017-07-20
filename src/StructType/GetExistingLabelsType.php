<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getExistingLabelsType StructType
 * @subpackage Structs
 */
class GetExistingLabelsType extends AbstractStructBase
{
    /**
     * The webshop
     * @var int
     */
    public $webshop;
    /**
     * The label
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Etrias\PaazlConnector\StructType\ExistingLabelType[]
     */
    public $label;
    /**
     * The includeMetaData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $includeMetaData;
    /**
     * Constructor method for getExistingLabelsType
     * @uses GetExistingLabelsType::setWebshop()
     * @uses GetExistingLabelsType::setLabel()
     * @uses GetExistingLabelsType::setIncludeMetaData()
     * @param int $webshop
     * @param \Etrias\PaazlConnector\StructType\ExistingLabelType[] $label
     * @param bool $includeMetaData
     */
    public function __construct($webshop = null, array $label = array(), $includeMetaData = null)
    {
        $this
            ->setWebshop($webshop)
            ->setLabel($label)
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
     * @return \Etrias\PaazlConnector\StructType\GetExistingLabelsType
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
     * Get label value
     * @return \Etrias\PaazlConnector\StructType\ExistingLabelType[]|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\ExistingLabelType[] $label
     * @return \Etrias\PaazlConnector\StructType\GetExistingLabelsType
     */
    public function setLabel(array $label = array())
    {
        foreach ($label as $getExistingLabelsTypeLabelItem) {
            // validation for constraint: itemType
            if (!$getExistingLabelsTypeLabelItem instanceof \Etrias\PaazlConnector\StructType\ExistingLabelType) {
                throw new \InvalidArgumentException(sprintf('The label property can only contain items of \Etrias\PaazlConnector\StructType\ExistingLabelType, "%s" given', is_object($getExistingLabelsTypeLabelItem) ? get_class($getExistingLabelsTypeLabelItem) : gettype($getExistingLabelsTypeLabelItem)), __LINE__);
            }
        }
        $this->label = $label;
        return $this;
    }
    /**
     * Add item to label value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\ExistingLabelType $item
     * @return \Etrias\PaazlConnector\StructType\GetExistingLabelsType
     */
    public function addToLabel(\Etrias\PaazlConnector\StructType\ExistingLabelType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\ExistingLabelType) {
            throw new \InvalidArgumentException(sprintf('The label property can only contain items of \Etrias\PaazlConnector\StructType\ExistingLabelType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->label[] = $item;
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
     * @return \Etrias\PaazlConnector\StructType\GetExistingLabelsType
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
     * @return \Etrias\PaazlConnector\StructType\GetExistingLabelsType
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
