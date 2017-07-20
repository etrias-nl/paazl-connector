<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for changeStoresRequestType StructType
 * @subpackage Structs
 */
class ChangeStoresRequestType extends AbstractStructBase
{
    /**
     * The webshop
     * @var int
     */
    public $webshop;
    /**
     * The targetWebshop
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $targetWebshop;
    /**
     * The store
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Etrias\PaazlConnector\StructType\ChangeStoreDetailsType[]
     */
    public $store;
    /**
     * Constructor method for changeStoresRequestType
     * @uses ChangeStoresRequestType::setWebshop()
     * @uses ChangeStoresRequestType::setTargetWebshop()
     * @uses ChangeStoresRequestType::setStore()
     * @param int $webshop
     * @param int $targetWebshop
     * @param \Etrias\PaazlConnector\StructType\ChangeStoreDetailsType[] $store
     */
    public function __construct($webshop = null, $targetWebshop = null, array $store = array())
    {
        $this
            ->setWebshop($webshop)
            ->setTargetWebshop($targetWebshop)
            ->setStore($store);
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
     * @return \Etrias\PaazlConnector\StructType\ChangeStoresRequestType
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
     * @return \Etrias\PaazlConnector\StructType\ChangeStoresRequestType
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
     * Get store value
     * @return \Etrias\PaazlConnector\StructType\ChangeStoreDetailsType[]|null
     */
    public function getStore()
    {
        return $this->store;
    }
    /**
     * Set store value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\ChangeStoreDetailsType[] $store
     * @return \Etrias\PaazlConnector\StructType\ChangeStoresRequestType
     */
    public function setStore(array $store = array())
    {
        foreach ($store as $changeStoresRequestTypeStoreItem) {
            // validation for constraint: itemType
            if (!$changeStoresRequestTypeStoreItem instanceof \Etrias\PaazlConnector\StructType\ChangeStoreDetailsType) {
                throw new \InvalidArgumentException(sprintf('The store property can only contain items of \Etrias\PaazlConnector\StructType\ChangeStoreDetailsType, "%s" given', is_object($changeStoresRequestTypeStoreItem) ? get_class($changeStoresRequestTypeStoreItem) : gettype($changeStoresRequestTypeStoreItem)), __LINE__);
            }
        }
        $this->store = $store;
        return $this;
    }
    /**
     * Add item to store value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\ChangeStoreDetailsType $item
     * @return \Etrias\PaazlConnector\StructType\ChangeStoresRequestType
     */
    public function addToStore(\Etrias\PaazlConnector\StructType\ChangeStoreDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\ChangeStoreDetailsType) {
            throw new \InvalidArgumentException(sprintf('The store property can only contain items of \Etrias\PaazlConnector\StructType\ChangeStoreDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->store[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ChangeStoresRequestType
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
