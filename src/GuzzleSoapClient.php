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
 *
 * @method OpenBatchResponse openBatch (OpenBatchRequest $request)
 * @method CloseBatchResponse closeBatch (CloseBatchRequest $request)
 * @method BatchStatusResponse batchStatus (BatchStatusRequest $request)
 * @method ListOpenBatchesResponse listOpenBatches (ListOpenBatchesRequest $request)
 * @method CheckoutResponse checkout (BaseCheckoutRequestType $request)
 * @method CheckoutResponse checkoutStatus (BaseCheckoutRequestType $request)
 * @method GenerateAdditionalPdfDocumentResponse generateAdditionalPdfDocument (GenerateAdditionalPdfDocumentRequest $request)
 * @method GenerateAdditionalImageDocumentResponse generateAdditionalImageDocument (GenerateAdditionalDocumentType $request)
 * @method GeneratePdfCustomsDocumentsResponse generatePdfCustomsDocuments (GeneratePdfCustomsDocumentsRequest $request)
 * @method ProofOfDeliveryResponse proofOfDelivery (ProofOfDeliveryRequest $request)
 * @method GeneratePdfLabelsResponse generatePdfLabels (GeneratePdfLabelsRequest $request)
 * @method GenerateExtraPdfLabelResponse generateExtraPdfLabel (GenerateExtraPdfLabelRequest $request)
 * @method GeneratePdfReturnLabelsResponse generatePdfReturnLabels (GeneratePdfReturnLabelsRequest $request)
 * @method GenerateExtraPdfReturnLabelResponse generateExtraPdfReturnLabel (GenerateExtraPdfReturnLabelRequest $request)
 * @method GenerateImageLabelsResponse generateImageLabels (GenerateImageLabelsRequest $request)
 * @method GenerateImageReturnLabelsResponse generateImageReturnLabels (GenerateImageReturnLabelsRequest $request)
 * @method GenerateExtraImageReturnLabelResponse generateExtraImageReturnLabel (GenerateExtraImageReturnLabelRequest $request)
 * @method GenerateExtraImageLabelResponse generateExtraImageLabel (GenerateExtraImageLabelRequest $request)
 * @method GenerateZplLabelsResponse generateZplLabels (GenerateZplLabelsRequest $request)
 * @method GetExistingPdfLabelResponse getExistingPdfLabel (GetExistingPdfLabelRequest $request)
 * @method GetExistingPdfLabelsResponse getExistingPdfLabels (GetExistingPdfLabelsRequest $request)
 * @method GetExistingImageLabelResponse getExistingImageLabel (GetExistingImageLabelRequest $request)
 * @method GetExistingPdfLabelsResponse getExistingImageLabels (GetExistingImageLabelsRequest $request)
 * @method AddressResponse address (AddressRequest $request)
 * @method DeliveryEstimateResponse deliveryEstimate (DeliveryEstimateRequest $request)
 * @method RateResponse rate (RateRequest $request)
 * @method ServicePointsResponse servicePoints (ServicePointsRequest $request)
 * @method OrderDetailsResponse orderDetails (OrderDetailsRequest $request)
 * @method OrderSaveResponseType createOrder (OrderRequest $request)
 * @method OrderSaveResponseType updateOrder (UpdateOrderRequest $request)
 * @method OrderSaveResponseType changeOrder (ChangeOrderRequest $request)
 * @method ValidateOrderResponseType validateOrder (ValidateOrderRequest $request)
 * @method OrderSaveResponseType commitOrder (CommitOrderRequest $request)
 * @method DeleteOrderResponse deleteOrder (DeleteOrderRequest $request)
 * @method OrderStatusResponse orderStatus (OrderStatusRequest $request)
 * @method ListOrdersResponse listOrders (ListOrdersRequest $request)
 * @method PickupRequestDetailsResponse pickupRequestOptions (PickupRequestOptionsRequest $request)
 * @method CreatePickupRequestResponse createPickupRequest (CreatePickupRequestRequest $request)
 * @method PickupRequestDetailsResponse pickupRequestDetails (PickupRequestQueryType $request)
 * @method PickupRequestStatusResponse pickupRequestStatus (PickupRequestQueryType $request)
 * @method CancelPickupRequestResponse cancelPickupRequest (PickupRequestQueryType $request)
 * @method OrdersToShipResponse ordersToShip (OrdersToShipRequest $request)
 * @method CancelShipmentsResponse cancelShipments (CancelShipmentsRequest $request)
 * @method ShippingOptionResponse shippingOption (ShippingOptionRequest $request)
 * @method ChangeStoresResponseType createStores (ChangeStoresRequestType $request)
 * @method ChangeStoresResponseType updateStores (ChangeStoresRequestType $request)
 * @method DeleteStoresResponse deleteStores (DeleteStoresRequest $request)
 * @method ListStoresResponse listStores (ListStoresRequest $request)
 *
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

    public function __call($name, $arguments)
    {
        $response = $this->call($name, $arguments[0]);

        if ($response instanceof MixedResult) {
            $response = $response->getResult();
        }

        return $this->processResponse($arguments[0], $response);
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
     * @param RequestInterface $request
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
}
