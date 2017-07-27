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
use Etrias\PaazlConnector\SoapTypes\AddressResponse;
use Etrias\PaazlConnector\SoapTypes\BatchStatusResponse;
use Etrias\PaazlConnector\SoapTypes\CloseBatchResponse;
use Etrias\PaazlConnector\SoapTypes\CoordinatesType;
use Etrias\PaazlConnector\SoapTypes\DeliveryEstimateResponse;
use Etrias\PaazlConnector\SoapTypes\ListOpenBatchesResponse;
use Etrias\PaazlConnector\SoapTypes\OpenBatchResponse;
use Etrias\PaazlConnector\SoapTypes\RateResponse;
use Etrias\PaazlConnector\SoapTypes\ServicePointsResponse;
use GuzzleHttp\Client;
use Phpro\SoapClient\ClientBuilder;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\Soap\Handler\GuzzleHandle;

class BatchServiceTest extends AbstractServiceTest
{
    /**
     * @var BatchService
     */
    protected $batchService;

    public function setUp()
    {
        parent::setUp();
        $this->batchService = new BatchService($this->soapClient, $this->securityService);
    }

    public function testOpenBatch()
    {
        $response = $this->batchService->openBatch();
        $this->assertInstanceOf(OpenBatchResponse::class, $response);
        $this->assertTrue(is_numeric($response->getBatch()));
    }

    public function testCloseBatch()
    {
        $openBatchResponse = $this->batchService->openBatch();

        $response = $this->batchService->closeBatch($openBatchResponse->getBatch());
        $this->assertInstanceOf(CloseBatchResponse::class, $response);
    }

    public function testGetBatchStatus()
    {
        $openBatchResponse = $this->batchService->openBatch();

        $response = $this->batchService->getBatchStatus($openBatchResponse->getBatch());
        $this->assertInstanceOf(BatchStatusResponse::class, $response);
    }

    public function testListOpenBatches()
    {
        $response = $this->batchService->listOpenBatches();
        $this->assertInstanceOf(ListOpenBatchesResponse::class, $response);
    }
}
