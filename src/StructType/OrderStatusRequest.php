<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for orderStatusRequest StructType
 * @subpackage Structs
 */
class OrderStatusRequest extends AbstractStructBase
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
     * The includeLabels
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $includeLabels;
    /**
     * The carrierStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $carrierStatus;
    /**
     * Constructor method for orderStatusRequest
     * @uses OrderStatusRequest::setHash()
     * @uses OrderStatusRequest::setWebshop()
     * @uses OrderStatusRequest::setTargetWebshop()
     * @uses OrderStatusRequest::setOrderReference()
     * @uses OrderStatusRequest::setIncludeLabels()
     * @uses OrderStatusRequest::setCarrierStatus()
     * @param string $hash
     * @param int $webshop
     * @param int $targetWebshop
     * @param string $orderReference
     * @param bool $includeLabels
     * @param bool $carrierStatus
     */
    public function __construct($hash = null, $webshop = null, $targetWebshop = null, $orderReference = null, $includeLabels = null, $carrierStatus = null)
    {
        $this
            ->setHash($hash)
            ->setWebshop($webshop)
            ->setTargetWebshop($targetWebshop)
            ->setOrderReference($orderReference)
            ->setIncludeLabels($includeLabels)
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
     * @return \Etrias\PaazlConnector\StructType\OrderStatusRequest
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
     * @return \Etrias\PaazlConnector\StructType\OrderStatusRequest
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
     * @return \Etrias\PaazlConnector\StructType\OrderStatusRequest
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
     * @return \Etrias\PaazlConnector\StructType\OrderStatusRequest
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
     * Get includeLabels value
     * @return bool|null
     */
    public function getIncludeLabels()
    {
        return $this->includeLabels;
    }
    /**
     * Set includeLabels value
     * @param bool $includeLabels
     * @return \Etrias\PaazlConnector\StructType\OrderStatusRequest
     */
    public function setIncludeLabels($includeLabels = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeLabels) && !is_bool($includeLabels)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeLabels)), __LINE__);
        }
        $this->includeLabels = $includeLabels;
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
     * @return \Etrias\PaazlConnector\StructType\OrderStatusRequest
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
     * @return \Etrias\PaazlConnector\StructType\OrderStatusRequest
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