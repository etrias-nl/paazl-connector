<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Etrias\PaazlConnector\SoapTypes;

class Product
{
    /**
     * @var positiveInteger
     */
    protected $quantity = null;

    /**
     * @var positiveInteger
     */
    protected $packagesPerUnit = null;

    /**
     * @var matrix
     */
    protected $matrix = null;

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
     * @var string
     */
    protected $countryOfManufacture = null;

    /**
     * @var nonNegativeDecimal
     */
    protected $unitPrice = null;

    /**
     * @var currencyCode
     */
    protected $unitPriceCurrency = null;

    /**
     * @var string
     */
    protected $hsTariffCode = null;

    /**
     * @var directionType
     */
    protected $direction = null;

    /**
     * @var nonNegativeInteger
     */
    protected $processingDays = null;

    /**
     * @var bool
     */
    protected $promotionAbsolute = null;

    /**
     * @var float
     */
    protected $promotion = null;

    /**
     * @var availableStores
     */
    protected $availableStores = null;

    /**
     * Constructor.
     *
     * @var positiveInteger|null
     * @var positiveInteger|null    $packagesPerUnit
     * @var matrix|null             $matrix
     * @var nonNegativeDecimal|null $weight
     * @var nonNegativeInteger|null $width
     * @var nonNegativeInteger|null $height
     * @var nonNegativeInteger|null $length
     * @var nonNegativeDecimal|null $volume
     * @var string|null             $code
     * @var string|null             $description
     * @var string|null             $countryOfManufacture
     * @var nonNegativeDecimal|null $unitPrice
     * @var currencyCode|null       $unitPriceCurrency
     * @var string|null             $hsTariffCode
     * @var directionType|null      $direction
     * @var nonNegativeInteger|null $processingDays
     * @var bool|null               $promotionAbsolute
     * @var float|null              $promotion
     * @var availableStores|null    $availableStores
     *
     * @param null|mixed $quantity
     * @param null|mixed $packagesPerUnit
     * @param null|mixed $matrix
     * @param null|mixed $weight
     * @param null|mixed $width
     * @param null|mixed $height
     * @param null|mixed $length
     * @param null|mixed $volume
     * @param null|mixed $code
     * @param null|mixed $description
     * @param null|mixed $countryOfManufacture
     * @param null|mixed $unitPrice
     * @param null|mixed $unitPriceCurrency
     * @param null|mixed $hsTariffCode
     * @param null|mixed $direction
     * @param null|mixed $processingDays
     * @param null|mixed $promotionAbsolute
     * @param null|mixed $promotion
     * @param null|mixed $availableStores
     */
    public function __construct(
        $quantity = null,
        $packagesPerUnit = null,
        $matrix = null,
        $weight = null,
        $width = null,
        $height = null,
        $length = null,
        $volume = null,
        $code = null,
        $description = null,
        $countryOfManufacture = null,
        $unitPrice = null,
        $unitPriceCurrency = null,
        $hsTariffCode = null,
        $direction = null,
        $processingDays = null,
        $promotionAbsolute = null,
        $promotion = null,
        $availableStores = null
    ) {
        $this->quantity = $quantity;
        $this->packagesPerUnit = $packagesPerUnit;
        $this->matrix = $matrix;
        $this->weight = $weight;
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
        $this->volume = $volume;
        $this->code = $code;
        $this->description = $description;
        $this->countryOfManufacture = $countryOfManufacture;
        $this->unitPrice = $unitPrice;
        $this->unitPriceCurrency = $unitPriceCurrency;
        $this->hsTariffCode = $hsTariffCode;
        $this->direction = $direction;
        $this->processingDays = $processingDays;
        $this->promotionAbsolute = $promotionAbsolute;
        $this->promotion = $promotion;
        $this->availableStores = $availableStores;
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
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return positiveInteger
     */
    public function getPackagesPerUnit()
    {
        return $this->packagesPerUnit;
    }

    /**
     * @param positiveInteger $packagesPerUnit
     *
     * @return $this
     */
    public function setPackagesPerUnit($packagesPerUnit)
    {
        $this->packagesPerUnit = $packagesPerUnit;

        return $this;
    }

    /**
     * @return matrix
     */
    public function getMatrix()
    {
        return $this->matrix;
    }

    /**
     * @param matrix $matrix
     *
     * @return $this
     */
    public function setMatrix($matrix)
    {
        $this->matrix = $matrix;

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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
     * @return $this
     */
    public function setCountryOfManufacture($countryOfManufacture)
    {
        $this->countryOfManufacture = $countryOfManufacture;

        return $this;
    }

    /**
     * @return nonNegativeDecimal
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @param nonNegativeDecimal $unitPrice
     *
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
     *
     * @return $this
     */
    public function setUnitPriceCurrency($unitPriceCurrency)
    {
        $this->unitPriceCurrency = $unitPriceCurrency;

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
     *
     * @return $this
     */
    public function setHsTariffCode($hsTariffCode)
    {
        $this->hsTariffCode = $hsTariffCode;

        return $this;
    }

    /**
     * @return directionType
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @param directionType $direction
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * @return nonNegativeInteger
     */
    public function getProcessingDays()
    {
        return $this->processingDays;
    }

    /**
     * @param nonNegativeInteger $processingDays
     *
     * @return $this
     */
    public function setProcessingDays($processingDays)
    {
        $this->processingDays = $processingDays;

        return $this;
    }

    /**
     * @return bool
     */
    public function getPromotionAbsolute()
    {
        return $this->promotionAbsolute;
    }

    /**
     * @param bool $promotionAbsolute
     *
     * @return $this
     */
    public function setPromotionAbsolute($promotionAbsolute)
    {
        $this->promotionAbsolute = $promotionAbsolute;

        return $this;
    }

    /**
     * @return float
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * @param float $promotion
     *
     * @return $this
     */
    public function setPromotion($promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * @return availableStores
     */
    public function getAvailableStores()
    {
        return $this->availableStores;
    }

    /**
     * @param availableStores $availableStores
     *
     * @return $this
     */
    public function setAvailableStores($availableStores)
    {
        $this->availableStores = $availableStores;

        return $this;
    }
}
