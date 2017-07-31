<?php
/**
 * Created by PhpStorm.
 * User: cprinse
 * Date: 27-7-17
 * Time: 15:43
 */

namespace Tests\Etrias\PaazlConnector\Functional\Services;


use Etrias\PaazlConnector\Client\PaazlClientInterface;
use Etrias\PaazlConnector\Exceptions\NoSuchBarcodeException;
use Etrias\PaazlConnector\GuzzleSoapClient;
use Etrias\PaazlConnector\Services\BatchService;
use Etrias\PaazlConnector\Services\ListService;
use Etrias\PaazlConnector\Services\SecurityService;
use Etrias\PaazlConnector\Services\ShippingService;
use Etrias\PaazlConnector\Services\StoresService;
use Etrias\PaazlConnector\SoapTypes\AddressResponse;
use Etrias\PaazlConnector\SoapTypes\AddressType;
use Etrias\PaazlConnector\SoapTypes\BatchStatusResponse;
use Etrias\PaazlConnector\SoapTypes\BusinessHoursType;
use Etrias\PaazlConnector\SoapTypes\CancelShipmentsResponse;
use Etrias\PaazlConnector\SoapTypes\CancelShipmentType;
use Etrias\PaazlConnector\SoapTypes\ChangeStoresRequestType;
use Etrias\PaazlConnector\SoapTypes\ChangeStoresResponseType;
use Etrias\PaazlConnector\SoapTypes\CloseBatchResponse;
use Etrias\PaazlConnector\SoapTypes\CoordinatesType;
use Etrias\PaazlConnector\SoapTypes\DateRangeType;
use Etrias\PaazlConnector\SoapTypes\DeleteStoresResponse;
use Etrias\PaazlConnector\SoapTypes\DeliveryDatesType;
use Etrias\PaazlConnector\SoapTypes\DeliveryEstimateResponse;
use Etrias\PaazlConnector\SoapTypes\ListOpenBatchesResponse;
use Etrias\PaazlConnector\SoapTypes\ListStoresResponse;
use Etrias\PaazlConnector\SoapTypes\OpenBatchResponse;
use Etrias\PaazlConnector\SoapTypes\OrdersToShipResponse;
use Etrias\PaazlConnector\SoapTypes\RateResponse;
use Etrias\PaazlConnector\SoapTypes\ServicePointsResponse;
use Etrias\PaazlConnector\SoapTypes\ShippingOptionResponse;
use Etrias\PaazlConnector\SoapTypes\StoreDetailsType;
use GuzzleHttp\Client;
use Phpro\SoapClient\ClientBuilder;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\Soap\Handler\GuzzleHandle;

class ShippingServiceTest extends AbstractServiceTest
{
    /**
     * @var ShippingService
     */
    protected $shippingService;

    public function setUp()
    {
        parent::setUp();
        $this->shippingService = new ShippingService($this->soapClient, $this->securityService);
    }

    public function testGenerateShippingManifest()
    {
        $this->expectException(\RuntimeException::class);
        $this->shippingService->generateShippingManifest();
    }

    public function testGetOrdersToShip()
    {
        $response = $this->shippingService->getOrdersToShip(new \DateTime('yesterday'));
        $this->assertInstanceOf(OrdersToShipResponse::class, $response);
    }

    public function testGetOrdersToShipWithoutArguments()
    {
        $response = $this->shippingService->getOrdersToShip();
        $this->assertInstanceOf(OrdersToShipResponse::class, $response);
    }

    public function testCancelShipments()
    {
        $this->expectException(NoSuchBarcodeException::class);
        $response = $this->shippingService->cancelShipments([
            new CancelShipmentType('orderReference', 'barcode'),
        ]);
        $this->assertInstanceOf(CancelShipmentsResponse::class, $response);
    }

    public function testGetShippingOptions()
    {
        $response = $this->shippingService->getShippingOptions(
            'ET171',
            'NL',
            new DateRangeType(new \DateTime('now'), new \DateTime('+2 weeks')),
            '5121SW',
            false
        );
        $this->assertInstanceOf(ShippingOptionResponse::class, $response);
    }
}
