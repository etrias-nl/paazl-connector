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
use Etrias\PaazlConnector\SoapTypes\ChangeOrderRequest;
use Etrias\PaazlConnector\SoapTypes\ChangeProducts;
use Etrias\PaazlConnector\SoapTypes\ChangeSenderAddress;
use Etrias\PaazlConnector\SoapTypes\ChangeShippingAddress;
use Etrias\PaazlConnector\SoapTypes\ChangeShippingMethod;
use Etrias\PaazlConnector\SoapTypes\CommitOrderRequest;
use Etrias\PaazlConnector\SoapTypes\DeleteOrderRequest;
use Etrias\PaazlConnector\SoapTypes\ListOrdersRequest;
use Etrias\PaazlConnector\SoapTypes\ListOrdersResponse;
use Etrias\PaazlConnector\SoapTypes\OrderDetailsRequest;
use Etrias\PaazlConnector\SoapTypes\OrderDetailsResponse;
use Etrias\PaazlConnector\SoapTypes\OrderRequest;
use Etrias\PaazlConnector\SoapTypes\OrderSaveResponseType;
use Etrias\PaazlConnector\SoapTypes\OrderStatusRequest;
use Etrias\PaazlConnector\SoapTypes\OrderStatusResponse;
use Etrias\PaazlConnector\SoapTypes\Product;
use Etrias\PaazlConnector\SoapTypes\Products;
use Etrias\PaazlConnector\SoapTypes\SenderAddress;
use Etrias\PaazlConnector\SoapTypes\ShippingAddress;
use Etrias\PaazlConnector\SoapTypes\ShippingMethod;
use Etrias\PaazlConnector\SoapTypes\UpdateOrderRequest;
use Etrias\PaazlConnector\SoapTypes\ValidateOrderRequest;
use Etrias\PaazlConnector\SoapTypes\ValidateOrderResponseType;


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
            $this->security->getHash($orderReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $extendedDetails
        );

        return $this->client->orderDetails($request);
    }

    /**
     * @param $orderReference
     * @param Product[] $products
     * @param null     $targetWebShop
     *
     * @return OrderSaveResponseType
     */
    public function createOrder($orderReference, array $products, $targetWebShop = null)
    {
        $request = new OrderRequest(
            $this->security->getHash($orderReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $products
        );

        return $this->client->order($request);
    }

    /**
     * @param $orderReference
     * @param Products[] $products
     * @param null     $targetWebShop
     *
     * @return OrderSaveResponseType
     */
    public function updateOrder($orderReference, array $products, $targetWebShop = null)
    {
        $request = new UpdateOrderRequest(
            $this->security->getHash($orderReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $products
        );

        return $this->client->updateorder($request);
    }

    /**
     * @param $orderReference
     * @param null                      $newOrderReference
     * @param ChangeShippingMethod|null $shippingMethod
     * @param ChangeShippingAddress|null      $shippingAddress
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
            $this->security->getHash($orderReference),
            $this->client->getWebShopId(),
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

        return $this->client->changeOrder($request);
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
            $this->security->getHash($pendingOrderReference),
            $this->client->getWebShopId(),
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

        return $this->client->validateOrder($request);
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
            $this->security->getHash($pendingOrderReference),
            $this->client->getWebShopId(),
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

        return $this->client->commitOrder($request);
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
            $this->security->getHash($orderReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $orderReference
        );

        return $this->client->deleteOrder($request);
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
            $this->security->getHash($orderReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $includeLabels,
            $getCarrierStatus
        );

        return $this->client->orderStatus($request);
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
            $this->security->getHash($today->format('Ymd')),
            $this->client->getWebShopId(),
            $targetWebShop,
            $changedSince,
            $page,
            $carrierStatus
        );

        return $this->client->listOrders($request);
    }
}
