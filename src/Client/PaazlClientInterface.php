<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Etrias\PaazlConnector\Client;

use Etrias\PaazlConnector\SoapTypes\AddressRequest;
use Etrias\PaazlConnector\SoapTypes\AddressResponse;
use Etrias\PaazlConnector\SoapTypes\BaseCheckoutRequestType;
use Etrias\PaazlConnector\SoapTypes\BatchStatusRequest;
use Etrias\PaazlConnector\SoapTypes\BatchStatusResponse;
use Etrias\PaazlConnector\SoapTypes\CancelPickupRequestResponse;
use Etrias\PaazlConnector\SoapTypes\CancelShipmentsRequest;
use Etrias\PaazlConnector\SoapTypes\CancelShipmentsResponse;
use Etrias\PaazlConnector\SoapTypes\ChangeOrderRequest;
use Etrias\PaazlConnector\SoapTypes\ChangeStoresRequestType;
use Etrias\PaazlConnector\SoapTypes\ChangeStoresResponseType;
use Etrias\PaazlConnector\SoapTypes\CheckoutResponse;
use Etrias\PaazlConnector\SoapTypes\CloseBatchRequest;
use Etrias\PaazlConnector\SoapTypes\CloseBatchResponse;
use Etrias\PaazlConnector\SoapTypes\CommitOrderRequest;
use Etrias\PaazlConnector\SoapTypes\CreatePickupRequestRequest;
use Etrias\PaazlConnector\SoapTypes\CreatePickupRequestResponse;
use Etrias\PaazlConnector\SoapTypes\DeleteOrderRequest;
use Etrias\PaazlConnector\SoapTypes\DeleteOrderResponse;
use Etrias\PaazlConnector\SoapTypes\DeleteStoresRequest;
use Etrias\PaazlConnector\SoapTypes\DeleteStoresResponse;
use Etrias\PaazlConnector\SoapTypes\DeliveryEstimateRequest;
use Etrias\PaazlConnector\SoapTypes\DeliveryEstimateResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateAdditionalDocumentType;
use Etrias\PaazlConnector\SoapTypes\GenerateAdditionalImageDocumentResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateAdditionalPdfDocumentRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateAdditionalPdfDocumentResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraImageLabelRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraImageLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraImageReturnLabelRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraImageReturnLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraPdfLabelRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraPdfLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraPdfReturnLabelRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraPdfReturnLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateImageLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateImageLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateImageReturnLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateImageReturnLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfCustomsDocumentsRequest;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfCustomsDocumentsResponse;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfReturnLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfReturnLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateZplLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateZplLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GetExistingImageLabelRequest;
use Etrias\PaazlConnector\SoapTypes\GetExistingImageLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GetExistingImageLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GetExistingPdfLabelRequest;
use Etrias\PaazlConnector\SoapTypes\GetExistingPdfLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GetExistingPdfLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GetExistingPdfLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\ListOpenBatchesRequest;
use Etrias\PaazlConnector\SoapTypes\ListOpenBatchesResponse;
use Etrias\PaazlConnector\SoapTypes\ListOrdersRequest;
use Etrias\PaazlConnector\SoapTypes\ListOrdersResponse;
use Etrias\PaazlConnector\SoapTypes\ListStoresRequest;
use Etrias\PaazlConnector\SoapTypes\ListStoresResponse;
use Etrias\PaazlConnector\SoapTypes\OpenBatchRequest;
use Etrias\PaazlConnector\SoapTypes\OpenBatchResponse;
use Etrias\PaazlConnector\SoapTypes\OrderDetailsRequest;
use Etrias\PaazlConnector\SoapTypes\OrderDetailsResponse;
use Etrias\PaazlConnector\SoapTypes\OrderRequest;
use Etrias\PaazlConnector\SoapTypes\OrderSaveResponseType;
use Etrias\PaazlConnector\SoapTypes\OrderStatusRequest;
use Etrias\PaazlConnector\SoapTypes\OrderStatusResponse;
use Etrias\PaazlConnector\SoapTypes\OrdersToShipRequest;
use Etrias\PaazlConnector\SoapTypes\OrdersToShipResponse;
use Etrias\PaazlConnector\SoapTypes\PickupRequestDetailsResponse;
use Etrias\PaazlConnector\SoapTypes\PickupRequestOptionsRequest;
use Etrias\PaazlConnector\SoapTypes\PickupRequestQueryType;
use Etrias\PaazlConnector\SoapTypes\PickupRequestStatusResponse;
use Etrias\PaazlConnector\SoapTypes\ProofOfDeliveryRequest;
use Etrias\PaazlConnector\SoapTypes\ProofOfDeliveryResponse;
use Etrias\PaazlConnector\SoapTypes\RateRequest;
use Etrias\PaazlConnector\SoapTypes\RateResponse;
use Etrias\PaazlConnector\SoapTypes\ServicePointsRequest;
use Etrias\PaazlConnector\SoapTypes\ServicePointsResponse;
use Etrias\PaazlConnector\SoapTypes\ShippingOptionRequest;
use Etrias\PaazlConnector\SoapTypes\ShippingOptionResponse;
use Etrias\PaazlConnector\SoapTypes\UpdateOrderRequest;
use Etrias\PaazlConnector\SoapTypes\ValidateOrderRequest;
use Etrias\PaazlConnector\SoapTypes\ValidateOrderResponseType;

