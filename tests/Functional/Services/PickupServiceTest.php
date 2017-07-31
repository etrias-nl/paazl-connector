<?php
/**
 * Created by PhpStorm.
 * User: cprinse
 * Date: 27-7-17
 * Time: 15:43
 */

namespace Tests\Etrias\PaazlConnector\Functional\Services;


use Etrias\PaazlConnector\Client\PaazlClientInterface;
use Etrias\PaazlConnector\Exceptions\NoPickupRequestOptionsAvailableException;
use Etrias\PaazlConnector\Exceptions\NoSuchPickupRequestException;
use Etrias\PaazlConnector\Exceptions\NoSuchPickupRequestOptionException;
use Etrias\PaazlConnector\GuzzleSoapClient;
use Etrias\PaazlConnector\Services\BatchService;
use Etrias\PaazlConnector\Services\ListService;
use Etrias\PaazlConnector\Services\PickupService;
use Etrias\PaazlConnector\Services\SecurityService;
use Etrias\PaazlConnector\Services\StoresService;
use Etrias\PaazlConnector\SoapTypes\AddressResponse;
use Etrias\PaazlConnector\SoapTypes\AddressType;
use Etrias\PaazlConnector\SoapTypes\BatchStatusResponse;
use Etrias\PaazlConnector\SoapTypes\BusinessHoursType;
use Etrias\PaazlConnector\SoapTypes\ChangeStoresRequestType;
use Etrias\PaazlConnector\SoapTypes\ChangeStoresResponseType;
use Etrias\PaazlConnector\SoapTypes\CloseBatchResponse;
use Etrias\PaazlConnector\SoapTypes\CoordinatesType;
use Etrias\PaazlConnector\SoapTypes\CreatePickupRequestResponse;
use Etrias\PaazlConnector\SoapTypes\DeleteStoresResponse;
use Etrias\PaazlConnector\SoapTypes\DeliveryEstimateResponse;
use Etrias\PaazlConnector\SoapTypes\ListOpenBatchesResponse;
use Etrias\PaazlConnector\SoapTypes\ListStoresResponse;
use Etrias\PaazlConnector\SoapTypes\OpenBatchResponse;
use Etrias\PaazlConnector\SoapTypes\PickupRequestOptionsResponse;
use Etrias\PaazlConnector\SoapTypes\RateResponse;
use Etrias\PaazlConnector\SoapTypes\ServicePointsResponse;
use Etrias\PaazlConnector\SoapTypes\StoreDetailsType;
use Etrias\PaazlConnector\SoapTypes\Time;
use GuzzleHttp\Client;
use Phpro\SoapClient\ClientBuilder;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\Soap\Handler\GuzzleHandle;

class PickupServiceTest extends AbstractServiceTest
{
    /**
     * @var PickupService
     */
    protected $pickupService;

    public function setUp()
    {
        parent::setUp();
        $this->pickupService = new PickupService($this->soapClient, $this->securityService);
    }

    public function testGetPickupRequestOptions()
    {
        $this->expectException(NoPickupRequestOptionsAvailableException::class);
        $this->pickupService->getPickupRequestOptions('ET171');
    }

    public function testCreatePickupRequest()
    {
        $this->expectException(NoSuchPickupRequestOptionException::class);
        $this->pickupService->createPickupRequest(
            'ET171',
            'AVG',
            '2',
            new \DateTime('10:00:00'),
            new \DateTime('16:00:00'),
            null,
            null,
            'Name',
            new AddressType(
                'street',
                '12',
                'a',
                'address',
                null,
                '5121SW',
                'Rijen',
                null,
                'NL'
            ),
            '0612345678'
        );
    }

    public function testCreatePickupRequestWithNotEqualWindowDates()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->pickupService->createPickupRequest(
            'ET171',
            'AVG',
            '2',
            new \DateTime('yesterday'),
            new \DateTime('today'),
            null,
            null,
            'Name',
            new AddressType(
                'street',
                '12',
                'a',
                'address',
                null,
                '5121SW',
                'Rijen',
                null,
                'NL'
            ),
            '0612345678'
        );
    }

    public function testGetPickupRequestDetails()
    {
        $this->expectException(NoSuchPickupRequestException::class);
        $this->pickupService->getPickupRequestDetails(
            'ET171',
            'AVG',
            'ET171'
        );
    }

    public function testGetPickupRequestStatus()
    {
        $this->expectException(NoSuchPickupRequestException::class);
        $this->pickupService->getPickupRequestStatus(
            'ET171',
            'AVG',
            'ET171'
        );
    }

    public function testCancelPickupRequestStatus()
    {
        $this->expectException(NoSuchPickupRequestException::class);
        $this->pickupService->cancelPickupRequest(
            'ET171',
            'AVG',
            'ET171'
        );
    }
}
