<?php

namespace Etrias\PaazlConnector\Service;

use Etrias\PaazlConnector\Processor\ResponseProcessor;
Use Etrias\PaazlConnector\ServiceType\Address as AddressServiceType;
Use Etrias\PaazlConnector\ServiceType\Change as ChangeServiceType;
Use Etrias\PaazlConnector\ServiceType\Delete as DeleteServiceType;
Use Etrias\PaazlConnector\ServiceType\Order as OrderServiceType;
Use Etrias\PaazlConnector\ServiceType\Commit as CommitServiceType;
Use Etrias\PaazlConnector\ServiceType\Update as UpdateServiceType;
Use Etrias\PaazlConnector\ServiceType\Shipping as ShippingServiceType;
use Etrias\PaazlConnector\StructType\AddressRequest;
use Etrias\PaazlConnector\StructType\AddressResponse;
use Etrias\PaazlConnector\StructType\ChangeOrderRequest;
use Etrias\PaazlConnector\StructType\ChangeProducts;
use Etrias\PaazlConnector\StructType\ChangeSenderAddress;
use Etrias\PaazlConnector\StructType\ChangeShippingMethod;
use Etrias\PaazlConnector\StructType\CommitOrderRequest;
use Etrias\PaazlConnector\StructType\DateRangeType;
use Etrias\PaazlConnector\StructType\DeleteOrderRequest;
use Etrias\PaazlConnector\StructType\OrderDetailsRequest;
use Etrias\PaazlConnector\StructType\OrderDetailsResponse;
use Etrias\PaazlConnector\StructType\OrderRequest;
use Etrias\PaazlConnector\StructType\OrderSaveResponseType;
use Etrias\PaazlConnector\StructType\OrderStatusRequest;
use Etrias\PaazlConnector\StructType\OrderStatusResponse;
use Etrias\PaazlConnector\StructType\Products;
use Etrias\PaazlConnector\StructType\SenderAddress;
use Etrias\PaazlConnector\StructType\ShippingAddress;
use Etrias\PaazlConnector\StructType\ShippingMethod;
use Etrias\PaazlConnector\StructType\ShippingOptionRequest;
use Etrias\PaazlConnector\StructType\ShippingOptionResponse;
use Etrias\PaazlConnector\StructType\UpdateOrderRequest;

class Paazl
{
    use ResponseProcessor;

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
     * Constructor
     * @param AddressServiceType $addressServiceType
     * @param ChangeServiceType $changeServiceType
     * @param DeleteServiceType $deleteServiceType
     * @param OrderServiceType $orderServiceType
     * @param CommitServiceType $commitServiceType
     * @param ShippingServiceType $shippingServiceType
     * @param UpdateServiceType $updateServiceType
     */
    public function __construct(
        AddressServiceType $addressServiceType,
        ChangeServiceType $changeServiceType,
        DeleteServiceType $deleteServiceType,
        OrderServiceType $orderServiceType,
        CommitServiceType $commitServiceType,
        ShippingServiceType $shippingServiceType,
        UpdateServiceType $updateServiceType
    )
    {
        $this->addressServiceType = $addressServiceType;
        $this->orderServiceType = $orderServiceType;
        $this->commitServiceType = $commitServiceType;
        $this->shippingServiceType = $shippingServiceType;
        $this->updateServiceType = $updateServiceType;
        $this->changeServiceType = $changeServiceType;
        $this->deleteServiceType = $deleteServiceType;
    }

    /**
     * @param $orderReference
     * @param $zipCode
     * @param $houseNumber
     * @param null $addition
     * @param null $targetWebShop
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
     * Constructor method for orderDetailsRequest
     * @param string $orderReference
     * @param int $targetWebShop
     * @param bool $extendedDetails
     *
     * @return OrderDetailsResponse
     */
    public function getOrderDetails($orderReference, $targetWebShop = null, $extendedDetails = null)
    {
        $request = new OrderDetailsRequest(
            $this->getHash($orderReference),
            $this->orderServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $extendedDetails
        );

        $response = $this->orderServiceType->orderDetails($request);

        return $this->processResponse($response, $this->orderServiceType);
    }

    /**
     * @param $orderReference
     * @param Products $products
     * @param null $targetWebShop
     * @return OrderSaveResponseType
     */
    public function createOrder($orderReference, Products $products, $targetWebShop = null)
    {
        $request = new OrderRequest(
            $this->getHash($orderReference),
            $this->orderServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $products
        );

        $response = $this->orderServiceType->order($request);

        return $this->processResponse($response, $this->orderServiceType);
    }

