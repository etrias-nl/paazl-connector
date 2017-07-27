<?php
/**
 * Created by PhpStorm.
 * User: cprinse
 * Date: 27-7-17
 * Time: 15:43
 */

namespace Tests\Etrias\PaazlConnector\Functional\Services;


use Etrias\PaazlConnector\Client\PaazlClientInterface;
use Etrias\PaazlConnector\GuzzleSoapClient;
use Etrias\PaazlConnector\Services\ListService;
use Etrias\PaazlConnector\Services\SecurityService;
use Etrias\PaazlConnector\SoapTypes\AddressResponse;
use Etrias\PaazlConnector\SoapTypes\CoordinatesType;
use Etrias\PaazlConnector\SoapTypes\DeliveryEstimateResponse;
use Etrias\PaazlConnector\SoapTypes\RateResponse;
use Etrias\PaazlConnector\SoapTypes\ServicePointsResponse;
use GuzzleHttp\Client;
use Phpro\SoapClient\ClientBuilder;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\Soap\Handler\GuzzleHandle;
use Phpro\SoapClient\Type\ResultInterface;
use PHPUnit\Framework\TestCase;

abstract class AbstractServiceTest extends TestCase
{
    /** @var PaazlClientInterface */
    protected $soapClient;

    /** @var  SecurityService */
    protected $securityService;

    public function setUp()
    {
        $guzzleClient = new Client();

        $clientFactory = new ClientFactory(GuzzleSoapClient::class);
        $soapOptions = [
            'trace' => true
        ];

        $clientBuilder = new ClientBuilder($clientFactory, PaazlClientInterface::WSDL_STAGING, $soapOptions);
        $clientBuilder->withClassMaps(require __DIR__.'/../../../src/ClassMapCollection.php');
        $clientBuilder->withHandler(GuzzleHandle::createForClient($guzzleClient));

        $this->soapClient = $clientBuilder->build();
        $this->soapClient
            ->setWebShopId(WEB_SHOP_ID)
            ->setPassword(PASSWORD);

        $this->securityService = new SecurityService($this->soapClient);
    }
}
