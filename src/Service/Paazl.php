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

namespace Etrias\PaazlConnector\Service;

use DateTime;
use Etrias\PaazlConnector\Processor\Processor;
use Etrias\PaazlConnector\ServiceType\_List as ListServiceType;
use Etrias\PaazlConnector\ServiceType\Address as AddressServiceType;
use Etrias\PaazlConnector\ServiceType\Batch;
use Etrias\PaazlConnector\ServiceType\Batch as BatchServiceType;
use Etrias\PaazlConnector\ServiceType\Cancel as CancelServiceType;
use Etrias\PaazlConnector\ServiceType\Change as ChangeServiceType;
use Etrias\PaazlConnector\ServiceType\Checkout as CheckoutServiceType;
use Etrias\PaazlConnector\ServiceType\Close as CloseServiceType;
use Etrias\PaazlConnector\ServiceType\Commit as CommitServiceType;
use Etrias\PaazlConnector\ServiceType\Create as CreateServiceType;
use Etrias\PaazlConnector\ServiceType\Delete as DeleteServiceType;
use Etrias\PaazlConnector\ServiceType\Delivery as DeliveryServiceType;
use Etrias\PaazlConnector\ServiceType\Generate as GenerateServiceType;
use Etrias\PaazlConnector\ServiceType\Get as GetServiceType;
use Etrias\PaazlConnector\ServiceType\Open as OpenServiceType;
use Etrias\PaazlConnector\ServiceType\Orders as OrdersServiceType;
use Etrias\PaazlConnector\ServiceType\Pickup as PickupServiceType;
use Etrias\PaazlConnector\ServiceType\Proof as ProofServiceType;
use Etrias\PaazlConnector\ServiceType\Rate as RateServiceType;
use Etrias\PaazlConnector\ServiceType\Service as ServiceServiceType;
use Etrias\PaazlConnector\ServiceType\Shipping as ShippingServiceType;
use Etrias\PaazlConnector\ServiceType\Update as UpdateServiceType;
use Etrias\PaazlConnector\ServiceType\Validate as ValidateServiceType;
use Etrias\PaazlConnector\StructType\AddressRequest;
use Etrias\PaazlConnector\StructType\AddressResponse;
use Etrias\PaazlConnector\StructType\AddressType;
use Etrias\PaazlConnector\StructType\BaseCheckoutRequestType;
use Etrias\PaazlConnector\StructType\BatchStatusRequest;
use Etrias\PaazlConnector\StructType\BatchStatusResponse;
use Etrias\PaazlConnector\StructType\CancelPickupRequestResponse;
use Etrias\PaazlConnector\StructType\CancelShipmentsRequest;
use Etrias\PaazlConnector\StructType\CancelShipmentsResponse;
use Etrias\PaazlConnector\StructType\ChangeOrderRequest;
use Etrias\PaazlConnector\StructType\ChangeProducts;
use Etrias\PaazlConnector\StructType\ChangeSenderAddress;
use Etrias\PaazlConnector\StructType\ChangeShippingMethod;
use Etrias\PaazlConnector\StructType\ChangeStoreDetailsType;
use Etrias\PaazlConnector\StructType\ChangeStoresRequestType;
use Etrias\PaazlConnector\StructType\ChangeStoresResponseType;
use Etrias\PaazlConnector\StructType\CheckoutResponse;
use Etrias\PaazlConnector\StructType\CheckoutStatusResponse;
use Etrias\PaazlConnector\StructType\CloseBatchRequest;
use Etrias\PaazlConnector\StructType\CloseBatchResponse;
use Etrias\PaazlConnector\StructType\CommitOrderRequest;
use Etrias\PaazlConnector\StructType\CoordinatesType;
use Etrias\PaazlConnector\StructType\CreatePickupRequestRequest;
use Etrias\PaazlConnector\StructType\CreatePickupRequestResponse;
use Etrias\PaazlConnector\StructType\DateRangeType;
use Etrias\PaazlConnector\StructType\DeleteOrderRequest;
use Etrias\PaazlConnector\StructType\DeleteOrderResponse;
use Etrias\PaazlConnector\StructType\DeleteStoresRequest;
use Etrias\PaazlConnector\StructType\DeleteStoresResponse;
use Etrias\PaazlConnector\StructType\DeleteStoreType;
use Etrias\PaazlConnector\StructType\DeliveryEstimateRequest;
use Etrias\PaazlConnector\StructType\DeliveryEstimateResponse;
use Etrias\PaazlConnector\StructType\ExistingLabelType;
use Etrias\PaazlConnector\StructType\GetExistingImageLabelResponse;
use Etrias\PaazlConnector\StructType\GetExistingImageLabelsResponse;
use Etrias\PaazlConnector\StructType\GetExistingPdfLabelRequest;
use Etrias\PaazlConnector\StructType\GetExistingPdfLabelsRequest;
use Etrias\PaazlConnector\StructType\GetExistingPdfLabelsResponse;
use Etrias\PaazlConnector\StructType\ListOpenBatchesRequest;
use Etrias\PaazlConnector\StructType\ListOpenBatchesResponse;
use Etrias\PaazlConnector\StructType\ListOrdersRequest;
use Etrias\PaazlConnector\StructType\ListOrdersResponse;
use Etrias\PaazlConnector\StructType\ListStoresRequest;
use Etrias\PaazlConnector\StructType\ListStoresResponse;
use Etrias\PaazlConnector\StructType\OpenBatchRequest;
use Etrias\PaazlConnector\StructType\OpenBatchResponse;
use Etrias\PaazlConnector\StructType\OrderDetailsRequest;
use Etrias\PaazlConnector\StructType\OrderDetailsResponse;
use Etrias\PaazlConnector\StructType\OrderRequest;
use Etrias\PaazlConnector\StructType\OrderSaveResponseType;
use Etrias\PaazlConnector\StructType\OrderStatusRequest;
use Etrias\PaazlConnector\StructType\OrderStatusResponse;
use Etrias\PaazlConnector\StructType\OrdersToShipRequest;
use Etrias\PaazlConnector\StructType\OrdersToShipResponse;
use Etrias\PaazlConnector\StructType\PickupRequestDetailsResponse;
use Etrias\PaazlConnector\StructType\PickupRequestOptionsRequest;
use Etrias\PaazlConnector\StructType\PickupRequestQueryType;
use Etrias\PaazlConnector\StructType\PickupRequestStatusResponse;
use Etrias\PaazlConnector\StructType\Products;
use Etrias\PaazlConnector\StructType\ProofOfDeliveryRequest;
use Etrias\PaazlConnector\StructType\ProofOfDeliveryResponse;
use Etrias\PaazlConnector\StructType\RateRequest;
use Etrias\PaazlConnector\StructType\RateResponse;
use Etrias\PaazlConnector\StructType\SenderAddress;
use Etrias\PaazlConnector\StructType\ServicePointsRequest;
use Etrias\PaazlConnector\StructType\ServicePointsResponse;
use Etrias\PaazlConnector\StructType\ShippingAddress;
use Etrias\PaazlConnector\StructType\ShippingMethod;
use Etrias\PaazlConnector\StructType\ShippingOptionRequest;
use Etrias\PaazlConnector\StructType\ShippingOptionResponse;
use Etrias\PaazlConnector\StructType\StoreDetailsType;
use Etrias\PaazlConnector\StructType\UpdateOrderRequest;
use Etrias\PaazlConnector\StructType\ValidateOrderRequest;
use Etrias\PaazlConnector\StructType\ValidateOrderResponseType;
use InvalidArgumentException;
use RuntimeException;

