<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for listOrdersRequest StructType
 * @subpackage Structs
 */
class ListOrdersRequest extends AbstractStructBase
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
     * The changedSince
     * @var string
     */
    public $changedSince;
    /**
     * The page
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $page;
    /**
     * The carrierStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $carrierStatus;
    /**
     * Constructor method for listOrdersRequest
     * @uses ListOrdersRequest::setHash()
     * @uses ListOrdersRequest::setWebshop()
     * @uses ListOrdersRequest::setTargetWebshop()
     * @uses ListOrdersRequest::setChangedSince()
     * @uses ListOrdersRequest::setPage()
     * @uses ListOrdersRequest::setCarrierStatus()
     * @param string $hash
     * @param int $webshop
     * @param int $targetWebshop
     * @param string $changedSince
     * @param int $page
     * @param bool $carrierStatus
     */
    public function __construct($hash = null, $webshop = null, $targetWebshop = null, $changedSince = null, $page = null, $carrierStatus = null)
    {
        $this
            ->setHash($hash)
            ->setWebshop($webshop)
            ->setTargetWebshop($targetWebshop)
            ->setChangedSince($changedSince)
            ->setPage($page)
            ->setCarrierStatus($carrierStatus);
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
     * @return \Etrias\PaazlConnector\StructType\ListOrdersRequest
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
     * @return \Etrias\PaazlConnector\StructType\ListOrdersRequest
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
     * @return \Etrias\PaazlConnector\StructType\ListOrdersRequest
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
     * Get changedSince value
     * @return string|null
     */
    public function getChangedSince()
    {
        return $this->changedSince;
    }
    /**
     * Set changedSince value
     * @param string $changedSince
     * @return \Etrias\PaazlConnector\StructType\ListOrdersRequest
     */
    public function setChangedSince($changedSince = null)
    {
        // validation for constraint: string
        if (!is_null($changedSince) && !is_string($changedSince)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($changedSince)), __LINE__);
        }
        $this->changedSince = $changedSince;
        return $this;
    }
    /**
     * Get page value
     * @return int|null
     */
    public function getPage()
    {
        return $this->page;
    }
    /**
     * Set page value
     * @param int $page
     * @return \Etrias\PaazlConnector\StructType\ListOrdersRequest
     */
    public function setPage($page = null)
    {
        // validation for constraint: int
        if (!is_null($page) && !is_numeric($page)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($page)), __LINE__);
        }
        $this->page = $page;
        return $this;
    }
    /**
     * Get carrierStatus value
     * @return bool|null
     */
    public function getCarrierStatus()
    {
        return $this->carrierStatus;
    }
    /**
     * Set carrierStatus value
     * @param bool $carrierStatus
     * @return \Etrias\PaazlConnector\StructType\ListOrdersRequest
     */
    public function setCarrierStatus($carrierStatus = null)
    {
        // validation for constraint: boolean
        if (!is_null($carrierStatus) && !is_bool($carrierStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($carrierStatus)), __LINE__);
        }
        $this->carrierStatus = $carrierStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\ListOrdersRequest
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
