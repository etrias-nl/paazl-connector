<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for openBatchRequest StructType
 * @subpackage Structs
 */
class OpenBatchRequest extends AbstractStructBase
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
     * The distributor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $distributor;
    /**
     * The shippingOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shippingOption;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $country;
    /**
     * Constructor method for openBatchRequest
     * @uses OpenBatchRequest::setHash()
     * @uses OpenBatchRequest::setWebshop()
     * @uses OpenBatchRequest::setTargetWebshop()
     * @uses OpenBatchRequest::setDistributor()
     * @uses OpenBatchRequest::setShippingOption()
     * @uses OpenBatchRequest::setCountry()
     * @param string $hash
     * @param int $webshop
     * @param int $targetWebshop
     * @param string $distributor
     * @param string $shippingOption
     * @param string $country
     */
    public function __construct($hash = null, $webshop = null, $targetWebshop = null, $distributor = null, $shippingOption = null, $country = null)
    {
        $this
            ->setHash($hash)
            ->setWebshop($webshop)
            ->setTargetWebshop($targetWebshop)
            ->setDistributor($distributor)
            ->setShippingOption($shippingOption)
            ->setCountry($country);
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
     * @return \Etrias\PaazlConnector\StructType\OpenBatchRequest
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
     * @return \Etrias\PaazlConnector\StructType\OpenBatchRequest
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
     * @return \Etrias\PaazlConnector\StructType\OpenBatchRequest
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
     * Get distributor value
     * @return string|null
     */
    public function getDistributor()
    {
        return $this->distributor;
    }
    /**
     * Set distributor value
     * @param string $distributor
     * @return \Etrias\PaazlConnector\StructType\OpenBatchRequest
     */
    public function setDistributor($distributor = null)
    {
        // validation for constraint: string
        if (!is_null($distributor) && !is_string($distributor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($distributor)), __LINE__);
        }
        $this->distributor = $distributor;
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
     * @return \Etrias\PaazlConnector\StructType\OpenBatchRequest
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
     * @return \Etrias\PaazlConnector\StructType\OpenBatchRequest
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\OpenBatchRequest
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
