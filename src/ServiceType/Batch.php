<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Batch ServiceType
 * @subpackage Services
 */
class Batch extends SoapClient
{
    /**
     * Method to call the operation originally named batchStatus
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\BatchStatusRequest $batchStatusRequest
     * @return \Etrias\PaazlConnector\StructType\BatchStatusResponse|bool
     */
    public function batchStatus(\Etrias\PaazlConnector\StructType\BatchStatusRequest $batchStatusRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->batchStatus($batchStatusRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\BatchStatusResponse
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
