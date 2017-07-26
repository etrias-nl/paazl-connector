<?php
/**
 * Created by PhpStorm.
 * User: heiligbrood
 * Date: 26-07-17
 * Time: 20:03
 */

namespace Etrias\PaazlConnector\Service;


use Etrias\PaazlConnector\SoapClient;

class SecurityService implements SecurityServiceInterface
{
    /**
     * @var SoapClient
     */
    protected $soapClient;

    /**
     * SecurityService constructor.
     * @param SoapClient $soapClient
     */
    public function __construct(SoapClient $soapClient)
    {
        $this->soapClient = $soapClient;
    }

    /**
     * @inheritdoc
     */
    public function getHash($input)
    {
        return sha1($this->soapClient->getWebShopId().$this->soapClient->getPassword().$input);
    }

}