class Paazl
{
    use SoapHelper;

    /**
     * @var AddressServiceType
     */
    protected $addressServiceType;
    /**
     * @var OrderServiceType
     */
    protected $orderServiceType;
    /**
     * @var CommitServiceType
     */
    protected $commitServiceType;
    /**
     * @var ShippingServiceType
     */
    protected $shippingServiceType;
    /**
     * @var UpdateServiceType
     */
    protected $updateServiceType;
    /**
     * @var ChangeServiceType
     */
    protected $changeServiceType;
    /**
     * @var DeleteServiceType
     */
    protected $deleteServiceType;
    /**
     * @var OrdersServiceType
     */
    protected $ordersServiceType;
    /**
     * @var RateServiceType
     */
    protected $rateServiceType;
    /**
     * @var ProofServiceType
     */
    protected $proofServiceType;
    /**
     * @var GenerateServiceType
     */
    protected $generateServiceType;
    /**
     * @var GetServiceType
     */
    protected $getServiceType;
    /**
     * @var PickupServiceType
     */
    protected $pickupServiceType;
    /**
     * @var CreateServiceType
     */
    protected $createServiceType;
    /**
     * @var CancelServiceType
     */
    protected $cancelServiceType;
    /**
     * @var CheckoutServiceType
     */
    protected $checkoutServiceType;
    /**
     * @var ListServiceType
     */
    protected $listServiceType;
    /**
     * @var ServiceServiceType
     */
    protected $serviceServiceType;
    /**
     * @var DeliveryServiceType
     */
    protected $deliveryServiceType;
    /**
     * @var OpenServiceType
     */
    protected $openServiceType;
    /**
     * @var CloseServiceType
     */
    protected $closeServiceType;
    /**
     * @var Batch
     */
    protected $batchServiceType;
    /**
     * @var ValidateServiceType
     */
    protected $validateServiceType;

