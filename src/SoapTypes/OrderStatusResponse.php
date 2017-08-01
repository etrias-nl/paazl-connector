<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Etrias\PaazlConnector\Result\PaazlResultInterface;

class OrderStatusResponse implements PaazlResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var orderStatusContainerType
     */
    protected $orderStatus = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var orderStatusContainerType $orderStatus
     */
    public function __construct($error, $orderStatus)
    {
        $this->error = $error;
        $this->orderStatus = $orderStatus;
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
     * @return orderStatusContainerType
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param orderStatusContainerType $orderStatus
     * @return $this
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }


}

