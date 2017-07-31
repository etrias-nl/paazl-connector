<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\RequestInterface;

class GeneratePdfCustomsDocumentsRequest implements RequestInterface
{

    /**
     * @var int
     */
    protected $webshop = null;

    /**
     * @var orderType
     */
    protected $order = null;

    /**
     * Constructor
     *
     * @var int $webshop
     * @var orderType[] $orders
     */
    public function __construct($webshop, array $orders)
    {
        $this->webshop = $webshop;
        $this->order = $orders;
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
     * @return orderType
     */
    public function getOrders()
    {
        return $this->order;
    }

    /**
     * @param orderType[] $orders
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->order = $orders;
        return $this;
    }


}

