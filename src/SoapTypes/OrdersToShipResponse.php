<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Etrias\PaazlConnector\Result\PaazlResultInterface;

class OrdersToShipResponse implements PaazlResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var orderToShipType
     */
    protected $order = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var orderToShipType $order
     */
    public function __construct($error, $order)
    {
        $this->error = $error;
        $this->order = $order;
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
     * @return orderToShipType
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param orderToShipType $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }


}