    public function updateOrder($orderReference, Products $products, $targetWebShop = null)
    {
        $request = new UpdateOrderRequest(
            $this->getHash($orderReference),
            $this->orderServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $products
        );

        $response = $this->updateServiceType->updateorder($request);

        return $this->processResponse($response, $this->updateServiceType);
    }

    public function changeOrder(
        $orderReference,
        $newOrderReference = null,
        ChangeShippingMethod $shippingMethod = null,
        ShippingAddress $shippingAddress = null,
        ChangeSenderAddress $returnAddress = null,
        ChangeSenderAddress $shipperAddress = null,
        ChangeProducts $products = null,
        $totalAmount = null,
        $totalAmountCurrency = null,
        $language = null,
        $customerEmail = null,
        $customerPhoneNumber = null,
        $targetWebShop = null
    ) {
        $request = new ChangeOrderRequest(
            $this->getHash($orderReference),
            $this->orderServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $newOrderReference,
            $totalAmount,
            $totalAmountCurrency,
            $language,
            $customerEmail,
            $customerPhoneNumber,
            $shippingMethod,
            $shipperAddress,
            $returnAddress,
            $shippingAddress,
            $products
        );

        $response = $this->changeServiceType->changeOrder($request);

        return $this->processResponse($response, $this->updateServiceType);
    }

    public function deleteOrder($orderReference, $targetWebShop = null)
    {
        $request = new DeleteOrderRequest(
            $this->getHash($orderReference),
            $this->orderServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference
        );

        $response = $this->deleteServiceType->deleteOrder($request);

        return $this->processResponse($response, $this->updateServiceType);
    }

    /**
     * @param $orderReference
     * @param ShippingMethod $shippingMethod
     * @param ShippingAddress $shippingAddress
     * @param null $totalAmount
     * @param null $totalAmountCurrency
     * @param null $language
     * @param null $customerEmail
     * @param null $customerPhoneNumber
     * @param SenderAddress|null $returnAddress
     * @param SenderAddress|null $shipperAddress
     * @param null $pendingOrderReference
     * @param null $targetWebShop
     * @return OrderSaveResponseType
     */
    public function commitOrder(
        $orderReference,
        ShippingMethod $shippingMethod,
        ShippingAddress $shippingAddress,
        $totalAmount = null,
        $totalAmountCurrency = null,
        $language = null,
        $customerEmail = null,
        $customerPhoneNumber = null,
        SenderAddress $returnAddress = null,
        SenderAddress $shipperAddress = null,
        $pendingOrderReference = null,
        $targetWebShop = null
    )
    {
        if ($pendingOrderReference === null) {
            $pendingOrderReference = $orderReference;
        }

        $request = new CommitOrderRequest(
          $this->getHash($pendingOrderReference),
          $this->commitServiceType->getWebShopId(),
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

        $response = $this->commitServiceType->commitOrder($request);

        return $this->processResponse($response, $this->commitServiceType);
    }

    /**
     * @param $orderReference
     * @param bool|null $includeLabels
     * @param bool|null $getCarrierStatus
     * @param null $targetWebShop
     * @return OrderStatusResponse
     */
    public function getOrderStatus(
        $orderReference,
        $includeLabels = null,
        $getCarrierStatus = null,
        $targetWebShop = null
    )
    {
        $request = new OrderStatusRequest(
            $this->getHash($orderReference),
            $this->commitServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $includeLabels,
            $getCarrierStatus
        );

        $response = $this->orderServiceType->orderStatus($request);

        return $this->processResponse($response, $this->orderServiceType);
    }


    /**
     * @param $orderReference
     * @param DateRangeType|null $deliveryDateRange
     * @param string $country
     * @param null $postcode
     * @param bool $extendedDeliveryDateDetails
     * @param null $shippingOption
     * @param null $deliveryEstimate
     * @param $targetWebShop
     * @return ShippingOptionResponse
     */
    public function getShippingOptions(
        $orderReference,
        $country = 'NL',
        DateRangeType $deliveryDateRange = null,
        $postcode = null,
        $extendedDeliveryDateDetails = false,
        $shippingOption = null,
        $deliveryEstimate = null,
        $targetWebShop
    )
    {
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
     * @param string $orderReference
     *
     * @return string
     */
    protected function getHash($orderReference)
    {
        return sha1($this->orderServiceType->getWebShopId() . $this->orderServiceType->getPassword() . $orderReference);
    }

}
