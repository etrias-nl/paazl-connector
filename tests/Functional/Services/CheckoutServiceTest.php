<?php
/**
 * Created by PhpStorm.
 * User: cprinse
 * Date: 27-7-17
 * Time: 15:43
 */

namespace Tests\Etrias\PaazlConnector\Functional\Services;


use Etrias\PaazlConnector\Client\PaazlClientInterface;
use Etrias\PaazlConnector\Exceptions\MissingPermissionException;
use Etrias\PaazlConnector\GuzzleSoapClient;
use Etrias\PaazlConnector\Services\BatchService;
use Etrias\PaazlConnector\Services\CheckoutService;
use Etrias\PaazlConnector\Services\ListService;
use Etrias\PaazlConnector\Services\SecurityService;
use Etrias\PaazlConnector\SoapTypes\AddressResponse;
use Etrias\PaazlConnector\SoapTypes\BatchStatusResponse;
use Etrias\PaazlConnector\SoapTypes\CheckoutResponse;
use Etrias\PaazlConnector\SoapTypes\CloseBatchResponse;
use Etrias\PaazlConnector\SoapTypes\CoordinatesType;
use Etrias\PaazlConnector\SoapTypes\DeliveryEstimateResponse;
use Etrias\PaazlConnector\SoapTypes\OpenBatchResponse;
use Etrias\PaazlConnector\SoapTypes\RateResponse;
use Etrias\PaazlConnector\SoapTypes\ServicePointsResponse;
use GuzzleHttp\Client;
use Phpro\SoapClient\ClientBuilder;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\Soap\Handler\GuzzleHandle;

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
