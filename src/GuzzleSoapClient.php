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

namespace Etrias\PaazlConnector;

/*
* SoapClient based on Guzzle
* @package Etrias\PaazlConnector
*/
use Etrias\PaazlConnector\Client\PaazlClientInterface;
use Etrias\PaazlConnector\Exceptions\PaazlException;
use Etrias\PaazlConnector\Result\PaazlResultInterface;
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
use Phpro\SoapClient\Client;
use Phpro\SoapClient\Type\MixedResult;
use Phpro\SoapClient\Type\RequestInterface;

/**
 * Class SoapClient.
 */
class GuzzleSoapClient extends Client implements PaazlClientInterface
{
    /**
     * @var string
     */
    private $webShopId;

    /**
     * @var string
     */
    private $password;

    /**
     * @param RequestInterface     $request
     * @param PaazlResultInterface $response
     *
     * @throws PaazlException
     *
     * @return PaazlResultInterface
     */
    public function processResponse(RequestInterface $request, PaazlResultInterface $response)
    {
        if ($response->getError()) {
            $exceptionName = ExceptionMap::getException($response->getError()->getCode());
            /** @var PaazlException $exception */
            $exception = new $exceptionName(
                $response->getError()->getMessage(),
                $response->getError()->getCode()
            );
            $exception
                ->setRequest($request)
                ->setResponse($response);

            throw $exception;
        }

        return $response;
    }

    /**
     * @param $functionName
     * @param RequestInterface $request
     * @return mixed
     */
    public function processRequest($functionName, RequestInterface $request)
    {
        $response = $this->call($functionName, $request);

        if ($response instanceof MixedResult) {
            $response = $response->getResult();
        }

        return $this->processResponse($request, $response);
    }

    /**
     * {@inheritdoc}
     */
    public function getWebShopId()
    {
        return $this->webShopId;
    }

