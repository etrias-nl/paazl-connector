<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Commit ServiceType
 * @subpackage Services
 */
class Commit extends SoapClient
{
    /**
     * Method to call the operation originally named commitOrder
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\CommitOrderRequest $commitOrderRequest
     * @return \Etrias\PaazlConnector\StructType\OrderSaveResponseType|bool
     */
    public function commitOrder(\Etrias\PaazlConnector\StructType\CommitOrderRequest $commitOrderRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->commitOrder($commitOrderRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\OrderSaveResponseType
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
