<?php

namespace Etrias\PaazlConnector\SoapTypes;

class LabelProduct
{

    /**
     * @var positiveInteger
     */
    protected $quantity = null;

    /**
     * @var nonNegativeDecimal
     */
    protected $weight = null;

    /**
     * @var nonNegativeInteger
     */
    protected $width = null;

    /**
     * @var nonNegativeInteger
     */
    protected $height = null;

    /**
     * @var nonNegativeInteger
     */
    protected $length = null;

    /**
     * @var nonNegativeDecimal
     */
    protected $volume = null;

    /**
     * @var string
     */
    protected $code = null;

    /**
     * @var string
     */
    protected $description = null;

    /**
     * Constructor
     *
     * @var positiveInteger $quantity
     * @var nonNegativeDecimal $weight
     * @var nonNegativeInteger $width
     * @var nonNegativeInteger $height
     * @var nonNegativeInteger $length
     * @var nonNegativeDecimal $volume
     * @var string $code
     * @var string $description
     */
    public function __construct($quantity, $weight, $width, $height, $length, $volume, $code, $description)
    {
        $this->quantity = $quantity;
        $this->weight = $weight;
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
        $this->volume = $volume;
        $this->code = $code;
        $this->description = $description;
    }

    /**
     * @return positiveInteger
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param positiveInteger $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return nonNegativeDecimal
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param nonNegativeDecimal $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return nonNegativeInteger
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param nonNegativeInteger $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return nonNegativeInteger
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param nonNegativeInteger $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return nonNegativeInteger
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param nonNegativeInteger $length
     * @return $this
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @return nonNegativeDecimal
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param nonNegativeDecimal $volume
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

