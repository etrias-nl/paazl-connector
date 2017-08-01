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

use Etrias\PaazlConnector\Exceptions\MissingPermissionException;
use Etrias\PaazlConnector\Services\CheckoutService;

/**
 * @coversNothing
 */
class CheckoutServiceTest extends AbstractServiceTest
{
    /**
     * @var CheckoutService
     */
    protected $checkoutService;

    public function setUp()
    {
        parent::setUp();
        $this->checkoutService = new CheckoutService($this->soapClient, $this->securityService);
    }

    public function testGetCheckoutUrl()
    {
        $this->expectException(MissingPermissionException::class);
        $this->checkoutService->getCheckoutUrl('ET171');
    }

    public function testGetCheckoutStatus()
    {
        $this->expectException(MissingPermissionException::class);
        $this->checkoutService->getCheckoutStatus('ET171');
    }
}
