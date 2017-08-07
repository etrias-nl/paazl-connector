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

use Etrias\PaazlConnector\SoapTypes\BatchStatusResponse;
use Etrias\PaazlConnector\SoapTypes\CloseBatchResponse;
use Etrias\PaazlConnector\SoapTypes\ListOpenBatchesResponse;
use Etrias\PaazlConnector\SoapTypes\OpenBatchResponse;

interface BatchServiceInterface
{
    /**
     * @param null $distributor
     * @param null $shippingOption
     * @param null $country
     * @param null $targetWebShop
     *
     * @return OpenBatchResponse
     */
    public function openBatch($distributor = null, $shippingOption = null, $country = null, $targetWebShop = null);

    /**
     * @param $batchId
     * @param null $targetWebShop
     *
     * @return CloseBatchResponse
     */
    public function closeBatch($batchId, $targetWebShop = null);

    /**
     * @param $batchId
     * @param null $targetWebShop
     *
     * @return BatchStatusResponse
     */
    public function getBatchStatus($batchId, $targetWebShop = null);

    /**
     * @param null $targetWebShop
     *
     * @return ListOpenBatchesResponse
     */
    public function listOpenBatches($targetWebShop = null);
}