/**
 * Interface PaazlClientInterface.
 */
interface PaazlClientInterface
{
    const WSDL_PRODUCTION = 'https://ost.paazl.com/parcelshipperservice/orderRequest.wsdl';
    const WSDL_STAGING = 'https://staging.paazl.com/parcelshipperservice/orderRequest.wsdl';

    /**
     * @param string $webShopId
     *
     * @return $this
     */
    public function setWebShopId(string $webShopId);

    /**
     * @param string $password
     *
     * @return $this
     */
    public function setPassword(string $password);

    /**
     * @return string
     */
    public function getWebShopId();

    /**
     * @return string
     */
    public function getPassword();

    /**
     * @param OpenBatchRequest $request
     *
     * @return OpenBatchResponse
     */
    public function openBatch(OpenBatchRequest $request);

    /**
     * @param CloseBatchRequest $request
     *
     * @return CloseBatchResponse
     */
    public function closeBatch(CloseBatchRequest $request);

    /**
     * @param BatchStatusRequest $request
     *
     * @return BatchStatusResponse
     */
    public function batchStatus(BatchStatusRequest $request);

    /**
     * @param ListOpenBatchesRequest $request
     *
     * @return ListOpenBatchesResponse
     */
    public function listOpenBatches(ListOpenBatchesRequest $request);

    /**
     * @param BaseCheckoutRequestType $request
     *
     * @return CheckoutResponse
     */
    public function checkout(BaseCheckoutRequestType $request);

    /**
     * @param BaseCheckoutRequestType $requestType
     *
     * @return CheckoutResponse
     */
    public function checkoutStatus(BaseCheckoutRequestType $requestType);

    /**
     * @param GenerateAdditionalPdfDocumentRequest $request
     *
     * @return GenerateAdditionalPdfDocumentResponse
     */
    public function generateAdditionalPdfDocument(GenerateAdditionalPdfDocumentRequest $request);

    /**
     * @param GenerateAdditionalDocumentType $request
     *
     * @return GenerateAdditionalImageDocumentResponse
     */
    public function generateAdditionalImageDocument(GenerateAdditionalDocumentType $request);

    /**
     * @param GeneratePdfCustomsDocumentsRequest $request
     *
     * @return GeneratePdfCustomsDocumentsResponse
     */
    public function generatePdfCustomsDocuments(GeneratePdfCustomsDocumentsRequest $request);

    /**
     * @param ProofOfDeliveryRequest $request
     *
     * @return ProofOfDeliveryResponse
     */
    public function proofOfDelivery(ProofOfDeliveryRequest $request);

    /**
     * @param GeneratePdfLabelsRequest $request
     *
     * @return GeneratePdfLabelsResponse
     */
    public function generatePdfLabels(GeneratePdfLabelsRequest $request);

    /**
     * @param GenerateExtraPdfLabelRequest $request
     *
     * @return GenerateExtraPdfLabelResponse
     */
    public function generateExtraPdfLabel(GenerateExtraPdfLabelRequest $request);

    /**
     * @param GeneratePdfReturnLabelsRequest $request
     *
     * @return GeneratePdfReturnLabelsResponse
     */
    public function generatePdfReturnLabels(GeneratePdfReturnLabelsRequest $request);

    /**
     * @param GenerateExtraPdfReturnLabelRequest $request
     *
     * @return GenerateExtraPdfReturnLabelResponse
     */
    public function generateExtraPdfReturnLabel(GenerateExtraPdfReturnLabelRequest $request);

    /**
     * @param GenerateImageLabelsRequest $request
     *
     * @return GenerateImageLabelsResponse
     */
    public function generateImageLabels(GenerateImageLabelsRequest $request);

    /**
     * @param GenerateImageReturnLabelsRequest $request
     *
     * @return GenerateImageReturnLabelsResponse
     */
    public function generateImageReturnLabels(GenerateImageReturnLabelsRequest $request);

    /**
     * @param GenerateExtraImageReturnLabelRequest $request
     *
     * @return GenerateExtraImageReturnLabelResponse
     */
    public function generateExtraImageReturnLabel(GenerateExtraImageReturnLabelRequest $request);

    /**
     * @param GenerateExtraImageLabelRequest $request
     *
     * @return GenerateExtraImageLabelResponse
     */
    public function generateExtraImageLabel(GenerateExtraImageLabelRequest $request);

    /**
     * @param GenerateZplLabelsRequest $request
     *
     * @return GenerateZplLabelsResponse
     */
    public function generateZplLabels(GenerateZplLabelsRequest $request);

