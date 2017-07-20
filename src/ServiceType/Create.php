<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 */
class Create extends SoapClient
{
    /**
     * Method to call the operation originally named createPickupRequest
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest $createPickupRequestRequest
     * @return \Etrias\PaazlConnector\StructType\CreatePickupRequestResponse|bool
     */
    public function createPickupRequest(\Etrias\PaazlConnector\StructType\CreatePickupRequestRequest $createPickupRequestRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->createPickupRequest($createPickupRequestRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createStores
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\ChangeStoresRequestType $createStoresRequest
     * @return \Etrias\PaazlConnector\StructType\ChangeStoresResponseType|bool
     */
    public function createStores(\Etrias\PaazlConnector\StructType\ChangeStoresRequestType $createStoresRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->createStores($createStoresRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\ChangeStoresResponseType|\Etrias\PaazlConnector\StructType\CreatePickupRequestResponse
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
