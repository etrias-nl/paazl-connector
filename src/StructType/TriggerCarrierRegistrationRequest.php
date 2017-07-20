<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for triggerCarrierRegistrationRequest StructType
 * @subpackage Structs
 */
class TriggerCarrierRegistrationRequest extends AbstractStructBase
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
     * The barcodes
     * @var \Etrias\PaazlConnector\StructType\TriggerBarcodeRequestType
     */
    public $barcodes;
    /**
     * Constructor method for triggerCarrierRegistrationRequest
     * @uses TriggerCarrierRegistrationRequest::setHash()
     * @uses TriggerCarrierRegistrationRequest::setWebshop()
     * @uses TriggerCarrierRegistrationRequest::setBarcodes()
     * @param string $hash
     * @param int $webshop
     * @param \Etrias\PaazlConnector\StructType\TriggerBarcodeRequestType $barcodes
     */
    public function __construct($hash = null, $webshop = null, \Etrias\PaazlConnector\StructType\TriggerBarcodeRequestType $barcodes = null)
    {
        $this
            ->setHash($hash)
            ->setWebshop($webshop)
            ->setBarcodes($barcodes);
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
     * @return \Etrias\PaazlConnector\StructType\TriggerCarrierRegistrationRequest
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
     * @return \Etrias\PaazlConnector\StructType\TriggerCarrierRegistrationRequest
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
     * Get barcodes value
     * @return \Etrias\PaazlConnector\StructType\TriggerBarcodeRequestType|null
     */
    public function getBarcodes()
    {
        return $this->barcodes;
    }
    /**
     * Set barcodes value
     * @param \Etrias\PaazlConnector\StructType\TriggerBarcodeRequestType $barcodes
     * @return \Etrias\PaazlConnector\StructType\TriggerCarrierRegistrationRequest
     */
    public function setBarcodes(\Etrias\PaazlConnector\StructType\TriggerBarcodeRequestType $barcodes = null)
    {
        $this->barcodes = $barcodes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\TriggerCarrierRegistrationRequest
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
