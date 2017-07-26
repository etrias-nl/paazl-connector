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

namespace Etrias\PaazlConnector\Processor;

use Etrias\PaazlConnector\ExceptionMap;
use Etrias\PaazlConnector\Exceptions\PaazlException;
use Etrias\PaazlConnector\SoapClient;
use WsdlToPhp\PackageBase\AbstractStructBase;

trait Processor
{
    /**
     * @param $response
     * @param SoapClient $soapClient
     * @return mixed
     * @throws PaazlException
     */
    public function processResponse($response, SoapClient $soapClient)
    {
        if ($response === false) {
            $errors = $soapClient->getLastError();
            throw end($errors);
        }

        if ($response->getError()) {
            $exceptionName = ExceptionMap::getException($response->getError()->getCode());
            throw new $exceptionName();
        }

        if (!($response instanceof AbstractStructBase)) {
            throw new PaazlException('Response is not a AbstructStructBase class');
        }

        return $response;
    }
}
