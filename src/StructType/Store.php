<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for store StructType
 * @subpackage Structs
 */
class Store extends AbstractStructBase
{
    /**
     * The storeCode
     * @var string
     */
    public $storeCode;
    /**
     * The quantity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $quantity;
    /**
     * Constructor method for store
     * @uses Store::setStoreCode()
     * @uses Store::setQuantity()
     * @param string $storeCode
     * @param int $quantity
     */
    public function __construct($storeCode = null, $quantity = null)
    {
        $this
            ->setStoreCode($storeCode)
            ->setQuantity($quantity);
    }
    /**
     * Get storeCode value
     * @return string|null
     */
    public function getStoreCode()
    {
        return $this->storeCode;
    }
    /**
     * Set storeCode value
     * @param string $storeCode
     * @return \Etrias\PaazlConnector\StructType\Store
     */
    public function setStoreCode($storeCode = null)
    {
        // validation for constraint: string
        if (!is_null($storeCode) && !is_string($storeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($storeCode)), __LINE__);
        }
        $this->storeCode = $storeCode;
        return $this;
    }
    /**
     * Get quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param int $quantity
     * @return \Etrias\PaazlConnector\StructType\Store
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\Store
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