    /**
     * {@inheritdoc}
     */
    public function setWebShopId(string $webShopId)
    {
        $this->webShopId = $webShopId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * {@inheritdoc}
     */
    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @param OpenBatchRequest $request
     *
     * @return OpenBatchResponse
     */
    public function openBatch(OpenBatchRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param CloseBatchRequest $request
     *
     * @return CloseBatchResponse
     */
    public function closeBatch(CloseBatchRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param BatchStatusRequest $request
     *
     * @return BatchStatusResponse
     */
    public function batchStatus(BatchStatusRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param ListOpenBatchesRequest $request
     *
     * @return ListOpenBatchesResponse
     */
    public function listOpenBatches(ListOpenBatchesRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param BaseCheckoutRequestType $request
     *
     * @return CheckoutResponse
     */
    public function checkout(BaseCheckoutRequestType $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param BaseCheckoutRequestType $request
     *
     * @return CheckoutResponse
     */
    public function checkoutStatus(BaseCheckoutRequestType $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param GenerateAdditionalPdfDocumentRequest $request
     *
     * @return GenerateAdditionalPdfDocumentResponse
     */
    public function generateAdditionalPdfDocument(GenerateAdditionalPdfDocumentRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param GenerateAdditionalDocumentType $request
     *
     * @return GenerateAdditionalImageDocumentResponse
     */
    public function generateAdditionalImageDocument(GenerateAdditionalDocumentType $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param GeneratePdfCustomsDocumentsRequest $request
     *
     * @return GeneratePdfCustomsDocumentsResponse
     */
    public function generatePdfCustomsDocuments(GeneratePdfCustomsDocumentsRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param ProofOfDeliveryRequest $request
     *
     * @return ProofOfDeliveryResponse
     */
    public function proofOfDelivery(ProofOfDeliveryRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param GeneratePdfLabelsRequest $request
     *
     * @return GeneratePdfLabelsResponse
     */
    public function generatePdfLabels(GeneratePdfLabelsRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param GenerateExtraPdfLabelRequest $request
     *
     * @return GenerateExtraPdfLabelResponse
     */
    public function generateExtraPdfLabel(GenerateExtraPdfLabelRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param GeneratePdfReturnLabelsRequest $request
     *
     * @return GeneratePdfReturnLabelsResponse
     */
    public function generatePdfReturnLabels(GeneratePdfReturnLabelsRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param GenerateExtraPdfReturnLabelRequest $request
     *
     * @return GenerateExtraPdfReturnLabelResponse
     */
    public function generateExtraPdfReturnLabel(GenerateExtraPdfReturnLabelRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param GenerateImageLabelsRequest $request
     *
     * @return GenerateImageLabelsResponse
     */
    public function generateImageLabels(GenerateImageLabelsRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param GenerateImageReturnLabelsRequest $request
     *
     * @return GenerateImageReturnLabelsResponse
     */
    public function generateImageReturnLabels(GenerateImageReturnLabelsRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param GenerateExtraImageReturnLabelRequest $request
     *
     * @return GenerateExtraImageReturnLabelResponse
     */
    public function generateExtraImageReturnLabel(GenerateExtraImageReturnLabelRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param GenerateExtraImageLabelRequest $request
     *
     * @return GenerateExtraImageLabelResponse
     */
    public function generateExtraImageLabel(GenerateExtraImageLabelRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param GenerateZplLabelsRequest $request
     *
     * @return GenerateZplLabelsResponse
     */
    public function generateZplLabels(GenerateZplLabelsRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param GetExistingPdfLabelRequest $request
     *
     * @return GetExistingPdfLabelResponse
     */
    public function getExistingPdfLabel(GetExistingPdfLabelRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param GetExistingPdfLabelsRequest $request
     *
     * @return GetExistingPdfLabelsResponse
     */
    public function getExistingPdfLabels(GetExistingPdfLabelsRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param GetExistingImageLabelRequest $request
     *
     * @return GetExistingImageLabelResponse
     */
    public function getExistingImageLabel(GetExistingImageLabelRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param GetExistingImageLabelsRequest $request
     *
     * @return GetExistingPdfLabelsResponse
     */
    public function getExistingImageLabels(GetExistingImageLabelsRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param AddressRequest $request
     *
     * @return AddressResponse
     */
    public function address(AddressRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param DeliveryEstimateRequest $request
     *
     * @return DeliveryEstimateResponse
     */
    public function deliveryEstimate(DeliveryEstimateRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param RateRequest $request
     *
     * @return RateResponse
     */
    public function rate(RateRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param ServicePointsRequest $request
     *
     * @return ServicePointsResponse
     */
    public function servicePoints(ServicePointsRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param OrderDetailsRequest $request
     *
     * @return OrderDetailsResponse
     */
    public function orderDetails(OrderDetailsRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param OrderRequest $request
     *
     * @return OrderSaveResponseType
     */
    public function order(OrderRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param UpdateOrderRequest $request
     *
     * @return OrderSaveResponseType
     */
    public function updateOrder(UpdateOrderRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param ChangeOrderRequest $request
     *
     * @return OrderSaveResponseType
     */
    public function changeOrder(ChangeOrderRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param ValidateOrderRequest $request
     *
     * @return ValidateOrderResponseType
     */
    public function validateOrder(ValidateOrderRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param CommitOrderRequest $request
     *
     * @return OrderSaveResponseType
     */
    public function commitOrder(CommitOrderRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param DeleteOrderRequest $request
     *
     * @return DeleteOrderResponse
     */
    public function deleteOrder(DeleteOrderRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param OrderStatusRequest $request
     *
     * @return OrderStatusResponse
     */
    public function orderStatus(OrderStatusRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param ListOrdersRequest $request
     *
     * @return ListOrdersResponse
     */
    public function listOrders(ListOrdersRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param PickupRequestOptionsRequest $request
     *
     * @return PickupRequestDetailsResponse
     */
    public function pickupRequestOptions(PickupRequestOptionsRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param CreatePickupRequestRequest $request
     *
     * @return CreatePickupRequestResponse
     */
    public function createPickupRequest(CreatePickupRequestRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param PickupRequestQueryType $request
     *
     * @return PickupRequestDetailsResponse
     */
    public function pickupRequestDetails(PickupRequestQueryType $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param PickupRequestQueryType $request
     *
     * @return PickupRequestStatusResponse
     */
    public function pickupRequestStatus(PickupRequestQueryType $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param PickupRequestQueryType $request
     *
     * @return CancelPickupRequestResponse
     */
    public function cancelPickupRequest(PickupRequestQueryType $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param OrdersToShipRequest $request
     *
     * @return OrdersToShipResponse
     */
    public function ordersToShip(OrdersToShipRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param CancelShipmentsRequest $request
     *
     * @return CancelShipmentsResponse
     */
    public function cancelShipments(CancelShipmentsRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param ShippingOptionRequest $request
     *
     * @return ShippingOptionResponse
     */
    public function shippingOption(ShippingOptionRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param ChangeStoresRequestType $request
     *
     * @return ChangeStoresResponseType
     */
    public function createStores(ChangeStoresRequestType $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param ChangeStoresRequestType $request
     *
     * @return ChangeStoresResponseType
     */
    public function updateStores(ChangeStoresRequestType $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param DeleteStoresRequest $request
     *
     * @return DeleteStoresResponse
     */
    public function deleteStores(DeleteStoresRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }

    /**
     * @param ListStoresRequest $request
     *
     * @return ListStoresResponse
     */
    public function listStores(ListStoresRequest $request)
    {
        return $this->processRequest(__FUNCTION__, $request);
    }
}
