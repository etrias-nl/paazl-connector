<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Address ServiceType
 * @subpackage Services
 */
class Address extends SoapClient
{
    /**
     * Method to call the operation originally named address
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\AddressRequest $addressRequest
     * @return \Etrias\PaazlConnector\StructType\AddressResponse|bool
     */
    public function address(\Etrias\PaazlConnector\StructType\AddressRequest $addressRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->address($addressRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\AddressResponse
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
