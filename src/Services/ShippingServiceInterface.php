<?php
/**
 * Created by PhpStorm.
 * User: cprinse
 * Date: 7-8-17
 * Time: 16:40
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
     * @param null $targetWebShop
     *
     * @return OrdersToShipResponse
     */
    public function getOrdersToShip(DateTime $date = null, $targetWebShop = null);

    /**
     * @param CancelShipmentType[] $barCodes
     * @param null $targetWebShop
     *
     * @return CancelShipmentsResponse
     */
    public function cancelShipments(array $barCodes, $targetWebShop = null);

    /**
     * @param $orderReference
     * @param string $country
     * @param DateRangeType|null $deliveryDateRange
     * @param null $postcode
     * @param bool $extendedDeliveryDateDetails
     * @param null $shippingOption
     * @param Source[] $sources
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
