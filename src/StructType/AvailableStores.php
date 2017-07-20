<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for availableStores StructType
 * @subpackage Structs
 */
class AvailableStores extends AbstractStructBase
{
    /**
     * The store
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Etrias\PaazlConnector\StructType\Store[]
     */
    public $store;
    /**
     * Constructor method for availableStores
     * @uses AvailableStores::setStore()
     * @param \Etrias\PaazlConnector\StructType\Store[] $store
     */
    public function __construct(array $store = array())
    {
        $this
            ->setStore($store);
    }
    /**
     * Get store value
     * @return \Etrias\PaazlConnector\StructType\Store[]|null
     */
    public function getStore()
    {
        return $this->store;
    }
    /**
     * Set store value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\Store[] $store
     * @return \Etrias\PaazlConnector\StructType\AvailableStores
     */
    public function setStore(array $store = array())
    {
        foreach ($store as $availableStoresStoreItem) {
            // validation for constraint: itemType
            if (!$availableStoresStoreItem instanceof \Etrias\PaazlConnector\StructType\Store) {
                throw new \InvalidArgumentException(sprintf('The store property can only contain items of \Etrias\PaazlConnector\StructType\Store, "%s" given', is_object($availableStoresStoreItem) ? get_class($availableStoresStoreItem) : gettype($availableStoresStoreItem)), __LINE__);
            }
        }
        $this->store = $store;
        return $this;
    }
    /**
     * Add item to store value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\Store $item
     * @return \Etrias\PaazlConnector\StructType\AvailableStores
     */
    public function addToStore(\Etrias\PaazlConnector\StructType\Store $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\Store) {
            throw new \InvalidArgumentException(sprintf('The store property can only contain items of \Etrias\PaazlConnector\StructType\Store, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \Etrias\PaazlConnector\StructType\AvailableStores
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