    /**
     * Constructor.
     *
     * @param AddressServiceType  $addressServiceType
     * @param Batch               $batchServiceType
     * @param CancelServiceType   $cancelServiceType
     * @param ChangeServiceType   $changeServiceType
     * @param CheckoutServiceType $checkoutServiceType
     * @param CloseServiceType    $closeServiceType
     * @param CreateServiceType   $createServiceType
     * @param DeleteServiceType   $deleteServiceType
     * @param DeliveryServiceType $deliveryServiceType
     * @param GenerateServiceType $generateServiceType
     * @param GetServiceType      $getServiceType
     * @param ListServiceType     $listServiceType
     * @param OpenServiceType     $openServiceType
     * @param OrderServiceType    $orderServiceType
     * @param OrdersServiceType   $ordersServiceType
     * @param CommitServiceType   $commitServiceType
     * @param PickupServiceType   $pickupServiceType
     * @param ProofServiceType    $proofServiceType
     * @param RateServiceType     $rateServiceType
     * @param ServiceServiceType  $serviceServiceType
     * @param ShippingServiceType $shippingServiceType
     * @param ValidateServiceType $validateServiceType
     * @param UpdateServiceType   $updateServiceType
     */
    public function __construct(
        AddressServiceType $addressServiceType,
        BatchServiceType $batchServiceType,
        CancelServiceType $cancelServiceType,
        ChangeServiceType $changeServiceType,
        CheckoutServiceType $checkoutServiceType,
        CloseServiceType $closeServiceType,
        CreateServiceType $createServiceType,
        DeleteServiceType $deleteServiceType,
        DeliveryServiceType $deliveryServiceType,
        GenerateServiceType $generateServiceType,
        GetServiceType $getServiceType,
        ListServiceType $listServiceType,
        OpenServiceType $openServiceType,
        OrderServiceType $orderServiceType,
        OrdersServiceType $ordersServiceType,
        CommitServiceType $commitServiceType,
        PickupServiceType $pickupServiceType,
        ProofServiceType $proofServiceType,
        RateServiceType $rateServiceType,
        ServiceServiceType $serviceServiceType,
        ShippingServiceType $shippingServiceType,
        ValidateServiceType $validateServiceType,
        UpdateServiceType $updateServiceType
    ) {
        $this->addressServiceType = $addressServiceType;
        $this->orderServiceType = $orderServiceType;
        $this->commitServiceType = $commitServiceType;
        $this->shippingServiceType = $shippingServiceType;
        $this->updateServiceType = $updateServiceType;
        $this->changeServiceType = $changeServiceType;
        $this->deleteServiceType = $deleteServiceType;
        $this->ordersServiceType = $ordersServiceType;
        $this->rateServiceType = $rateServiceType;
        $this->proofServiceType = $proofServiceType;
        $this->generateServiceType = $generateServiceType;
        $this->getServiceType = $getServiceType;
        $this->pickupServiceType = $pickupServiceType;
        $this->createServiceType = $createServiceType;
        $this->cancelServiceType = $cancelServiceType;
        $this->checkoutServiceType = $checkoutServiceType;
        $this->listServiceType = $listServiceType;
        $this->serviceServiceType = $serviceServiceType;
        $this->deliveryServiceType = $deliveryServiceType;
        $this->openServiceType = $openServiceType;
        $this->closeServiceType = $closeServiceType;
        $this->batchServiceType = $batchServiceType;
        $this->validateServiceType = $validateServiceType;
    }

