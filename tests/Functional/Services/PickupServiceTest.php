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

use Etrias\PaazlConnector\Exceptions\NoPickupRequestOptionsAvailableException;
use Etrias\PaazlConnector\Exceptions\NoSuchPickupRequestException;
use Etrias\PaazlConnector\Exceptions\NoSuchPickupRequestOptionException;
use Etrias\PaazlConnector\Services\PickupService;
use Etrias\PaazlConnector\SoapTypes\AddressType;

/**
 * @coversNothing
 */
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
