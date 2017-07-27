<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\RequestInterface;

class GenerateImageLabelsRequest implements RequestInterface
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
     * @var bool
     */
    protected $includeMetaData = null;

    /**
     * Constructor
     *
     * @var int $webshop
     * @var orderType $order
     * @var bool $includeMetaData
     */
    public function __construct($webshop, $order, $includeMetaData)
    {
        $this->webshop = $webshop;
        $this->order = $order;
        $this->includeMetaData = $includeMetaData;
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

    /**
     * @return bool
     */
    public function getIncludeMetaData()
    {
        return $this->includeMetaData;
    }

    /**
     * @param bool $includeMetaData
     * @return $this
     */
    public function setIncludeMetaData($includeMetaData)
    {
        $this->includeMetaData = $includeMetaData;
        return $this;
    }


}

