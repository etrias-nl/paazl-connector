<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Active ServiceType
 * @subpackage Services
 */
class Active extends SoapClient
{
    /**
     * Method to call the operation originally named activeShippingOption
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\ActiveShippingOptionRequest $activeShippingOptionRequest
     * @return \Etrias\PaazlConnector\StructType\ActiveShippingOptionResponse|bool
     */
    public function activeShippingOption(\Etrias\PaazlConnector\StructType\ActiveShippingOptionRequest $activeShippingOptionRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->activeShippingOption($activeShippingOptionRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\ActiveShippingOptionResponse
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
