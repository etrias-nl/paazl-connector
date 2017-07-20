<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Google ServiceType
 * @subpackage Services
 */
class Google extends SoapClient
{
    /**
     * Method to call the operation originally named googleMapSearchstring
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\GoogleMapSearchstringRequest $googleMapSearchstringRequest
     * @return \Etrias\PaazlConnector\StructType\GoogleMapSearchstringResponse|bool
     */
    public function googleMapSearchstring(\Etrias\PaazlConnector\StructType\GoogleMapSearchstringRequest $googleMapSearchstringRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->googleMapSearchstring($googleMapSearchstringRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\GoogleMapSearchstringResponse
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
