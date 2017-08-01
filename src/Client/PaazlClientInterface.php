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


    /**
     * @param string $webShopId
     * @return $this
     */
    public function setWebShopId(string $webShopId);

    /**
     * @param string $password
     * @return $this
     */
    public function setPassword(string $password);

    /**
     * @return string
     */
    public function getWebShopId();

    /**
     * @return string
     */
    public function getPassword();
}
