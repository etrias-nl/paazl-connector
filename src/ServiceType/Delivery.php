<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Delivery ServiceType
 * @subpackage Services
 */
class Delivery extends SoapClient
{
    /**
     * Method to call the operation originally named deliveryEstimate
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\DeliveryEstimateRequest $deliveryEstimateRequest
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateResponse|bool
     */
    public function deliveryEstimate(\Etrias\PaazlConnector\StructType\DeliveryEstimateRequest $deliveryEstimateRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deliveryEstimate($deliveryEstimateRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateResponse
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
