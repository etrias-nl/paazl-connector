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

use Etrias\PaazlConnector\Client\PaazlClientInterface;
use Etrias\PaazlConnector\GuzzleSoapClient;
use Etrias\PaazlConnector\ServiceType\Address as AddressServiceType;
use Etrias\PaazlConnector\ServiceType\Change as ChangeServiceType;
use Etrias\PaazlConnector\ServiceType\Commit as CommitOrderServiceType;
use Etrias\PaazlConnector\ServiceType\Delete as DeleteServiceType;
use Etrias\PaazlConnector\ServiceType\Generate as GenerateServiceType;
use Etrias\PaazlConnector\ServiceType\Get as GetServiceType;
use Etrias\PaazlConnector\ServiceType\Order as OrderServiceType;
use Etrias\PaazlConnector\ServiceType\Orders as OrdersServiceType;
use Etrias\PaazlConnector\ServiceType\Proof as ProofServiceType;
use Etrias\PaazlConnector\ServiceType\Rate as RateServiceType;
use Etrias\PaazlConnector\ServiceType\Shipping as ShippingServiceType;
use Etrias\PaazlConnector\ServiceType\Update as UpdateServiceType;
use Phpro\SoapClient\ClientBuilder;
use Phpro\SoapClient\Soap\TypeConverter\DateTimeTypeConverter;

require_once __DIR__.'/vendor/autoload.php';


$guzzleClient = new \GuzzleHttp\Client();

$clientFactory = new \Phpro\SoapClient\ClientFactory(GuzzleSoapClient::class);
$soapOptions = [
    'trace' => true
];

$clientBuilder = new ClientBuilder($clientFactory, \Etrias\PaazlConnector\SoapClient::WSDL_STAGING, $soapOptions);
$clientBuilder->withClassMaps(require 'src/ClassMapCollection.php');
$clientBuilder->withHandler(\Phpro\SoapClient\Soap\Handler\GuzzleHandle::createForClient($guzzleClient));


/**@var $soapClient PaazlClientInterface */
$soapClient = $clientBuilder->build();
$soapClient->setWebShopId('677')
    ->setPassword('hermanus');




//$response = $soapClient->address(
//    new \Etrias\PaazlConnector\SoapTypes\AddressRequest(
//        'hash',
//        '677',
//        null,
//        'ET170',
//        '5121SW',
//        '11',
//        null
//    )
//);
//
//var_dump($response);

//var_dump($client->debugLastSoapRequest());

$securityService = new \Etrias\PaazlConnector\Services\SecurityService($soapClient);
$listService = new \Etrias\PaazlConnector\Services\ListService($soapClient, $securityService);

$response = $listService->getAddress('ET171', '5121SW', '11');
var_dump($response);



















die();



/**
 * Minimal options.
 */
$wsdlOptions = [
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => \Etrias\PaazlConnector\SoapClient::WSDL_STAGING,
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Etrias\PaazlConnector\ClassMap::get(),
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => '677',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'hermanus',
];

$addressServiceType = new AddressServiceType($wsdlOptions, true);
$changeServiceType = new ChangeServiceType($wsdlOptions, true);
$deleteServiceType = new DeleteServiceType($wsdlOptions, true);
$generateServiceType = new GenerateServiceType($wsdlOptions, true);
$getServiceType = new GetServiceType($wsdlOptions, true);
$orderServiceType = new OrderServiceType($wsdlOptions, true);
$ordersServiceType = new OrdersServiceType($wsdlOptions, true);
$commitServiceType = new CommitOrderServiceType($wsdlOptions, true);
$proofServiceType = new ProofServiceType($wsdlOptions, true);
$rateServiceType = new RateServiceType($wsdlOptions, true);
$shippingServiceType = new ShippingServiceType($wsdlOptions, true);
$updateServiceType = new UpdateServiceType($wsdlOptions, true);

$paazlService = new \Etrias\PaazlConnector\Services\Paazl(
    $addressServiceType,
    $changeServiceType,
    $deleteServiceType,
    $generateServiceType,
    $getServiceType,
    $orderServiceType,
    $ordersServiceType,
    $commitServiceType,
    $proofServiceType,
    $rateServiceType,
    $shippingServiceType,
    $updateServiceType
);

//$response = $paazlService->orderDetails('ET998');

