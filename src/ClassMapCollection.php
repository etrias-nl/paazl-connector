<?php

use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

return new ClassMapCollection([
    new ClassMap('shippingOptionRequest', \Etrias\PaazlConnector\SoapTypes\ShippingOptionRequest::class),
    new ClassMap('shippingOptionResponse', \Etrias\PaazlConnector\SoapTypes\ShippingOptionResponse::class),
    new ClassMap('shippingOptions', \Etrias\PaazlConnector\SoapTypes\ShippingOptions::class),
    new ClassMap('shippingOption', \Etrias\PaazlConnector\SoapTypes\ShippingOption::class),
    new ClassMap('deliveryDatesBySourceType', \Etrias\PaazlConnector\SoapTypes\DeliveryDatesBySourceType::class),
    new ClassMap('sources', \Etrias\PaazlConnector\SoapTypes\Sources::class),
    new ClassMap('source', \Etrias\PaazlConnector\SoapTypes\Source::class),
    new ClassMap('activeShippingOptionRequest', \Etrias\PaazlConnector\SoapTypes\ActiveShippingOptionRequest::class),
    new ClassMap('activeShippingOptionResponse', \Etrias\PaazlConnector\SoapTypes\ActiveShippingOptionResponse::class),
    new ClassMap('activeShippingOptions', \Etrias\PaazlConnector\SoapTypes\ActiveShippingOptions::class),
    new ClassMap('activeShippingOption', \Etrias\PaazlConnector\SoapTypes\ActiveShippingOption::class),
    new ClassMap('countriesType', \Etrias\PaazlConnector\SoapTypes\CountriesType::class),
    new ClassMap('deliveryDatesType', \Etrias\PaazlConnector\SoapTypes\DeliveryDatesType::class),
    new ClassMap('deliveryDateOptionType', \Etrias\PaazlConnector\SoapTypes\DeliveryDateOptionType::class),
    new ClassMap('servicePointsType', \Etrias\PaazlConnector\SoapTypes\ServicePointsType::class),
    new ClassMap('servicePoint', \Etrias\PaazlConnector\SoapTypes\ServicePoint::class),
    new ClassMap('openingTimes', \Etrias\PaazlConnector\SoapTypes\OpeningTimes::class),
    new ClassMap('time', \Etrias\PaazlConnector\SoapTypes\Time::class),
    new ClassMap('deliveryEstimateRequest', \Etrias\PaazlConnector\SoapTypes\DeliveryEstimateRequest::class),
    new ClassMap('deliveryEstimateResponse', \Etrias\PaazlConnector\SoapTypes\DeliveryEstimateResponse::class),
    new ClassMap('disambiguationCandidateType', \Etrias\PaazlConnector\SoapTypes\DisambiguationCandidateType::class),
    new ClassMap('deliveryEstimateType', \Etrias\PaazlConnector\SoapTypes\DeliveryEstimateType::class),
    new ClassMap('deliveryEstimateDestination', \Etrias\PaazlConnector\SoapTypes\DeliveryEstimateDestination::class),
    new ClassMap('orderStatusRequest', \Etrias\PaazlConnector\SoapTypes\OrderStatusRequest::class),
    new ClassMap('orderStatusResponse', \Etrias\PaazlConnector\SoapTypes\OrderStatusResponse::class),
    new ClassMap('orderStatusContainerType', \Etrias\PaazlConnector\SoapTypes\OrderStatusContainerType::class),
    new ClassMap('shippingLabels', \Etrias\PaazlConnector\SoapTypes\ShippingLabels::class),
    new ClassMap('shippingLabel', \Etrias\PaazlConnector\SoapTypes\ShippingLabel::class),
    new ClassMap('carrierStatusHistoryType', \Etrias\PaazlConnector\SoapTypes\CarrierStatusHistoryType::class),
    new ClassMap('history', \Etrias\PaazlConnector\SoapTypes\History::class),
    new ClassMap('carrierStatusType', \Etrias\PaazlConnector\SoapTypes\CarrierStatusType::class),
    new ClassMap('listOrdersRequest', \Etrias\PaazlConnector\SoapTypes\ListOrdersRequest::class),
    new ClassMap('listOrdersResponse', \Etrias\PaazlConnector\SoapTypes\ListOrdersResponse::class),
    new ClassMap('ordersType', \Etrias\PaazlConnector\SoapTypes\OrdersType::class),
    new ClassMap('order', \Etrias\PaazlConnector\SoapTypes\Order::class),
    new ClassMap('label', \Etrias\PaazlConnector\SoapTypes\Label::class),
    new ClassMap('googleMapSearchstringRequest', \Etrias\PaazlConnector\SoapTypes\GoogleMapSearchstringRequest::class),
    new ClassMap('googleMapSearchstringResponse', \Etrias\PaazlConnector\SoapTypes\GoogleMapSearchstringResponse::class),
    new ClassMap('orderRequest', \Etrias\PaazlConnector\SoapTypes\OrderRequest::class),
    new ClassMap('updateOrderRequest', \Etrias\PaazlConnector\SoapTypes\UpdateOrderRequest::class),
    new ClassMap('deleteOrderRequest', \Etrias\PaazlConnector\SoapTypes\DeleteOrderRequest::class),
    new ClassMap('deleteOrderResponse', \Etrias\PaazlConnector\SoapTypes\DeleteOrderResponse::class),
    new ClassMap('commitOrderRequest', \Etrias\PaazlConnector\SoapTypes\CommitOrderRequest::class),
    new ClassMap('validateOrderRequest', \Etrias\PaazlConnector\SoapTypes\ValidateOrderRequest::class),
    new ClassMap('shippingMethod', \Etrias\PaazlConnector\SoapTypes\ShippingMethod::class),
    new ClassMap('returnContractType', \Etrias\PaazlConnector\SoapTypes\ReturnContractType::class),
    new ClassMap('senderAddress', \Etrias\PaazlConnector\SoapTypes\SenderAddress::class),
    new ClassMap('shippingAddress', \Etrias\PaazlConnector\SoapTypes\ShippingAddress::class),
    new ClassMap('changeOrderRequest', \Etrias\PaazlConnector\SoapTypes\ChangeOrderRequest::class),
    new ClassMap('changeShippingMethod', \Etrias\PaazlConnector\SoapTypes\ChangeShippingMethod::class),
    new ClassMap('changeSenderAddress', \Etrias\PaazlConnector\SoapTypes\ChangeSenderAddress::class),
    new ClassMap('changeShippingAddress', \Etrias\PaazlConnector\SoapTypes\ChangeShippingAddress::class),
    new ClassMap('changeProducts', \Etrias\PaazlConnector\SoapTypes\ChangeProducts::class),
    new ClassMap('product', \Etrias\PaazlConnector\SoapTypes\Product::class),
    new ClassMap('labelProducts', \Etrias\PaazlConnector\SoapTypes\LabelProducts::class),
    new ClassMap('labelProduct', \Etrias\PaazlConnector\SoapTypes\LabelProduct::class),
    new ClassMap('orderDetailsRequest', \Etrias\PaazlConnector\SoapTypes\OrderDetailsRequest::class),
    new ClassMap('orderDetailsResponse', \Etrias\PaazlConnector\SoapTypes\OrderDetailsResponse::class),
    new ClassMap('products', \Etrias\PaazlConnector\SoapTypes\Products::class),
    new ClassMap('shippingOptionDetailsType', \Etrias\PaazlConnector\SoapTypes\ShippingOptionDetailsType::class),
    new ClassMap('addressType', \Etrias\PaazlConnector\SoapTypes\AddressType::class),
    new ClassMap('servicePointDetailsType', \Etrias\PaazlConnector\SoapTypes\ServicePointDetailsType::class),
    new ClassMap('productType', \Etrias\PaazlConnector\SoapTypes\ProductType::class),
    new ClassMap('checkoutResponse', \Etrias\PaazlConnector\SoapTypes\CheckoutResponse::class),
    new ClassMap('checkoutStatusResponse', \Etrias\PaazlConnector\SoapTypes\CheckoutStatusResponse::class),
    new ClassMap('consignee', \Etrias\PaazlConnector\SoapTypes\Consignee::class),
    new ClassMap('delivery', \Etrias\PaazlConnector\SoapTypes\Delivery::class),
    new ClassMap('notification', \Etrias\PaazlConnector\SoapTypes\Notification::class),
    new ClassMap('addressRequest', \Etrias\PaazlConnector\SoapTypes\AddressRequest::class),
    new ClassMap('addressResponse', \Etrias\PaazlConnector\SoapTypes\AddressResponse::class),
    new ClassMap('address', \Etrias\PaazlConnector\SoapTypes\Address::class),
    new ClassMap('generatePdfLabelsRequest', \Etrias\PaazlConnector\SoapTypes\GeneratePdfLabelsRequest::class),
    new ClassMap('generatePdfLabelsResponse', \Etrias\PaazlConnector\SoapTypes\GeneratePdfLabelsResponse::class),
    new ClassMap('generateZplLabelsRequest', \Etrias\PaazlConnector\SoapTypes\GenerateZplLabelsRequest::class),
    new ClassMap('generateZplLabelsResponse', \Etrias\PaazlConnector\SoapTypes\GenerateZplLabelsResponse::class),
    new ClassMap('generateLabelsRequest', \Etrias\PaazlConnector\SoapTypes\GenerateLabelsRequest::class),
    new ClassMap('generateLabelsResponse', \Etrias\PaazlConnector\SoapTypes\GenerateLabelsResponse::class),
    new ClassMap('generatePdfCustomsDocumentsRequest', \Etrias\PaazlConnector\SoapTypes\GeneratePdfCustomsDocumentsRequest::class),
    new ClassMap('generatePdfCustomsDocumentsResponse', \Etrias\PaazlConnector\SoapTypes\GeneratePdfCustomsDocumentsResponse::class),
    new ClassMap('generateShippingManifestRequest', \Etrias\PaazlConnector\SoapTypes\GenerateShippingManifestRequest::class),
    new ClassMap('generateShippingManifestResponse', \Etrias\PaazlConnector\SoapTypes\GenerateShippingManifestResponse::class),
    new ClassMap('generateExtraPdfLabelRequest', \Etrias\PaazlConnector\SoapTypes\GenerateExtraPdfLabelRequest::class),
    new ClassMap('generateExtraPdfLabelResponse', \Etrias\PaazlConnector\SoapTypes\GenerateExtraPdfLabelResponse::class),
    new ClassMap('generateImageLabelsRequest', \Etrias\PaazlConnector\SoapTypes\GenerateImageLabelsRequest::class),
    new ClassMap('generateImageLabelsResponse', \Etrias\PaazlConnector\SoapTypes\GenerateImageLabelsResponse::class),
    new ClassMap('generateExtraImageLabelRequest', \Etrias\PaazlConnector\SoapTypes\GenerateExtraImageLabelRequest::class),
    new ClassMap('generateExtraImageLabelResponse', \Etrias\PaazlConnector\SoapTypes\GenerateExtraImageLabelResponse::class),
    new ClassMap('generatePdfReturnLabelsRequest', \Etrias\PaazlConnector\SoapTypes\GeneratePdfReturnLabelsRequest::class),
    new ClassMap('generatePdfReturnLabelsResponse', \Etrias\PaazlConnector\SoapTypes\GeneratePdfReturnLabelsResponse::class),
    new ClassMap('generateExtraPdfReturnLabelRequest', \Etrias\PaazlConnector\SoapTypes\GenerateExtraPdfReturnLabelRequest::class),
    new ClassMap('generateExtraPdfReturnLabelResponse', \Etrias\PaazlConnector\SoapTypes\GenerateExtraPdfReturnLabelResponse::class),
    new ClassMap('generateImageReturnLabelsResponse', \Etrias\PaazlConnector\SoapTypes\GenerateImageReturnLabelsResponse::class),
    new ClassMap('generateExtraImageReturnLabelResponse', \Etrias\PaazlConnector\SoapTypes\GenerateExtraImageReturnLabelResponse::class),
    new ClassMap('getExistingPdfLabelsRequest', \Etrias\PaazlConnector\SoapTypes\GetExistingPdfLabelsRequest::class),
    new ClassMap('getExistingPdfLabelsResponse', \Etrias\PaazlConnector\SoapTypes\GetExistingPdfLabelsResponse::class),
    new ClassMap('getExistingPdfLabelRequest', \Etrias\PaazlConnector\SoapTypes\GetExistingPdfLabelRequest::class),
    new ClassMap('getExistingPdfLabelResponse', \Etrias\PaazlConnector\SoapTypes\GetExistingPdfLabelResponse::class),
    new ClassMap('getExistingZplLabelsRequest', \Etrias\PaazlConnector\SoapTypes\GetExistingZplLabelsRequest::class),
    new ClassMap('getExistingZplLabelsResponse', \Etrias\PaazlConnector\SoapTypes\GetExistingZplLabelsResponse::class),
    new ClassMap('getExistingZplLabelRequest', \Etrias\PaazlConnector\SoapTypes\GetExistingZplLabelRequest::class),
    new ClassMap('getExistingZplLabelResponse', \Etrias\PaazlConnector\SoapTypes\GetExistingZplLabelResponse::class),
    new ClassMap('getExistingImageLabelsResponse', \Etrias\PaazlConnector\SoapTypes\GetExistingImageLabelsResponse::class),
    new ClassMap('getExistingImageLabelResponse', \Etrias\PaazlConnector\SoapTypes\GetExistingImageLabelResponse::class),
    new ClassMap('generateAdditionalPdfDocumentRequest', \Etrias\PaazlConnector\SoapTypes\GenerateAdditionalPdfDocumentRequest::class),
    new ClassMap('generateAdditionalPdfDocumentResponse', \Etrias\PaazlConnector\SoapTypes\GenerateAdditionalPdfDocumentResponse::class),
    new ClassMap('generateAdditionalImageDocumentResponse', \Etrias\PaazlConnector\SoapTypes\GenerateAdditionalImageDocumentResponse::class),
    new ClassMap('cancelShipmentsRequest', \Etrias\PaazlConnector\SoapTypes\CancelShipmentsRequest::class),
    new ClassMap('cancelShipmentsResponse', \Etrias\PaazlConnector\SoapTypes\CancelShipmentsResponse::class),
    new ClassMap('ordersToShipRequest', \Etrias\PaazlConnector\SoapTypes\OrdersToShipRequest::class),
    new ClassMap('ordersToShipResponse', \Etrias\PaazlConnector\SoapTypes\OrdersToShipResponse::class),
    new ClassMap('pickupRequestOptionsRequest', \Etrias\PaazlConnector\SoapTypes\PickupRequestOptionsRequest::class),
    new ClassMap('pickupRequestOptionsResponse', \Etrias\PaazlConnector\SoapTypes\PickupRequestOptionsResponse::class),
    new ClassMap('createPickupRequestRequest', \Etrias\PaazlConnector\SoapTypes\CreatePickupRequestRequest::class),
    new ClassMap('createPickupRequestResponse', \Etrias\PaazlConnector\SoapTypes\CreatePickupRequestResponse::class),
    new ClassMap('cancelPickupRequestResponse', \Etrias\PaazlConnector\SoapTypes\CancelPickupRequestResponse::class),
    new ClassMap('pickupRequestDetailsResponse', \Etrias\PaazlConnector\SoapTypes\PickupRequestDetailsResponse::class),
    new ClassMap('pickupRequestStatusResponse', \Etrias\PaazlConnector\SoapTypes\PickupRequestStatusResponse::class),
    new ClassMap('pickupRequestStatusHistoryType', \Etrias\PaazlConnector\SoapTypes\PickupRequestStatusHistoryType::class),
    new ClassMap('servicePointsRequest', \Etrias\PaazlConnector\SoapTypes\ServicePointsRequest::class),
    new ClassMap('servicePointsResponse', \Etrias\PaazlConnector\SoapTypes\ServicePointsResponse::class),
    new ClassMap('servicePointType', \Etrias\PaazlConnector\SoapTypes\ServicePointType::class),
    new ClassMap('servicePointExtraDetails', \Etrias\PaazlConnector\SoapTypes\ServicePointExtraDetails::class),
    new ClassMap('servicePointExtraDetailsStatus', \Etrias\PaazlConnector\SoapTypes\ServicePointExtraDetailsStatus::class),
    new ClassMap('businessHoursType', \Etrias\PaazlConnector\SoapTypes\BusinessHoursType::class),
    new ClassMap('rateRequest', \Etrias\PaazlConnector\SoapTypes\RateRequest::class),
    new ClassMap('rateResponse', \Etrias\PaazlConnector\SoapTypes\RateResponse::class),
    new ClassMap('rate', \Etrias\PaazlConnector\SoapTypes\Rate::class),
    new ClassMap('deleteStoresRequest', \Etrias\PaazlConnector\SoapTypes\DeleteStoresRequest::class),
    new ClassMap('deleteStoresResponse', \Etrias\PaazlConnector\SoapTypes\DeleteStoresResponse::class),
    new ClassMap('deleteStoreType', \Etrias\PaazlConnector\SoapTypes\DeleteStoreType::class),
    new ClassMap('listStoresRequest', \Etrias\PaazlConnector\SoapTypes\ListStoresRequest::class),
    new ClassMap('listStoresResponse', \Etrias\PaazlConnector\SoapTypes\ListStoresResponse::class),
    new ClassMap('openBatchRequest', \Etrias\PaazlConnector\SoapTypes\OpenBatchRequest::class),
    new ClassMap('openBatchResponse', \Etrias\PaazlConnector\SoapTypes\OpenBatchResponse::class),
    new ClassMap('closeBatchRequest', \Etrias\PaazlConnector\SoapTypes\CloseBatchRequest::class),
    new ClassMap('closeBatchResponse', \Etrias\PaazlConnector\SoapTypes\CloseBatchResponse::class),
    new ClassMap('listOpenBatchesRequest', \Etrias\PaazlConnector\SoapTypes\ListOpenBatchesRequest::class),
    new ClassMap('listOpenBatchesResponse', \Etrias\PaazlConnector\SoapTypes\ListOpenBatchesResponse::class),
    new ClassMap('batchStatusRequest', \Etrias\PaazlConnector\SoapTypes\BatchStatusRequest::class),
    new ClassMap('batchStatusResponse', \Etrias\PaazlConnector\SoapTypes\BatchStatusResponse::class),
    new ClassMap('proofOfDeliveryDocumentType', \Etrias\PaazlConnector\SoapTypes\ProofOfDeliveryDocumentType::class),
    new ClassMap('proofOfDeliveryRequest', \Etrias\PaazlConnector\SoapTypes\ProofOfDeliveryRequest::class),
    new ClassMap('proofOfDeliveryResponse', \Etrias\PaazlConnector\SoapTypes\ProofOfDeliveryResponse::class),
    new ClassMap('triggerCarrierRegistrationRequest', \Etrias\PaazlConnector\SoapTypes\TriggerCarrierRegistrationRequest::class),
    new ClassMap('triggerCarrierRegistrationResponse', \Etrias\PaazlConnector\SoapTypes\TriggerCarrierRegistrationResponse::class),
    new ClassMap('triggerBarcodeRequestType', \Etrias\PaazlConnector\SoapTypes\TriggerBarcodeRequestType::class),
    new ClassMap('triggerBarcodeResponseType', \Etrias\PaazlConnector\SoapTypes\TriggerBarcodeResponseType::class),
    new ClassMap('availableStores', \Etrias\PaazlConnector\SoapTypes\AvailableStores::class),
    new ClassMap('store', \Etrias\PaazlConnector\SoapTypes\Store::class),
    new ClassMap('orderSaveResponseType', \Etrias\PaazlConnector\SoapTypes\OrderSaveResponseType::class),
    new ClassMap('validateOrderResponseType', \Etrias\PaazlConnector\SoapTypes\ValidateOrderResponseType::class),
    new ClassMap('orderType', \Etrias\PaazlConnector\SoapTypes\OrderType::class),
    new ClassMap('returnLabelsOrderType', \Etrias\PaazlConnector\SoapTypes\ReturnLabelsOrderType::class),
    new ClassMap('baseCheckoutRequestType', \Etrias\PaazlConnector\SoapTypes\BaseCheckoutRequestType::class),
    new ClassMap('generateReturnLabelsType', \Etrias\PaazlConnector\SoapTypes\GenerateReturnLabelsType::class),
    new ClassMap('generateReturnLabelType', \Etrias\PaazlConnector\SoapTypes\GenerateReturnLabelType::class),
    new ClassMap('getExistingLabelsType', \Etrias\PaazlConnector\SoapTypes\GetExistingLabelsType::class),
    new ClassMap('existingLabelType', \Etrias\PaazlConnector\SoapTypes\ExistingLabelType::class),
    new ClassMap('getExistingLabelType', \Etrias\PaazlConnector\SoapTypes\GetExistingLabelType::class),
    new ClassMap('labelType', \Etrias\PaazlConnector\SoapTypes\LabelType::class),
    new ClassMap('labelMetaDataType', \Etrias\PaazlConnector\SoapTypes\LabelMetaDataType::class),
    new ClassMap('returnLabelType', \Etrias\PaazlConnector\SoapTypes\ReturnLabelType::class),
    new ClassMap('generateAdditionalDocumentType', \Etrias\PaazlConnector\SoapTypes\GenerateAdditionalDocumentType::class),
    new ClassMap('additionalDocumentContainerType', \Etrias\PaazlConnector\SoapTypes\AdditionalDocumentContainerType::class),
    new ClassMap('labelResponseType', \Etrias\PaazlConnector\SoapTypes\LabelResponseType::class),
    new ClassMap('orderToShipType', \Etrias\PaazlConnector\SoapTypes\OrderToShipType::class),
    new ClassMap('pickupRequestOptionType', \Etrias\PaazlConnector\SoapTypes\PickupRequestOptionType::class),
    new ClassMap('pickupRequestQueryType', \Etrias\PaazlConnector\SoapTypes\PickupRequestQueryType::class),
    new ClassMap('pickupRequestStatusEntryType', \Etrias\PaazlConnector\SoapTypes\PickupRequestStatusEntryType::class),
    new ClassMap('changeStoresRequestType', \Etrias\PaazlConnector\SoapTypes\ChangeStoresRequestType::class),
    new ClassMap('changeStoresResponseType', \Etrias\PaazlConnector\SoapTypes\ChangeStoresResponseType::class),
    new ClassMap('storeDetailsType', \Etrias\PaazlConnector\SoapTypes\StoreDetailsType::class),
    new ClassMap('changeStoreDetailsType', \Etrias\PaazlConnector\SoapTypes\ChangeStoreDetailsType::class),
    new ClassMap('batchStatusType', \Etrias\PaazlConnector\SoapTypes\BatchStatusType::class),
    new ClassMap('batchStatusOrderType', \Etrias\PaazlConnector\SoapTypes\BatchStatusOrderType::class),
    new ClassMap('batchStatusLabelType', \Etrias\PaazlConnector\SoapTypes\BatchStatusLabelType::class),
    new ClassMap('dateRangeType', \Etrias\PaazlConnector\SoapTypes\DateRangeType::class),
    new ClassMap('timeRangeType', \Etrias\PaazlConnector\SoapTypes\TimeRangeType::class),
    new ClassMap('openOrClosedTimeRangeType', \Etrias\PaazlConnector\SoapTypes\OpenOrClosedTimeRangeType::class),
    new ClassMap('stringRangeType', \Etrias\PaazlConnector\SoapTypes\StringRangeType::class),
    new ClassMap('nonNegativeIntegerRangeType', \Etrias\PaazlConnector\SoapTypes\NonNegativeIntegerRangeType::class),
    new ClassMap('coordinatesType', \Etrias\PaazlConnector\SoapTypes\CoordinatesType::class),
    new ClassMap('errorType', \Etrias\PaazlConnector\SoapTypes\ErrorType::class),
]);