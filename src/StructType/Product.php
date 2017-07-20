<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for product StructType
 * @subpackage Structs
 */
class Product extends AbstractStructBase
{
    /**
     * The quantity
     * Meta informations extracted from the WSDL
     * - default: 1
     * - minOccurs: 0
     * @var int
     */
    public $quantity;
    /**
     * The packagesPerUnit
     * Meta informations extracted from the WSDL
     * - default: 1
     * - minOccurs: 0
     * @var int
     */
    public $packagesPerUnit;
    /**
     * The weight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - minInclusive: 0
     * @var float
     */
    public $weight;
    /**
     * The width
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $width;
    /**
     * The height
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $height;
    /**
     * The length
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $length;
    /**
     * The volume
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - minInclusive: 0
     * @var float
     */
    public $volume;
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $code;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $description;
    /**
     * The countryOfManufacture
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $countryOfManufacture;
    /**
     * The unitPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - minInclusive: 0
     * @var float
     */
    public $unitPrice;
    /**
     * The unitPriceCurrency
     * Meta informations extracted from the WSDL
     * - default: EUR
     * - minOccurs: 0
     * - length: 3
     * - pattern: [A-Z]{3}
     * @var string
     */
    public $unitPriceCurrency;
    /**
     * The hsTariffCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $hsTariffCode;
    /**
     * The direction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $direction;
    /**
     * The matrix
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - pattern: [A-Za-z]
     * @var string
     */
    public $matrix;
    /**
     * The processingDays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $processingDays;
    /**
     * The promotionAbsolute
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $promotionAbsolute;
    /**
     * The promotion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $promotion;
    /**
     * The availableStores
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: matrix:availableStores
     * @var \Etrias\PaazlConnector\StructType\AvailableStores
     */
    public $availableStores;
    /**
     * Constructor method for product
     * @uses Product::setQuantity()
     * @uses Product::setPackagesPerUnit()
     * @uses Product::setWeight()
     * @uses Product::setWidth()
     * @uses Product::setHeight()
     * @uses Product::setLength()
     * @uses Product::setVolume()
     * @uses Product::setCode()
     * @uses Product::setDescription()
     * @uses Product::setCountryOfManufacture()
     * @uses Product::setUnitPrice()
     * @uses Product::setUnitPriceCurrency()
     * @uses Product::setHsTariffCode()
     * @uses Product::setDirection()
     * @uses Product::setMatrix()
     * @uses Product::setProcessingDays()
     * @uses Product::setPromotionAbsolute()
     * @uses Product::setPromotion()
     * @uses Product::setAvailableStores()
     * @param int $quantity
     * @param int $packagesPerUnit
     * @param float $weight
     * @param int $width
     * @param int $height
     * @param int $length
     * @param float $volume
     * @param string $code
     * @param string $description
     * @param string $countryOfManufacture
     * @param float $unitPrice
     * @param string $unitPriceCurrency
     * @param string $hsTariffCode
     * @param string $direction
     * @param string $matrix
     * @param int $processingDays
     * @param bool $promotionAbsolute
     * @param float $promotion
     * @param \Etrias\PaazlConnector\StructType\AvailableStores $availableStores
     */
    public function __construct($quantity = 1, $packagesPerUnit = 1, $weight = null, $width = null, $height = null, $length = null, $volume = null, $code = null, $description = null, $countryOfManufacture = null, $unitPrice = null, $unitPriceCurrency = 'EUR', $hsTariffCode = null, $direction = null, $matrix = null, $processingDays = null, $promotionAbsolute = null, $promotion = null, \Etrias\PaazlConnector\StructType\AvailableStores $availableStores = null)
    {
        $this
            ->setQuantity($quantity)
            ->setPackagesPerUnit($packagesPerUnit)
            ->setWeight($weight)
            ->setWidth($width)
            ->setHeight($height)
            ->setLength($length)
            ->setVolume($volume)
            ->setCode($code)
            ->setDescription($description)
            ->setCountryOfManufacture($countryOfManufacture)
            ->setUnitPrice($unitPrice)
            ->setUnitPriceCurrency($unitPriceCurrency)
            ->setHsTariffCode($hsTariffCode)
            ->setDirection($direction)
            ->setMatrix($matrix)
            ->setProcessingDays($processingDays)
            ->setPromotionAbsolute($promotionAbsolute)
            ->setPromotion($promotion)
            ->setAvailableStores($availableStores);
    }
    /**
     * Get quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param int $quantity
     * @return \Etrias\PaazlConnector\StructType\Product
     */
    public function setQuantity($quantity = 1)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Get packagesPerUnit value
     * @return int|null
     */
    public function getPackagesPerUnit()
    {
        return $this->packagesPerUnit;
    }
    /**
     * Set packagesPerUnit value
     * @param int $packagesPerUnit
     * @return \Etrias\PaazlConnector\StructType\Product
     */
    public function setPackagesPerUnit($packagesPerUnit = 1)
    {
        // validation for constraint: int
        if (!is_null($packagesPerUnit) && !is_numeric($packagesPerUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($packagesPerUnit)), __LINE__);
        }
        $this->packagesPerUnit = $packagesPerUnit;
        return $this;
    }
    /**
     * Get weight value
     * @return float|null
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param float $weight
     * @return \Etrias\PaazlConnector\StructType\Product
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: minInclusive
        if ($weight < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $weight), __LINE__);
        }
        $this->weight = $weight;
        return $this;
    }
    /**
     * Get width value
     * @return int|null
     */
    public function getWidth()
    {
        return $this->width;
    }
    /**
     * Set width value
     * @param int $width
     * @return \Etrias\PaazlConnector\StructType\Product
     */
    public function setWidth($width = null)
    {
        // validation for constraint: int
        if (!is_null($width) && !is_numeric($width)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($width)), __LINE__);
        }
        $this->width = $width;
        return $this;
    }
    /**
     * Get height value
     * @return int|null
     */
    public function getHeight()
    {
        return $this->height;
    }
    /**
     * Set height value
     * @param int $height
     * @return \Etrias\PaazlConnector\StructType\Product
     */
    public function setHeight($height = null)
    {
        // validation for constraint: int
        if (!is_null($height) && !is_numeric($height)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($height)), __LINE__);
        }
        $this->height = $height;
        return $this;
    }
    /**
     * Get length value
     * @return int|null
     */
    public function getLength()
    {
        return $this->length;
    }
    /**
     * Set length value
     * @param int $length
     * @return \Etrias\PaazlConnector\StructType\Product
     */
    public function setLength($length = null)
    {
        // validation for constraint: int
        if (!is_null($length) && !is_numeric($length)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($length)), __LINE__);
        }
        $this->length = $length;
        return $this;
    }
    /**
     * Get volume value
     * @return float|null
     */
    public function getVolume()
    {
        return $this->volume;
    }
    /**
     * Set volume value
     * @param float $volume
     * @return \Etrias\PaazlConnector\StructType\Product
     */
    public function setVolume($volume = null)
    {
        // validation for constraint: minInclusive
        if ($volume < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $volume), __LINE__);
        }
        $this->volume = $volume;
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Etrias\PaazlConnector\StructType\Product
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Etrias\PaazlConnector\StructType\Product
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get countryOfManufacture value
     * @return string|null
     */
    public function getCountryOfManufacture()
    {
        return $this->countryOfManufacture;
    }
    /**
     * Set countryOfManufacture value
     * @param string $countryOfManufacture
     * @return \Etrias\PaazlConnector\StructType\Product
     */
    public function setCountryOfManufacture($countryOfManufacture = null)
    {
        // validation for constraint: string
        if (!is_null($countryOfManufacture) && !is_string($countryOfManufacture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryOfManufacture)), __LINE__);
        }
        $this->countryOfManufacture = $countryOfManufacture;
        return $this;
    }
    /**
     * Get unitPrice value
     * @return float|null
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }
    /**
     * Set unitPrice value
     * @param float $unitPrice
     * @return \Etrias\PaazlConnector\StructType\Product
     */
    public function setUnitPrice($unitPrice = null)
    {
        // validation for constraint: minInclusive
        if ($unitPrice < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $unitPrice), __LINE__);
        }
        $this->unitPrice = $unitPrice;
        return $this;
    }
    /**
     * Get unitPriceCurrency value
     * @return string|null
     */
    public function getUnitPriceCurrency()
    {
        return $this->unitPriceCurrency;
    }
    /**
     * Set unitPriceCurrency value
     * @param string $unitPriceCurrency
     * @return \Etrias\PaazlConnector\StructType\Product
     */
    public function setUnitPriceCurrency($unitPriceCurrency = 'EUR')
    {
        // validation for constraint: length
        if ((is_scalar($unitPriceCurrency) && strlen($unitPriceCurrency) !== 3) || (is_array($unitPriceCurrency) && count($unitPriceCurrency) !== 3)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 3 element(s) or a scalar of 3 character(s)', __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($unitPriceCurrency) && !preg_match('/[A-Z]{3}/', $unitPriceCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{3}", "%s" given', var_export($unitPriceCurrency, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($unitPriceCurrency) && !is_string($unitPriceCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unitPriceCurrency)), __LINE__);
        }
        $this->unitPriceCurrency = $unitPriceCurrency;
        return $this;
    }
    /**
     * Get hsTariffCode value
     * @return string|null
     */
    public function getHsTariffCode()
    {
        return $this->hsTariffCode;
    }
    /**
     * Set hsTariffCode value
     * @param string $hsTariffCode
     * @return \Etrias\PaazlConnector\StructType\Product
     */
    public function setHsTariffCode($hsTariffCode = null)
    {
        // validation for constraint: string
        if (!is_null($hsTariffCode) && !is_string($hsTariffCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hsTariffCode)), __LINE__);
        }
        $this->hsTariffCode = $hsTariffCode;
        return $this;
    }
    /**
     * Get direction value
     * @return string|null
     */
    public function getDirection()
    {
        return $this->direction;
    }
    /**
     * Set direction value
     * @uses \Etrias\PaazlConnector\EnumType\DirectionType::valueIsValid()
     * @uses \Etrias\PaazlConnector\EnumType\DirectionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $direction
     * @return \Etrias\PaazlConnector\StructType\Product
     */
    public function setDirection($direction = null)
    {
        // validation for constraint: enumeration
        if (!\Etrias\PaazlConnector\EnumType\DirectionType::valueIsValid($direction)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $direction, implode(', ', \Etrias\PaazlConnector\EnumType\DirectionType::getValidValues())), __LINE__);
        }
        $this->direction = $direction;
        return $this;
    }
    /**
     * Get matrix value
     * @return string|null
     */
    public function getMatrix()
    {
        return $this->matrix;
    }
    /**
     * Set matrix value
     * @param string $matrix
     * @return \Etrias\PaazlConnector\StructType\Product
     */
    public function setMatrix($matrix = null)
    {
        // validation for constraint: pattern
        if (is_scalar($matrix) && !preg_match('/[A-Za-z]/', $matrix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Za-z]", "%s" given', var_export($matrix, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($matrix) && !is_string($matrix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($matrix)), __LINE__);
        }
        $this->matrix = $matrix;
        return $this;
    }
    /**
     * Get processingDays value
     * @return int|null
     */
    public function getProcessingDays()
    {
        return $this->processingDays;
    }
    /**
     * Set processingDays value
     * @param int $processingDays
     * @return \Etrias\PaazlConnector\StructType\Product
     */
    public function setProcessingDays($processingDays = null)
    {
        // validation for constraint: int
        if (!is_null($processingDays) && !is_numeric($processingDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($processingDays)), __LINE__);
        }
        $this->processingDays = $processingDays;
        return $this;
    }
    /**
     * Get promotionAbsolute value
     * @return bool|null
     */
    public function getPromotionAbsolute()
    {
        return $this->promotionAbsolute;
    }
    /**
     * Set promotionAbsolute value
     * @param bool $promotionAbsolute
     * @return \Etrias\PaazlConnector\StructType\Product
     */
    public function setPromotionAbsolute($promotionAbsolute = null)
    {
        // validation for constraint: boolean
        if (!is_null($promotionAbsolute) && !is_bool($promotionAbsolute)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($promotionAbsolute)), __LINE__);
        }
        $this->promotionAbsolute = $promotionAbsolute;
        return $this;
    }
    /**
     * Get promotion value
     * @return float|null
     */
    public function getPromotion()
    {
        return $this->promotion;
    }
    /**
     * Set promotion value
     * @param float $promotion
     * @return \Etrias\PaazlConnector\StructType\Product
     */
    public function setPromotion($promotion = null)
    {
        $this->promotion = $promotion;
        return $this;
    }
    /**
     * Get availableStores value
     * @return \Etrias\PaazlConnector\StructType\AvailableStores|null
     */
    public function getAvailableStores()
    {
        return $this->availableStores;
    }
    /**
     * Set availableStores value
     * @param \Etrias\PaazlConnector\StructType\AvailableStores $availableStores
     * @return \Etrias\PaazlConnector\StructType\Product
     */
    public function setAvailableStores(\Etrias\PaazlConnector\StructType\AvailableStores $availableStores = null)
    {
        $this->availableStores = $availableStores;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\Product
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
