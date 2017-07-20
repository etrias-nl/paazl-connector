<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Rate ServiceType
 * @subpackage Services
 */
class Rate extends SoapClient
{
    /**
     * Method to call the operation originally named rate
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\RateRequest $rateRequest
     * @return \Etrias\PaazlConnector\StructType\RateResponse|bool
     */
    public function rate(\Etrias\PaazlConnector\StructType\RateRequest $rateRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->rate($rateRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\RateResponse
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
