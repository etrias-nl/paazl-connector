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
use Etrias\PaazlConnector\SoapTypes\ChangeProducts;
use Etrias\PaazlConnector\SoapTypes\ChangeSenderAddress;
use Etrias\PaazlConnector\SoapTypes\ChangeShippingAddress;
use Etrias\PaazlConnector\SoapTypes\ChangeShippingMethod;
use Etrias\PaazlConnector\SoapTypes\DeleteOrderResponse;
use Etrias\PaazlConnector\SoapTypes\ListOrdersResponse;
use Etrias\PaazlConnector\SoapTypes\OrderDetailsResponse;
use Etrias\PaazlConnector\SoapTypes\OrderSaveResponseType;
use Etrias\PaazlConnector\SoapTypes\OrderStatusResponse;
use Etrias\PaazlConnector\SoapTypes\Product;
use Etrias\PaazlConnector\SoapTypes\Products;
use Etrias\PaazlConnector\SoapTypes\SenderAddress;
use Etrias\PaazlConnector\SoapTypes\ShippingAddress;
use Etrias\PaazlConnector\SoapTypes\ShippingMethod;
use Etrias\PaazlConnector\SoapTypes\ValidateOrderResponseType;

interface OrderServiceInterface
{
    /**
     * Constructor method for orderDetailsRequest.
     *
     * @param string $orderReference
     * @param int    $targetWebShop
     * @param bool   $extendedDetails
     *
     * @return OrderDetailsResponse
     */
    public function getOrderDetails($orderReference, $targetWebShop = null, $extendedDetails = null);

    /**
     * @param $orderReference
     * @param Product[] $products
     * @param bool      $override
     * @param int|null      $targetWebShop
     *
     * @return OrderSaveResponseType
     */
    public function createOrder($orderReference, array $products, $override = false, $targetWebShop = null);

    /**
     * @param $orderReference
     * @param Products[] $products
     * @param int|null       $targetWebShop
     *
     * @return OrderSaveResponseType
     */
    public function updateOrder($orderReference, array $products, $targetWebShop = null);

    /**
     * @param string $orderReference
     * @param string|null                       $newOrderReference
     * @param ChangeShippingMethod|null  $shippingMethod
     * @param ChangeShippingAddress|null $shippingAddress
     * @param ChangeSenderAddress|null   $returnAddress
     * @param ChangeSenderAddress|null   $shipperAddress
     * @param ChangeProducts|null        $products
     * @param string|null                       $totalAmount
     * @param string|null                       $totalAmountCurrency
     * @param string|null                       $language
     * @param string|null                       $customerEmail
     * @param string|null                       $customerPhoneNumber
     * @param int|null                       $targetWebShop
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
    );

    /**
     * @param string $orderReference
     * @param string $pendingOrderReference
     * @param float $totalAmount
     * @param string $totalAmountCurrency
     * @param ShippingMethod     $shippingMethod
     * @param ShippingAddress    $shippingAddress
     * @param string|null               $customerEmail
     * @param string|null               $language
     * @param string|null               $customerPhoneNumber
     * @param SenderAddress|null $shipperAddress
     * @param SenderAddress|null $returnAddress
     * @param int|null               $targetWebShop
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
    );

    /**
     * @param string $orderReference
     * @param ShippingMethod     $shippingMethod
     * @param ShippingAddress    $shippingAddress
     * @param float|null               $totalAmount
     * @param string|null               $totalAmountCurrency
     * @param string|null               $language
     * @param string|null               $customerEmail
     * @param string|null               $customerPhoneNumber
     * @param SenderAddress|null $returnAddress
     * @param SenderAddress|null $shipperAddress
     * @param string|null               $pendingOrderReference
     * @param int|null               $targetWebShop
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
    );

    /**
     * @param string $orderReference
     * @param null $targetWebShop
     *
     * @return DeleteOrderResponse
     */
    public function deleteOrder($orderReference, $targetWebShop = null);

    /**
     * @param string $orderReference
     * @param bool|null $includeLabels
     * @param bool|null $getCarrierStatus
     * @param int|null      $targetWebShop
     *
     * @return OrderStatusResponse
     */
    public function getOrderStatus(
        $orderReference,
        $includeLabels = null,
        $getCarrierStatus = null,
        $targetWebShop = null
    );

    /**
     * @param DateTime $changedSince
     * @param int|null     $page
     * @param string|null     $carrierStatus
     * @param null     $targetWebShop
     *
     * @return ListOrdersResponse
     */
    public function listOrders(DateTime $changedSince, $page = null, $carrierStatus = null, $targetWebShop = null);
}
