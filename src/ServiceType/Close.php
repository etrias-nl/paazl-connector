<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Close ServiceType
 * @subpackage Services
 */
class Close extends SoapClient
{
    /**
     * Method to call the operation originally named closeBatch
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\CloseBatchRequest $closeBatchRequest
     * @return \Etrias\PaazlConnector\StructType\CloseBatchResponse|bool
     */
    public function closeBatch(\Etrias\PaazlConnector\StructType\CloseBatchRequest $closeBatchRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->closeBatch($closeBatchRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\CloseBatchResponse
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
