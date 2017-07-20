<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Validate ServiceType
 * @subpackage Services
 */
class Validate extends SoapClient
{
    /**
     * Method to call the operation originally named validateOrder
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\ValidateOrderRequest $validateOrderRequest
     * @return \Etrias\PaazlConnector\StructType\ValidateOrderResponseType|bool
     */
    public function validateOrder(\Etrias\PaazlConnector\StructType\ValidateOrderRequest $validateOrderRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->validateOrder($validateOrderRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\ValidateOrderResponseType
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
