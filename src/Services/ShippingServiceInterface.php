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

use DateTime;
use Etrias\PaazlConnector\SoapTypes\CancelShipmentsResponse;
use Etrias\PaazlConnector\SoapTypes\CancelShipmentType;
use Etrias\PaazlConnector\SoapTypes\DateRangeType;
use Etrias\PaazlConnector\SoapTypes\OrdersToShipResponse;
use Etrias\PaazlConnector\SoapTypes\ShippingOptionResponse;
use Etrias\PaazlConnector\SoapTypes\Source;
use RuntimeException;

interface ShippingServiceInterface
{
    /**
     * @throws RuntimeException
     */
    public function generateShippingManifest();

    /**
     * @param DateTime $date
     * @param null     $targetWebShop
     *
     * @return OrdersToShipResponse
     */
    public function getOrdersToShip(DateTime $date = null, $targetWebShop = null);

    /**
     * @param CancelShipmentType[] $barCodes
     * @param null                 $targetWebShop
     *
     * @return CancelShipmentsResponse
     */
    public function cancelShipments(array $barCodes, $targetWebShop = null);

    /**
     * @param $orderReference
     * @param string             $country
     * @param DateRangeType|null $deliveryDateRange
     * @param null               $postcode
     * @param bool               $extendedDeliveryDateDetails
     * @param null               $shippingOption
     * @param Source[]           $sources
     * @param $targetWebShop
     *
     * @return ShippingOptionResponse
     */
    public function getShippingOptions(
        $orderReference,
        $country,
        DateRangeType $deliveryDateRange = null,
        $postcode = null,
        $extendedDeliveryDateDetails = null,
        $shippingOption = null,
        array $sources = [],
        $targetWebShop = null
    );
}
