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

use Etrias\PaazlConnector\Services\StoresService;
use Etrias\PaazlConnector\Services\StoresServiceInterface;
use Etrias\PaazlConnector\SoapTypes\AddressType;
use Etrias\PaazlConnector\SoapTypes\ChangeStoresResponseType;
use Etrias\PaazlConnector\SoapTypes\CoordinatesType;
use Etrias\PaazlConnector\SoapTypes\DeleteStoresResponse;
use Etrias\PaazlConnector\SoapTypes\ListStoresResponse;
use Etrias\PaazlConnector\SoapTypes\StoreDetailsType;

/**
 * @coversNothing
 */
class StoresServiceTest extends AbstractServiceTest
{
    /**
     * @var StoresServiceInterface
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
                    'street',
                    'housenumber',
                    'a',
                    'address',
                    'addressline',
                    'postcode',
                    'Utrecht',
                    'Zuid-Holland',
                    'NL'
                ),
                new CoordinatesType(52.092876, 5.104480),
               null
            ),
            ];

        $response = $this->storesService->createStores($stores);
        $this->assertInstanceOf(ChangeStoresResponseType::class, $response);
    }

    public function testUpdateStores()
    {
        $stores = [
            new StoreDetailsType(
                'new_store',
                'Naam van de store',
                new AddressType(
                    'street',
                    'housenumber',
                    'a',
                    'address',
                    'addressline',
                    'postcode',
                    'Utrecht',
                    'Zuid-Holland',
                    'NL'
                ),
                new CoordinatesType(52.092876, 5.104480),
                null
            ),
        ];

        $response = $this->storesService->updateStores($stores);
        $this->assertInstanceOf(ChangeStoresResponseType::class, $response);
    }

    public function testDeleteStores()
    {
        $response = $this->storesService->deleteStores(['new_store', 'new_store_2']);
        $this->assertInstanceOf(DeleteStoresResponse::class, $response);
    }

    public function testListStores()
    {
        $response = $this->storesService->listStores();
        $this->assertInstanceOf(ListStoresResponse::class, $response);
    }
}
