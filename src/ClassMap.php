<?php

namespace Etrias\PaazlConnector;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'shippingOptionRequest' => '\\Etrias\\PaazlConnector\\StructType\\ShippingOptionRequest',
            'shippingOptionResponse' => '\\Etrias\\PaazlConnector\\StructType\\ShippingOptionResponse',
            'shippingOptions' => '\\Etrias\\PaazlConnector\\StructType\\ShippingOptions',
            'shippingOption' => '\\Etrias\\PaazlConnector\\StructType\\ShippingOption',
            'deliveryDatesBySourceType' => '\\Etrias\\PaazlConnector\\StructType\\DeliveryDatesBySourceType',
            'sources' => '\\Etrias\\PaazlConnector\\StructType\\Sources',
            'source' => '\\Etrias\\PaazlConnector\\StructType\\Source',
            'activeShippingOptionRequest' => '\\Etrias\\PaazlConnector\\StructType\\ActiveShippingOptionRequest',
            'activeShippingOptionResponse' => '\\Etrias\\PaazlConnector\\StructType\\ActiveShippingOptionResponse',
            'activeShippingOptions' => '\\Etrias\\PaazlConnector\\StructType\\ActiveShippingOptions',
            'activeShippingOption' => '\\Etrias\\PaazlConnector\\StructType\\ActiveShippingOption',
            'countriesType' => '\\Etrias\\PaazlConnector\\StructType\\CountriesType',
            'deliveryDatesType' => '\\Etrias\\PaazlConnector\\StructType\\DeliveryDatesType',
            'deliveryDateOptionType' => '\\Etrias\\PaazlConnector\\StructType\\DeliveryDateOptionType',
            'servicePointsType' => '\\Etrias\\PaazlConnector\\StructType\\ServicePointsType',
            'servicePoint' => '\\Etrias\\PaazlConnector\\StructType\\ServicePoint',
            'openingTimes' => '\\Etrias\\PaazlConnector\\StructType\\OpeningTimes',
            'time' => '\\Etrias\\PaazlConnector\\StructType\\Time',
            'deliveryEstimateRequest' => '\\Etrias\\PaazlConnector\\StructType\\DeliveryEstimateRequest',
            'deliveryEstimateResponse' => '\\Etrias\\PaazlConnector\\StructType\\DeliveryEstimateResponse',
            'disambiguationCandidateType' => '\\Etrias\\PaazlConnector\\StructType\\DisambiguationCandidateType',
            'deliveryEstimateType' => '\\Etrias\\PaazlConnector\\StructType\\DeliveryEstimateType',
            'deliveryEstimateDestination' => '\\Etrias\\PaazlConnector\\StructType\\DeliveryEstimateDestination',
            'orderStatusRequest' => '\\Etrias\\PaazlConnector\\StructType\\OrderStatusRequest',
            'orderStatusResponse' => '\\Etrias\\PaazlConnector\\StructType\\OrderStatusResponse',
            'orderStatusContainerType' => '\\Etrias\\PaazlConnector\\StructType\\OrderStatusContainerType',
            'shippingLabels' => '\\Etrias\\PaazlConnector\\StructType\\ShippingLabels',
            'shippingLabel' => '\\Etrias\\PaazlConnector\\StructType\\ShippingLabel',
            'carrierStatusHistoryType' => '\\Etrias\\PaazlConnector\\StructType\\CarrierStatusHistoryType',
            'history' => '\\Etrias\\PaazlConnector\\StructType\\History',
            'carrierStatusType' => '\\Etrias\\PaazlConnector\\StructType\\CarrierStatusType',
            'listOrdersRequest' => '\\Etrias\\PaazlConnector\\StructType\\ListOrdersRequest',
            'listOrdersResponse' => '\\Etrias\\PaazlConnector\\StructType\\ListOrdersResponse',
            'ordersType' => '\\Etrias\\PaazlConnector\\StructType\\OrdersType',
            'order' => '\\Etrias\\PaazlConnector\\StructType\\Order',
            'label' => '\\Etrias\\PaazlConnector\\StructType\\Label',
            'googleMapSearchstringRequest' => '\\Etrias\\PaazlConnector\\StructType\\GoogleMapSearchstringRequest',
            'googleMapSearchstringResponse' => '\\Etrias\\PaazlConnector\\StructType\\GoogleMapSearchstringResponse',
            'orderRequest' => '\\Etrias\\PaazlConnector\\StructType\\OrderRequest',
            'updateOrderRequest' => '\\Etrias\\PaazlConnector\\StructType\\UpdateOrderRequest',
            'deleteOrderRequest' => '\\Etrias\\PaazlConnector\\StructType\\DeleteOrderRequest',
            'deleteOrderResponse' => '\\Etrias\\PaazlConnector\\StructType\\DeleteOrderResponse',
            'commitOrderRequest' => '\\Etrias\\PaazlConnector\\StructType\\CommitOrderRequest',
            'validateOrderRequest' => '\\Etrias\\PaazlConnector\\StructType\\ValidateOrderRequest',
            'shippingMethod' => '\\Etrias\\PaazlConnector\\StructType\\ShippingMethod',
            'returnContractType' => '\\Etrias\\PaazlConnector\\StructType\\ReturnContractType',
            'senderAddress' => '\\Etrias\\PaazlConnector\\StructType\\SenderAddress',
            'shippingAddress' => '\\Etrias\\PaazlConnector\\StructType\\ShippingAddress',
            'changeOrderRequest' => '\\Etrias\\PaazlConnector\\StructType\\ChangeOrderRequest',
            'changeShippingMethod' => '\\Etrias\\PaazlConnector\\StructType\\ChangeShippingMethod',
            'changeSenderAddress' => '\\Etrias\\PaazlConnector\\StructType\\ChangeSenderAddress',
            'changeShippingAddress' => '\\Etrias\\PaazlConnector\\StructType\\ChangeShippingAddress',
            'changeProducts' => '\\Etrias\\PaazlConnector\\StructType\\ChangeProducts',
            'product' => '\\Etrias\\PaazlConnector\\StructType\\Product',
            'labelProducts' => '\\Etrias\\PaazlConnector\\StructType\\LabelProducts',
            'labelProduct' => '\\Etrias\\PaazlConnector\\StructType\\LabelProduct',
            'orderDetailsRequest' => '\\Etrias\\PaazlConnector\\StructType\\OrderDetailsRequest',
            'orderDetailsResponse' => '\\Etrias\\PaazlConnector\\StructType\\OrderDetailsResponse',
            'products' => '\\Etrias\\PaazlConnector\\StructType\\Products',
            'shippingOptionDetailsType' => '\\Etrias\\PaazlConnector\\StructType\\ShippingOptionDetailsType',
            'addressType' => '\\Etrias\\PaazlConnector\\StructType\\AddressType',
            'servicePointDetailsType' => '\\Etrias\\PaazlConnector\\StructType\\ServicePointDetailsType',
            'productType' => '\\Etrias\\PaazlConnector\\StructType\\ProductType',
            'checkoutResponse' => '\\Etrias\\PaazlConnector\\StructType\\CheckoutResponse',
            'checkoutStatusResponse' => '\\Etrias\\PaazlConnector\\StructType\\CheckoutStatusResponse',
            'consignee' => '\\Etrias\\PaazlConnector\\StructType\\Consignee',
            'delivery' => '\\Etrias\\PaazlConnector\\StructType\\Delivery',
            'notification' => '\\Etrias\\PaazlConnector\\StructType\\Notification',
            'addressRequest' => '\\Etrias\\PaazlConnector\\StructType\\AddressRequest',
            'addressResponse' => '\\Etrias\\PaazlConnector\\StructType\\AddressResponse',
            'address' => '\\Etrias\\PaazlConnector\\StructType\\Address',
            'generatePdfLabelsRequest' => '\\Etrias\\PaazlConnector\\StructType\\GeneratePdfLabelsRequest',
            'generatePdfLabelsResponse' => '\\Etrias\\PaazlConnector\\StructType\\GeneratePdfLabelsResponse',
            'generateZplLabelsRequest' => '\\Etrias\\PaazlConnector\\StructType\\GenerateZplLabelsRequest',
            'generateZplLabelsResponse' => '\\Etrias\\PaazlConnector\\StructType\\GenerateZplLabelsResponse',
            'generateLabelsRequest' => '\\Etrias\\PaazlConnector\\StructType\\GenerateLabelsRequest',
            'generateLabelsResponse' => '\\Etrias\\PaazlConnector\\StructType\\GenerateLabelsResponse',
            'generatePdfCustomsDocumentsRequest' => '\\Etrias\\PaazlConnector\\StructType\\GeneratePdfCustomsDocumentsRequest',
            'generatePdfCustomsDocumentsResponse' => '\\Etrias\\PaazlConnector\\StructType\\GeneratePdfCustomsDocumentsResponse',
            'generateShippingManifestRequest' => '\\Etrias\\PaazlConnector\\StructType\\GenerateShippingManifestRequest',
            'generateShippingManifestResponse' => '\\Etrias\\PaazlConnector\\StructType\\GenerateShippingManifestResponse',
            'generateExtraPdfLabelRequest' => '\\Etrias\\PaazlConnector\\StructType\\GenerateExtraPdfLabelRequest',
            'generateExtraPdfLabelResponse' => '\\Etrias\\PaazlConnector\\StructType\\GenerateExtraPdfLabelResponse',
            'generateImageLabelsRequest' => '\\Etrias\\PaazlConnector\\StructType\\GenerateImageLabelsRequest',
            'generateImageLabelsResponse' => '\\Etrias\\PaazlConnector\\StructType\\GenerateImageLabelsResponse',
            'generateExtraImageLabelRequest' => '\\Etrias\\PaazlConnector\\StructType\\GenerateExtraImageLabelRequest',
            'generateExtraImageLabelResponse' => '\\Etrias\\PaazlConnector\\StructType\\GenerateExtraImageLabelResponse',
            'generatePdfReturnLabelsRequest' => '\\Etrias\\PaazlConnector\\StructType\\GeneratePdfReturnLabelsRequest',
            'generatePdfReturnLabelsResponse' => '\\Etrias\\PaazlConnector\\StructType\\GeneratePdfReturnLabelsResponse',
            'generateExtraPdfReturnLabelRequest' => '\\Etrias\\PaazlConnector\\StructType\\GenerateExtraPdfReturnLabelRequest',
            'generateExtraPdfReturnLabelResponse' => '\\Etrias\\PaazlConnector\\StructType\\GenerateExtraPdfReturnLabelResponse',
            'generateImageReturnLabelsResponse' => '\\Etrias\\PaazlConnector\\StructType\\GenerateImageReturnLabelsResponse',
            'generateExtraImageReturnLabelResponse' => '\\Etrias\\PaazlConnector\\StructType\\GenerateExtraImageReturnLabelResponse',
            'getExistingPdfLabelsRequest' => '\\Etrias\\PaazlConnector\\StructType\\GetExistingPdfLabelsRequest',
            'getExistingPdfLabelsResponse' => '\\Etrias\\PaazlConnector\\StructType\\GetExistingPdfLabelsResponse',
            'getExistingPdfLabelRequest' => '\\Etrias\\PaazlConnector\\StructType\\GetExistingPdfLabelRequest',
            'getExistingPdfLabelResponse' => '\\Etrias\\PaazlConnector\\StructType\\GetExistingPdfLabelResponse',
            'getExistingZplLabelsRequest' => '\\Etrias\\PaazlConnector\\StructType\\GetExistingZplLabelsRequest',
            'getExistingZplLabelsResponse' => '\\Etrias\\PaazlConnector\\StructType\\GetExistingZplLabelsResponse',
            'getExistingZplLabelRequest' => '\\Etrias\\PaazlConnector\\StructType\\GetExistingZplLabelRequest',
            'getExistingZplLabelResponse' => '\\Etrias\\PaazlConnector\\StructType\\GetExistingZplLabelResponse',
            'getExistingImageLabelsResponse' => '\\Etrias\\PaazlConnector\\StructType\\GetExistingImageLabelsResponse',
            'getExistingImageLabelResponse' => '\\Etrias\\PaazlConnector\\StructType\\GetExistingImageLabelResponse',
            'generateAdditionalPdfDocumentRequest' => '\\Etrias\\PaazlConnector\\StructType\\GenerateAdditionalPdfDocumentRequest',
            'generateAdditionalPdfDocumentResponse' => '\\Etrias\\PaazlConnector\\StructType\\GenerateAdditionalPdfDocumentResponse',
            'generateAdditionalImageDocumentResponse' => '\\Etrias\\PaazlConnector\\StructType\\GenerateAdditionalImageDocumentResponse',
            'cancelShipmentsRequest' => '\\Etrias\\PaazlConnector\\StructType\\CancelShipmentsRequest',
            'cancelShipmentsResponse' => '\\Etrias\\PaazlConnector\\StructType\\CancelShipmentsResponse',
            'ordersToShipRequest' => '\\Etrias\\PaazlConnector\\StructType\\OrdersToShipRequest',
            'ordersToShipResponse' => '\\Etrias\\PaazlConnector\\StructType\\OrdersToShipResponse',
            'pickupRequestOptionsRequest' => '\\Etrias\\PaazlConnector\\StructType\\PickupRequestOptionsRequest',
            'pickupRequestOptionsResponse' => '\\Etrias\\PaazlConnector\\StructType\\PickupRequestOptionsResponse',
            'createPickupRequestRequest' => '\\Etrias\\PaazlConnector\\StructType\\CreatePickupRequestRequest',
            'createPickupRequestResponse' => '\\Etrias\\PaazlConnector\\StructType\\CreatePickupRequestResponse',
            'cancelPickupRequestResponse' => '\\Etrias\\PaazlConnector\\StructType\\CancelPickupRequestResponse',
            'pickupRequestDetailsResponse' => '\\Etrias\\PaazlConnector\\StructType\\PickupRequestDetailsResponse',
            'pickupRequestStatusResponse' => '\\Etrias\\PaazlConnector\\StructType\\PickupRequestStatusResponse',
            'pickupRequestStatusHistoryType' => '\\Etrias\\PaazlConnector\\StructType\\PickupRequestStatusHistoryType',
            'servicePointsRequest' => '\\Etrias\\PaazlConnector\\StructType\\ServicePointsRequest',
            'servicePointsResponse' => '\\Etrias\\PaazlConnector\\StructType\\ServicePointsResponse',
            'servicePointType' => '\\Etrias\\PaazlConnector\\StructType\\ServicePointType',
            'servicePointExtraDetails' => '\\Etrias\\PaazlConnector\\StructType\\ServicePointExtraDetails',
            'servicePointExtraDetailsStatus' => '\\Etrias\\PaazlConnector\\StructType\\ServicePointExtraDetailsStatus',
            'businessHoursType' => '\\Etrias\\PaazlConnector\\StructType\\BusinessHoursType',
            'rateRequest' => '\\Etrias\\PaazlConnector\\StructType\\RateRequest',
            'rateResponse' => '\\Etrias\\PaazlConnector\\StructType\\RateResponse',
            'rate' => '\\Etrias\\PaazlConnector\\StructType\\Rate',
            'deleteStoresRequest' => '\\Etrias\\PaazlConnector\\StructType\\DeleteStoresRequest',
            'deleteStoresResponse' => '\\Etrias\\PaazlConnector\\StructType\\DeleteStoresResponse',
            'deleteStoreType' => '\\Etrias\\PaazlConnector\\StructType\\DeleteStoreType',
            'listStoresRequest' => '\\Etrias\\PaazlConnector\\StructType\\ListStoresRequest',
            'listStoresResponse' => '\\Etrias\\PaazlConnector\\StructType\\ListStoresResponse',
            'openBatchRequest' => '\\Etrias\\PaazlConnector\\StructType\\OpenBatchRequest',
            'openBatchResponse' => '\\Etrias\\PaazlConnector\\StructType\\OpenBatchResponse',
            'closeBatchRequest' => '\\Etrias\\PaazlConnector\\StructType\\CloseBatchRequest',
            'closeBatchResponse' => '\\Etrias\\PaazlConnector\\StructType\\CloseBatchResponse',
            'listOpenBatchesRequest' => '\\Etrias\\PaazlConnector\\StructType\\ListOpenBatchesRequest',
            'listOpenBatchesResponse' => '\\Etrias\\PaazlConnector\\StructType\\ListOpenBatchesResponse',
            'batchStatusRequest' => '\\Etrias\\PaazlConnector\\StructType\\BatchStatusRequest',
            'batchStatusResponse' => '\\Etrias\\PaazlConnector\\StructType\\BatchStatusResponse',
            'proofOfDeliveryDocumentType' => '\\Etrias\\PaazlConnector\\StructType\\ProofOfDeliveryDocumentType',
            'proofOfDeliveryRequest' => '\\Etrias\\PaazlConnector\\StructType\\ProofOfDeliveryRequest',
            'proofOfDeliveryResponse' => '\\Etrias\\PaazlConnector\\StructType\\ProofOfDeliveryResponse',
            'triggerCarrierRegistrationRequest' => '\\Etrias\\PaazlConnector\\StructType\\TriggerCarrierRegistrationRequest',
            'triggerCarrierRegistrationResponse' => '\\Etrias\\PaazlConnector\\StructType\\TriggerCarrierRegistrationResponse',
            'triggerBarcodeRequestType' => '\\Etrias\\PaazlConnector\\StructType\\TriggerBarcodeRequestType',
            'triggerBarcodeResponseType' => '\\Etrias\\PaazlConnector\\StructType\\TriggerBarcodeResponseType',
            'availableStores' => '\\Etrias\\PaazlConnector\\StructType\\AvailableStores',
            'store' => '\\Etrias\\PaazlConnector\\StructType\\Store',
            'orderSaveResponseType' => '\\Etrias\\PaazlConnector\\StructType\\OrderSaveResponseType',
            'validateOrderResponseType' => '\\Etrias\\PaazlConnector\\StructType\\ValidateOrderResponseType',
            'orderType' => '\\Etrias\\PaazlConnector\\StructType\\OrderType',
            'returnLabelsOrderType' => '\\Etrias\\PaazlConnector\\StructType\\ReturnLabelsOrderType',
            'baseCheckoutRequestType' => '\\Etrias\\PaazlConnector\\StructType\\BaseCheckoutRequestType',
            'generateReturnLabelsType' => '\\Etrias\\PaazlConnector\\StructType\\GenerateReturnLabelsType',
            'generateReturnLabelType' => '\\Etrias\\PaazlConnector\\StructType\\GenerateReturnLabelType',
            'getExistingLabelsType' => '\\Etrias\\PaazlConnector\\StructType\\GetExistingLabelsType',
            'existingLabelType' => '\\Etrias\\PaazlConnector\\StructType\\ExistingLabelType',
            'getExistingLabelType' => '\\Etrias\\PaazlConnector\\StructType\\GetExistingLabelType',
            'labelType' => '\\Etrias\\PaazlConnector\\StructType\\LabelType',
            'labelMetaDataType' => '\\Etrias\\PaazlConnector\\StructType\\LabelMetaDataType',
            'returnLabelType' => '\\Etrias\\PaazlConnector\\StructType\\ReturnLabelType',
            'generateAdditionalDocumentType' => '\\Etrias\\PaazlConnector\\StructType\\GenerateAdditionalDocumentType',
            'additionalDocumentContainerType' => '\\Etrias\\PaazlConnector\\StructType\\AdditionalDocumentContainerType',
            'labelResponseType' => '\\Etrias\\PaazlConnector\\StructType\\LabelResponseType',
            'orderToShipType' => '\\Etrias\\PaazlConnector\\StructType\\OrderToShipType',
            'pickupRequestOptionType' => '\\Etrias\\PaazlConnector\\StructType\\PickupRequestOptionType',
            'pickupRequestQueryType' => '\\Etrias\\PaazlConnector\\StructType\\PickupRequestQueryType',
            'pickupRequestStatusEntryType' => '\\Etrias\\PaazlConnector\\StructType\\PickupRequestStatusEntryType',
            'changeStoresRequestType' => '\\Etrias\\PaazlConnector\\StructType\\ChangeStoresRequestType',
            'changeStoresResponseType' => '\\Etrias\\PaazlConnector\\StructType\\ChangeStoresResponseType',
            'storeDetailsType' => '\\Etrias\\PaazlConnector\\StructType\\StoreDetailsType',
            'changeStoreDetailsType' => '\\Etrias\\PaazlConnector\\StructType\\ChangeStoreDetailsType',
            'batchStatusType' => '\\Etrias\\PaazlConnector\\StructType\\BatchStatusType',
            'batchStatusOrderType' => '\\Etrias\\PaazlConnector\\StructType\\BatchStatusOrderType',
            'batchStatusLabelType' => '\\Etrias\\PaazlConnector\\StructType\\BatchStatusLabelType',
            'dateRangeType' => '\\Etrias\\PaazlConnector\\StructType\\DateRangeType',
            'timeRangeType' => '\\Etrias\\PaazlConnector\\StructType\\TimeRangeType',
            'openOrClosedTimeRangeType' => '\\Etrias\\PaazlConnector\\StructType\\OpenOrClosedTimeRangeType',
            'stringRangeType' => '\\Etrias\\PaazlConnector\\StructType\\StringRangeType',
            'nonNegativeIntegerRangeType' => '\\Etrias\\PaazlConnector\\StructType\\NonNegativeIntegerRangeType',
            'coordinatesType' => '\\Etrias\\PaazlConnector\\StructType\\CoordinatesType',
            'errorType' => '\\Etrias\\PaazlConnector\\StructType\\ErrorType',
        );
    }
}
