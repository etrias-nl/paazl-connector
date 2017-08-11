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

namespace Etrias\PaazlConnector\Services;

use Etrias\PaazlConnector\SoapTypes\CheckoutResponse;
use Etrias\PaazlConnector\SoapTypes\CheckoutStatusResponse;

interface CheckoutServiceInterface
{
    /**
     * @param string   $orderReference
     * @param int|null $targetWebShop
     *
     * @return CheckoutResponse
     */
    public function getCheckoutUrl($orderReference, $targetWebShop = null);

    /**
     * @param string   $orderReference
     * @param int|null $targetWebShop
     *
     * @return CheckoutStatusResponse
     */
    public function getCheckoutStatus($orderReference, $targetWebShop = null);
}
