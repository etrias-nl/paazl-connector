<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for listStoresResponse StructType
 * @subpackage Structs
 */
class ListStoresResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The store
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\StoreDetailsType[]
     */
    public $store;
    /**
     * Constructor method for listStoresResponse
     * @uses ListStoresResponse::setError()
     * @uses ListStoresResponse::setStore()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param \Etrias\PaazlConnector\StructType\StoreDetailsType[] $store
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, array $store = array())
    {
        $this
            ->setError($error)
            ->setStore($store);
    }
    /**
     * Get error value
     * @return \Etrias\PaazlConnector\StructType\ErrorType|null
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @return \Etrias\PaazlConnector\StructType\ListStoresResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get store value
     * @return \Etrias\PaazlConnector\StructType\StoreDetailsType[]|null
     */
    public function getStore()
    {
        return $this->store;
    }
    /**
     * Set store value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\StoreDetailsType[] $store
     * @return \Etrias\PaazlConnector\StructType\ListStoresResponse
     */
    public function setStore(array $store = array())
    {
        foreach ($store as $listStoresResponseStoreItem) {
            // validation for constraint: itemType
            if (!$listStoresResponseStoreItem instanceof \Etrias\PaazlConnector\StructType\StoreDetailsType) {
                throw new \InvalidArgumentException(sprintf('The store property can only contain items of \Etrias\PaazlConnector\StructType\StoreDetailsType, "%s" given', is_object($listStoresResponseStoreItem) ? get_class($listStoresResponseStoreItem) : gettype($listStoresResponseStoreItem)), __LINE__);
            }
        }
        $this->store = $store;
        return $this;
    }
    /**
     * Add item to store value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\StoreDetailsType $item
     * @return \Etrias\PaazlConnector\StructType\ListStoresResponse
     */
    public function addToStore(\Etrias\PaazlConnector\StructType\StoreDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\StoreDetailsType) {
            throw new \InvalidArgumentException(sprintf('The store property can only contain items of \Etrias\PaazlConnector\StructType\StoreDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \Etrias\PaazlConnector\StructType\ListStoresResponse
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