    /**
     * @throws RuntimeException
     */
    public function generateShippingManifest()
    {
        throw new RuntimeException('Not Implemented');
    }

    /**
     * @param $orderReference
     * @param $zipCode
     * @param $houseNumber
     * @param null $addition
     * @param null $targetWebShop
     *
     * @return AddressResponse
     */
    public function getAddress($orderReference, $zipCode, $houseNumber, $addition = null, $targetWebShop = null)
    {
        $request = new AddressRequest(
            $this->getHash($orderReference),
            $this->addressServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $zipCode,
            $houseNumber,
            $addition
        );

        $response = $this->addressServiceType->address($request);

        return $this->processResponse($response, $this->addressServiceType);
    }

    /**
     * @param $orderReference
     * @param null $targetWebShop
     *
     * @return CheckoutResponse
     */
    public function getCheckoutUrl($orderReference, $targetWebShop = null)
    {
        $request = new BaseCheckoutRequestType(
            $this->getHash($orderReference),
            $this->checkoutServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference
        );

        $response = $this->checkoutServiceType->checkout($request);

        return $this->processResponse($response, $this->checkoutServiceType);
    }

    /**
     * @param $orderReference
     * @param null $targetWebShop
     *
     * @return CheckoutStatusResponse
     */
    public function getCheckoutStatus($orderReference, $targetWebShop = null)
    {
        $request = new BaseCheckoutRequestType(
            $this->getHash($orderReference),
            $this->checkoutServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference
        );

        $response = $this->checkoutServiceType->checkoutStatus($request);

        return $this->processResponse($response, $this->checkoutServiceType);
    }

    /**
     * @param DateTime $date
     * @param null     $targetWebShop
     *
     * @return OrdersToShipResponse
     */
    public function getOrdersToShip(DateTime $date = null, $targetWebShop = null)
    {
        if ($date === null) {
            $date = new DateTime();
        }

        $request = new OrdersToShipRequest(
            $this->getHash($date->format('Ymd')),
            $this->ordersServiceType->getWebShopId(),
            $targetWebShop,
            $date->format('Y-m-d')
        );

        $response = $this->ordersServiceType->ordersToShip($request);

        return $this->processResponse($response, $this->ordersServiceType);
    }

    /**
     * @param $internalReference
     * @param null $pickupCountry
     * @param null $deliveryCountry
     * @param null $targetWebShop
     *
     * @return PickupRequestDetailsResponse
     */
    public function getPickupRequestOptions($internalReference, $pickupCountry = null, $deliveryCountry = null, $targetWebShop = null)
    {
        $request = new PickupRequestOptionsRequest(
            $this->getHash($internalReference),
            $this->pickupServiceType->getWebShopId(),
            $targetWebShop,
            $internalReference,
            $pickupCountry,
            $deliveryCountry
        );

        $response = $this->pickupServiceType->pickupRequestOptions($request);

        return $this->processResponse($response, $this->pickupServiceType);
    }

