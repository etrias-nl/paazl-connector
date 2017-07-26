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

require_once __DIR__.'/vendor/autoload.php';
/**
 * Minimal options.
 */
$options = [
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ost.paazl.com/parcelshipperservice/orderRequest.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Etrias\PaazlConnector\ClassMap::get(),
];
/**
 * Samples for Service ServiceType.
 */
$service = new \Etrias\PaazlConnector\ServiceType\Service($options);
/*
 * Sample call for changeOrder operation/method
 */
if ($service->changeOrder(new \Etrias\PaazlConnector\StructType\ChangeOrderRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for orderDetails operation/method
 */
if ($service->orderDetails(new \Etrias\PaazlConnector\StructType\OrderDetailsRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for googleMapSearchstring operation/method
 */
if ($service->googleMapSearchstring(new \Etrias\PaazlConnector\StructType\GoogleMapSearchstringRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for order operation/method
 */
if ($service->order(new \Etrias\PaazlConnector\StructType\OrderRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for deliveryEstimate operation/method
 */
if ($service->deliveryEstimate(new \Etrias\PaazlConnector\StructType\DeliveryEstimateRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for batchStatus operation/method
 */
if ($service->batchStatus(new \Etrias\PaazlConnector\StructType\BatchStatusRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for getExistingZplLabel operation/method
 */
if ($service->getExistingZplLabel(new \Etrias\PaazlConnector\StructType\GetExistingZplLabelRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for generateAdditionalImageDocument operation/method
 */
if ($service->generateAdditionalImageDocument(new \Etrias\PaazlConnector\StructType\GenerateAdditionalDocumentType()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for generatePdfLabels operation/method
 */
if ($service->generatePdfLabels(new \Etrias\PaazlConnector\StructType\GeneratePdfLabelsRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for commitOrder operation/method
 */
if ($service->commitOrder(new \Etrias\PaazlConnector\StructType\CommitOrderRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for generatePdfCustomsDocuments operation/method
 */
if ($service->generatePdfCustomsDocuments(new \Etrias\PaazlConnector\StructType\GeneratePdfCustomsDocumentsRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for generateZplLabels operation/method
 */
if ($service->generateZplLabels(new \Etrias\PaazlConnector\StructType\GenerateZplLabelsRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for getExistingPdfLabel operation/method
 */
if ($service->getExistingPdfLabel(new \Etrias\PaazlConnector\StructType\GetExistingPdfLabelRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for activeShippingOption operation/method
 */
if ($service->activeShippingOption(new \Etrias\PaazlConnector\StructType\ActiveShippingOptionRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for cancelShipments operation/method
 */
if ($service->cancelShipments(new \Etrias\PaazlConnector\StructType\CancelShipmentsRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for address operation/method
 */
if ($service->address(new \Etrias\PaazlConnector\StructType\AddressRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for generateExtraPdfReturnLabel operation/method
 */
if ($service->generateExtraPdfReturnLabel(new \Etrias\PaazlConnector\StructType\GenerateExtraPdfReturnLabelRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for getExistingPdfLabels operation/method
 */
if ($service->getExistingPdfLabels(new \Etrias\PaazlConnector\StructType\GetExistingPdfLabelsRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for createPickupRequest operation/method
 */
if ($service->createPickupRequest(new \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for generateImageReturnLabels operation/method
 */
if ($service->generateImageReturnLabels(new \Etrias\PaazlConnector\StructType\GenerateReturnLabelsType()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for generateImageLabels operation/method
 */
if ($service->generateImageLabels(new \Etrias\PaazlConnector\StructType\GenerateImageLabelsRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for generateExtraImageLabel operation/method
 */
if ($service->generateExtraImageLabel(new \Etrias\PaazlConnector\StructType\GenerateExtraImageLabelRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for proofOfDelivery operation/method
 */
if ($service->proofOfDelivery(new \Etrias\PaazlConnector\StructType\ProofOfDeliveryRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for servicePoints operation/method
 */
if ($service->servicePoints(new \Etrias\PaazlConnector\StructType\ServicePointsRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for generateExtraPdfLabel operation/method
 */
if ($service->generateExtraPdfLabel(new \Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for listOrders operation/method
 */
if ($service->listOrders(new \Etrias\PaazlConnector\StructType\ListOrdersRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for getExistingImageLabel operation/method
 */
if ($service->getExistingImageLabel(new \Etrias\PaazlConnector\StructType\GetExistingLabelType()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for generateAdditionalPdfDocument operation/method
 */
if ($service->generateAdditionalPdfDocument(new \Etrias\PaazlConnector\StructType\GenerateAdditionalPdfDocumentRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for pickupRequestDetails operation/method
 */
if ($service->pickupRequestDetails(new \Etrias\PaazlConnector\StructType\PickupRequestQueryType()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for createStores operation/method
 */
if ($service->createStores(new \Etrias\PaazlConnector\StructType\ChangeStoresRequestType()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for listOpenBatches operation/method
 */
if ($service->listOpenBatches(new \Etrias\PaazlConnector\StructType\ListOpenBatchesRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for listStores operation/method
 */
if ($service->listStores(new \Etrias\PaazlConnector\StructType\ListStoresRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for ordersToShip operation/method
 */
if ($service->ordersToShip(new \Etrias\PaazlConnector\StructType\OrdersToShipRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for closeBatch operation/method
 */
if ($service->closeBatch(new \Etrias\PaazlConnector\StructType\CloseBatchRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for openBatch operation/method
 */
if ($service->openBatch(new \Etrias\PaazlConnector\StructType\OpenBatchRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for checkoutStatus operation/method
 */
if ($service->checkoutStatus(new \Etrias\PaazlConnector\StructType\BaseCheckoutRequestType()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for pickupRequestStatus operation/method
 */
if ($service->pickupRequestStatus(new \Etrias\PaazlConnector\StructType\PickupRequestQueryType()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for cancelPickupRequest operation/method
 */
if ($service->cancelPickupRequest(new \Etrias\PaazlConnector\StructType\PickupRequestQueryType()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for deleteStores operation/method
 */
if ($service->deleteStores(new \Etrias\PaazlConnector\StructType\DeleteStoresRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for shippingOption operation/method
 */
if ($service->shippingOption(new \Etrias\PaazlConnector\StructType\ShippingOptionRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for generateLabels operation/method
 */
if ($service->generateLabels(new \Etrias\PaazlConnector\StructType\GenerateLabelsRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for updateOrder operation/method
 */
if ($service->updateOrder(new \Etrias\PaazlConnector\StructType\UpdateOrderRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for generateExtraImageReturnLabel operation/method
 */
if ($service->generateExtraImageReturnLabel(new \Etrias\PaazlConnector\StructType\GenerateReturnLabelType()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for validateOrder operation/method
 */
if ($service->validateOrder(new \Etrias\PaazlConnector\StructType\ValidateOrderRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for generateShippingManifest operation/method
 */
if ($service->generateShippingManifest(new \Etrias\PaazlConnector\StructType\GenerateShippingManifestRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for pickupRequestOptions operation/method
 */
if ($service->pickupRequestOptions(new \Etrias\PaazlConnector\StructType\PickupRequestOptionsRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for getExistingImageLabels operation/method
 */
if ($service->getExistingImageLabels(new \Etrias\PaazlConnector\StructType\GetExistingLabelsType()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for orderStatus operation/method
 */
if ($service->orderStatus(new \Etrias\PaazlConnector\StructType\OrderStatusRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for getExistingZplLabels operation/method
 */
if ($service->getExistingZplLabels(new \Etrias\PaazlConnector\StructType\GetExistingZplLabelsRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for triggerCarrierRegistration operation/method
 */
if ($service->triggerCarrierRegistration(new \Etrias\PaazlConnector\StructType\TriggerCarrierRegistrationRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for rate operation/method
 */
if ($service->rate(new \Etrias\PaazlConnector\StructType\RateRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for generatePdfReturnLabels operation/method
 */
if ($service->generatePdfReturnLabels(new \Etrias\PaazlConnector\StructType\GeneratePdfReturnLabelsRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for checkout operation/method
 */
if ($service->checkout(new \Etrias\PaazlConnector\StructType\BaseCheckoutRequestType()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for updateStores operation/method
 */
if ($service->updateStores(new \Etrias\PaazlConnector\StructType\ChangeStoresRequestType()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for deleteOrder operation/method
 */
if ($service->deleteOrder(new \Etrias\PaazlConnector\StructType\DeleteOrderRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
