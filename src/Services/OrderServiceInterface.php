<?php
/**
 * Created by PhpStorm.
 * User: cprinse
 * Date: 7-8-17
 * Time: 16:39
 */

namespace Etrias\PaazlConnector\Services;

use DateTime;
use Etrias\PaazlConnector\SoapTypes\ChangeProducts;
use Etrias\PaazlConnector\SoapTypes\ChangeSenderAddress;
use Etrias\PaazlConnector\SoapTypes\ChangeShippingAddress;
use Etrias\PaazlConnector\SoapTypes\ChangeShippingMethod;
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
     * @param int $targetWebShop
     * @param bool $extendedDetails
     *
     * @return OrderDetailsResponse
     */
    public function getOrderDetails($orderReference, $targetWebShop = null, $extendedDetails = null);

    /**
     * @param $orderReference
     * @param Product[] $products
     * @param bool $override
     * @param null $targetWebShop
     *
     * @return OrderSaveResponseType
     */
    public function createOrder($orderReference, array $products, $override = false, $targetWebShop = null);

    /**
     * @param $orderReference
     * @param Products[] $products
     * @param null $targetWebShop
     *
     * @return OrderSaveResponseType
     */
    public function updateOrder($orderReference, array $products, $targetWebShop = null);

    /**
     * @param $orderReference
     * @param null $newOrderReference
     * @param ChangeShippingMethod|null $shippingMethod
     * @param ChangeShippingAddress|null $shippingAddress
     * @param ChangeSenderAddress|null $returnAddress
     * @param ChangeSenderAddress|null $shipperAddress
     * @param ChangeProducts|null $products
     * @param null $totalAmount
     * @param null $totalAmountCurrency
     * @param null $language
     * @param null $customerEmail
     * @param null $customerPhoneNumber
     * @param null $targetWebShop
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
     * @param $orderReference
     * @param $pendingOrderReference
     * @param $totalAmount
     * @param $totalAmountCurrency
     * @param ShippingMethod $shippingMethod
     * @param ShippingAddress $shippingAddress
     * @param null $customerEmail
     * @param null $language
     * @param null $customerPhoneNumber
     * @param SenderAddress|null $shipperAddress
     * @param SenderAddress|null $returnAddress
     * @param null $targetWebShop
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
     * @param $orderReference
     * @param null $targetWebShop
     *
     * @return DeleteOrderResponse
     */
    public function deleteOrder($orderReference, $targetWebShop = null);

    /**
     * @param $orderReference
     * @param bool|null $includeLabels
     * @param bool|null $getCarrierStatus
     * @param null $targetWebShop
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
     * @param null $page
     * @param null $carrierStatus
     * @param null $targetWebShop
     *
     * @return ListOrdersResponse
     */
    public function listOrders(DateTime $changedSince, $page = null, $carrierStatus = null, $targetWebShop = null);
}
