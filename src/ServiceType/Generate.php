<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for Generate ServiceType
 * @subpackage Services
 */
class Generate extends SoapClient
{
    /**
     * Method to call the operation originally named generateAdditionalImageDocument
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\GenerateAdditionalDocumentType $generateAdditionalImageDocumentRequest
     * @return \Etrias\PaazlConnector\StructType\GenerateAdditionalImageDocumentResponse|bool
     */
    public function generateAdditionalImageDocument(\Etrias\PaazlConnector\StructType\GenerateAdditionalDocumentType $generateAdditionalImageDocumentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->generateAdditionalImageDocument($generateAdditionalImageDocumentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named generatePdfLabels
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\GeneratePdfLabelsRequest $generatePdfLabelsRequest
     * @return \Etrias\PaazlConnector\StructType\GeneratePdfLabelsResponse|bool
     */
    public function generatePdfLabels(\Etrias\PaazlConnector\StructType\GeneratePdfLabelsRequest $generatePdfLabelsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->generatePdfLabels($generatePdfLabelsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named generatePdfCustomsDocuments
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\GeneratePdfCustomsDocumentsRequest $generatePdfCustomsDocumentsRequest
     * @return \Etrias\PaazlConnector\StructType\GeneratePdfCustomsDocumentsResponse|bool
     */
    public function generatePdfCustomsDocuments(\Etrias\PaazlConnector\StructType\GeneratePdfCustomsDocumentsRequest $generatePdfCustomsDocumentsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->generatePdfCustomsDocuments($generatePdfCustomsDocumentsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named generateZplLabels
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\GenerateZplLabelsRequest $generateZplLabelsRequest
     * @return \Etrias\PaazlConnector\StructType\GenerateZplLabelsResponse|bool
     */
    public function generateZplLabels(\Etrias\PaazlConnector\StructType\GenerateZplLabelsRequest $generateZplLabelsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->generateZplLabels($generateZplLabelsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named generateExtraPdfReturnLabel
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\GenerateExtraPdfReturnLabelRequest $generateExtraPdfReturnLabelRequest
     * @return \Etrias\PaazlConnector\StructType\GenerateExtraPdfReturnLabelResponse|bool
     */
    public function generateExtraPdfReturnLabel(\Etrias\PaazlConnector\StructType\GenerateExtraPdfReturnLabelRequest $generateExtraPdfReturnLabelRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->generateExtraPdfReturnLabel($generateExtraPdfReturnLabelRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named generateImageReturnLabels
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\GenerateReturnLabelsType $generateImageReturnLabelsRequest
     * @return \Etrias\PaazlConnector\StructType\GenerateImageReturnLabelsResponse|bool
     */
    public function generateImageReturnLabels(\Etrias\PaazlConnector\StructType\GenerateReturnLabelsType $generateImageReturnLabelsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->generateImageReturnLabels($generateImageReturnLabelsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named generateImageLabels
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\GenerateImageLabelsRequest $generateImageLabelsRequest
     * @return \Etrias\PaazlConnector\StructType\GenerateImageLabelsResponse|bool
     */
    public function generateImageLabels(\Etrias\PaazlConnector\StructType\GenerateImageLabelsRequest $generateImageLabelsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->generateImageLabels($generateImageLabelsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named generateExtraImageLabel
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\GenerateExtraImageLabelRequest $generateExtraImageLabelRequest
     * @return \Etrias\PaazlConnector\StructType\GenerateExtraImageLabelResponse|bool
     */
    public function generateExtraImageLabel(\Etrias\PaazlConnector\StructType\GenerateExtraImageLabelRequest $generateExtraImageLabelRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->generateExtraImageLabel($generateExtraImageLabelRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named generateExtraPdfLabel
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelRequest $generateExtraPdfLabelRequest
     * @return \Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelResponse|bool
     */
    public function generateExtraPdfLabel(\Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelRequest $generateExtraPdfLabelRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->generateExtraPdfLabel($generateExtraPdfLabelRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named generateAdditionalPdfDocument
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\GenerateAdditionalPdfDocumentRequest $generateAdditionalPdfDocumentRequest
     * @return \Etrias\PaazlConnector\StructType\GenerateAdditionalPdfDocumentResponse|bool
     */
    public function generateAdditionalPdfDocument(\Etrias\PaazlConnector\StructType\GenerateAdditionalPdfDocumentRequest $generateAdditionalPdfDocumentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->generateAdditionalPdfDocument($generateAdditionalPdfDocumentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named generateLabels
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\GenerateLabelsRequest $generateLabelsRequest
     * @return \Etrias\PaazlConnector\StructType\GenerateLabelsResponse|bool
     */
    public function generateLabels(\Etrias\PaazlConnector\StructType\GenerateLabelsRequest $generateLabelsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->generateLabels($generateLabelsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named generateExtraImageReturnLabel
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\GenerateReturnLabelType $generateExtraImageReturnLabelRequest
     * @return \Etrias\PaazlConnector\StructType\GenerateExtraImageReturnLabelResponse|bool
     */
    public function generateExtraImageReturnLabel(\Etrias\PaazlConnector\StructType\GenerateReturnLabelType $generateExtraImageReturnLabelRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->generateExtraImageReturnLabel($generateExtraImageReturnLabelRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named generateShippingManifest
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\GenerateShippingManifestRequest $generateShippingManifestRequest
     * @return \Etrias\PaazlConnector\StructType\GenerateShippingManifestResponse|bool
     */
    public function generateShippingManifest(\Etrias\PaazlConnector\StructType\GenerateShippingManifestRequest $generateShippingManifestRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->generateShippingManifest($generateShippingManifestRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named generatePdfReturnLabels
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\GeneratePdfReturnLabelsRequest $generatePdfReturnLabelsRequest
     * @return \Etrias\PaazlConnector\StructType\GeneratePdfReturnLabelsResponse|bool
     */
    public function generatePdfReturnLabels(\Etrias\PaazlConnector\StructType\GeneratePdfReturnLabelsRequest $generatePdfReturnLabelsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->generatePdfReturnLabels($generatePdfReturnLabelsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\GenerateAdditionalImageDocumentResponse|\Etrias\PaazlConnector\StructType\GenerateAdditionalPdfDocumentResponse|\Etrias\PaazlConnector\StructType\GenerateExtraImageLabelResponse|\Etrias\PaazlConnector\StructType\GenerateExtraImageReturnLabelResponse|\Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelResponse|\Etrias\PaazlConnector\StructType\GenerateExtraPdfReturnLabelResponse|\Etrias\PaazlConnector\StructType\GenerateImageLabelsResponse|\Etrias\PaazlConnector\StructType\GenerateImageReturnLabelsResponse|\Etrias\PaazlConnector\StructType\GenerateLabelsResponse|\Etrias\PaazlConnector\StructType\GeneratePdfCustomsDocumentsResponse|\Etrias\PaazlConnector\StructType\GeneratePdfLabelsResponse|\Etrias\PaazlConnector\StructType\GeneratePdfReturnLabelsResponse|\Etrias\PaazlConnector\StructType\GenerateShippingManifestResponse|\Etrias\PaazlConnector\StructType\GenerateZplLabelsResponse
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
