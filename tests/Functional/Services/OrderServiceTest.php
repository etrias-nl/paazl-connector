<?php
/**
 * Created by PhpStorm.
 * User: cprinse
 * Date: 27-7-17
 * Time: 15:43
 */

namespace Tests\Etrias\PaazlConnector\Functional\Services;


use Etrias\PaazlConnector\Client\PaazlClientInterface;
use Etrias\PaazlConnector\Exceptions\DistributorException;
use Etrias\PaazlConnector\Exceptions\NotAvailableProofOfDeliveryDocumentException;
use Etrias\PaazlConnector\Exceptions\UnsupportedOperationException;
use Etrias\PaazlConnector\GuzzleSoapClient;
use Etrias\PaazlConnector\Services\BatchService;
use Etrias\PaazlConnector\Services\DocumentService;
use Etrias\PaazlConnector\Services\ListService;
use Etrias\PaazlConnector\Services\OrderService;
use Etrias\PaazlConnector\Services\SecurityService;
use Etrias\PaazlConnector\Services\StoresService;
use Etrias\PaazlConnector\SoapTypes\AdditionalDocumentType;
use Etrias\PaazlConnector\SoapTypes\AddressResponse;
use Etrias\PaazlConnector\SoapTypes\AddressType;
use Etrias\PaazlConnector\SoapTypes\BatchStatusResponse;
use Etrias\PaazlConnector\SoapTypes\BusinessHoursType;
use Etrias\PaazlConnector\SoapTypes\ChangeStoresRequestType;
use Etrias\PaazlConnector\SoapTypes\ChangeStoresResponseType;
use Etrias\PaazlConnector\SoapTypes\CloseBatchResponse;
use Etrias\PaazlConnector\SoapTypes\CoordinatesType;
use Etrias\PaazlConnector\SoapTypes\DeleteStoresResponse;
use Etrias\PaazlConnector\SoapTypes\DeliveryEstimateResponse;
use Etrias\PaazlConnector\SoapTypes\DocumentType;
use Etrias\PaazlConnector\SoapTypes\GenerateAdditionalPdfDocumentResponse;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfCustomsDocumentsResponse;
use Etrias\PaazlConnector\SoapTypes\ListOpenBatchesResponse;
use Etrias\PaazlConnector\SoapTypes\ListOrdersResponse;
use Etrias\PaazlConnector\SoapTypes\ListStoresResponse;
use Etrias\PaazlConnector\SoapTypes\OpenBatchResponse;
use Etrias\PaazlConnector\SoapTypes\Order;
use Etrias\PaazlConnector\SoapTypes\OrderDetailsResponse;
use Etrias\PaazlConnector\SoapTypes\OrderSaveResponseType;
use Etrias\PaazlConnector\SoapTypes\OrderStatusResponse;
use Etrias\PaazlConnector\SoapTypes\Product;
use Etrias\PaazlConnector\SoapTypes\ProofOfDeliveryResponse;
use Etrias\PaazlConnector\SoapTypes\RateResponse;
use Etrias\PaazlConnector\SoapTypes\ServicePointsResponse;
use Etrias\PaazlConnector\SoapTypes\StoreDetailsType;
use GuzzleHttp\Client;
use Phpro\SoapClient\ClientBuilder;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\Soap\Handler\GuzzleHandle;

class OrderServiceTest extends AbstractServiceTest
{
    /**
     * @var OrderService
     */
    protected $orderService;

    public function setUp()
    {
        parent::setUp();
        $this->orderService = new OrderService($this->soapClient, $this->securityService);
    }

    public function testGetOrderDetails()
    {
        $response = $this->orderService->getOrderDetails('ET100');
        $this->assertInstanceOf(OrderDetailsResponse::class, $response);
    }

    public function testCreateOrder()
    {
        $response = $this->orderService->createOrder(
            'ET101test',
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

}
