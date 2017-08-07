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

use Etrias\PaazlConnector\SoapTypes\ChangeStoresResponseType;
use Etrias\PaazlConnector\SoapTypes\DeleteStoresResponse;
use Etrias\PaazlConnector\SoapTypes\ListStoresResponse;
use Etrias\PaazlConnector\SoapTypes\StoreDetailsType;

interface StoresServiceInterface
{
    /**
     * @param StoreDetailsType[] $stores
     * @param null               $targetWebShop
     *
     * @return ChangeStoresResponseType
     */
    public function createStores(array $stores, $targetWebShop = null);

    /**
     * @param StoreDetailsType[] $stores
     * @param null               $targetWebShop
     *
     * @return ChangeStoresResponseType
     */
    public function updateStores(array $stores, $targetWebShop = null);

    /**
     * @param array $storeCodes
     * @param null  $targetWebShop
     *
     * @return DeleteStoresResponse
     */
    public function deleteStores(array $storeCodes, $targetWebShop = null);

    /**
     * @param null $targetWebShop
     *
     * @return ListStoresResponse
     */
    public function listStores($targetWebShop = null);
}