    /**
     * @param $internalReference
     * @param $pickupRequestOption
     * @param $pieceCount
     * @param DateTime $pickupWindowStart
     * @param DateTime $pickupWindowEnd
     * @param $pickupCompanyName
     * @param $pickupContactName
     * @param $pickupName
     * @param AddressType $pickupAddress
     * @param $pickupPhoneNumber
     * @param null             $pickupEmailAddress
     * @param AddressType|null $deliveryAddress
     * @param null             $deliveryEmailAddress
     * @param null             $additionalInstruction
     * @param null             $orderReference
     * @param null             $contract
     * @param null             $targetWebShop
     *
     * @return CreatePickupRequestResponse
     */
    public function createPickupRequest(
        $internalReference,
        $pickupRequestOption,
        $pieceCount,
        DateTime $pickupWindowStart,
        DateTime $pickupWindowEnd,
        $pickupCompanyName,
        $pickupContactName,
        $pickupName,
        AddressType $pickupAddress,
        $pickupPhoneNumber,
        $pickupEmailAddress = null,
        AddressType $deliveryAddress = null,
        $deliveryEmailAddress = null,
        $additionalInstruction = null,
        $orderReference = null,
        $contract = null,
        $targetWebShop = null
    ) {
        if ($pickupWindowStart->format('Y-m-d') !== $pickupWindowEnd->format('Y-m-d')) {
            throw new InvalidArgumentException('pickupWindowStart and pickupWindowEnd should be on the same day');
        }

        $request = new CreatePickupRequestRequest(
            $this->getHash($internalReference),
            $this->createServiceType->getWebShopId(),
            $targetWebShop,
            $internalReference,
            $contract,
            $pickupRequestOption,
            $orderReference,
            $pieceCount,
            $pickupWindowStart->format('Y-m-d'),
            $pickupWindowStart->format('H:i:s'),
            $pickupWindowEnd->format('H:i:s'),
            $pickupCompanyName,
            $pickupContactName,
            $pickupName,
            $pickupAddress,
            $pickupPhoneNumber,
            $pickupEmailAddress,
            $deliveryAddress,
            $deliveryEmailAddress,
            $additionalInstruction
        );

        $response = $this->createServiceType->createPickupRequest($request);

        return $this->processResponse($response, $this->createServiceType);
    }

    /**
     * @param StoreDetailsType[] $stores
     * @param null               $targetWebShop
     *
     * @return ChangeStoresResponseType
     */
    public function createStores(array $stores, $targetWebShop = null)
    {
        $changeStores = [];
        foreach ($stores as $store) {
            $changeStore = new ChangeStoreDetailsType($this->getHash($store->getCode()));
            $changeStore->setName($store->getName())
                ->setAddress($store->getAddress())
                ->setBusinessHours($store->getBusinessHours())
                ->setCode($store->getCode())
                ->setCoordinates($store->getCoordinates());
            $changeStores[] = $changeStore;
        }

        $request = new ChangeStoresRequestType(
            $this->createServiceType->getWebShopId(),
            $targetWebShop,
            $changeStores
        );

        $response = $this->createServiceType->createStores($request);

        return $this->processResponse($response, $this->pickupServiceType);
    }

    /**
     * @param StoreDetailsType[] $stores
     * @param null               $targetWebShop
     *
     * @return ChangeStoresResponseType
     */
    public function updateStores(array $stores, $targetWebShop = null)
    {
        $changeStores = [];
        foreach ($stores as $store) {
            $changeStore = new ChangeStoreDetailsType($this->getHash($store->getCode()));
            $changeStore->setName($store->getName())
                ->setAddress($store->getAddress())
                ->setBusinessHours($store->getBusinessHours())
                ->setCode($store->getCode())
                ->setCoordinates($store->getCoordinates());
            $changeStores[] = $changeStore;
        }

        $request = new ChangeStoresRequestType(
            $this->createServiceType->getWebShopId(),
            $targetWebShop,
            $changeStores
        );

        $response = $this->updateServiceType->updateStores($request);

        return $this->processResponse($response, $this->updateServiceType);
    }

