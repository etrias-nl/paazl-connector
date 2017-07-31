<?php

namespace Etrias\PaazlConnector\SoapTypes;

class OrderType
{

    /**
     * @var string
     */
    protected $hash = null;

    /**
     * @var int
     */
    protected $targetWebshop = null;

    /**
     * @var string
     */
    protected $orderReference = null;

    /**
     * @var labelProducts
     */
    protected $labelProducts = null;

    /**
     * @var string
     */
    protected $batch = null;

    /**
     * Constructor
     *
     * @var string $hash
     * @var int $targetWebshop
     * @var string $orderReference
     * @var labelProducts[] $labelProducts
     * @var string $batch
     */
    public function __construct($hash, $targetWebshop, $orderReference, array $labelProducts = [], $batch = null)
    {
        $this->hash = $hash;
        $this->targetWebshop = $targetWebshop;
        $this->orderReference = $orderReference;
        $this->labelProducts = $labelProducts;
        $this->batch = $batch;
    }

    /**
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
        return $this;
    }

    /**
     * @return int
     */
    public function getTargetWebshop()
    {
        return $this->targetWebshop;
    }

    /**
     * @param int $targetWebshop
     * @return $this
     */
    public function setTargetWebshop($targetWebshop)
    {
        $this->targetWebshop = $targetWebshop;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @param string $orderReference
     * @return $this
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;
        return $this;
    }

    /**
     * @return labelProducts
     */
    public function getLabelProducts()
    {
        return $this->labelProducts;
    }

    /**
     * @param labelProducts $labelProducts
     * @return $this
     */
    public function setLabelProducts($labelProducts)
    {
        $this->labelProducts = $labelProducts;
        return $this;
    }

    /**
     * @return string
     */
    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * @param string $batch
     * @return $this
     */
    public function setBatch($batch)
    {
        $this->batch = $batch;
        return $this;
    }


}
