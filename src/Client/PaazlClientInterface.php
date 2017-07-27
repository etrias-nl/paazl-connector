<?php
/**
 * Created by PhpStorm.
 * User: cprinse
 * Date: 27-7-17
 * Time: 12:34
 */

namespace Etrias\PaazlConnector\Client;

use Etrias\PaazlConnector\SoapTypes\AddressRequest;
use Etrias\PaazlConnector\SoapTypes\AddressResponse;

/**
 * Interface PaazlClientInterface
 * @method AddressResponse address (AddressRequest $addressRequest)
 */
interface PaazlClientInterface
{
    const WSDL_PRODUCTION = 'https://ost.paazl.com/parcelshipperservice/orderRequest.wsdl';
    const WSDL_STAGING = 'https://staging.paazl.com/parcelshipperservice/orderRequest.wsdl';


    public function setWebShopId(string $webShopId): PaazlClientInterface;

    public function setPassword(string $password): PaazlClientInterface;

    public function getWebShopId() :string;

    public function getPassword(): string;
}
