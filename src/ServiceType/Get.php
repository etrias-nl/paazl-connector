<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends SoapClient
{
    /**
     * Method to call the operation originally named getExistingZplLabel
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\GetExistingZplLabelRequest $getExistingZplLabelRequest
     * @return \Etrias\PaazlConnector\StructType\GetExistingZplLabelResponse|bool
     */
    public function getExistingZplLabel(\Etrias\PaazlConnector\StructType\GetExistingZplLabelRequest $getExistingZplLabelRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->getExistingZplLabel($getExistingZplLabelRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getExistingPdfLabel
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\GetExistingPdfLabelRequest $getExistingPdfLabelRequest
     * @return \Etrias\PaazlConnector\StructType\GetExistingPdfLabelResponse|bool
     */
    public function getExistingPdfLabel(\Etrias\PaazlConnector\StructType\GetExistingPdfLabelRequest $getExistingPdfLabelRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->getExistingPdfLabel($getExistingPdfLabelRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getExistingPdfLabels
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\GetExistingPdfLabelsRequest $getExistingPdfLabelsRequest
     * @return \Etrias\PaazlConnector\StructType\GetExistingPdfLabelsResponse|bool
     */
    public function getExistingPdfLabels(\Etrias\PaazlConnector\StructType\GetExistingPdfLabelsRequest $getExistingPdfLabelsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->getExistingPdfLabels($getExistingPdfLabelsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getExistingImageLabel
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\GetExistingLabelType $getExistingImageLabelRequest
     * @return \Etrias\PaazlConnector\StructType\GetExistingImageLabelResponse|bool
     */
    public function getExistingImageLabel(\Etrias\PaazlConnector\StructType\GetExistingLabelType $getExistingImageLabelRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->getExistingImageLabel($getExistingImageLabelRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getExistingImageLabels
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\GetExistingLabelsType $getExistingImageLabelsRequest
     * @return \Etrias\PaazlConnector\StructType\GetExistingImageLabelsResponse|bool
     */
    public function getExistingImageLabels(\Etrias\PaazlConnector\StructType\GetExistingLabelsType $getExistingImageLabelsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->getExistingImageLabels($getExistingImageLabelsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getExistingZplLabels
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\GetExistingZplLabelsRequest $getExistingZplLabelsRequest
     * @return \Etrias\PaazlConnector\StructType\GetExistingZplLabelsResponse|bool
     */
    public function getExistingZplLabels(\Etrias\PaazlConnector\StructType\GetExistingZplLabelsRequest $getExistingZplLabelsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->getExistingZplLabels($getExistingZplLabelsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\GetExistingImageLabelResponse|\Etrias\PaazlConnector\StructType\GetExistingImageLabelsResponse|\Etrias\PaazlConnector\StructType\GetExistingPdfLabelResponse|\Etrias\PaazlConnector\StructType\GetExistingPdfLabelsResponse|\Etrias\PaazlConnector\StructType\GetExistingZplLabelResponse|\Etrias\PaazlConnector\StructType\GetExistingZplLabelsResponse
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
