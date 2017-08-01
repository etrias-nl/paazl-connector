<?php
/**
 * Created by PhpStorm.
 * User: cprinse
 * Date: 27-7-17
 * Time: 15:43
 */

namespace Tests\Etrias\PaazlConnector\Functional\Services;


use Etrias\PaazlConnector\Client\PaazlClientInterface;
use Etrias\PaazlConnector\ExceptionMap;
use Etrias\PaazlConnector\Exceptions\AmbiguousDeliveryEstimateRequestException;
use Etrias\PaazlConnector\Exceptions\CannotCancelPickupException;
use Etrias\PaazlConnector\Exceptions\DeliveryDateModuleInactiveException;
use Etrias\PaazlConnector\Exceptions\DistributorException;
use Etrias\PaazlConnector\Exceptions\IncorrectAssuredAmountException;
use Etrias\PaazlConnector\Exceptions\IncorrectHashException;
use Etrias\PaazlConnector\Exceptions\IncorrectMaximumLabelAmountException;
use Etrias\PaazlConnector\Exceptions\IncorrectNotificationServiceException;
use Etrias\PaazlConnector\Exceptions\IncorrectZipCodeHouseNumberException;
use Etrias\PaazlConnector\Exceptions\InvalidCustomsValueException;
use Etrias\PaazlConnector\Exceptions\InvalidDateException;
use Etrias\PaazlConnector\Exceptions\InvalidDateRangeException;
use Etrias\PaazlConnector\Exceptions\InvalidDestinationException;
use Etrias\PaazlConnector\Exceptions\InvalidDistributorException;
use Etrias\PaazlConnector\Exceptions\InvalidLicenseKeyException;
use Etrias\PaazlConnector\Exceptions\InvalidOrMissingChangedSinceDateException;
use Etrias\PaazlConnector\Exceptions\InvalidOrMissingPickupWindowException;
use Etrias\PaazlConnector\Exceptions\InvalidOrMissingServicePointAccountNumberException;
use Etrias\PaazlConnector\Exceptions\InvalidOrMissingServicePointCodeException;
use Etrias\PaazlConnector\Exceptions\InvalidOrMissingShippingOptionException;
use Etrias\PaazlConnector\Exceptions\InvalidProductDefinitionException;
use Etrias\PaazlConnector\Exceptions\LabelAlreadyGeneratedException;
use Etrias\PaazlConnector\Exceptions\MissingAssuredAmountException;
use Etrias\PaazlConnector\Exceptions\MissingBarcodeException;
use Etrias\PaazlConnector\Exceptions\MissingDescriptionException;
use Etrias\PaazlConnector\Exceptions\MissingEmailException;
use Etrias\PaazlConnector\Exceptions\MissingParameterException;
use Etrias\PaazlConnector\Exceptions\MissingPermissionException;
use Etrias\PaazlConnector\Exceptions\MissingTelephoneNumberDPDException;
use Etrias\PaazlConnector\Exceptions\NoCheckoutSessionAvailableException;
use Etrias\PaazlConnector\Exceptions\NoCompatibleOpenShipmentBatchAvailableException;
use Etrias\PaazlConnector\Exceptions\NoDeliveryEstimatesAvailableException;
use Etrias\PaazlConnector\Exceptions\NoPackageCountForPackageContentException;
use Etrias\PaazlConnector\Exceptions\NoPickupRequestOptionsAvailableException;
use Etrias\PaazlConnector\Exceptions\NoShippingOptionsAvailableAfterFilterException;
use Etrias\PaazlConnector\Exceptions\NoShippingOptionsAvailableException;
use Etrias\PaazlConnector\Exceptions\NoSuchBarcodeException;
use Etrias\PaazlConnector\Exceptions\NoSuchDistributorException;
use Etrias\PaazlConnector\Exceptions\NoSuchPickupRequestException;
use Etrias\PaazlConnector\Exceptions\NoSuchPickupRequestOptionException;
use Etrias\PaazlConnector\Exceptions\NoSuchShipmentBatchException;
use Etrias\PaazlConnector\Exceptions\NotAvailableProofOfDeliveryDocumentException;
use Etrias\PaazlConnector\Exceptions\NoTotalAmountException;
use Etrias\PaazlConnector\Exceptions\OrderCannotBeChangedException;
use Etrias\PaazlConnector\Exceptions\OrderChangedByConcurrentRequestException;
use Etrias\PaazlConnector\Exceptions\OrderContainsErrorsException;
use Etrias\PaazlConnector\Exceptions\PaazlException;
use Etrias\PaazlConnector\Exceptions\PickupContainsErrorsException;
use Etrias\PaazlConnector\Exceptions\ReferenceAlreadyExistsException;
use Etrias\PaazlConnector\Exceptions\ShipmentBatchAlreadyClosedException;
use Etrias\PaazlConnector\Exceptions\TotalAmountWrongFormatException;
use Etrias\PaazlConnector\Exceptions\UnknownCountryCodeException;
use Etrias\PaazlConnector\Exceptions\UnknownReferenceException;
use Etrias\PaazlConnector\Exceptions\UnknownStatusException;
use Etrias\PaazlConnector\Exceptions\UnknownWebShopIdException;
use Etrias\PaazlConnector\Exceptions\UnsupportedDatePreferenceException;
use Etrias\PaazlConnector\Exceptions\UnsupportedOperationException;
use Etrias\PaazlConnector\Exceptions\UpstreamServerException;
use Etrias\PaazlConnector\Exceptions\WeightIsZeroException;
use Etrias\PaazlConnector\GuzzleSoapClient;
use Etrias\PaazlConnector\Result\PaazlResultInterface;
use Etrias\PaazlConnector\Services\BatchService;
use Etrias\PaazlConnector\Services\ListService;
use Etrias\PaazlConnector\Services\SecurityService;
use Etrias\PaazlConnector\Services\StoresService;
use Etrias\PaazlConnector\SoapTypes\AddressResponse;
use Etrias\PaazlConnector\SoapTypes\AddressType;
use Etrias\PaazlConnector\SoapTypes\BatchStatusResponse;
use Etrias\PaazlConnector\SoapTypes\BusinessHoursType;
use Etrias\PaazlConnector\SoapTypes\ChangeStoresRequestType;
use Etrias\PaazlConnector\SoapTypes\ChangeStoresResponseType;
use Etrias\PaazlConnector\SoapTypes\CloseBatchResponse;
use Etrias\PaazlConnector\SoapTypes\CoordinatesType;
use Etrias\PaazlConnector\SoapTypes\DeleteStoresResponse;
use Etrias\PaazlConnector\SoapTypes\DeliveryEstimateResponse;
use Etrias\PaazlConnector\SoapTypes\ErrorType;
use Etrias\PaazlConnector\SoapTypes\ListOpenBatchesResponse;
use Etrias\PaazlConnector\SoapTypes\ListStoresResponse;
use Etrias\PaazlConnector\SoapTypes\OpenBatchResponse;
use Etrias\PaazlConnector\SoapTypes\RateResponse;
use Etrias\PaazlConnector\SoapTypes\ServicePointsResponse;
use Etrias\PaazlConnector\SoapTypes\StoreDetailsType;
use GuzzleHttp\Client;
use Phpro\SoapClient\ClientBuilder;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\Soap\Handler\GuzzleHandle;
use Phpro\SoapClient\Type\MixedResult;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use PHPUnit\Framework\TestCase;
use SoapClient;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class GuzzleSoapClientTest extends TestCase
{

    public function testMagicCall()
    {
        $client = $this->getMockBuilder(GuzzleSoapClient::class)
            ->setMethods(['call', 'processResponse'])
            ->disableOriginalConstructor()
            ->getMock();

        $resultMock = $this->getMockForAbstractClass(PaazlResultInterface::class);
        $client->expects($this->once())
            ->method('call')
            ->willReturn($resultMock);
        $client->expects($this->once())
            ->method('processResponse')
            ->willReturn($resultMock);

        $requestMock = $this->getMockForAbstractClass(RequestInterface::class);

        $response = $client->__call('functionName', [$requestMock]);
        $this->assertSame($resultMock, $response);
    }

    public function testMagicCallWithMixedResult()
    {
        $client = $this->getMockBuilder(GuzzleSoapClient::class)
            ->setMethods(['call', 'processResponse'])
            ->disableOriginalConstructor()
            ->getMock();

        $innerResultMock = $this->getMockForAbstractClass(PaazlResultInterface::class);

        $resultMock = $this->getMockBuilder(MixedResult::class)
            ->disableOriginalConstructor()
            ->setMethods(['getResult'])
            ->getMock();
        $resultMock->expects($this->once())
            ->method('getResult')
            ->willReturn($innerResultMock);

        $client->expects($this->once())
            ->method('call')
            ->willReturn($resultMock);
        $client->expects($this->once())
            ->method('processResponse')
            ->willReturn($resultMock);

        $requestMock = $this->getMockForAbstractClass(RequestInterface::class);

        $response = $client->__call('functionName', [$requestMock]);
        $this->assertSame($resultMock, $response);
    }

    public function testSetAndGetWebShopId()
    {
        $soapclient = $this->getMockBuilder(SoapClient::class)
            ->disableOriginalConstructor()
            ->getMock();
        $dispatcher = $this->getMockBuilder(EventDispatcherInterface::class)->getMock();

        $client = new GuzzleSoapClient($soapclient, $dispatcher);

        $webshopId = 'webshop_id_'.rand();
        $client->setWebShopId($webshopId);
        $this->assertEquals($webshopId, $client->getWebShopId());
    }

    public function testSetAndGetPassword()
    {
        $soapclient = $this->getMockBuilder(SoapClient::class)
            ->disableOriginalConstructor()
            ->getMock();
        $dispatcher = $this->getMockBuilder(EventDispatcherInterface::class)->getMock();

        $client = new GuzzleSoapClient($soapclient, $dispatcher);

        $password = 'password_'.rand();
        $client->setPassword($password);
        $this->assertEquals($password, $client->getPassword());
    }

    public function testProcessResponse()
    {
        $soapclient = $this->getMockBuilder(SoapClient::class)
            ->disableOriginalConstructor()
            ->getMock();
        $dispatcher = $this->getMockBuilder(EventDispatcherInterface::class)->getMock();

        $client = new GuzzleSoapClient($soapclient, $dispatcher);

        $response = $this->getMockForAbstractClass(PaazlResultInterface::class);

        $this->assertEquals($response, $client->processResponse($response));


    }

    public function testProcessResponseWithError()
    {
        /** @var SoapClient|\PHPUnit_Framework_MockObject_MockObject $soapclient */
        $soapclient = $this->getMockBuilder(SoapClient::class)
            ->disableOriginalConstructor()
            ->getMock();

        /** @var EventDispatcherInterface|\PHPUnit_Framework_MockObject_MockObject $dispatcher */
        $dispatcher = $this->getMockBuilder(EventDispatcherInterface::class)->getMock();

        $client = new GuzzleSoapClient($soapclient, $dispatcher);

        /** @var PaazlResultInterface|\PHPUnit_Framework_MockObject_MockObject $response */
        $response = $this->getMockForAbstractClass(PaazlResultInterface::class);

        /** @var ErrorType|\PHPUnit_Framework_MockObject_MockObject $error */
        $error = $this->getMockBuilder(ErrorType::class)
            ->disableOriginalConstructor()
            ->getMock();

        $error->expects($this->once())
            ->method('getCode')
            ->willReturn(1000);

        $response->expects($this->atLeastOnce())
            ->method('getError')
            ->willReturn($error);

        $this->expectException(PaazlException::class);
        $client->processResponse($response);
    }
}
