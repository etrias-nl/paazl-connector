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
use Etrias\PaazlConnector\Services\BatchService;
use Etrias\PaazlConnector\Services\ListService;
use Etrias\PaazlConnector\Services\SecurityService;
use Etrias\PaazlConnector\Services\StoresService;
use Etrias\PaazlConnector\SoapTypes\AddressResponse;
use Etrias\PaazlConnector\SoapTypes\AddressType;
use Etrias\PaazlConnector\SoapTypes\BatchStatusResponse;
use Etrias\PaazlConnector\SoapTypes\BusinessHoursType;
use Etrias\PaazlConnector\SoapTypes\CloseBatchResponse;
use Etrias\PaazlConnector\SoapTypes\CoordinatesType;
use Etrias\PaazlConnector\SoapTypes\DeliveryEstimateResponse;
use Etrias\PaazlConnector\SoapTypes\ListOpenBatchesResponse;
use Etrias\PaazlConnector\SoapTypes\OpenBatchResponse;
use Etrias\PaazlConnector\SoapTypes\RateResponse;
use Etrias\PaazlConnector\SoapTypes\ServicePointsResponse;
use Etrias\PaazlConnector\SoapTypes\StoreDetailsType;
use GuzzleHttp\Client;
use Phpro\SoapClient\ClientBuilder;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\Soap\Handler\GuzzleHandle;

class StoresServiceTest extends AbstractServiceTest
{
    /**
     * @var StoresService
     */
    protected $storesService;

    public function setUp()
    {
        parent::setUp();
        $this->storesService = new StoresService($this->soapClient, $this->securityService);
    }

    public function testCreateStores()
    {
        $stores = [
            new StoreDetailsType(
                'new_store',
                'Naam van de store',
                new AddressType(

                ),
                new CoordinatesType(	52.092876, 	5.104480),
               null
            )
            ];
    }


}
