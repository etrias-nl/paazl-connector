<?php
/**
 * Created by PhpStorm.
 * User: cprinse
 * Date: 27-7-17
 * Time: 15:43
 */

namespace Tests\Etrias\PaazlConnector\Functional\Services;


use Etrias\PaazlConnector\Client\PaazlClientInterface;
use Etrias\PaazlConnector\GuzzleSoapClient;
use Etrias\PaazlConnector\Services\ListService;
use Etrias\PaazlConnector\Services\SecurityService;
use Etrias\PaazlConnector\SoapTypes\AddressResponse;
use Etrias\PaazlConnector\SoapTypes\CoordinatesType;
use Etrias\PaazlConnector\SoapTypes\DeliveryEstimateResponse;
use Etrias\PaazlConnector\SoapTypes\RateResponse;
use Etrias\PaazlConnector\SoapTypes\ServicePointsResponse;
use GuzzleHttp\Client;
use Phpro\SoapClient\ClientBuilder;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\Soap\Handler\GuzzleHandle;

class ListServiceTest extends AbstractServiceTest
{
    /**
     * @var ListService
     */
    protected $listService;

    public function setUp()
    {
        parent::setUp();
        $this->listService = new ListService($this->soapClient, $this->securityService);
    }

    public function testGetAddress()
    {
        $response = $this->listService->getAddress('ET171', '5121SW', '11');
        $this->assertInstanceOf(AddressResponse::class, $response);
    }

    public function testGetDeliveryEstimate()
    {
        $response = $this->listService->getDeliveryEstimate(
            'ET171',
            '10',
            '30',
            'EUR',
            'NL',
            'Rijen',
            '5121SW'

        );
        $this->assertInstanceOf(DeliveryEstimateResponse::class, $response);
    }

    public function testGetRates()
    {
        $response = $this->listService->getRates(
            'ET171'
        );

        $this->assertInstanceOf(RateResponse::class, $response);
    }

    public function testGetServicePoints()
    {
        $response = $this->listService->getServicePoints(
            'NL',
            '5121SW'
        );

        $this->assertInstanceOf(ServicePointsResponse::class, $response);
    }

    public function testGetServicePointsWithSouthWestCoordinates()
    {
        $this->expectException(\RuntimeException::class);
        $this->listService->getServicePoints(
            null,
            null,
            new CoordinatesType(	52.092876, 	5.104480)
        );
    }

    public function testGetServicePointsWithNorthEastCoordinates()
    {
        $this->expectException(\RuntimeException::class);
        $this->listService->getServicePoints(
            null,
            null,
            null,
            new CoordinatesType(	52.092876, 	5.104480)
        );
    }
}
