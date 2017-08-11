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

use Etrias\PaazlConnector\Exceptions\PaazlException;
use Etrias\PaazlConnector\GuzzleSoapClient;
use Etrias\PaazlConnector\Result\PaazlResultInterface;
use Etrias\PaazlConnector\SoapTypes\ErrorType;
use Phpro\SoapClient\Type\MixedResult;
use Phpro\SoapClient\Type\RequestInterface;
use PHPUnit\Framework\TestCase;
use SoapClient;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * @coversNothing
 */
class GuzzleSoapClientTest extends TestCase
{
    public function testMagicCall()
    {
        /** @var GuzzleSoapClient|\PHPUnit_Framework_MockObject_MockObject $client */
        $client = $this->getMockBuilder(GuzzleSoapClient::class)
            ->setMethods(['call', 'processResponse'])
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();

        $resultMock = $this->getMockForAbstractClass(PaazlResultInterface::class);
        $client->expects($this->once())
            ->method('call')
            ->willReturn($resultMock);
        $client->expects($this->once())
            ->method('processResponse')
            ->willReturn($resultMock);

        $requestMock = $this->getMockForAbstractClass(RequestInterface::class);

        $response = $client->processRequest('functionName', $requestMock);
        $this->assertSame($resultMock, $response);
    }

    public function testMagicCallWithMixedResult()
    {
        /** @var GuzzleSoapClient|\PHPUnit_Framework_MockObject_MockObject $client */
        $client = $this->getMockBuilder(GuzzleSoapClient::class)
            ->setMethods(['call', 'processResponse'])
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();

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

        $response = $client->processRequest('functionName', $requestMock);
        $this->assertSame($resultMock, $response);
    }

    public function testSetAndGetWebShopId()
    {
        $soapclient = $this->getMockBuilder(SoapClient::class)
            ->disableOriginalConstructor()
            ->getMock();
        $dispatcher = $this->getMockBuilder(EventDispatcherInterface::class)->getMock();

        $client = new GuzzleSoapClient($soapclient, $dispatcher);

        $webshopId = 'webshop_id_'.random_int(0, 999);
        $client->setWebShopId($webshopId);
        $this->assertSame($webshopId, $client->getWebShopId());
    }

    public function testSetAndGetPassword()
    {
        $soapclient = $this->getMockBuilder(SoapClient::class)
            ->disableOriginalConstructor()
            ->getMock();
        $dispatcher = $this->getMockBuilder(EventDispatcherInterface::class)->getMock();

        $client = new GuzzleSoapClient($soapclient, $dispatcher);

        $password = 'password_'.random_int(0, 999);
        $client->setPassword($password);
        $this->assertSame($password, $client->getPassword());
    }

    public function testProcessResponse()
    {
        $soapclient = $this->getMockBuilder(SoapClient::class)
            ->disableOriginalConstructor()
            ->getMock();
        $dispatcher = $this->getMockBuilder(EventDispatcherInterface::class)->getMock();

        $client = new GuzzleSoapClient($soapclient, $dispatcher);

        /** @var RequestInterface|\PHPUnit_Framework_MockObject_MockObject $response */
        $request = $this->getMockForAbstractClass(RequestInterface::class);

        /** @var PaazlResultInterface|\PHPUnit_Framework_MockObject_MockObject $response */
        $response = $this->getMockForAbstractClass(PaazlResultInterface::class);

        $this->assertSame($response, $client->processResponse($request, $response));
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

        /** @var RequestInterface|\PHPUnit_Framework_MockObject_MockObject $response */
        $request = $this->getMockForAbstractClass(RequestInterface::class);

        /** @var PaazlResultInterface|\PHPUnit_Framework_MockObject_MockObject $response */
        $response = $this->getMockForAbstractClass(PaazlResultInterface::class);

        /** @var ErrorType|\PHPUnit_Framework_MockObject_MockObject $error */
        $error = $this->getMockBuilder(ErrorType::class)
            ->disableOriginalConstructor()
            ->getMock();

        $error->expects($this->exactly(2))
            ->method('getCode')
            ->willReturn(1000);

        $response->expects($this->atLeastOnce())
            ->method('getError')
            ->willReturn($error);

        $this->expectException(PaazlException::class);
        $client->processResponse($request, $response);
    }
}