//$products = new \Etrias\PaazlConnector\StructType\Products([
//    new \Etrias\PaazlConnector\StructType\ProductType(1, 1, 10, 'EUR', 1, 10, 10, 10, null, 'code')
//]);

//$response = $paazlService->updateOrder('ET166', $products);

//$shipping_method = array(
//    "type" => 'delivery',
//    "identifier" => 0,
//    "option" => $shipping_method_code,
//    "price" => 0
//);

//$shippingMethod = new \Etrias\PaazlConnector\StructType\ShippingMethod(
//    'delivery',
//    null,
//    null,
//    null,
//    'AVG'
//);

//$shippingAddress = new \Etrias\PaazlConnector\StructType\ShippingAddress(
//    '1',
//    'customerName',
//    'companyName',
//    null,
//    'street',
//    '1',
//    'a',
//    ['additionalAddressLine'],
//    '1000AA',
//    'Amsterdam',
//    null,
//    'NL',
//    true
//);

//$orderService->createOrder('ET170', $products);
//$response = $paazlService->commitOrder(
//    'ET170',
//    $shippingMethod,
//    $shippingAddress,
//    null,
//    null,
//    null,
//    null,
//     null,
//        null,
//         null,
//    null);

//$response = $paazlService->address('ET170', '5121SW', '11');
//var_dump($response->getAddress());

//$response = $paazlService->getOrderStatus('ET998');

//$response = $paazlService->generateExtraImageReturnLabel('ET998', 'AVG');
$response = $paazlService->getExistingPdfLabels(['ET998' => '05228029546047']);

var_dump($response);

die();

/**
 * Samples for Change ServiceType.
 */
$change = new \Etrias\PaazlConnector\ServiceType\Change($options);
/*
 * Sample call for changeOrder operation/method
 */
if ($change->changeOrder(new \Etrias\PaazlConnector\StructType\ChangeOrderRequest()) !== false) {
    print_r($change->getResult());
} else {
    print_r($change->getLastError());
}
/**
 * Samples for Order ServiceType.
 */
$order = new \Etrias\PaazlConnector\ServiceType\Order($options);
/*
 * Sample call for orderDetails operation/method
 */
if ($order->orderDetails(new \Etrias\PaazlConnector\StructType\OrderDetailsRequest()) !== false) {
    print_r($order->getResult());
} else {
    print_r($order->getLastError());
}
/*
 * Sample call for order operation/method
 */
if ($order->order(new \Etrias\PaazlConnector\StructType\OrderRequest()) !== false) {
    print_r($order->getResult());
} else {
    print_r($order->getLastError());
}
/*
 * Sample call for orderStatus operation/method
 */
if ($order->orderStatus(new \Etrias\PaazlConnector\StructType\OrderStatusRequest()) !== false) {
    print_r($order->getResult());
} else {
    print_r($order->getLastError());
}
/**
 * Samples for Google ServiceType.
 */
$google = new \Etrias\PaazlConnector\ServiceType\Google($options);
/*
 * Sample call for googleMapSearchstring operation/method
 */
if ($google->googleMapSearchstring(new \Etrias\PaazlConnector\StructType\GoogleMapSearchstringRequest()) !== false) {
    print_r($google->getResult());
} else {
    print_r($google->getLastError());
}
/**
 * Samples for Delivery ServiceType.
 */
$delivery = new \Etrias\PaazlConnector\ServiceType\Delivery($options);
/*
 * Sample call for deliveryEstimate operation/method
 */
if ($delivery->deliveryEstimate(new \Etrias\PaazlConnector\StructType\DeliveryEstimateRequest()) !== false) {
    print_r($delivery->getResult());
} else {
    print_r($delivery->getLastError());
}
/**
 * Samples for Batch ServiceType.
 */
$batch = new \Etrias\PaazlConnector\ServiceType\Batch($options);
/*
 * Sample call for batchStatus operation/method
 */
if ($batch->batchStatus(new \Etrias\PaazlConnector\StructType\BatchStatusRequest()) !== false) {
    print_r($batch->getResult());
} else {
    print_r($batch->getLastError());
}
/**
 * Samples for Get ServiceType.
 */
$get = new \Etrias\PaazlConnector\ServiceType\Get($options);
/*
 * Sample call for getExistingZplLabel operation/method
 */
