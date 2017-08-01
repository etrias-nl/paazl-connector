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

use Etrias\PaazlConnector\Exceptions\NoSuchBarcodeException;
use Etrias\PaazlConnector\Services\ShippingService;
use Etrias\PaazlConnector\SoapTypes\CancelShipmentsResponse;
use Etrias\PaazlConnector\SoapTypes\CancelShipmentType;
use Etrias\PaazlConnector\SoapTypes\DateRangeType;
use Etrias\PaazlConnector\SoapTypes\OrdersToShipResponse;
use Etrias\PaazlConnector\SoapTypes\ShippingOptionResponse;

/**
 * @coversNothing
 */
class ShippingServiceTest extends AbstractServiceTest
{
    /**
     * @var ShippingService
     */
    protected $shippingService;

    public function setUp()
    {
        parent::setUp();
        $this->shippingService = new ShippingService($this->soapClient, $this->securityService);
    }

    public function testGenerateShippingManifest()
    {
        $this->expectException(\RuntimeException::class);
        $this->shippingService->generateShippingManifest();
    }

    public function testGetOrdersToShip()
    {
        $response = $this->shippingService->getOrdersToShip(new \DateTime('yesterday'));
        $this->assertInstanceOf(OrdersToShipResponse::class, $response);
    }

    public function testGetOrdersToShipWithoutArguments()
    {
        $response = $this->shippingService->getOrdersToShip();
        $this->assertInstanceOf(OrdersToShipResponse::class, $response);
    }

    public function testCancelShipments()
    {
        $this->expectException(NoSuchBarcodeException::class);
        $response = $this->shippingService->cancelShipments([
            new CancelShipmentType('orderReference', 'barcode'),
        ]);
        $this->assertInstanceOf(CancelShipmentsResponse::class, $response);
    }

    public function testGetShippingOptions()
    {
        $response = $this->shippingService->getShippingOptions(
            'ET171',
            'NL',
            new DateRangeType(new \DateTime('now'), new \DateTime('+2 weeks')),
            '5121SW',
            false
        );
        $this->assertInstanceOf(ShippingOptionResponse::class, $response);
    }
}
