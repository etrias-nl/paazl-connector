<?php
/**
 * Created by PhpStorm.
 * User: cprinse
 * Date: 27-7-17
 * Time: 15:43
 */

namespace Tests\Etrias\PaazlConnector\Functional\Services;

use Etrias\PaazlConnector\Services\OrderService;
use Etrias\PaazlConnector\Services\ShippingService;
use Etrias\PaazlConnector\SoapTypes\ChangeOrderRequest;
use Etrias\PaazlConnector\SoapTypes\CommitOrderResponse;
use Etrias\PaazlConnector\SoapTypes\DeleteOrderResponse;
use Etrias\PaazlConnector\SoapTypes\DeliveryTypeType;
use Etrias\PaazlConnector\SoapTypes\ListOrdersResponse;
use Etrias\PaazlConnector\SoapTypes\OrderDetailsResponse;
use Etrias\PaazlConnector\SoapTypes\OrderSaveResponseType;
use Etrias\PaazlConnector\SoapTypes\OrderStatusResponse;
use Etrias\PaazlConnector\SoapTypes\Product;
use Etrias\PaazlConnector\SoapTypes\ShippingAddress;
use Etrias\PaazlConnector\SoapTypes\ShippingMethod;
use Etrias\PaazlConnector\SoapTypes\ShippingOption;
use Etrias\PaazlConnector\SoapTypes\ValidateOrderResponse;
use Etrias\PaazlConnector\SoapTypes\ValidateOrderResponseType;


class OrderServiceTest extends AbstractServiceTest
{
    /** @var  string */
    protected static $reference;

    /** @var  string */
    protected static $newReference;

    /**
     * @var OrderService
     */
    protected $orderService;

    /**
     * @var ShippingService
     */
    protected $shippingService;

    public static function setUpBeforeClass()
    {
        self::$reference = 'TEST00'.rand();
        self::$newReference = 'new_reference_'.rand();
    }

    public function setUp()
    {
        parent::setUp();
        $this->orderService = new OrderService($this->soapClient, $this->securityService);
        $this->shippingService = new ShippingService($this->soapClient, $this->securityService);
    }

    public function testGetOrderDetails()
    {
        $response = $this->orderService->getOrderDetails('ET100');
        $this->assertInstanceOf(OrderDetailsResponse::class, $response);
    }

    public function testCreateOrder()
    {
        $response = $this->orderService->createOrder(
            self::$reference,
            [
                new Product(
                    1,
                    'unit',
                    'A',
                    '10',
                    11,
                    12,
                    13,
                    1
                )
            ]
        );
        $this->assertInstanceOf(OrderSaveResponseType::class, $response);
    }

    public function testUpdateOrder()
    {
        $response = $this->orderService->updateOrder(
            self::$reference,
            [
            new Product(
                1,
                'unit',
                'A',
                '10',
                11,
                12,
                13,
                1
            )
            ]
        );

        $this->assertInstanceOf(OrderSaveResponseType::class, $response);
    }

    public function testValidateOrder()
    {
        $shippingOptions = $this->shippingService->getShippingOptions(
            self::$reference,
            'NL'
        )->getShippingOptions();

        $shippingOptions = $shippingOptions->getShippingOption();
        /** @var ShippingOption $shippingOption */
        $shippingOption = reset($shippingOptions);
        $this->assertGreaterThan(0, count($shippingOptions));

        $response = $this->orderService->validateOrder(
            self::$reference,
            self::$reference,
            100,
            'EUR',
            new ShippingMethod(
                DeliveryTypeType::DELIVERY,
                null,
                null,
                0,
                $shippingOption->getType()
            ),
            new ShippingAddress(
                null,
                'customername',
                null,
                null,
                'street',
                '11',
                null,
                null,
                '1000AA',
                'Amsterdam'
            )
        );

        $this->assertInstanceOf(ValidateOrderResponseType::class, $response);
    }

    public function testCommitOrder()
    {
        $shippingOptions = $this->shippingService->getShippingOptions(
            self::$reference,
            'NL'
        )->getShippingOptions();

        $shippingOptions = $shippingOptions->getShippingOption();
        /** @var ShippingOption $shippingOption */
        $shippingOption = reset($shippingOptions);
        $this->assertGreaterThan(0, count($shippingOptions));

        $response = $this->orderService->commitOrder(
            self::$reference,
            new ShippingMethod(
                DeliveryTypeType::DELIVERY,
                null,
                null,
                0,
                $shippingOption->getType()
            ),
            new ShippingAddress(
                null,
                'customername',
                null,
                null,
                'street',
                '11',
                null,
                null,
                '1000AA',
                'Amsterdam'
            ),
            100,
            'EUR'
        );

        $this->assertInstanceOf(OrderSaveResponseType::class, $response);
    }

    public function testChangeOrder()
    {
        $response = $this->orderService->changeOrder(
            self::$reference,
            self::$newReference
        );

        $this->assertInstanceOf(OrderSaveResponseType::class, $response);
    }

    public function testGetOrderStatus()
    {
        $response = $this->orderService->getOrderStatus('ET100');
        $this->assertInstanceOf(OrderStatusResponse::class, $response);
    }

    public function testListOrders()
    {
        $response = $this->orderService->listOrders(new \DateTime('yesterday'));
        $this->assertInstanceOf(ListOrdersResponse::class, $response);
    }

    public function testDeleteOrders()
    {
        $response = $this->orderService->deleteOrder(self::$newReference);
        $this->assertInstanceOf(DeleteOrderResponse::class, $response);
    }


}
