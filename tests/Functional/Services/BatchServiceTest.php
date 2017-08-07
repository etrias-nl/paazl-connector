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

namespace Tests\Etrias\PaazlConnector\Functional\Services;

use Etrias\PaazlConnector\Services\BatchService;
use Etrias\PaazlConnector\Services\BatchServiceInterface;
use Etrias\PaazlConnector\SoapTypes\BatchStatusResponse;
use Etrias\PaazlConnector\SoapTypes\CloseBatchResponse;
use Etrias\PaazlConnector\SoapTypes\ListOpenBatchesResponse;
use Etrias\PaazlConnector\SoapTypes\OpenBatchResponse;

/**
 * @coversNothing
 */
class BatchServiceTest extends AbstractServiceTest
{
    /**
     * @var BatchServiceInterface
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
        $this->assertInternalType('numeric', $response->getBatch());
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
