<?php

namespace Etrias\PaazlConnector\ServiceType;

use \Etrias\PaazlConnector\SoapClient;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends SoapClient
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
     * Method to call the operation originally named orderDetails
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\OrderDetailsRequest $orderDetailsRequest
     * @return \Etrias\PaazlConnector\StructType\OrderDetailsResponse|bool
     */
    public function orderDetails(\Etrias\PaazlConnector\StructType\OrderDetailsRequest $orderDetailsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->orderDetails($orderDetailsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named googleMapSearchstring
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\GoogleMapSearchstringRequest $googleMapSearchstringRequest
     * @return \Etrias\PaazlConnector\StructType\GoogleMapSearchstringResponse|bool
     */
    public function googleMapSearchstring(\Etrias\PaazlConnector\StructType\GoogleMapSearchstringRequest $googleMapSearchstringRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->googleMapSearchstring($googleMapSearchstringRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named order
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\OrderRequest $orderRequest
     * @return \Etrias\PaazlConnector\StructType\OrderSaveResponseType|bool
     */
    public function order(\Etrias\PaazlConnector\StructType\OrderRequest $orderRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->order($orderRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deliveryEstimate
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\DeliveryEstimateRequest $deliveryEstimateRequest
     * @return \Etrias\PaazlConnector\StructType\DeliveryEstimateResponse|bool
     */
    public function deliveryEstimate(\Etrias\PaazlConnector\StructType\DeliveryEstimateRequest $deliveryEstimateRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deliveryEstimate($deliveryEstimateRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
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
     * Method to call the operation originally named activeShippingOption
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\ActiveShippingOptionRequest $activeShippingOptionRequest
     * @return \Etrias\PaazlConnector\StructType\ActiveShippingOptionResponse|bool
     */
    public function activeShippingOption(\Etrias\PaazlConnector\StructType\ActiveShippingOptionRequest $activeShippingOptionRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->activeShippingOption($activeShippingOptionRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named cancelShipments
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\CancelShipmentsRequest $cancelShipmentsRequest
     * @return \Etrias\PaazlConnector\StructType\CancelShipmentsResponse|bool
     */
    public function cancelShipments(\Etrias\PaazlConnector\StructType\CancelShipmentsRequest $cancelShipmentsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->cancelShipments($cancelShipmentsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named address
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\AddressRequest $addressRequest
     * @return \Etrias\PaazlConnector\StructType\AddressResponse|bool
     */
    public function address(\Etrias\PaazlConnector\StructType\AddressRequest $addressRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->address($addressRequest));
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
     * Method to call the operation originally named createPickupRequest
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest $createPickupRequestRequest
     * @return \Etrias\PaazlConnector\StructType\CreatePickupRequestResponse|bool
     */
    public function createPickupRequest(\Etrias\PaazlConnector\StructType\CreatePickupRequestRequest $createPickupRequestRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->createPickupRequest($createPickupRequestRequest));
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
     * Method to call the operation originally named proofOfDelivery
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\ProofOfDeliveryRequest $proofOfDeliveryRequest
     * @return \Etrias\PaazlConnector\StructType\ProofOfDeliveryResponse|bool
     */
    public function proofOfDelivery(\Etrias\PaazlConnector\StructType\ProofOfDeliveryRequest $proofOfDeliveryRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->proofOfDelivery($proofOfDeliveryRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named servicePoints
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\ServicePointsRequest $servicePointsRequest
     * @return \Etrias\PaazlConnector\StructType\ServicePointsResponse|bool
     */
    public function servicePoints(\Etrias\PaazlConnector\StructType\ServicePointsRequest $servicePointsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->servicePoints($servicePointsRequest));
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
     * Method to call the operation originally named listOrders
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\ListOrdersRequest $listOrdersRequest
     * @return \Etrias\PaazlConnector\StructType\ListOrdersResponse|bool
     */
    public function listOrders(\Etrias\PaazlConnector\StructType\ListOrdersRequest $listOrdersRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->listOrders($listOrdersRequest));
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
     * Method to call the operation originally named pickupRequestDetails
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\PickupRequestQueryType $pickupRequestDetailsRequest
     * @return \Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse|bool
     */
    public function pickupRequestDetails(\Etrias\PaazlConnector\StructType\PickupRequestQueryType $pickupRequestDetailsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->pickupRequestDetails($pickupRequestDetailsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createStores
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\ChangeStoresRequestType $createStoresRequest
     * @return \Etrias\PaazlConnector\StructType\ChangeStoresResponseType|bool
     */
    public function createStores(\Etrias\PaazlConnector\StructType\ChangeStoresRequestType $createStoresRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->createStores($createStoresRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named listOpenBatches
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\ListOpenBatchesRequest $listOpenBatchesRequest
     * @return \Etrias\PaazlConnector\StructType\ListOpenBatchesResponse|bool
     */
    public function listOpenBatches(\Etrias\PaazlConnector\StructType\ListOpenBatchesRequest $listOpenBatchesRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->listOpenBatches($listOpenBatchesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named listStores
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\ListStoresRequest $listStoresRequest
     * @return \Etrias\PaazlConnector\StructType\ListStoresResponse|bool
     */
    public function listStores(\Etrias\PaazlConnector\StructType\ListStoresRequest $listStoresRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->listStores($listStoresRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
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
     * Method to call the operation originally named checkoutStatus
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\BaseCheckoutRequestType $checkoutStatusRequest
     * @return \Etrias\PaazlConnector\StructType\CheckoutStatusResponse|bool
     */
    public function checkoutStatus(\Etrias\PaazlConnector\StructType\BaseCheckoutRequestType $checkoutStatusRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->checkoutStatus($checkoutStatusRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named pickupRequestStatus
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\PickupRequestQueryType $pickupRequestStatusRequest
     * @return \Etrias\PaazlConnector\StructType\PickupRequestStatusResponse|bool
     */
    public function pickupRequestStatus(\Etrias\PaazlConnector\StructType\PickupRequestQueryType $pickupRequestStatusRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->pickupRequestStatus($pickupRequestStatusRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named cancelPickupRequest
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\PickupRequestQueryType $cancelPickupRequestRequest
     * @return \Etrias\PaazlConnector\StructType\CancelPickupRequestResponse|bool
     */
    public function cancelPickupRequest(\Etrias\PaazlConnector\StructType\PickupRequestQueryType $cancelPickupRequestRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->cancelPickupRequest($cancelPickupRequestRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteStores
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\DeleteStoresRequest $deleteStoresRequest
     * @return \Etrias\PaazlConnector\StructType\DeleteStoresResponse|bool
     */
    public function deleteStores(\Etrias\PaazlConnector\StructType\DeleteStoresRequest $deleteStoresRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deleteStores($deleteStoresRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingOption
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\ShippingOptionRequest $shippingOptionRequest
     * @return \Etrias\PaazlConnector\StructType\ShippingOptionResponse|bool
     */
    public function shippingOption(\Etrias\PaazlConnector\StructType\ShippingOptionRequest $shippingOptionRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->shippingOption($shippingOptionRequest));
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
     * Method to call the operation originally named updateOrder
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\UpdateOrderRequest $updateOrderRequest
     * @return \Etrias\PaazlConnector\StructType\OrderSaveResponseType|bool
     */
    public function updateOrder(\Etrias\PaazlConnector\StructType\UpdateOrderRequest $updateOrderRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->updateOrder($updateOrderRequest));
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
     * Method to call the operation originally named pickupRequestOptions
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\PickupRequestOptionsRequest $pickupRequestOptionsRequest
     * @return \Etrias\PaazlConnector\StructType\PickupRequestOptionsResponse|bool
     */
    public function pickupRequestOptions(\Etrias\PaazlConnector\StructType\PickupRequestOptionsRequest $pickupRequestOptionsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->pickupRequestOptions($pickupRequestOptionsRequest));
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
     * Method to call the operation originally named orderStatus
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\OrderStatusRequest $orderStatusRequest
     * @return \Etrias\PaazlConnector\StructType\OrderStatusResponse|bool
     */
    public function orderStatus(\Etrias\PaazlConnector\StructType\OrderStatusRequest $orderStatusRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->orderStatus($orderStatusRequest));
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
     * Method to call the operation originally named rate
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\RateRequest $rateRequest
     * @return \Etrias\PaazlConnector\StructType\RateResponse|bool
     */
    public function rate(\Etrias\PaazlConnector\StructType\RateRequest $rateRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->rate($rateRequest));
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
     * Method to call the operation originally named checkout
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\BaseCheckoutRequestType $checkoutRequest
     * @return \Etrias\PaazlConnector\StructType\CheckoutResponse|bool
     */
    public function checkout(\Etrias\PaazlConnector\StructType\BaseCheckoutRequestType $checkoutRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->checkout($checkoutRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateStores
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\ChangeStoresRequestType $updateStoresRequest
     * @return \Etrias\PaazlConnector\StructType\ChangeStoresResponseType|bool
     */
    public function updateStores(\Etrias\PaazlConnector\StructType\ChangeStoresRequestType $updateStoresRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->updateStores($updateStoresRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteOrder
     * @uses SoapClient::getSoapClient()
     * @uses SoapClient::setResult()
     * @uses SoapClient::getResult()
     * @uses SoapClient::saveLastError()
     * @param \Etrias\PaazlConnector\StructType\DeleteOrderRequest $deleteOrderRequest
     * @return \Etrias\PaazlConnector\StructType\DeleteOrderResponse|bool
     */
    public function deleteOrder(\Etrias\PaazlConnector\StructType\DeleteOrderRequest $deleteOrderRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deleteOrder($deleteOrderRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClient::getResult()
     * @return \Etrias\PaazlConnector\StructType\ActiveShippingOptionResponse|\Etrias\PaazlConnector\StructType\AddressResponse|\Etrias\PaazlConnector\StructType\BatchStatusResponse|\Etrias\PaazlConnector\StructType\CancelPickupRequestResponse|\Etrias\PaazlConnector\StructType\CancelShipmentsResponse|\Etrias\PaazlConnector\StructType\ChangeStoresResponseType|\Etrias\PaazlConnector\StructType\CheckoutResponse|\Etrias\PaazlConnector\StructType\CheckoutStatusResponse|\Etrias\PaazlConnector\StructType\CloseBatchResponse|\Etrias\PaazlConnector\StructType\CreatePickupRequestResponse|\Etrias\PaazlConnector\StructType\DeleteOrderResponse|\Etrias\PaazlConnector\StructType\DeleteStoresResponse|\Etrias\PaazlConnector\StructType\DeliveryEstimateResponse|\Etrias\PaazlConnector\StructType\GenerateAdditionalImageDocumentResponse|\Etrias\PaazlConnector\StructType\GenerateAdditionalPdfDocumentResponse|\Etrias\PaazlConnector\StructType\GenerateExtraImageLabelResponse|\Etrias\PaazlConnector\StructType\GenerateExtraImageReturnLabelResponse|\Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelResponse|\Etrias\PaazlConnector\StructType\GenerateExtraPdfReturnLabelResponse|\Etrias\PaazlConnector\StructType\GenerateImageLabelsResponse|\Etrias\PaazlConnector\StructType\GenerateImageReturnLabelsResponse|\Etrias\PaazlConnector\StructType\GenerateLabelsResponse|\Etrias\PaazlConnector\StructType\GeneratePdfCustomsDocumentsResponse|\Etrias\PaazlConnector\StructType\GeneratePdfLabelsResponse|\Etrias\PaazlConnector\StructType\GeneratePdfReturnLabelsResponse|\Etrias\PaazlConnector\StructType\GenerateShippingManifestResponse|\Etrias\PaazlConnector\StructType\GenerateZplLabelsResponse|\Etrias\PaazlConnector\StructType\GetExistingImageLabelResponse|\Etrias\PaazlConnector\StructType\GetExistingImageLabelsResponse|\Etrias\PaazlConnector\StructType\GetExistingPdfLabelResponse|\Etrias\PaazlConnector\StructType\GetExistingPdfLabelsResponse|\Etrias\PaazlConnector\StructType\GetExistingZplLabelResponse|\Etrias\PaazlConnector\StructType\GetExistingZplLabelsResponse|\Etrias\PaazlConnector\StructType\GoogleMapSearchstringResponse|\Etrias\PaazlConnector\StructType\ListOpenBatchesResponse|\Etrias\PaazlConnector\StructType\ListOrdersResponse|\Etrias\PaazlConnector\StructType\ListStoresResponse|\Etrias\PaazlConnector\StructType\OpenBatchResponse|\Etrias\PaazlConnector\StructType\OrderDetailsResponse|\Etrias\PaazlConnector\StructType\OrderSaveResponseType|\Etrias\PaazlConnector\StructType\OrderStatusResponse|\Etrias\PaazlConnector\StructType\OrdersToShipResponse|\Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse|\Etrias\PaazlConnector\StructType\PickupRequestOptionsResponse|\Etrias\PaazlConnector\StructType\PickupRequestStatusResponse|\Etrias\PaazlConnector\StructType\ProofOfDeliveryResponse|\Etrias\PaazlConnector\StructType\RateResponse|\Etrias\PaazlConnector\StructType\ServicePointsResponse|\Etrias\PaazlConnector\StructType\ShippingOptionResponse|\Etrias\PaazlConnector\StructType\TriggerCarrierRegistrationResponse|\Etrias\PaazlConnector\StructType\ValidateOrderResponseType
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
