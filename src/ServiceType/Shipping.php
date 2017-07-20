<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Shipping ServiceType
 * @subpackage Services
 */
class Shipping extends SoapClient
{
    /**
     * Method to call the operation originally named shippingOption
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\ShippingOptionRequest $shippingOptionRequest
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionResponse|bool
     */
    public function shippingOption(\Etrias\PaazlConnector\StructType\ShippingOptionRequest $shippingOptionRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->shippingOption($shippingOptionRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionResponse
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
