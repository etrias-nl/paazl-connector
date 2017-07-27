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

namespace Etrias\PaazlConnector;

/*
* SoapClient based on Guzzle
* @package Etrias\PaazlConnector
*/
use Etrias\PaazlConnector\Client\PaazlClientInterface;
use Etrias\PaazlConnector\Exceptions\PaazlException;
use Etrias\PaazlConnector\SoapTypes\AddressRequest;
use Etrias\PaazlConnector\SoapTypes\AddressResponse;
use Phpro\SoapClient\Client;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Psr\Http\Message\ResponseInterface;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * Class SoapClient.
 * @method AddressResponse address (AddressRequest $addressRequest)
 */
class GuzzleSoapClient extends Client implements PaazlClientInterface
{
    /**
     * @var string
     */
    private $webShopId;

    /**
     * @var string
     */
    private $password;

    public function __call($name, $arguments) {
        $response = $this->call($name, $arguments[0]);

        return $this->processResponse($response);
    }

    public function getWebShopId(): string
    {
        return $this->webShopId;
    }

    public function setWebShopId(string $webShopId): PaazlClientInterface
    {
        $this->webShopId = $webShopId;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): PaazlClientInterface
    {
        $this->password = $password;

        return $this;
    }

    protected function processResponse(ResultInterface $response)
    {
        if ($response->getError()) {
            $exceptionName = ExceptionMap::getException($response->getError()->getCode());
            throw new $exceptionName();
        }

        if (!($response instanceof ResultInterface)) {
            throw new PaazlException('Response is not a ResultInterface');
        }

        return $response;
    }
}
