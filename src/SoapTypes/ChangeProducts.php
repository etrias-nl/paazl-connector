<?php

namespace Etrias\PaazlConnector\SoapTypes;

class ChangeProducts
{

    /**
     * @var product
     */
    protected $product = null;

    /**
     * @var changeProductsModeType
     */
    protected $mode = null;

    /**
     * Constructor
     *
     * @var product $product
     * @var changeProductsModeType $mode
     */
    public function __construct($product, $mode)
    {
        $this->product = $product;
        $this->mode = $mode;
    }

    /**
     * @return product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param product $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return changeProductsModeType
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param changeProductsModeType $mode
     * @return $this
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }


}

