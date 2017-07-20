<?php

namespace Etrias\PaazlConnector\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for checkoutStatusResponse StructType
 * @subpackage Structs
 */
class CheckoutStatusResponse extends AbstractStructBase
{
    /**
     * The error
     * @var \Etrias\PaazlConnector\StructType\ErrorType
     */
    public $error;
    /**
     * The locale
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $locale;
    /**
     * The callbackUrl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $callbackUrl;
    /**
     * The consignee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\Consignee
     */
    public $consignee;
    /**
     * The delivery
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\Delivery
     */
    public $delivery;
    /**
     * The notification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Etrias\PaazlConnector\StructType\Notification
     */
    public $notification;
    /**
     * Constructor method for checkoutStatusResponse
     * @uses CheckoutStatusResponse::setError()
     * @uses CheckoutStatusResponse::setLocale()
     * @uses CheckoutStatusResponse::setCallbackUrl()
     * @uses CheckoutStatusResponse::setConsignee()
     * @uses CheckoutStatusResponse::setDelivery()
     * @uses CheckoutStatusResponse::setNotification()
     * @param \Etrias\PaazlConnector\StructType\ErrorType $error
     * @param string $locale
     * @param string $callbackUrl
     * @param \Etrias\PaazlConnector\StructType\Consignee $consignee
     * @param \Etrias\PaazlConnector\StructType\Delivery $delivery
     * @param \Etrias\PaazlConnector\StructType\Notification $notification
     */
    public function __construct(\Etrias\PaazlConnector\StructType\ErrorType $error = null, $locale = null, $callbackUrl = null, \Etrias\PaazlConnector\StructType\Consignee $consignee = null, \Etrias\PaazlConnector\StructType\Delivery $delivery = null, \Etrias\PaazlConnector\StructType\Notification $notification = null)
    {
        $this
            ->setError($error)
            ->setLocale($locale)
            ->setCallbackUrl($callbackUrl)
            ->setConsignee($consignee)
            ->setDelivery($delivery)
            ->setNotification($notification);
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
     * @return \Etrias\PaazlConnector\StructType\CheckoutStatusResponse
     */
    public function setError(\Etrias\PaazlConnector\StructType\ErrorType $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get locale value
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }
    /**
     * Set locale value
     * @param string $locale
     * @return \Etrias\PaazlConnector\StructType\CheckoutStatusResponse
     */
    public function setLocale($locale = null)
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locale)), __LINE__);
        }
        $this->locale = $locale;
        return $this;
    }
    /**
     * Get callbackUrl value
     * @return string|null
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }
    /**
     * Set callbackUrl value
     * @param string $callbackUrl
     * @return \Etrias\PaazlConnector\StructType\CheckoutStatusResponse
     */
    public function setCallbackUrl($callbackUrl = null)
    {
        // validation for constraint: string
        if (!is_null($callbackUrl) && !is_string($callbackUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callbackUrl)), __LINE__);
        }
        $this->callbackUrl = $callbackUrl;
        return $this;
    }
    /**
     * Get consignee value
     * @return \Etrias\PaazlConnector\StructType\Consignee|null
     */
    public function getConsignee()
    {
        return $this->consignee;
    }
    /**
     * Set consignee value
     * @param \Etrias\PaazlConnector\StructType\Consignee $consignee
     * @return \Etrias\PaazlConnector\StructType\CheckoutStatusResponse
     */
    public function setConsignee(\Etrias\PaazlConnector\StructType\Consignee $consignee = null)
    {
        $this->consignee = $consignee;
        return $this;
    }
    /**
     * Get delivery value
     * @return \Etrias\PaazlConnector\StructType\Delivery|null
     */
    public function getDelivery()
    {
        return $this->delivery;
    }
    /**
     * Set delivery value
     * @param \Etrias\PaazlConnector\StructType\Delivery $delivery
     * @return \Etrias\PaazlConnector\StructType\CheckoutStatusResponse
     */
    public function setDelivery(\Etrias\PaazlConnector\StructType\Delivery $delivery = null)
    {
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * Get notification value
     * @return \Etrias\PaazlConnector\StructType\Notification|null
     */
    public function getNotification()
    {
        return $this->notification;
    }
    /**
     * Set notification value
     * @param \Etrias\PaazlConnector\StructType\Notification $notification
     * @return \Etrias\PaazlConnector\StructType\CheckoutStatusResponse
     */
    public function setNotification(\Etrias\PaazlConnector\StructType\Notification $notification = null)
    {
        $this->notification = $notification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Etrias\PaazlConnector\StructType\CheckoutStatusResponse
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
