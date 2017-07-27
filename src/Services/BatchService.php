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

namespace Etrias\PaazlConnector\Services;

use DateTime;
use Etrias\PaazlConnector\Client\PaazlClientInterface;
use Etrias\PaazlConnector\SoapTypes\BatchStatusRequest;
use Etrias\PaazlConnector\SoapTypes\BatchStatusResponse;
use Etrias\PaazlConnector\SoapTypes\CloseBatchRequest;
use Etrias\PaazlConnector\SoapTypes\CloseBatchResponse;
use Etrias\PaazlConnector\SoapTypes\ListOpenBatchesRequest;
use Etrias\PaazlConnector\SoapTypes\ListOpenBatchesResponse;
use Etrias\PaazlConnector\SoapTypes\OpenBatchRequest;
use Etrias\PaazlConnector\SoapTypes\OpenBatchResponse;

class BatchService
{
    /**
     * @var PaazlClientInterface
     */
    protected $client;
    /**
     * @var SecurityServiceInterface
     */
    protected $security;

    /**
     * DocumentService constructor.
     *
     * @param PaazlClientInterface       $client
     * @param SecurityServiceInterface $security
     */
    public function __construct(PaazlClientInterface $client, SecurityServiceInterface $security)
    {
        $this->security = $security;
        $this->client = $client;
    }

    /**
     * @param null $distributor
     * @param null $shippingOption
     * @param null $country
     * @param null $targetWebShop
     *
     * @return OpenBatchResponse
     */
    public function openBatch(
        $distributor = null,
        $shippingOption = null,
        $country = null,
        $targetWebShop = null
    ) {
        $today = new DateTime();
        $hashInput = implode('', [
            $distributor,
            $shippingOption,
            $country,
            $today->format('Ymd'),
        ]);

        $request = new OpenBatchRequest(
            $this->security->getHash($hashInput),
            $this->client->getWebShopId(),
            $targetWebShop,
            $distributor,
            $shippingOption,
            $country
        );

        return $this->client->openBatch($request);
    }

    /**
     * @param $batchId
     * @param null $targetWebShop
     *
     * @return CloseBatchResponse
     */
    public function closeBatch($batchId, $targetWebShop = null)
    {
        $request = new CloseBatchRequest(
            $this->security->getHash($batchId),
            $this->client->getWebShopId(),
            $targetWebShop,
            $batchId
        );

        return $this->client->closeBatch($request);
    }

    /**
     * @param $batchId
     * @param null $targetWebShop
     *
     * @return BatchStatusResponse
     */
    public function getBatchStatus($batchId, $targetWebShop = null)
    {
        $request = new BatchStatusRequest(
            $this->security->getHash($batchId),
            $this->client->getWebShopId(),
            $targetWebShop,
            $batchId
        );

        return $this->client->batchStatus($request);
    }

    /**
     * @param null $targetWebShop
     *
     * @return ListOpenBatchesResponse
     */
    public function listOpenBatches($targetWebShop = null)
    {
        $today = new DateTime();
        $request = new ListOpenBatchesRequest(
            $this->security->getHash($today->format('Ymd')),
            $this->client->getWebShopId(),
            $targetWebShop
        );

        return $this->client->listOpenBatches($request);
    }
}
