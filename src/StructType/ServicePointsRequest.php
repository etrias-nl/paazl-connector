<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for servicePointsRequest StructType
 * @subpackage Structs
 */
class ServicePointsRequest extends AbstractStructBase
{
    /**
     * The hash
     * @var string
     */
    public $hash;
    /**
     * The webshop
     * @var int
     */
    public $webshop;
    /**
     * The targetWebshop
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $targetWebshop;
    /**
     * The shippingOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shippingOption;
    /**
     * The evening
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $evening;
    /**
     * The weekend
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $weekend;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - default: NL
     * - minOccurs: 0
     * @var string
     */
    public $country;
    /**
     * The postcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $postcode;
    /**
     * The limit
     * Meta informations extracted from the WSDL
     * - default: 5
     * - minOccurs: 0
     * @var int
     */
    public $limit;
    /**
     * The southWest
     * @var \Etrias\PaazlConnector\StructType\CoordinatesType
     */
    public $southWest;
    /**
     * The northEast
     * @var \Etrias\PaazlConnector\StructType\CoordinatesType
     */
    public $northEast;
    /**
     * Constructor method for servicePointsRequest
     * @uses ServicePointsRequest::setHash()
     * @uses ServicePointsRequest::setWebshop()
     * @uses ServicePointsRequest::setTargetWebshop()
     * @uses ServicePointsRequest::setShippingOption()
     * @uses ServicePointsRequest::setEvening()
     * @uses ServicePointsRequest::setWeekend()
     * @uses ServicePointsRequest::setCountry()
     * @uses ServicePointsRequest::setPostcode()
     * @uses ServicePointsRequest::setLimit()
     * @uses ServicePointsRequest::setSouthWest()
     * @uses ServicePointsRequest::setNorthEast()
     * @param string $hash
     * @param int $webshop
     * @param int $targetWebshop
     * @param string $shippingOption
     * @param bool $evening
     * @param bool $weekend
     * @param string $country
     * @param string $postcode
     * @param int $limit
     * @param \Etrias\PaazlConnector\StructType\CoordinatesType $southWest
     * @param \Etrias\PaazlConnector\StructType\CoordinatesType $northEast
     */
    public function __construct($hash = null, $webshop = null, $targetWebshop = null, $shippingOption = null, $evening = null, $weekend = null, $country = 'NL', $postcode = null, $limit = '5', \Etrias\PaazlConnector\StructType\CoordinatesType $southWest = null, \Etrias\PaazlConnector\StructType\CoordinatesType $northEast = null)
    {
        $this
            ->setHash($hash)
            ->setWebshop($webshop)
            ->setTargetWebshop($targetWebshop)
            ->setShippingOption($shippingOption)
            ->setEvening($evening)
            ->setWeekend($weekend)
            ->setCountry($country)
            ->setPostcode($postcode)
            ->setLimit($limit)
            ->setSouthWest($southWest)
            ->setNorthEast($northEast);
    }
    /**
     * Get hash value
     * @return string|null
     */
    public function getHash()
    {
        return $this->hash;
    }
    /**
     * Set hash value
     * @param string $hash
     * @return \Etrias\PaazlConnector\StructType\ServicePointsRequest
     */
    public function setHash($hash = null)
    {
        // validation for constraint: string
        if (!is_null($hash) && !is_string($hash)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hash)), __LINE__);
        }
        $this->hash = $hash;
        return $this;
    }
    /**
     * Get webshop value
     * @return int|null
     */
    public function getWebshop()
    {
        return $this->webshop;
    }
    /**
     * Set webshop value
     * @param int $webshop
     * @return \Etrias\PaazlConnector\StructType\ServicePointsRequest
     */
    public function setWebshop($webshop = null)
    {
        // validation for constraint: int
        if (!is_null($webshop) && !is_numeric($webshop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($webshop)), __LINE__);
        }
        $this->webshop = $webshop;
        return $this;
    }
    /**
     * Get targetWebshop value
     * @return int|null
     */
    public function getTargetWebshop()
    {
        return $this->targetWebshop;
    }
    /**
     * Set targetWebshop value
     * @param int $targetWebshop
     * @return \Etrias\PaazlConnector\StructType\ServicePointsRequest
     */
    public function setTargetWebshop($targetWebshop = null)
    {
        // validation for constraint: int
        if (!is_null($targetWebshop) && !is_numeric($targetWebshop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($targetWebshop)), __LINE__);
        }
        $this->targetWebshop = $targetWebshop;
        return $this;
    }
    /**
     * Get shippingOption value
     * @return string|null
     */
    public function getShippingOption()
    {
        return $this->shippingOption;
    }
    /**
     * Set shippingOption value
     * @param string $shippingOption
     * @return \Etrias\PaazlConnector\StructType\ServicePointsRequest
     */
    public function setShippingOption($shippingOption = null)
    {
        // validation for constraint: string
        if (!is_null($shippingOption) && !is_string($shippingOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingOption)), __LINE__);
        }
        $this->shippingOption = $shippingOption;
        return $this;
    }
    /**
     * Get evening value
     * @return bool|null
     */
    public function getEvening()
    {
        return $this->evening;
    }
    /**
     * Set evening value
     * @param bool $evening
     * @return \Etrias\PaazlConnector\StructType\ServicePointsRequest
     */
    public function setEvening($evening = null)
    {
        // validation for constraint: boolean
        if (!is_null($evening) && !is_bool($evening)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($evening)), __LINE__);
        }
        $this->evening = $evening;
        return $this;
    }
    /**
     * Get weekend value
     * @return bool|null
     */
    public function getWeekend()
    {
        return $this->weekend;
    }
    /**
     * Set weekend value
     * @param bool $weekend
     * @return \Etrias\PaazlConnector\StructType\ServicePointsRequest
     */
    public function setWeekend($weekend = null)
    {
        // validation for constraint: boolean
        if (!is_null($weekend) && !is_bool($weekend)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($weekend)), __LINE__);
        }
        $this->weekend = $weekend;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Etrias\PaazlConnector\StructType\ServicePointsRequest
     */
    public function setCountry($country = 'NL')
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get postcode value
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->postcode;
    }
    /**
     * Set postcode value
     * @param string $postcode
     * @return \Etrias\PaazlConnector\StructType\ServicePointsRequest
     */
    public function setPostcode($postcode = null)
    {
        // validation for constraint: string
        if (!is_null($postcode) && !is_string($postcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postcode)), __LINE__);
        }
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * Get limit value
     * @return int|null
     */
    public function getLimit()
    {
        return $this->limit;
    }
    /**
     * Set limit value
     * @param int $limit
     * @return \Etrias\PaazlConnector\StructType\ServicePointsRequest
     */
    public function setLimit($limit = '5')
    {
        // validation for constraint: int
        if (!is_null($limit) && !is_numeric($limit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($limit)), __LINE__);
        }
        $this->limit = $limit;
        return $this;
    }
    /**
     * Get southWest value
     * @return \Etrias\PaazlConnector\StructType\CoordinatesType|null
     */
    public function getSouthWest()
    {
        return $this->southWest;
    }
    /**
     * Set southWest value
     * @param \Etrias\PaazlConnector\StructType\CoordinatesType $southWest
     * @return \Etrias\PaazlConnector\StructType\ServicePointsRequest
     */
    public function setSouthWest(\Etrias\PaazlConnector\StructType\CoordinatesType $southWest = null)
    {
        $this->southWest = $southWest;
        return $this;
    }
    /**
     * Get northEast value
     * @return \Etrias\PaazlConnector\StructType\CoordinatesType|null
     */
    public function getNorthEast()
    {
        return $this->northEast;
    }
    /**
     * Set northEast value
     * @param \Etrias\PaazlConnector\StructType\CoordinatesType $northEast
     * @return \Etrias\PaazlConnector\StructType\ServicePointsRequest
     */
    public function setNorthEast(\Etrias\PaazlConnector\StructType\CoordinatesType $northEast = null)
    {
        $this->northEast = $northEast;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ServicePointsRequest
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
