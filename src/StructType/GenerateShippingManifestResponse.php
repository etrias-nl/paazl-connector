<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateShippingManifestResponse StructType
 * @subpackage Structs
 */
class GenerateShippingManifestResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The shippingManifest
     * @var string
     */
    public $shippingManifest;
    /**
     * Constructor method for generateShippingManifestResponse
     * @uses GenerateShippingManifestResponse::setError()
     * @uses GenerateShippingManifestResponse::setShippingManifest()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param string $shippingManifest
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, $shippingManifest = null)
    {
        $this
            ->setError($error)
            ->setShippingManifest($shippingManifest);
    }
    /**
     * Get error value
     * @return \Etrias\PaazlConnector\StructType\ErrorType|null
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @return \Etrias\PaazlConnector\StructType\GenerateShippingManifestResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get shippingManifest value
     * @return string|null
     */
    public function getShippingManifest()
    {
        return $this->shippingManifest;
    }
    /**
     * Set shippingManifest value
     * @param string $shippingManifest
     * @return \Etrias\PaazlConnector\StructType\GenerateShippingManifestResponse
     */
    public function setShippingManifest($shippingManifest = null)
    {
        // validation for constraint: string
        if (!is_null($shippingManifest) && !is_string($shippingManifest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingManifest)), __LINE__);
        }
        $this->shippingManifest = $shippingManifest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\GenerateShippingManifestResponse
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
