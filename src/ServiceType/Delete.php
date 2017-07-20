<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends SoapClient
{
    /**
     * Method to call the operation originally named deleteStores
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\DeleteStoresRequest $deleteStoresRequest
     * @return \Etrias\PaazlConnector\StructType\DeleteStoresResponse|bool
     */
    public function deleteStores(\Etrias\PaazlConnector\StructType\DeleteStoresRequest $deleteStoresRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deleteStores($deleteStoresRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteOrder
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\DeleteOrderRequest $deleteOrderRequest
     * @return \Etrias\PaazlConnector\StructType\DeleteOrderResponse|bool
     */
    public function deleteOrder(\Etrias\PaazlConnector\StructType\DeleteOrderRequest $deleteOrderRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deleteOrder($deleteOrderRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\DeleteOrderResponse|\Etrias\PaazlConnector\StructType\DeleteStoresResponse
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
