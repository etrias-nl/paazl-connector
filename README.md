[![Build Status](https://scrutinizer-ci.com/g/etrias-nl/paazl-connector/badges/build.png?b=master)](https://scrutinizer-ci.com/g/etrias-nl/paazl-connector/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/etrias-nl/paazl-connector/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/etrias-nl/paazl-connector/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/etrias-nl/paazl-connector/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/etrias-nl/paazl-connector/?branch=master)

# Paazl connector

You can use this package to easily make a soap connection to paazl webservice in PHP.
 
 Ex. 
 

# Regenerate package

```bash
wget https://phar.wsdltophp.com/wsdltophp.phar
php wsdltophp.phar generate:package \
    --urlorpath="https://ost.paazl.com/parcelshipperservice/orderRequest.wsdl" \
    --soapclient="\Etrias\PaazlConnector\SoapClient" \
    --destination ./ \
    --composer-name="etrias/paazl-connector" \
    --composer-settings="require.meng-tian/async-soap-guzzle:^0.2.4" \
    --namespace Etrias\\PaazlConnector \
    --gathermethods="none" \
    --force
```

#Use paazl service
```php
$wsdlOptions = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => \Etrias\PaazlConnector\SoapClient::WSDL_STAGING,
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Etrias\PaazlConnector\ClassMap::get(),
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => '{webshopid}',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => '{password}',
);

$addressServiceType = new AddressServiceType($wsdlOptions, true);
$batchServiceType = new BatchServiceType($wsdlOptions, true);
$cancelServiceType = new CancelServiceType($wsdlOptions, true);
$changeServiceType = new ChangeServiceType($wsdlOptions, true);
$checkoutServiceType = new CheckoutServiceType($wsdlOptions, true);
$closeServiceType = new CloseServiceType($wsdlOptions, true);
$createServiceType = new CreateServiceType($wsdlOptions, true);
$deleteServiceType = new DeleteServiceType($wsdlOptions, true);
$deliveryServiceType = new DeliveryServiceType($wsdlOptions, true);
$generateServiceType = new GenerateServiceType($wsdlOptions, true);
$getServiceType = new GetServiceType($wsdlOptions, true);
$listServiceType = new ListServiceType($wsdlOptions, true);
$openServiceType = new OpenServiceType($wsdlOptions, true);
$orderServiceType = new OrderServiceType($wsdlOptions, true);
$ordersServiceType = new OrdersServiceType($wsdlOptions, true);
$commitServiceType = new CommitOrderServiceType($wsdlOptions, true);
$proofServiceType = new ProofServiceType($wsdlOptions, true);
$pickupServiceType = new PickupServiceType($wsdlOptions, true);
$rateServiceType = new RateServiceType($wsdlOptions, true);
$serviceServiceType = new ServiceServiceType($wsdlOptions, true);
$shippingServiceType = new ShippingServiceType($wsdlOptions, true);
$validateServiceType = new ValidateServiceType($wsdlOptions, true);
$updateServiceType = new UpdateServiceType($wsdlOptions, true);


$paazlService = new \Etrias\PaazlConnector\Service\Paazl(
    $addressServiceType,
    $batchServiceType,
    $cancelServiceType,
    $changeServiceType,
    $checkoutServiceType,
    $closeServiceType,
    $createServiceType,
    $deleteServiceType,
    $deliveryServiceType,
    $generateServiceType,
    $getServiceType,
    $listServiceType,
    $openServiceType,
    $orderServiceType,
    $ordersServiceType,
    $commitServiceType,
    $pickupServiceType,
    $proofServiceType,
    $rateServiceType,
    $serviceServiceType,
    $shippingServiceType,
    $validateServiceType,
    $updateServiceType
);
```
