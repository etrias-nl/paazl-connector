<?php

namespace Etrias\PaazlConnector\SoapTypes;

class Store
{

    /**
     * @var string
     */
    protected $storeCode = null;

    /**
     * @var positiveInteger
     */
    protected $quantity = null;

    /**
     * Constructor
     *
     * @var string $storeCode
     * @var positiveInteger $quantity
     */
    public function __construct($storeCode, $quantity)
    {
        $this->storeCode = $storeCode;
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getStoreCode()
    {
        return $this->storeCode;
    }

    /**
     * @param string $storeCode
     * @return $this
     */
    public function setStoreCode($storeCode)
    {
        $this->storeCode = $storeCode;
        return $this;
    }

    /**
     * @return positiveInteger
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param positiveInteger $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }


}

