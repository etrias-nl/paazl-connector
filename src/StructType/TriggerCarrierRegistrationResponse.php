<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for triggerCarrierRegistrationResponse StructType
 * @subpackage Structs
 */
class TriggerCarrierRegistrationResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The shippingLabels
     * @var \Etrias\PaazlConnector\StructType\ShippingLabels
     */
    public $shippingLabels;
    /**
     * Constructor method for triggerCarrierRegistrationResponse
     * @uses TriggerCarrierRegistrationResponse::setError()
     * @uses TriggerCarrierRegistrationResponse::setShippingLabels()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param \Etrias\PaazlConnector\StructType\ShippingLabels $shippingLabels
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, \Etrias\PaazlConnector\StructType\ShippingLabels $shippingLabels = null)
    {
        $this
            ->setError($error)
            ->setShippingLabels($shippingLabels);
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
     * @return \Etrias\PaazlConnector\StructType\TriggerCarrierRegistrationResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get shippingLabels value
     * @return \Etrias\PaazlConnector\StructType\ShippingLabels|null
     */
    public function getShippingLabels()
    {
        return $this->shippingLabels;
    }
    /**
     * Set shippingLabels value
     * @param \Etrias\PaazlConnector\StructType\ShippingLabels $shippingLabels
     * @return \Etrias\PaazlConnector\StructType\TriggerCarrierRegistrationResponse
     */
    public function setShippingLabels(\Etrias\PaazlConnector\StructType\ShippingLabels $shippingLabels = null)
    {
        $this->shippingLabels = $shippingLabels;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\TriggerCarrierRegistrationResponse
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
