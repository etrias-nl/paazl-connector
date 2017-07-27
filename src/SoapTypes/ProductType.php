<?php

namespace Etrias\PaazlConnector\SoapTypes;

class ProductType
{

    /**
     * @var int
     */
    protected $quantity = null;

    /**
     * @var int
     */
    protected $packagesPerUnit = null;

    /**
     * @var float
     */
    protected $unitPrice = null;

    /**
     * @var currencyCode
     */
    protected $unitPriceCurrency = null;

    /**
     * @var float
     */
    protected $weight = null;

    /**
     * @var int
     */
    protected $length = null;

    /**
     * @var int
     */
    protected $width = null;

    /**
     * @var int
     */
    protected $height = null;

    /**
     * @var float
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
     * @var string
     */
    protected $countryOfManufacture = null;

    /**
     * @var string
     */
    protected $hsTariffCode = null;

    /**
     * Constructor
     *
     * @var int $quantity
     * @var int $packagesPerUnit
     * @var float $unitPrice
     * @var currencyCode $unitPriceCurrency
     * @var float $weight
     * @var int $length
     * @var int $width
     * @var int $height
     * @var float $volume
     * @var string $code
     * @var string $description
     * @var string $countryOfManufacture
     * @var string $hsTariffCode
     */
    public function __construct($quantity, $packagesPerUnit, $unitPrice, $unitPriceCurrency, $weight, $length, $width, $height, $volume, $code, $description, $countryOfManufacture, $hsTariffCode)
    {
        $this->quantity = $quantity;
        $this->packagesPerUnit = $packagesPerUnit;
        $this->unitPrice = $unitPrice;
        $this->unitPriceCurrency = $unitPriceCurrency;
        $this->weight = $weight;
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
        $this->volume = $volume;
        $this->code = $code;
        $this->description = $description;
        $this->countryOfManufacture = $countryOfManufacture;
        $this->hsTariffCode = $hsTariffCode;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getPackagesPerUnit()
    {
        return $this->packagesPerUnit;
    }

    /**
     * @param int $packagesPerUnit
     * @return $this
     */
    public function setPackagesPerUnit($packagesPerUnit)
    {
        $this->packagesPerUnit = $packagesPerUnit;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @param float $unitPrice
     * @return $this
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * @return currencyCode
     */
    public function getUnitPriceCurrency()
    {
        return $this->unitPriceCurrency;
    }

    /**
     * @param currencyCode $unitPriceCurrency
     * @return $this
     */
    public function setUnitPriceCurrency($unitPriceCurrency)
    {
        $this->unitPriceCurrency = $unitPriceCurrency;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param int $length
     * @return $this
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return float
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param float $volume
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

    /**
     * @return string
     */
    public function getCountryOfManufacture()
    {
        return $this->countryOfManufacture;
    }

    /**
     * @param string $countryOfManufacture
     * @return $this
     */
    public function setCountryOfManufacture($countryOfManufacture)
    {
        $this->countryOfManufacture = $countryOfManufacture;
        return $this;
    }

    /**
     * @return string
     */
    public function getHsTariffCode()
    {
        return $this->hsTariffCode;
    }

    /**
     * @param string $hsTariffCode
     * @return $this
     */
    public function setHsTariffCode($hsTariffCode)
    {
        $this->hsTariffCode = $hsTariffCode;
        return $this;
    }


}

