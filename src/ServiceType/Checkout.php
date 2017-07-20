<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Checkout ServiceType
 * @subpackage Services
 */
class Checkout extends SoapClient
{
    /**
     * Method to call the operation originally named checkoutStatus
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\BaseCheckoutRequestType $checkoutStatusRequest
     * @return \Etrias\PaazlConnector\StructType\CheckoutStatusResponse|bool
     */
    public function checkoutStatus(\Etrias\PaazlConnector\StructType\BaseCheckoutRequestType $checkoutStatusRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->checkoutStatus($checkoutStatusRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named checkout
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\BaseCheckoutRequestType $checkoutRequest
     * @return \Etrias\PaazlConnector\StructType\CheckoutResponse|bool
     */
    public function checkout(\Etrias\PaazlConnector\StructType\BaseCheckoutRequestType $checkoutRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->checkout($checkoutRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\CheckoutResponse|\Etrias\PaazlConnector\StructType\CheckoutStatusResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
