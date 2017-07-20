<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Update ServiceType
 * @subpackage Services
 */
class Update extends SoapClient
{
    /**
     * Method to call the operation originally named updateOrder
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\UpdateOrderRequest $updateOrderRequest
     * @return \Etrias\PaazlConnector\StructType\OrderSaveResponseType|bool
     */
    public function updateOrder(\Etrias\PaazlConnector\StructType\UpdateOrderRequest $updateOrderRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->updateOrder($updateOrderRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateStores
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\ChangeStoresRequestType $updateStoresRequest
     * @return \Etrias\PaazlConnector\StructType\ChangeStoresResponseType|bool
     */
    public function updateStores(\Etrias\PaazlConnector\StructType\ChangeStoresRequestType $updateStoresRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->updateStores($updateStoresRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\ChangeStoresResponseType|\Etrias\PaazlConnector\StructType\OrderSaveResponseType
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
