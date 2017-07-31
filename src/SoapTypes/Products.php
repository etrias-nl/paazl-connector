<?php

namespace Etrias\PaazlConnector\SoapTypes;

class Products
{

    /**
     * @var Product
     */
    protected $product = null;

    /**
     * Constructor
     *
     * @var Product $product
     */
    public function __construct($product)
    {
        $this->product = $product;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }


}

