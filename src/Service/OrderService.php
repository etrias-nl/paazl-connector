<?php
/**
 * Created by PhpStorm.
 * User: heiligbrood
 * Date: 26-07-17
 * Time: 19:56
 */

namespace Etrias\PaazlConnector\Service;

use DateTime;
use Etrias\PaazlConnector\Processor\Processor;
use Etrias\PaazlConnector\ServiceType\Change as ChangeServiceType;
use Etrias\PaazlConnector\ServiceType\Commit as CommitServiceType;
use Etrias\PaazlConnector\ServiceType\Delete as DeleteServiceType;
use Etrias\PaazlConnector\ServiceType\Order as OrderServiceType;
use Etrias\PaazlConnector\ServiceType\_List as ListServiceType;
use Etrias\PaazlConnector\ServiceType\Update as UpdateServiceType;
use Etrias\PaazlConnector\StructType\ChangeOrderRequest;
use Etrias\PaazlConnector\StructType\ChangeProducts;
use Etrias\PaazlConnector\StructType\ChangeSenderAddress;
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

class OrderService
{
    use Processor;

    /**
     * @var SecurityServiceInterface
     */
    protected $securityService;
    /**
     * @var OrderServiceType
     */
    protected $orderServiceType;
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
     * @var CommitServiceType
     */
    protected $commitServiceType;
    /**
     * @var ListServiceType
     */
    protected $listServiceType;

    /**
     * DocumentService constructor.
     * @param OrderServiceType $orderServiceType
     * @param CommitServiceType $commitServiceType
     * @param UpdateServiceType $updateServiceType
     * @param ChangeServiceType $changeServiceType
     * @param DeleteServiceType $deleteServiceType
     * @param ListServiceType $listServiceType
     * @param SecurityServiceInterface $securityService
     */
    public function __construct(
        OrderServiceType $orderServiceType,
        CommitServiceType $commitServiceType,
        UpdateServiceType $updateServiceType,
        ChangeServiceType $changeServiceType,
        DeleteServiceType $deleteServiceType,
        ListServiceType $listServiceType,
        SecurityServiceInterface $securityService)
    {
        $this->securityService = $securityService;
        $this->orderServiceType = $orderServiceType;
        $this->updateServiceType = $updateServiceType;
        $this->changeServiceType = $changeServiceType;
        $this->deleteServiceType = $deleteServiceType;
        $this->commitServiceType = $commitServiceType;
        $this->listServiceType = $listServiceType;
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
     * @param null     $targetWebShop
     *
     * @return OrderSaveResponseType
     */
    public function createOrder($orderReference, Products $products, $targetWebShop = null)
    {
        $request = new OrderRequest(
            $this->securityService->getHash($orderReference),
            $this->orderServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $products
        );

        $response = $this->orderServiceType->order($request);

        return $this->processResponse($response, $this->orderServiceType);
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
            $this->updateServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $products
        );

        $response = $this->updateServiceType->updateorder($request);

        return $this->processResponse($response, $this->updateServiceType);
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
            $this->securityService->getHash($orderReference),
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
     * @param null $targetWebShop
     *
     * @return DeleteOrderResponse
     */
    public function deleteOrder($orderReference, $targetWebShop = null)
    {
        $request = new DeleteOrderRequest(
            $this->securityService->getHash($orderReference),
            $this->deleteServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference
        );

        $response = $this->deleteServiceType->deleteOrder($request);

        return $this->processResponse($response, $this->updateServiceType);
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
            $this->orderServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $includeLabels,
            $getCarrierStatus
        );

        $response = $this->orderServiceType->orderStatus($request);

        return $this->processResponse($response, $this->orderServiceType);
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
            $this->listServiceType->getWebShopId(),
            $targetWebShop,
            $changedSince->format('Y-m-d'),
            $page,
            $carrierStatus
        );

        $response = $this->listServiceType->listOrders($request);

        return $this->processResponse($response, $this->listServiceType);
    }

}