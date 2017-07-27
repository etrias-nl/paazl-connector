<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\RequestInterface;

class DeleteStoresRequest implements RequestInterface
{

    /**
     * @var int
     */
    protected $webshop = null;

    /**
     * @var int
     */
    protected $targetWebshop = null;

    /**
     * @var deleteStoreType
     */
    protected $store = null;

    /**
     * Constructor
     *
     * @var int $webshop
     * @var int $targetWebshop
     * @var deleteStoreType $store
     */
    public function __construct($webshop, $targetWebshop, $store)
    {
        $this->webshop = $webshop;
        $this->targetWebshop = $targetWebshop;
        $this->store = $store;
    }

    /**
     * @return int
     */
    public function getWebshop()
    {
        return $this->webshop;
    }

    /**
     * @param int $webshop
     * @return $this
     */
    public function setWebshop($webshop)
    {
        $this->webshop = $webshop;
        return $this;
    }

    /**
     * @return int
     */
    public function getTargetWebshop()
    {
        return $this->targetWebshop;
    }

    /**
     * @param int $targetWebshop
     * @return $this
     */
    public function setTargetWebshop($targetWebshop)
    {
        $this->targetWebshop = $targetWebshop;
        return $this;
    }

    /**
     * @return deleteStoreType
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @param deleteStoreType $store
     * @return $this
     */
    public function setStore($store)
    {
        $this->store = $store;
        return $this;
    }


}