    /**
     * @param GetExistingPdfLabelRequest $request
     *
     * @return GetExistingPdfLabelResponse
     */
    public function getExistingPdfLabel(GetExistingPdfLabelRequest $request);

    /**
     * @param GetExistingPdfLabelsRequest $request
     *
     * @return GetExistingPdfLabelsResponse
     */
    public function getExistingPdfLabels(GetExistingPdfLabelsRequest $request);

    /**
     * @param GetExistingImageLabelRequest $request
     *
     * @return GetExistingImageLabelResponse
     */
    public function getExistingImageLabel(GetExistingImageLabelRequest $request);

    /**
     * @param GetExistingImageLabelsRequest $request
     *
     * @return GetExistingPdfLabelsResponse
     */
    public function getExistingImageLabels(GetExistingImageLabelsRequest $request);

    /**
     * @param AddressRequest $request
     *
     * @return AddressResponse
     */
    public function address(AddressRequest $request);

    /**
     * @param DeliveryEstimateRequest $request
     *
     * @return DeliveryEstimateResponse
     */
    public function deliveryEstimate(DeliveryEstimateRequest $request);

    /**
     * @param RateRequest $request
     *
     * @return RateResponse
     */
    public function rate(RateRequest $request);

    /**
     * @param ServicePointsRequest $request
     *
     * @return ServicePointsResponse
     */
    public function servicePoints(ServicePointsRequest $request);

    /**
     * @param OrderDetailsRequest $request
     *
     * @return OrderDetailsResponse
     */
    public function orderDetails(OrderDetailsRequest $request);

    /**
     * @param OrderRequest $request
     *
     * @return OrderSaveResponseType
     */
    public function order(OrderRequest $request);

    /**
     * @param UpdateOrderRequest $request
     *
     * @return OrderSaveResponseType
     */
    public function updateOrder(UpdateOrderRequest $request);

    /**
     * @param ChangeOrderRequest $request
     *
     * @return OrderSaveResponseType
     */
    public function changeOrder(ChangeOrderRequest $request);

    /**
     * @param ValidateOrderRequest $request
     *
     * @return ValidateOrderResponseType
     */
    public function validateOrder(ValidateOrderRequest $request);

    /**
     * @param CommitOrderRequest $request
     *
     * @return OrderSaveResponseType
     */
    public function commitOrder(CommitOrderRequest $request);

    /**
     * @param DeleteOrderRequest $request
     *
     * @return DeleteOrderResponse
     */
    public function deleteOrder(DeleteOrderRequest $request);

    /**
     * @param OrderStatusRequest $request
     *
     * @return OrderStatusResponse
     */
    public function orderStatus(OrderStatusRequest $request);

    /**
     * @param ListOrdersRequest $request
     *
     * @return ListOrdersResponse
     */
    public function listOrders(ListOrdersRequest $request);

    /**
     * @param PickupRequestOptionsRequest $request
     *
     * @return PickupRequestDetailsResponse
     */
    public function pickupRequestOptions(PickupRequestOptionsRequest $request);

    /**
     * @param CreatePickupRequestRequest $request
     *
     * @return CreatePickupRequestResponse
     */
    public function createPickupRequest(CreatePickupRequestRequest $request);

    /**
     * @param PickupRequestQueryType $request
     *
     * @return PickupRequestDetailsResponse
     */
    public function pickupRequestDetails(PickupRequestQueryType $request);

    /**
     * @param PickupRequestQueryType $request
     *
     * @return PickupRequestStatusResponse
     */
    public function pickupRequestStatus(PickupRequestQueryType $request);

    /**
     * @param PickupRequestQueryType $request
     *
     * @return CancelPickupRequestResponse
     */
    public function cancelPickupRequest(PickupRequestQueryType $request);

    /**
     * @param OrdersToShipRequest $request
     *
     * @return OrdersToShipResponse
     */
    public function ordersToShip(OrdersToShipRequest $request);

    /**
     * @param CancelShipmentsRequest $request
     *
     * @return CancelShipmentsResponse
     */
    public function cancelShipments(CancelShipmentsRequest $request);

    /**
     * @param ShippingOptionRequest $request
     *
     * @return ShippingOptionResponse
     */
    public function shippingOption(ShippingOptionRequest $request);

    /**
     * @param ChangeStoresRequestType $request
     *
     * @return ChangeStoresResponseType
     */
    public function createStores(ChangeStoresRequestType $request);

    /**
     * @param ChangeStoresRequestType $request
     *
     * @return ChangeStoresResponseType
     */
    public function updateStores(ChangeStoresRequestType $request);

    /**
     * @param DeleteStoresRequest $request
     *
     * @return DeleteStoresResponse
     */
    public function deleteStores(DeleteStoresRequest $request);

    /**
     * @param ListStoresRequest $request
     *
     * @return ListStoresResponse
     */
    public function listStores(ListStoresRequest $request);
}