if ($get->getExistingZplLabel(new \Etrias\PaazlConnector\StructType\GetExistingZplLabelRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/*
 * Sample call for getExistingPdfLabel operation/method
 */
if ($get->getExistingPdfLabel(new \Etrias\PaazlConnector\StructType\GetExistingPdfLabelRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/*
 * Sample call for getExistingPdfLabels operation/method
 */
if ($get->getExistingPdfLabels(new \Etrias\PaazlConnector\StructType\GetExistingPdfLabelsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/*
 * Sample call for getExistingImageLabel operation/method
 */
if ($get->getExistingImageLabel(new \Etrias\PaazlConnector\StructType\GetExistingLabelType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/*
 * Sample call for getExistingImageLabels operation/method
 */
if ($get->getExistingImageLabels(new \Etrias\PaazlConnector\StructType\GetExistingLabelsType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/*
 * Sample call for getExistingZplLabels operation/method
 */
if ($get->getExistingZplLabels(new \Etrias\PaazlConnector\StructType\GetExistingZplLabelsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Generate ServiceType.
 */
$generate = new \Etrias\PaazlConnector\ServiceType\Generate($options);
/*
 * Sample call for generateAdditionalImageDocument operation/method
 */
if ($generate->generateAdditionalImageDocument(new \Etrias\PaazlConnector\StructType\GenerateAdditionalDocumentType()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/*
 * Sample call for generatePdfLabels operation/method
 */
if ($generate->generatePdfLabels(new \Etrias\PaazlConnector\StructType\GeneratePdfLabelsRequest()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/*
 * Sample call for generatePdfCustomsDocuments operation/method
 */
if ($generate->generatePdfCustomsDocuments(new \Etrias\PaazlConnector\StructType\GeneratePdfCustomsDocumentsRequest()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/*
 * Sample call for generateZplLabels operation/method
 */
if ($generate->generateZplLabels(new \Etrias\PaazlConnector\StructType\GenerateZplLabelsRequest()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/*
 * Sample call for generateExtraPdfReturnLabel operation/method
 */
if ($generate->generateExtraPdfReturnLabel(new \Etrias\PaazlConnector\StructType\GenerateExtraPdfReturnLabelRequest()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/*
 * Sample call for generateImageReturnLabels operation/method
 */
if ($generate->generateImageReturnLabels(new \Etrias\PaazlConnector\StructType\GenerateReturnLabelsType()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/*
 * Sample call for generateImageLabels operation/method
 */
if ($generate->generateImageLabels(new \Etrias\PaazlConnector\StructType\GenerateImageLabelsRequest()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/*
 * Sample call for generateExtraImageLabel operation/method
 */
if ($generate->generateExtraImageLabel(new \Etrias\PaazlConnector\StructType\GenerateExtraImageLabelRequest()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/*
 * Sample call for generateExtraPdfLabel operation/method
 */
if ($generate->generateExtraPdfLabel(new \Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelRequest()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/*
 * Sample call for generateAdditionalPdfDocument operation/method
 */
if ($generate->generateAdditionalPdfDocument(new \Etrias\PaazlConnector\StructType\GenerateAdditionalPdfDocumentRequest()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/*
 * Sample call for generateLabels operation/method
 */
if ($generate->generateLabels(new \Etrias\PaazlConnector\StructType\GenerateLabelsRequest()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/*
 * Sample call for generateExtraImageReturnLabel operation/method
 */
if ($generate->generateExtraImageReturnLabel(new \Etrias\PaazlConnector\StructType\GenerateReturnLabelType()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/*
 * Sample call for generateShippingManifest operation/method
 */
if ($generate->generateShippingManifest(new \Etrias\PaazlConnector\StructType\GenerateShippingManifestRequest()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/*
 * Sample call for generatePdfReturnLabels operation/method
 */
if ($generate->generatePdfReturnLabels(new \Etrias\PaazlConnector\StructType\GeneratePdfReturnLabelsRequest()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/**
 * Samples for Commit ServiceType.
 */
$commit = new \Etrias\PaazlConnector\ServiceType\Commit($options);
/*
 * Sample call for commitOrder operation/method
 */
if ($commit->commitOrder(new \Etrias\PaazlConnector\StructType\CommitOrderRequest()) !== false) {
    print_r($commit->getResult());
} else {
    print_r($commit->getLastError());
}
/**
 * Samples for Active ServiceType.
 */
$active = new \Etrias\PaazlConnector\ServiceType\Active($options);
/*
 * Sample call for activeShippingOption operation/method
 */
if ($active->activeShippingOption(new \Etrias\PaazlConnector\StructType\ActiveShippingOptionRequest()) !== false) {
    print_r($active->getResult());
} else {
    print_r($active->getLastError());
}
/**
 * Samples for Cancel ServiceType.
 */
$cancel = new \Etrias\PaazlConnector\ServiceType\Cancel($options);
/*
 * Sample call for cancelShipments operation/method
 */
if ($cancel->cancelShipments(new \Etrias\PaazlConnector\StructType\CancelShipmentsRequest()) !== false) {
    print_r($cancel->getResult());
} else {
    print_r($cancel->getLastError());
}
/*
 * Sample call for cancelPickupRequest operation/method
 */
if ($cancel->cancelPickupRequest(new \Etrias\PaazlConnector\StructType\PickupRequestQueryType()) !== false) {
    print_r($cancel->getResult());
} else {
    print_r($cancel->getLastError());
}
/**
 * Samples for Address ServiceType.
 */
$address = new \Etrias\PaazlConnector\ServiceType\Address($options);
/*
 * Sample call for address operation/method
 */
if ($address->address(new \Etrias\PaazlConnector\StructType\AddressRequest()) !== false) {
    print_r($address->getResult());
} else {
    print_r($address->getLastError());
}
/**
 * Samples for Create ServiceType.
 */
$create = new \Etrias\PaazlConnector\ServiceType\Create($options);
/*
 * Sample call for createPickupRequest operation/method
 */
if ($create->createPickupRequest(new \Etrias\PaazlConnector\StructType\CreatePickupRequestRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/*
 * Sample call for createStores operation/method
 */
if ($create->createStores(new \Etrias\PaazlConnector\StructType\ChangeStoresRequestType()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Proof ServiceType.
 */
$proof = new \Etrias\PaazlConnector\ServiceType\Proof($options);
/*
 * Sample call for proofOfDelivery operation/method
 */
if ($proof->proofOfDelivery(new \Etrias\PaazlConnector\StructType\ProofOfDeliveryRequest()) !== false) {
    print_r($proof->getResult());
} else {
    print_r($proof->getLastError());
}
/**
 * Samples for Service ServiceType.
 */
$service = new \Etrias\PaazlConnector\ServiceType\Service($options);
/*
 * Sample call for servicePoints operation/method
 */
if ($service->servicePoints(new \Etrias\PaazlConnector\StructType\ServicePointsRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Samples for List ServiceType.
 */
$list = new \Etrias\PaazlConnector\ServiceType\_List($options);
/*
 * Sample call for listOrders operation/method
 */
if ($list->listOrders(new \Etrias\PaazlConnector\StructType\ListOrdersRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/*
 * Sample call for listOpenBatches operation/method
 */
if ($list->listOpenBatches(new \Etrias\PaazlConnector\StructType\ListOpenBatchesRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/*
 * Sample call for listStores operation/method
 */
if ($list->listStores(new \Etrias\PaazlConnector\StructType\ListStoresRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Samples for Pickup ServiceType.
 */
$pickup = new \Etrias\PaazlConnector\ServiceType\Pickup($options);
/*
 * Sample call for pickupRequestDetails operation/method
 */
if ($pickup->pickupRequestDetails(new \Etrias\PaazlConnector\StructType\PickupRequestQueryType()) !== false) {
    print_r($pickup->getResult());
} else {
    print_r($pickup->getLastError());
}
/*
 * Sample call for pickupRequestStatus operation/method
 */
if ($pickup->pickupRequestStatus(new \Etrias\PaazlConnector\StructType\PickupRequestQueryType()) !== false) {
    print_r($pickup->getResult());
} else {
    print_r($pickup->getLastError());
}
/*
 * Sample call for pickupRequestOptions operation/method
 */
if ($pickup->pickupRequestOptions(new \Etrias\PaazlConnector\StructType\PickupRequestOptionsRequest()) !== false) {
    print_r($pickup->getResult());
} else {
    print_r($pickup->getLastError());
}
/**
 * Samples for Orders ServiceType.
 */
$orders = new \Etrias\PaazlConnector\ServiceType\Orders($options);
/*
 * Sample call for ordersToShip operation/method
 */
if ($orders->ordersToShip(new \Etrias\PaazlConnector\StructType\OrdersToShipRequest()) !== false) {
    print_r($orders->getResult());
} else {
    print_r($orders->getLastError());
}
/**
 * Samples for Close ServiceType.
 */
$close = new \Etrias\PaazlConnector\ServiceType\Close($options);
/*
 * Sample call for closeBatch operation/method
 */
if ($close->closeBatch(new \Etrias\PaazlConnector\StructType\CloseBatchRequest()) !== false) {
    print_r($close->getResult());
} else {
    print_r($close->getLastError());
}
/**
 * Samples for Open ServiceType.
 */
$open = new \Etrias\PaazlConnector\ServiceType\Open($options);
/*
 * Sample call for openBatch operation/method
 */
if ($open->openBatch(new \Etrias\PaazlConnector\StructType\OpenBatchRequest()) !== false) {
    print_r($open->getResult());
} else {
    print_r($open->getLastError());
}
/**
 * Samples for Checkout ServiceType.
 */
$checkout = new \Etrias\PaazlConnector\ServiceType\Checkout($options);
/*
 * Sample call for checkoutStatus operation/method
 */
if ($checkout->checkoutStatus(new \Etrias\PaazlConnector\StructType\BaseCheckoutRequestType()) !== false) {
    print_r($checkout->getResult());
} else {
    print_r($checkout->getLastError());
}
/*
 * Sample call for checkout operation/method
 */
if ($checkout->checkout(new \Etrias\PaazlConnector\StructType\BaseCheckoutRequestType()) !== false) {
    print_r($checkout->getResult());
} else {
    print_r($checkout->getLastError());
}
/**
 * Samples for Delete ServiceType.
 */
$delete = new \Etrias\PaazlConnector\ServiceType\Delete($options);
/*
 * Sample call for deleteStores operation/method
 */
if ($delete->deleteStores(new \Etrias\PaazlConnector\StructType\DeleteStoresRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/*
 * Sample call for deleteOrder operation/method
 */
if ($delete->deleteOrder(new \Etrias\PaazlConnector\StructType\DeleteOrderRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Shipping ServiceType.
 */
$shipping = new \Etrias\PaazlConnector\ServiceType\Shipping($options);
/*
 * Sample call for shippingOption operation/method
 */
if ($shipping->shippingOption(new \Etrias\PaazlConnector\StructType\ShippingOptionRequest()) !== false) {
    print_r($shipping->getResult());
} else {
    print_r($shipping->getLastError());
}
/**
 * Samples for Update ServiceType.
 */
$update = new \Etrias\PaazlConnector\ServiceType\Update($options);
/*
 * Sample call for updateOrder operation/method
 */
if ($update->updateOrder(new \Etrias\PaazlConnector\StructType\UpdateOrderRequest()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/*
 * Sample call for updateStores operation/method
 */
if ($update->updateStores(new \Etrias\PaazlConnector\StructType\ChangeStoresRequestType()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Validate ServiceType.
 */
$validate = new \Etrias\PaazlConnector\ServiceType\Validate($options);
/*
 * Sample call for validateOrder operation/method
 */
if ($validate->validateOrder(new \Etrias\PaazlConnector\StructType\ValidateOrderRequest()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Samples for Trigger ServiceType.
 */
$trigger = new \Etrias\PaazlConnector\ServiceType\Trigger($options);
/*
 * Sample call for triggerCarrierRegistration operation/method
 */
if ($trigger->triggerCarrierRegistration(new \Etrias\PaazlConnector\StructType\TriggerCarrierRegistrationRequest()) !== false) {
    print_r($trigger->getResult());
} else {
    print_r($trigger->getLastError());
}
/**
 * Samples for Rate ServiceType.
 */
$rate = new \Etrias\PaazlConnector\ServiceType\Rate($options);
/*
 * Sample call for rate operation/method
 */
if ($rate->rate(new \Etrias\PaazlConnector\StructType\RateRequest()) !== false) {
    print_r($rate->getResult());
} else {
    print_r($rate->getLastError());
}
