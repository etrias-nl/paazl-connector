<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for productType StructType
 * @subpackage Structs
 */
class ProductType extends AbstractStructBase
{
    /**
     * The quantity
     * @var int
     */
    public $quantity;
    /**
     * The packagesPerUnit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $packagesPerUnit;
    /**
     * The unitPrice
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
     * The weight
     * @var float
     */
    public $weight;
    /**
     * The length
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $length;
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
     * The volume
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
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
     * The hsTariffCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $hsTariffCode;
    /**
     * Constructor method for productType
     * @uses ProductType::setQuantity()
     * @uses ProductType::setPackagesPerUnit()
     * @uses ProductType::setUnitPrice()
     * @uses ProductType::setUnitPriceCurrency()
     * @uses ProductType::setWeight()
     * @uses ProductType::setLength()
     * @uses ProductType::setWidth()
     * @uses ProductType::setHeight()
     * @uses ProductType::setVolume()
     * @uses ProductType::setCode()
     * @uses ProductType::setDescription()
     * @uses ProductType::setCountryOfManufacture()
     * @uses ProductType::setHsTariffCode()
     * @param int $quantity
     * @param int $packagesPerUnit
     * @param float $unitPrice
     * @param string $unitPriceCurrency
     * @param float $weight
     * @param int $length
     * @param int $width
     * @param int $height
     * @param float $volume
     * @param string $code
     * @param string $description
     * @param string $countryOfManufacture
     * @param string $hsTariffCode
     */
    public function __construct($quantity = null, $packagesPerUnit = null, $unitPrice = null, $unitPriceCurrency = 'EUR', $weight = null, $length = null, $width = null, $height = null, $volume = null, $code = null, $description = null, $countryOfManufacture = null, $hsTariffCode = null)
    {
        $this
            ->setQuantity($quantity)
            ->setPackagesPerUnit($packagesPerUnit)
            ->setUnitPrice($unitPrice)
            ->setUnitPriceCurrency($unitPriceCurrency)
            ->setWeight($weight)
            ->setLength($length)
            ->setWidth($width)
            ->setHeight($height)
            ->setVolume($volume)
            ->setCode($code)
            ->setDescription($description)
            ->setCountryOfManufacture($countryOfManufacture)
            ->setHsTariffCode($hsTariffCode);
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
     * @return \Etrias\PaazlConnector\StructType\ProductType
     */
    public function setQuantity($quantity = null)
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
     * @return \Etrias\PaazlConnector\StructType\ProductType
     */
    public function setPackagesPerUnit($packagesPerUnit = null)
    {
        // validation for constraint: int
        if (!is_null($packagesPerUnit) && !is_numeric($packagesPerUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($packagesPerUnit)), __LINE__);
        }
        $this->packagesPerUnit = $packagesPerUnit;
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
     * @return \Etrias\PaazlConnector\StructType\ProductType
     */
    public function setUnitPrice($unitPrice = null)
    {
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
     * @return \Etrias\PaazlConnector\StructType\ProductType
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
     * @return \Etrias\PaazlConnector\StructType\ProductType
     */
    public function setWeight($weight = null)
    {
        $this->weight = $weight;
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
     * @return \Etrias\PaazlConnector\StructType\ProductType
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
     * @return \Etrias\PaazlConnector\StructType\ProductType
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
     * @return \Etrias\PaazlConnector\StructType\ProductType
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
     * @return \Etrias\PaazlConnector\StructType\ProductType
     */
    public function setVolume($volume = null)
    {
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
     * @return \Etrias\PaazlConnector\StructType\ProductType
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
     * @return \Etrias\PaazlConnector\StructType\ProductType
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
     * @return \Etrias\PaazlConnector\StructType\ProductType
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
     * @return \Etrias\PaazlConnector\StructType\ProductType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ProductType
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
