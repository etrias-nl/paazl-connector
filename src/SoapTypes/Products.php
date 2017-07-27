<?php

namespace Etrias\PaazlConnector\SoapTypes;

class Products
{

    /**
     * @var product
     */
    protected $product = null;

    /**
     * Constructor
     *
     * @var product $product
     */
    public function __construct($product)
    {
        $this->product = $product;
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


}

