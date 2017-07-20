<?php

namespace Etrias\PaazlConnector;

/**
* SoapClient based on Guzzle
* @package Etrias\PaazlConnector
*/
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
* Class SoapClient
* @package RaseConnector
*/
class SoapClient extends AbstractSoapClientBase
{
    const WSDL_PRODUCTION = 'https://ost.paazl.com/parcelshipperservice/orderRequest.wsdl';
    const WSDL_STAGING = 'https://staging.paazl.com/parcelshipperservice/orderRequest.wsdl';

    const DEFAULT_SOAP_CLIENT_CLASS = '\Meng\AsyncSoap\Guzzle\SoapClient';

    /**
     * @var int
     */
    protected $webShopId;

    /**
     * @var string
     */
    protected $password;

    /**
     * Constructor
     * @uses AbstractSoapClientBase::setLastError()
     * @uses AbstractSoapClientBase::initSoapClient()
     * @param array $wsdlOptions
     * @param bool $resetSoapClient allows to disable the SoapClient redefinition
     */
    public function __construct(array $wsdlOptions = array(), $resetSoapClient = true)
    {
        $this->webShopId = $wsdlOptions[self::WSDL_LOGIN];
        $this->password = $wsdlOptions[self::WSDL_PASSWORD];

        return parent::__construct($wsdlOptions, $resetSoapClient);
    }

    /**
     * @return int
     */
    public function getWebShopId()
    {
        return $this->webShopId;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

}
