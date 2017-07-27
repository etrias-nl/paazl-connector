<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\ResultInterface;

class ListStoresResponse implements ResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var storeDetailsType
     */
    protected $store = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var storeDetailsType $store
     */
    public function __construct($error, $store)
    {
        $this->error = $error;
        $this->store = $store;
    }

    /**
     * @return errorType
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param errorType $error
     * @return $this
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }

    /**
     * @return storeDetailsType
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @param storeDetailsType $store
     * @return $this
     */
    public function setStore($store)
    {
        $this->store = $store;
        return $this;
    }


}

