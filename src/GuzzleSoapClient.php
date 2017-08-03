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
use Etrias\PaazlConnector\Result\PaazlResultInterface;
use Etrias\PaazlConnector\SoapTypes\AddressRequest;
use Etrias\PaazlConnector\SoapTypes\AddressResponse;
use Phpro\SoapClient\Client;
use Phpro\SoapClient\Type\MixedResult;

/**
 * Class SoapClient.
 *
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

    public function __call($name, $arguments)
    {
        $response = $this->call($name, $arguments[0]);

        if ($response instanceof MixedResult) {
            $response = $response->getResult();
        }

        return $this->processResponse($response);
    }

    /**
     * {@inheritdoc}
     */
    public function getWebShopId()
    {
        return $this->webShopId;
    }

    /**
     * {@inheritdoc}
     */
    public function setWebShopId(string $webShopId)
    {
        $this->webShopId = $webShopId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * {@inheritdoc}
     */
    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @param PaazlResultInterface $response
     *
     * @throws PaazlException
     *
     * @return PaazlResultInterface
     */
    public function processResponse(PaazlResultInterface $response)
    {
        if ($response->getError()) {
            $exceptionName = ExceptionMap::getException($response->getError()->getCode());
            throw new $exceptionName(
                $response->getError()->getMessage(),
                $response->getError()->getCode()
                );
        }

        return $response;
    }
}