    /**
     * @param array $storeCodes
     * @param null  $targetWebShop
     *
     * @return DeleteStoresResponse
     */
    public function deleteStores(array $storeCodes, $targetWebShop = null)
    {
        $stores = [];

        foreach ($storeCodes as $storeCode) {
            $stores[] = new DeleteStoreType($this->getHash($storeCode), $storeCode);
        }

        $request = new DeleteStoresRequest(
            $this->deleteServiceType->getWebShopId(),
            $targetWebShop,
            $stores
        );

        $response = $this->deleteServiceType->deleteStores($request);

        return $this->processResponse($response, $this->deleteServiceType);
    }


    /**
     * @param null $targetWebShop
     *
     * @return ListStoresResponse
     */
    public function listStores($targetWebShop = null)
    {
        $today = new DateTime();
        $request = new ListStoresRequest(
            $this->getHash($today->format('Ymd')),
            $this->listServiceType->getWebShopId(),
            $targetWebShop
        );

        $response = $this->listServiceType->listStores($request);

        return $this->processResponse($response, $this->listServiceType);
    }

    /**
     * @param $orderReference
     * @param $weight
     * @param $value
     * @param $valueCurrency
     * @param $consigneeCountry
     * @param $consigneeCity
     * @param $consigneePostcode
     * @param null $shippingOption
     * @param null $senderCountry
     * @param null $senderCity
     * @param null $senderPostcode
     * @param null $targetWebShop
     *
     * @return DeliveryEstimateResponse
     */
    public function getDeliveryEstimate(
        $orderReference,
        $weight,
        $value,
        $valueCurrency,
        $consigneeCountry,
        $consigneeCity,
        $consigneePostcode,
        $shippingOption = null,
        $senderCountry = null,
        $senderCity = null,
        $senderPostcode = null,
        $targetWebShop = null)
    {
        $request = new DeliveryEstimateRequest(
            $this->getHash($orderReference),
            $this->deliveryServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $shippingOption,
            $weight,
            $value,
            $valueCurrency,
            $senderCountry,
            $senderCity,
            $senderPostcode,
            $consigneeCountry,
            $consigneeCity,
            $consigneePostcode
        );

        $response = $this->deliveryServiceType->deliveryEstimate($request);

        return $this->processResponse($response, $this->deliveryServiceType);
    }

    /**
     * @param $internalReference
     * @param $distributor
     * @param $externalReference
     * @param null $targetWebShop
     *
     * @return PickupRequestDetailsResponse
     */
    public function getPickupRequestDetails($internalReference, $distributor, $externalReference, $targetWebShop = null)
    {
        $request = new PickupRequestQueryType(
            $this->getHash($internalReference),
            $this->cancelServiceType->getWebShopId(),
            $targetWebShop,
            $internalReference,
            $distributor,
            $externalReference
        );

        $response = $this->pickupServiceType->pickupRequestDetails($request);

        return $this->processResponse($response, $this->pickupServiceType);
    }

    /**
     * @param $internalReference
     * @param $distributor
     * @param $externalReference
     * @param null $targetWebShop
     *
     * @return PickupRequestStatusResponse
     */
    public function getPickupRequestStatus($internalReference, $distributor, $externalReference, $targetWebShop = null)
    {
        $request = new PickupRequestQueryType(
            $this->getHash($internalReference),
            $this->cancelServiceType->getWebShopId(),
            $targetWebShop,
            $internalReference,
            $distributor,
            $externalReference
        );

        $response = $this->pickupServiceType->pickupRequestStatus($request);

        return $this->processResponse($response, $this->pickupServiceType);
    }

    /**
     * @param $internalReference
     * @param $distributor
     * @param $externalReference
     * @param null $targetWebShop
     *
     * @return CancelPickupRequestResponse
     */
    public function cancelPickupRequest($internalReference, $distributor, $externalReference, $targetWebShop = null)
    {
        $request = new PickupRequestQueryType(
            $this->getHash($internalReference),
            $this->cancelServiceType->getWebShopId(),
            $targetWebShop,
            $internalReference,
            $distributor,
            $externalReference
        );

        $response = $this->cancelServiceType->cancelPickupRequest($request);

        return $this->processResponse($response, $this->cancelServiceType);
    }

