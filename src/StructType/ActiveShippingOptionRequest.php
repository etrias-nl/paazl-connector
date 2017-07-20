<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for activeShippingOptionRequest StructType
 * @subpackage Structs
 */
class ActiveShippingOptionRequest extends AbstractStructBase
{
    /**
     * The webshop
     * @var int
     */
    public $webshop;
    /**
     * The apiKey
     * @var string
     */
    public $apiKey;
    /**
     * Constructor method for activeShippingOptionRequest
     * @uses ActiveShippingOptionRequest::setWebshop()
     * @uses ActiveShippingOptionRequest::setApiKey()
     * @param int $webshop
     * @param string $apiKey
     */
    public function __construct($webshop = null, $apiKey = null)
    {
        $this
            ->setWebshop($webshop)
            ->setApiKey($apiKey);
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
     * @return \Etrias\PaazlConnector\StructType\ActiveShippingOptionRequest
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
     * Get apiKey value
     * @return string|null
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }
    /**
     * Set apiKey value
     * @param string $apiKey
     * @return \Etrias\PaazlConnector\StructType\ActiveShippingOptionRequest
     */
    public function setApiKey($apiKey = null)
    {
        // validation for constraint: string
        if (!is_null($apiKey) && !is_string($apiKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($apiKey)), __LINE__);
        }
        $this->apiKey = $apiKey;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ActiveShippingOptionRequest
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
