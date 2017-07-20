<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Open ServiceType
 * @subpackage Services
 */
class Open extends SoapClient
{
    /**
     * Method to call the operation originally named openBatch
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\OpenBatchRequest $openBatchRequest
     * @return \Etrias\PaazlConnector\StructType\OpenBatchResponse|bool
     */
    public function openBatch(\Etrias\PaazlConnector\StructType\OpenBatchRequest $openBatchRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->openBatch($openBatchRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\OpenBatchResponse
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
