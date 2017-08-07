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
use Etrias\PaazlConnector\Exceptions\ReferenceAlreadyExistsException;
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

class OrderService implements OrderServiceInterface
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
     * @param PaazlClientInterface     $client
     * @param SecurityServiceInterface $security
     */
    public function __construct(PaazlClientInterface $client, SecurityServiceInterface $security)
    {
        $this->security = $security;
        $this->client = $client;
    }

    /**
     * @inheritdoc
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
     * @inheritdoc
     */
    public function createOrder($orderReference, array $products, $override = false, $targetWebShop = null)
    {
        $request = new OrderRequest(
            $this->security->getHash($orderReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $products
        );

        if ($override === true) {
            try {
                return $this->client->order($request);
            } catch (ReferenceAlreadyExistsException $e) {
                return $this->updateOrder($orderReference, $products, $targetWebShop);
            }
        } else {
            return $this->client->order($request);
        }

    }

    /**
     * @inheritdoc
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
     * @inheritdoc
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
     * @inheritdoc
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
     * @inheritdoc
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
     * @inheritdoc
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
     * @inheritdoc
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
     * @inheritdoc
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
