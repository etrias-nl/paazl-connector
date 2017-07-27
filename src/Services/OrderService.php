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

namespace Etrias\PaazlConnector\Services;

use DateTime;
use Etrias\PaazlConnector\Client\PaazlClientInterface;
use Etrias\PaazlConnector\Processor\Processor;
use Etrias\PaazlConnector\ServiceType\Service as GeneralServiceType;
use Etrias\PaazlConnector\StructType\ChangeOrderRequest;
use Etrias\PaazlConnector\StructType\ChangeProducts;
use Etrias\PaazlConnector\StructType\ChangeSenderAddress;
use Etrias\PaazlConnector\StructType\ChangeShippingAddress;
use Etrias\PaazlConnector\StructType\ChangeShippingMethod;
use Etrias\PaazlConnector\StructType\CommitOrderRequest;
use Etrias\PaazlConnector\StructType\DeleteOrderRequest;
use Etrias\PaazlConnector\StructType\DeleteOrderResponse;
use Etrias\PaazlConnector\StructType\ListOrdersRequest;
use Etrias\PaazlConnector\StructType\ListOrdersResponse;
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
use Etrias\PaazlConnector\StructType\UpdateOrderRequest;
use Etrias\PaazlConnector\StructType\ValidateOrderRequest;
use Etrias\PaazlConnector\StructType\ValidateOrderResponseType;

class OrderService
{
    /**
     * @var PaazlClientInterface
     */
    protected $client;
    /**
     * @var SecurityServiceInterface
     */
    protected $security;

    /**
     * DocumentService constructor.
     *
     * @param PaazlClientInterface       $client
     * @param SecurityServiceInterface $security
     */
    public function __construct(PaazlClientInterface $client, SecurityServiceInterface $security)
    {
        $this->security = $security;
        $this->client = $client;
    }

    /**
     * Constructor method for orderDetailsRequest.
     *
     * @param string $orderReference
     * @param int    $targetWebShop
     * @param bool   $extendedDetails
     *
     * @return OrderDetailsResponse
     */
    public function getOrderDetails($orderReference, $targetWebShop = null, $extendedDetails = null)
    {
        $request = new OrderDetailsRequest(
            $this->securityService->getHash($orderReference),
            $this->generalServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $extendedDetails
        );

        $response = $this->generalServiceType->orderDetails($request);

        return $this->processResponse($response, $this->generalServiceType);
    }

    /**
     * @param $orderReference
     * @param Products $products
     * @param null     $targetWebShop
     *
     * @return OrderSaveResponseType
     */
    public function createOrder($orderReference, Products $products, $targetWebShop = null)
    {
        $request = new OrderRequest(
            $this->securityService->getHash($orderReference),
            $this->generalServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $products
        );

        $response = $this->generalServiceType->order($request);

        return $this->processResponse($response, $this->generalServiceType);
    }

    /**
     * @param $orderReference
     * @param Products $products
     * @param null     $targetWebShop
     *
     * @return OrderSaveResponseType
     */
    public function updateOrder($orderReference, Products $products, $targetWebShop = null)
    {
        $request = new UpdateOrderRequest(
            $this->securityService->getHash($orderReference),
            $this->generalServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $products
        );

        $response = $this->generalServiceType->updateorder($request);

        return $this->processResponse($response, $this->generalServiceType);
    }

    /**
     * @param $orderReference
     * @param null                      $newOrderReference
     * @param ChangeShippingMethod|null $shippingMethod
     * @param ShippingAddress|null      $shippingAddress
     * @param ChangeSenderAddress|null  $returnAddress
     * @param ChangeSenderAddress|null  $shipperAddress
     * @param ChangeProducts|null       $products
     * @param null                      $totalAmount
     * @param null                      $totalAmountCurrency
     * @param null                      $language
     * @param null                      $customerEmail
     * @param null                      $customerPhoneNumber
     * @param null                      $targetWebShop
     *
     * @return OrderSaveResponseType
     */
    public function changeOrder(
        $orderReference,
        $newOrderReference = null,
        ChangeShippingMethod $shippingMethod = null,
        ChangeShippingAddress $shippingAddress = null,
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
            $this->securityService->getHash($orderReference),
            $this->generalServiceType->getWebShopId(),
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

        $response = $this->generalServiceType->changeOrder($request);

        return $this->processResponse($response, $this->generalServiceType);
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
            $this->securityService->getHash($pendingOrderReference),
            $this->generalServiceType->getWebShopId(),
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

        $response = $this->generalServiceType->validateOrder($request);

        return $this->processResponse($response, $this->generalServiceType);
    }

    /**
     * @param $orderReference
     * @param ShippingMethod     $shippingMethod
     * @param ShippingAddress    $shippingAddress
     * @param null               $totalAmount
     * @param null               $totalAmountCurrency
     * @param null               $language
     * @param null               $customerEmail
     * @param null               $customerPhoneNumber
     * @param SenderAddress|null $returnAddress
     * @param SenderAddress|null $shipperAddress
     * @param null               $pendingOrderReference
     * @param null               $targetWebShop
     *
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
    ) {
        if ($pendingOrderReference === null) {
            $pendingOrderReference = $orderReference;
        }

        $request = new CommitOrderRequest(
            $this->securityService->getHash($pendingOrderReference),
            $this->generalServiceType->getWebShopId(),
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

        $response = $this->generalServiceType->commitOrder($request);

        return $this->processResponse($response, $this->generalServiceType);
    }

    /**
     * @param $orderReference
     * @param null $targetWebShop
     *
     * @return DeleteOrderResponse
     */
    public function deleteOrder($orderReference, $targetWebShop = null)
    {
        $request = new DeleteOrderRequest(
            $this->securityService->getHash($orderReference),
            $this->generalServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference
        );

        $response = $this->generalServiceType->deleteOrder($request);

        return $this->processResponse($response, $this->generalServiceType);
    }

    /**
     * @param $orderReference
     * @param bool|null $includeLabels
     * @param bool|null $getCarrierStatus
     * @param null      $targetWebShop
     *
     * @return OrderStatusResponse
     */
    public function getOrderStatus(
        $orderReference,
        $includeLabels = null,
        $getCarrierStatus = null,
        $targetWebShop = null
    ) {
        $request = new OrderStatusRequest(
            $this->securityService->getHash($orderReference),
            $this->generalServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $includeLabels,
            $getCarrierStatus
        );

        $response = $this->generalServiceType->orderStatus($request);

        return $this->processResponse($response, $this->generalServiceType);
    }

    /**
     * @param DateTime $changedSince
     * @param null     $page
     * @param null     $carrierStatus
     * @param null     $targetWebShop
     *
     * @return ListOrdersResponse
     */
    public function listOrders(DateTime $changedSince, $page = null, $carrierStatus = null, $targetWebShop = null)
    {
        $today = new DateTime();
        $request = new ListOrdersRequest(
            $this->securityService->getHash($today->format('Ymd')),
            $this->generalServiceType->getWebShopId(),
            $targetWebShop,
            $changedSince->format('Y-m-d'),
            $page,
            $carrierStatus
        );

        $response = $this->generalServiceType->listOrders($request);

        return $this->processResponse($response, $this->generalServiceType);
    }
}
