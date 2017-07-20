<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Proof ServiceType
 * @subpackage Services
 */
class Proof extends SoapClient
{
    /**
     * Method to call the operation originally named proofOfDelivery
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\ProofOfDeliveryRequest $proofOfDeliveryRequest
     * @return \Etrias\PaazlConnector\StructType\ProofOfDeliveryResponse|bool
     */
    public function proofOfDelivery(\Etrias\PaazlConnector\StructType\ProofOfDeliveryRequest $proofOfDeliveryRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->proofOfDelivery($proofOfDeliveryRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\ProofOfDeliveryResponse
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
