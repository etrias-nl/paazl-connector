<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for orderToShipType StructType
 * @subpackage Structs
 */
class OrderToShipType extends AbstractStructBase
{
    /**
     * The webshop
     * @var int
     */
    public $webshop;
    /**
     * The orderReference
     * @var string
     */
    public $orderReference;
    /**
     * The distributor
     * @var string
     */
    public $distributor;
    /**
     * The deliveryDate
     * @var string
     */
    public $deliveryDate;
    /**
     * Constructor method for orderToShipType
     * @uses OrderToShipType::setWebshop()
     * @uses OrderToShipType::setOrderReference()
     * @uses OrderToShipType::setDistributor()
     * @uses OrderToShipType::setDeliveryDate()
     * @param int $webshop
     * @param string $orderReference
     * @param string $distributor
     * @param string $deliveryDate
     */
    public function __construct($webshop = null, $orderReference = null, $distributor = null, $deliveryDate = null)
    {
        $this
            ->setWebshop($webshop)
            ->setOrderReference($orderReference)
            ->setDistributor($distributor)
            ->setDeliveryDate($deliveryDate);
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
     * @return \Etrias\PaazlConnector\StructType\OrderToShipType
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
     * @return \Etrias\PaazlConnector\StructType\OrderToShipType
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
     * Get distributor value
     * @return string|null
     */
    public function getDistributor()
    {
        return $this->distributor;
    }
    /**
     * Set distributor value
     * @param string $distributor
     * @return \Etrias\PaazlConnector\StructType\OrderToShipType
     */
    public function setDistributor($distributor = null)
    {
        // validation for constraint: string
        if (!is_null($distributor) && !is_string($distributor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($distributor)), __LINE__);
        }
        $this->distributor = $distributor;
        return $this;
    }
    /**
     * Get deliveryDate value
     * @return string|null
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }
    /**
     * Set deliveryDate value
     * @param string $deliveryDate
     * @return \Etrias\PaazlConnector\StructType\OrderToShipType
     */
    public function setDeliveryDate($deliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryDate) && !is_string($deliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryDate)), __LINE__);
        }
        $this->deliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\OrderToShipType
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
