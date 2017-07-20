<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for labelProduct StructType
 * @subpackage Structs
 */
class LabelProduct extends AbstractStructBase
{
    /**
     * The quantity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $quantity;
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
     * Constructor method for labelProduct
     * @uses LabelProduct::setQuantity()
     * @uses LabelProduct::setWeight()
     * @uses LabelProduct::setWidth()
     * @uses LabelProduct::setHeight()
     * @uses LabelProduct::setLength()
     * @uses LabelProduct::setVolume()
     * @uses LabelProduct::setCode()
     * @uses LabelProduct::setDescription()
     * @param int $quantity
     * @param float $weight
     * @param int $width
     * @param int $height
     * @param int $length
     * @param float $volume
     * @param string $code
     * @param string $description
     */
    public function __construct($quantity = null, $weight = null, $width = null, $height = null, $length = null, $volume = null, $code = null, $description = null)
    {
        $this
            ->setQuantity($quantity)
            ->setWeight($weight)
            ->setWidth($width)
            ->setHeight($height)
            ->setLength($length)
            ->setVolume($volume)
            ->setCode($code)
            ->setDescription($description);
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
     * @return \Etrias\PaazlConnector\StructType\LabelProduct
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
     * @return \Etrias\PaazlConnector\StructType\LabelProduct
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
     * @return \Etrias\PaazlConnector\StructType\LabelProduct
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
     * @return \Etrias\PaazlConnector\StructType\LabelProduct
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
     * @return \Etrias\PaazlConnector\StructType\LabelProduct
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
     * @return \Etrias\PaazlConnector\StructType\LabelProduct
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
     * @return \Etrias\PaazlConnector\StructType\LabelProduct
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
     * @return \Etrias\PaazlConnector\StructType\LabelProduct
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\LabelProduct
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
