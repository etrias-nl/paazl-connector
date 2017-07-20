<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Order ServiceType
 * @subpackage Services
 */
class Order extends SoapClient
{
    /**
     * Method to call the operation originally named orderDetails
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\OrderDetailsRequest $orderDetailsRequest
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse|bool
     */
    public function orderDetails(\Etrias\PaazlConnector\StructType\OrderDetailsRequest $orderDetailsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->orderDetails($orderDetailsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named order
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\OrderRequest $orderRequest
     * @return \Etrias\PaazlConnector\StructType\OrderSaveResponseType|bool
     */
    public function order(\Etrias\PaazlConnector\StructType\OrderRequest $orderRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->order($orderRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named orderStatus
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\OrderStatusRequest $orderStatusRequest
     * @return \Etrias\PaazlConnector\StructType\OrderStatusResponse|bool
     */
    public function orderStatus(\Etrias\PaazlConnector\StructType\OrderStatusRequest $orderStatusRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->orderStatus($orderStatusRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse|\Etrias\PaazlConnector\StructType\OrderSaveResponseType|\Etrias\PaazlConnector\StructType\OrderStatusResponse
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
