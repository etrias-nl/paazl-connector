<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ordersType StructType
 * @subpackage Structs
 */
class OrdersType extends AbstractStructBase
{
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * The hasNextPage
     * @var bool
     */
    public $hasNextPage;
    /**
     * The webshop
     * @var int
     */
    public $webshop;
    /**
     * The webshopName
     * @var string
     */
    public $webshopName;
    /**
     * The order
     * Meta informations extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\Order[]
     */
    public $order;
    /**
     * Constructor method for ordersType
     * @uses OrdersType::setPage()
     * @uses OrdersType::setHasNextPage()
     * @uses OrdersType::setWebshop()
     * @uses OrdersType::setWebshopName()
     * @uses OrdersType::setOrder()
     * @param int $page
     * @param bool $hasNextPage
     * @param int $webshop
     * @param string $webshopName
     * @param \Etrias\PaazlConnector\StructType\Order[] $order
     */
    public function __construct($page = null, $hasNextPage = null, $webshop = null, $webshopName = null, array $order = array())
    {
        $this
            ->setPage($page)
            ->setHasNextPage($hasNextPage)
            ->setWebshop($webshop)
            ->setWebshopName($webshopName)
            ->setOrder($order);
    }
    /**
     * Get page value
     * @return int|null
     */
    public function getPage()
    {
        return $this->page;
    }
    /**
     * Set page value
     * @param int $page
     * @return \Etrias\PaazlConnector\StructType\OrdersType
     */
    public function setPage($page = null)
    {
        // validation for constraint: int
        if (!is_null($page) && !is_numeric($page)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($page)), __LINE__);
        }
        $this->page = $page;
        return $this;
    }
    /**
     * Get hasNextPage value
     * @return bool|null
     */
    public function getHasNextPage()
    {
        return $this->hasNextPage;
    }
    /**
     * Set hasNextPage value
     * @param bool $hasNextPage
     * @return \Etrias\PaazlConnector\StructType\OrdersType
     */
    public function setHasNextPage($hasNextPage = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasNextPage) && !is_bool($hasNextPage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasNextPage)), __LINE__);
        }
        $this->hasNextPage = $hasNextPage;
        return $this;
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
     * @return \Etrias\PaazlConnector\StructType\OrdersType
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
     * Get webshopName value
     * @return string|null
     */
    public function getWebshopName()
    {
        return $this->webshopName;
    }
    /**
     * Set webshopName value
     * @param string $webshopName
     * @return \Etrias\PaazlConnector\StructType\OrdersType
     */
    public function setWebshopName($webshopName = null)
    {
        // validation for constraint: string
        if (!is_null($webshopName) && !is_string($webshopName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($webshopName)), __LINE__);
        }
        $this->webshopName = $webshopName;
        return $this;
    }
    /**
     * Get order value
     * @return \Etrias\PaazlConnector\StructType\Order[]|null
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * Set order value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\Order[] $order
     * @return \Etrias\PaazlConnector\StructType\OrdersType
     */
    public function setOrder(array $order = array())
    {
        foreach ($order as $ordersTypeOrderItem) {
            // validation for constraint: itemType
            if (!$ordersTypeOrderItem instanceof \Etrias\PaazlConnector\StructType\Order) {
                throw new \InvalidArgumentException(sprintf('The order property can only contain items of \Etrias\PaazlConnector\StructType\Order, "%s" given', is_object($ordersTypeOrderItem) ? get_class($ordersTypeOrderItem) : gettype($ordersTypeOrderItem)), __LINE__);
            }
        }
        $this->order = $order;
        return $this;
    }
    /**
     * Add item to order value
     * @throws \InvalidArgumentException
     * @param \Etrias\PaazlConnector\StructType\Order $item
     * @return \Etrias\PaazlConnector\StructType\OrdersType
     */
    public function addToOrder(\Etrias\PaazlConnector\StructType\Order $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Etrias\PaazlConnector\StructType\Order) {
            throw new \InvalidArgumentException(sprintf('The order property can only contain items of \Etrias\PaazlConnector\StructType\Order, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->order[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\OrdersType
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