    /**
     * @param array $barCodes      [$orderReference => $barcode]
     * @param null  $targetWebShop
     *
     * @return CancelShipmentsResponse
     */
    public function cancelShipments(array $barCodes, $targetWebShop = null)
    {
        $labels = [];

        foreach ($barCodes as $orderReference => $barCode) {
            $labels[] = new ExistingLabelType(
                $this->getHash($orderReference),
                $targetWebShop,
                $orderReference,
                $barCode
            );
        }

        $request = new CancelShipmentsRequest(
            $this->cancelServiceType->getWebShopId(),
            $labels
        );

        $response = $this->cancelServiceType->cancelShipments($request);

        return $this->processResponse($response, $this->cancelServiceType);
    }

    /**
     * @param $barcode
     * @param null $targetWebShop
     *
     * @return ProofOfDeliveryResponse
     */
    public function getProofOfDelivery($barcode, $targetWebShop = null)
    {
        $request = new ProofOfDeliveryRequest(
            $this->getHash($barcode),
            $this->commitServiceType->getWebShopId(),
            $targetWebShop,
            $barcode
        );

        $response = $this->proofServiceType->proofOfDelivery($request);

        return $this->processResponse($response, $this->proofServiceType);
    }

    /**
     * @param $orderReference
     * @param null $country
     * @param null $postalCode
     * @param null $shippingOption
     * @param null $targetWebShop
     *
     * @return RateResponse
     */
    public function getRates($orderReference, $country = null, $postalCode = null, $shippingOption = null, $targetWebShop = null)
    {
        $request = new RateRequest(
            $this->getHash($orderReference),
            $this->rateServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $country,
            $postalCode,
            $shippingOption
        );
        $response = $this->rateServiceType->rate($request);

        return $this->processResponse($response, $this->rateServiceType);
    }

    /**
     * @param null $distributor
     * @param null $shippingOption
     * @param null $country
     * @param null $targetWebShop
     *
     * @return OpenBatchResponse
     */
    public function openBatch(
        $distributor = null,
        $shippingOption = null,
        $country = null,
        $targetWebShop = null
    ) {
        $today = new DateTime();
        $hashInput = implode('', [
            $distributor,
            $shippingOption,
            $country,
            $today->format('Ymd'),
        ]);

        $request = new OpenBatchRequest(
            $this->getHash($hashInput),
            $this->openServiceType->getWebShopId(),
            $targetWebShop,
            $distributor,
            $shippingOption,
            $country
        );

        $response = $this->openServiceType->openBatch($request);

        return $this->processResponse($response, $this->openServiceType);
    }

    /**
     * @param $batchId
     * @param null $targetWebShop
     *
     * @return CloseBatchResponse
     */
    public function closeBatch($batchId, $targetWebShop = null)
    {
        $request = new CloseBatchRequest(
            $this->getHash($batchId),
            $this->closeServiceType->getWebShopId(),
            $targetWebShop,
            $batchId
        );

        $response = $this->closeServiceType->closeBatch($request);

        return $this->processResponse($response, $this->closeServiceType);
    }

    /**
     * @param $batchId
     * @param null $targetWebShop
     *
     * @return BatchStatusResponse
     */
    public function getBatchStatus($batchId, $targetWebShop = null)
    {
        $request = new BatchStatusRequest(
            $this->getHash($batchId),
            $this->batchServiceType->getWebShopId(),
            $targetWebShop,
            $batchId
        );

        $response = $this->batchServiceType->batchStatus($request);

        return $this->processResponse($response, $this->batchServiceType);
    }

    /**
     * @param null $targetWebShop
     *
     * @return ListOpenBatchesResponse
     */
    public function listOpenBatches($targetWebShop = null)
    {
        $today = new DateTime();
        $request = new ListOpenBatchesRequest(
            $this->getHash($today->format('Ymd')),
            $this->batchServiceType->getWebShopId(),
            $targetWebShop
        );

        $response = $this->listServiceType->listOpenBatches($request);

        return $this->processResponse($response, $this->listServiceType);
    }

