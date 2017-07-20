<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Orders ServiceType
 * @subpackage Services
 */
class Orders extends SoapClient
{
    /**
     * Method to call the operation originally named ordersToShip
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\OrdersToShipRequest $ordersToShipRequest
     * @return \Etrias\PaazlConnector\StructType\OrdersToShipResponse|bool
     */
    public function ordersToShip(\Etrias\PaazlConnector\StructType\OrdersToShipRequest $ordersToShipRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->ordersToShip($ordersToShipRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\OrdersToShipResponse
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
