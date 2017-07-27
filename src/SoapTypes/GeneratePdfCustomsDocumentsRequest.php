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
     * @var orderType $order
     */
    public function __construct($webshop, $order)
    {
        $this->webshop = $webshop;
        $this->order = $order;
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
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param orderType $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }


}

