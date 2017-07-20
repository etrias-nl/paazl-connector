<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Change ServiceType
 * @subpackage Services
 */
class Change extends SoapClient
{
    /**
     * Method to call the operation originally named changeOrder
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\ChangeOrderRequest $changeOrderRequest
     * @return \Etrias\PaazlConnector\StructType\OrderSaveResponseType|bool
     */
    public function changeOrder(\Etrias\PaazlConnector\StructType\ChangeOrderRequest $changeOrderRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->changeOrder($changeOrderRequest));
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
