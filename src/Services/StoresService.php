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
use Etrias\PaazlConnector\SoapTypes\ChangeStoreDetailsType;
use Etrias\PaazlConnector\SoapTypes\ChangeStoresRequestType;
use Etrias\PaazlConnector\SoapTypes\DeleteStoresRequest;
use Etrias\PaazlConnector\SoapTypes\DeleteStoreType;
use Etrias\PaazlConnector\SoapTypes\ListStoresRequest;

class StoresService implements StoresServiceInterface
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
     * @param PaazlClientInterface     $client
     * @param SecurityServiceInterface $security
     */
    public function __construct(PaazlClientInterface $client, SecurityServiceInterface $security)
    {
        $this->security = $security;
        $this->client = $client;
    }

    /**
     * {@inheritdoc}
     */
    public function createStores(array $stores, $targetWebShop = null)
    {
        $changeStores = [];
        foreach ($stores as $store) {
            $changeStore = new ChangeStoreDetailsType(
                $this->security->getHash($store->getCode()),
                $store->getCode(),
                $store->getName(),
                $store->getAddress(),
                $store->getCoordinates(),
                $store->getBusinessHours()
                );
            $changeStores[] = $changeStore;
        }

        $request = new ChangeStoresRequestType(
            $this->client->getWebShopId(),
            $targetWebShop,
            $changeStores
        );

        return $this->client->createStores($request);
    }

    /**
     * {@inheritdoc}
     */
    public function updateStores(array $stores, $targetWebShop = null)
    {
        $changeStores = [];
        foreach ($stores as $store) {
            $changeStore = new ChangeStoreDetailsType(
                $this->security->getHash($store->getCode()),
                $store->getCode(),
                $store->getName(),
                $store->getAddress(),
                $store->getCoordinates(),
                $store->getBusinessHours()
            );
            $changeStores[] = $changeStore;
        }

        $request = new ChangeStoresRequestType(
            $this->client->getWebShopId(),
            $targetWebShop,
            $changeStores
        );

        return $this->client->updateStores($request);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteStores(array $storeCodes, $targetWebShop = null)
    {
        $stores = [];

        foreach ($storeCodes as $storeCode) {
            $stores[] = new DeleteStoreType($this->security->getHash($storeCode), $storeCode);
        }

        $request = new DeleteStoresRequest(
            $this->client->getWebShopId(),
            $targetWebShop,
            $stores
        );

        return $this->client->deleteStores($request);
    }

    /**
     * {@inheritdoc}
     */
    public function listStores($targetWebShop = null)
    {
        $today = new DateTime();
        $request = new ListStoresRequest(
            $this->security->getHash($today->format('Ymd')),
            $this->client->getWebShopId(),
            $targetWebShop
        );

        return $this->client->listStores($request);
    }
}
