<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for List ServiceType
 * @subpackage Services
 */
class _List extends SoapClient
{
    /**
     * Method to call the operation originally named listOrders
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\ListOrdersRequest $listOrdersRequest
     * @return \Etrias\PaazlConnector\StructType\ListOrdersResponse|bool
     */
    public function listOrders(\Etrias\PaazlConnector\StructType\ListOrdersRequest $listOrdersRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->listOrders($listOrdersRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named listOpenBatches
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\ListOpenBatchesRequest $listOpenBatchesRequest
     * @return \Etrias\PaazlConnector\StructType\ListOpenBatchesResponse|bool
     */
    public function listOpenBatches(\Etrias\PaazlConnector\StructType\ListOpenBatchesRequest $listOpenBatchesRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->listOpenBatches($listOpenBatchesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named listStores
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\ListStoresRequest $listStoresRequest
     * @return \Etrias\PaazlConnector\StructType\ListStoresResponse|bool
     */
    public function listStores(\Etrias\PaazlConnector\StructType\ListStoresRequest $listStoresRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->listStores($listStoresRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\ListOpenBatchesResponse|\Etrias\PaazlConnector\StructType\ListOrdersResponse|\Etrias\PaazlConnector\StructType\ListStoresResponse
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
