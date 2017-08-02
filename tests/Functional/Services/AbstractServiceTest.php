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

use Etrias\PaazlConnector\Client\PaazlClientInterface;
use Etrias\PaazlConnector\GuzzleSoapClient;
use Etrias\PaazlConnector\Services\SecurityService;
use GuzzleHttp\Client;
use Phpro\SoapClient\ClientBuilder;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\Soap\Handler\GuzzleHandle;
use PHPUnit\Framework\TestCase;

abstract class AbstractServiceTest extends TestCase
{
    /** @var PaazlClientInterface */
    protected $soapClient;

    /** @var SecurityService */
    protected $securityService;

    public function setUp()
    {
        $guzzleClient = new Client();

        $clientFactory = new ClientFactory(GuzzleSoapClient::class);
        $soapOptions = [
            'cache_wsdl' => WSDL_CACHE_DISK,
            'trace' => true,
        ];

        $clientBuilder = new ClientBuilder($clientFactory, PaazlClientInterface::WSDL_STAGING, $soapOptions);
        $clientBuilder->withClassMaps(require __DIR__.'/../../../src/ClassMapCollection.php');
        $clientBuilder->withHandler(GuzzleHandle::createForClient($guzzleClient));

        $this->soapClient = $clientBuilder->build();
        $this->soapClient
            ->setWebShopId(getenv('WEBSHOPID'))
            ->setPassword(getenv('PASSWORD'));

        $this->securityService = new SecurityService($this->soapClient);
    }
}
