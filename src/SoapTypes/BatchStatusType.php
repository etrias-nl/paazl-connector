<?php

namespace Etrias\PaazlConnector\SoapTypes;

class BatchStatusType
{

    /**
     * @var batchStatusOrderType
     */
    protected $order = null;

    /**
     * Constructor
     *
     * @var batchStatusOrderType $order
     */
    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * @return batchStatusOrderType
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param batchStatusOrderType $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }


}

