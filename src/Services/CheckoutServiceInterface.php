<?php
/**
 * Created by PhpStorm.
 * User: cprinse
 * Date: 7-8-17
 * Time: 14:44
 */

namespace Etrias\PaazlConnector\Services;

use Etrias\PaazlConnector\SoapTypes\CheckoutResponse;
use Etrias\PaazlConnector\SoapTypes\CheckoutStatusResponse;

interface CheckoutServiceInterface
{
    /**
     * @param $orderReference
     * @param null $targetWebShop
     *
     * @return CheckoutResponse
     */
    public function getCheckoutUrl($orderReference, $targetWebShop = null);

    /**
     * @param $orderReference
     * @param null $targetWebShop
     *
     * @return CheckoutStatusResponse
     */
    public function getCheckoutStatus($orderReference, $targetWebShop = null);
}
