<?php

namespace Etrias\PaazlConnector\SoapTypes;

use Phpro\SoapClient\Type\RequestInterface;

class ChangeStoresRequestType implements RequestInterface
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
     * @var changeStoreDetailsType[]
     */
    protected $store = null;

    /**
     * Constructor
     *
     * @var int $webshop
     * @var int $targetWebshop
     * @var changeStoreDetailsType[] $stores
     */
    public function __construct($webshop, $targetWebshop, array $stores)
    {
        $this->webshop = $webshop;
        $this->targetWebshop = $targetWebshop;
        $this->store = $stores;
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
     * @return changeStoreDetailsType[]
     */
    public function getStores()
    {
        return $this->store;
    }

    /**
     * @param changeStoreDetailsType[] $stores
     * @return $this
     */
    public function setStores($stores)
    {
        $this->store = $stores;
        return $this;
    }


}

