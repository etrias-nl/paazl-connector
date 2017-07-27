<?php

namespace Etrias\PaazlConnector\SoapTypes;

class GenerateReturnLabelsType
{

    /**
     * @var int
     */
    protected $webshop = null;

    /**
     * @var returnLabelsOrderType
     */
    protected $order = null;

    /**
     * Constructor
     *
     * @var int $webshop
     * @var returnLabelsOrderType $order
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
     * @return returnLabelsOrderType
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param returnLabelsOrderType $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }


}

