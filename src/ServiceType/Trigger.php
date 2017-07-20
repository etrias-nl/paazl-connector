<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Trigger ServiceType
 * @subpackage Services
 */
class Trigger extends SoapClient
{
    /**
     * Method to call the operation originally named triggerCarrierRegistration
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\TriggerCarrierRegistrationRequest $triggerCarrierRegistrationRequest
     * @return \Etrias\PaazlConnector\StructType\TriggerCarrierRegistrationResponse|bool
     */
    public function triggerCarrierRegistration(\Etrias\PaazlConnector\StructType\TriggerCarrierRegistrationRequest $triggerCarrierRegistrationRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->triggerCarrierRegistration($triggerCarrierRegistrationRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\TriggerCarrierRegistrationResponse
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
