<?php
/**
 * Created by PhpStorm.
 * User: cprinse
 * Date: 25-7-17
 * Time: 9:58
 */

namespace Etrias\PaazlConnector\Processor;


use Etrias\PaazlConnector\ExceptionMap;
use Etrias\PaazlConnector\SoapClient;

trait ResponseProcessor
{
    /**
     * @param $response
     * @param SoapClient $soapClient
     * @return mixed
     */
    public function processResponse($response, SoapClient $soapClient)
    {
        if ($response === false) {
            $errors = $soapClient->getLastError();
            throw end($errors);
        }

        if ($response->getError()) {
            $exceptionName = ExceptionMap::getException($response->getError()->getCode());
            throw new $exceptionName;
        }

        return $response;
    }

}
