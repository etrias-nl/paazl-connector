<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Cancel ServiceType
 * @subpackage Services
 */
class Cancel extends SoapClient
{
    /**
     * Method to call the operation originally named cancelShipments
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\CancelShipmentsRequest $cancelShipmentsRequest
     * @return \Etrias\PaazlConnector\StructType\CancelShipmentsResponse|bool
     */
    public function cancelShipments(\Etrias\PaazlConnector\StructType\CancelShipmentsRequest $cancelShipmentsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->cancelShipments($cancelShipmentsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named cancelPickupRequest
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\PickupRequestQueryType $cancelPickupRequestRequest
     * @return \Etrias\PaazlConnector\StructType\CancelPickupRequestResponse|bool
     */
    public function cancelPickupRequest(\Etrias\PaazlConnector\StructType\PickupRequestQueryType $cancelPickupRequestRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->cancelPickupRequest($cancelPickupRequestRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\CancelPickupRequestResponse|\Etrias\PaazlConnector\StructType\CancelShipmentsResponse
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
