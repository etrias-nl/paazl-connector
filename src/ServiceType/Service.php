<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Service ServiceType
 * @subpackage Services
 */
class Service extends SoapClient
{
    /**
     * Method to call the operation originally named servicePoints
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\ServicePointsRequest $servicePointsRequest
     * @return \Etrias\PaazlConnector\StructType\ServicePointsResponse|bool
     */
    public function servicePoints(\Etrias\PaazlConnector\StructType\ServicePointsRequest $servicePointsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->servicePoints($servicePointsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\ServicePointsResponse
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
