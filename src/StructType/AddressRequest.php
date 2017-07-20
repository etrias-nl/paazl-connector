<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addressRequest StructType
 * @subpackage Structs
 */
class AddressRequest extends AbstractStructBase
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
     * The orderReference
     * @var string
     */
    public $orderReference;
    /**
     * The zipcode
     * @var string
     */
    public $zipcode;
    /**
     * The housenumber
     * @var string
     */
    public $housenumber;
    /**
     * The addition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $addition;
    /**
     * Constructor method for addressRequest
     * @uses AddressRequest::setHash()
     * @uses AddressRequest::setWebshop()
     * @uses AddressRequest::setTargetWebshop()
     * @uses AddressRequest::setOrderReference()
     * @uses AddressRequest::setZipcode()
     * @uses AddressRequest::setHousenumber()
     * @uses AddressRequest::setAddition()
     * @param string $hash
     * @param int $webshop
     * @param int $targetWebshop
     * @param string $orderReference
     * @param string $zipcode
     * @param string $housenumber
     * @param string $addition
     */
    public function __construct($hash = null, $webshop = null, $targetWebshop = null, $orderReference = null, $zipcode = null, $housenumber = null, $addition = null)
    {
        $this
            ->setHash($hash)
            ->setWebshop($webshop)
            ->setTargetWebshop($targetWebshop)
            ->setOrderReference($orderReference)
            ->setZipcode($zipcode)
            ->setHousenumber($housenumber)
            ->setAddition($addition);
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
     * @return \Etrias\PaazlConnector\StructType\AddressRequest
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
     * @return \Etrias\PaazlConnector\StructType\AddressRequest
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
     * @return \Etrias\PaazlConnector\StructType\AddressRequest
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
     * Get orderReference value
     * @return string|null
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }
    /**
     * Set orderReference value
     * @param string $orderReference
     * @return \Etrias\PaazlConnector\StructType\AddressRequest
     */
    public function setOrderReference($orderReference = null)
    {
        // validation for constraint: string
        if (!is_null($orderReference) && !is_string($orderReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderReference)), __LINE__);
        }
        $this->orderReference = $orderReference;
        return $this;
    }
    /**
     * Get zipcode value
     * @return string|null
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }
    /**
     * Set zipcode value
     * @param string $zipcode
     * @return \Etrias\PaazlConnector\StructType\AddressRequest
     */
    public function setZipcode($zipcode = null)
    {
        // validation for constraint: string
        if (!is_null($zipcode) && !is_string($zipcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zipcode)), __LINE__);
        }
        $this->zipcode = $zipcode;
        return $this;
    }
    /**
     * Get housenumber value
     * @return string|null
     */
    public function getHousenumber()
    {
        return $this->housenumber;
    }
    /**
     * Set housenumber value
     * @param string $housenumber
     * @return \Etrias\PaazlConnector\StructType\AddressRequest
     */
    public function setHousenumber($housenumber = null)
    {
        // validation for constraint: string
        if (!is_null($housenumber) && !is_string($housenumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($housenumber)), __LINE__);
        }
        $this->housenumber = $housenumber;
        return $this;
    }
    /**
     * Get addition value
     * @return string|null
     */
    public function getAddition()
    {
        return $this->addition;
    }
    /**
     * Set addition value
     * @param string $addition
     * @return \Etrias\PaazlConnector\StructType\AddressRequest
     */
    public function setAddition($addition = null)
    {
        // validation for constraint: string
        if (!is_null($addition) && !is_string($addition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addition)), __LINE__);
        }
        $this->addition = $addition;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\AddressRequest
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
