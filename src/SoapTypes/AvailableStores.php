<?php

namespace Etrias\PaazlConnector\SoapTypes;

class AvailableStores
{

    /**
     * @var store
     */
    protected $store = null;

    /**
     * Constructor
     *
     * @var store $store
     */
    public function __construct($store)
    {
        $this->store = $store;
    }

    /**
     * @return store
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @param store $store
     * @return $this
     */
    public function setStore($store)
    {
        $this->store = $store;
        return $this;
    }


}

