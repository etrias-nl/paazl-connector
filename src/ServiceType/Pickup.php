<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Pickup ServiceType
 * @subpackage Services
 */
class Pickup extends SoapClient
{
    /**
     * Method to call the operation originally named pickupRequestDetails
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\PickupRequestQueryType $pickupRequestDetailsRequest
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse|bool
     */
    public function pickupRequestDetails(\Etrias\PaazlConnector\StructType\PickupRequestQueryType $pickupRequestDetailsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->pickupRequestDetails($pickupRequestDetailsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named pickupRequestStatus
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\PickupRequestQueryType $pickupRequestStatusRequest
     * @return \Etrias\PaazlConnector\StructType\PickupRequestStatusResponse|bool
     */
    public function pickupRequestStatus(\Etrias\PaazlConnector\StructType\PickupRequestQueryType $pickupRequestStatusRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->pickupRequestStatus($pickupRequestStatusRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named pickupRequestOptions
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\PickupRequestOptionsRequest $pickupRequestOptionsRequest
     * @return \Etrias\PaazlConnector\StructType\PickupRequestOptionsResponse|bool
     */
    public function pickupRequestOptions(\Etrias\PaazlConnector\StructType\PickupRequestOptionsRequest $pickupRequestOptionsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->pickupRequestOptions($pickupRequestOptionsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse|\Etrias\PaazlConnector\StructType\PickupRequestOptionsResponse|\Etrias\PaazlConnector\StructType\PickupRequestStatusResponse
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