    /**
     * @param null                 $country
     * @param null                 $postcode
     * @param CoordinatesType|null $southWest
     * @param CoordinatesType|null $northEast
     * @param null                 $limit
     * @param null                 $shippingOption
     * @param null                 $evening
     * @param null                 $weekend
     * @param null                 $targetWebShop
     *
     * @return ServicePointsResponse
     */
    public function getServicePoints(
        $country = null,
        $postcode = null,
        CoordinatesType $southWest = null,
        CoordinatesType $northEast = null,
        $limit = null,
        $shippingOption = null,
        $evening = null,
        $weekend = null,
        $targetWebShop = null
    ) {
        $hashInput = '';

        if ($country !== null) {
            $hashInput .= $country;
        }

        if ($postcode !== null) {
            $hashInput .= $postcode;
        }

        if ($southWest !== null) {
            $hashInput .= $southWest->getLatitude();
            throw new RuntimeException('Not yet implemented');
        }

        if ($northEast !== null) {
            throw new RuntimeException('Not yet implemented');
        }

        $request = new ServicePointsRequest(
            $this->getHash($hashInput),
            $this->serviceServiceType->getWebShopId(),
            $targetWebShop,
            $shippingOption,
            $evening,
            $weekend,
            $country,
            $postcode,
            $limit,
            $southWest,
            $northEast
        );

        $response = $this->serviceServiceType->servicePoints($request);

        return $this->processResponse($response, $this->serviceServiceType);
    }

    /**
     * @param $orderReference
     * @param DateRangeType|null $deliveryDateRange
     * @param string             $country
     * @param null               $postcode
     * @param bool               $extendedDeliveryDateDetails
     * @param null               $shippingOption
     * @param null               $deliveryEstimate
     * @param $targetWebShop
     *
     * @return ShippingOptionResponse
     */
    public function getShippingOptions(
        $orderReference,
        $country,
        DateRangeType $deliveryDateRange = null,
        $postcode,
        $extendedDeliveryDateDetails,
        $shippingOption,
        $deliveryEstimate,
        $targetWebShop
    ) {
        $request = new ShippingOptionRequest(
            $this->getHash($orderReference),
            $this->shippingServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $postcode,
            $country,
            null,
            null,
            $extendedDeliveryDateDetails,
            $shippingOption,
            $deliveryEstimate,
            $deliveryDateRange
        );

        $response = $this->shippingServiceType->shippingOption($request);

        return $this->processResponse($response, $this->shippingServiceType);
    }

    /**
     * @param $orderReference
     * @param $pendingOrderReference
     * @param $totalAmount
     * @param $totalAmountCurrency
     * @param ShippingMethod     $shippingMethod
     * @param ShippingAddress    $shippingAddress
     * @param null               $customerEmail
     * @param null               $language
     * @param null               $customerPhoneNumber
     * @param SenderAddress|null $shipperAddress
     * @param SenderAddress|null $returnAddress
     * @param null               $targetWebShop
     *
     * @return ValidateOrderResponseType
     */
    public function validateOrder(
        $orderReference,
        $pendingOrderReference,
        $totalAmount,
        $totalAmountCurrency,
        ShippingMethod $shippingMethod,
        ShippingAddress $shippingAddress,
        $customerEmail = null,
        $language = null,
        $customerPhoneNumber = null,
        SenderAddress $shipperAddress = null,
        SenderAddress $returnAddress = null,
        $targetWebShop = null
    ) {
        $request = new ValidateOrderRequest(
            $this->getHash($pendingOrderReference),
            $this->shippingServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $pendingOrderReference,
            $totalAmount,
            $totalAmountCurrency,
            $language,
            $customerEmail,
            $customerPhoneNumber,
            $shippingMethod,
            $shipperAddress,
            $returnAddress,
            $shippingAddress
        );

        $response = $this->validateServiceType->validateOrder($request);

        return $this->processResponse($response, $this->validateServiceType);
    }
}
