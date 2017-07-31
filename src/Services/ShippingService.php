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
use Etrias\PaazlConnector\Client\PaazlClientInterface;
use Etrias\PaazlConnector\SoapTypes\CancelShipmentsRequest;
use Etrias\PaazlConnector\SoapTypes\CancelShipmentsResponse;
use Etrias\PaazlConnector\SoapTypes\CancelShipmentType;
use Etrias\PaazlConnector\SoapTypes\DateRangeType;
use Etrias\PaazlConnector\SoapTypes\ExistingLabelType;
use Etrias\PaazlConnector\SoapTypes\OrdersToShipRequest;
use Etrias\PaazlConnector\SoapTypes\OrdersToShipResponse;
use Etrias\PaazlConnector\SoapTypes\ShippingOptionRequest;
use Etrias\PaazlConnector\SoapTypes\ShippingOptionResponse;
use Etrias\PaazlConnector\SoapTypes\Source;
use Etrias\PaazlConnector\SoapTypes\Sources;
use RuntimeException;

class ShippingService
{
    /**
     * @var PaazlClientInterface
     */
    protected $client;
    /**
     * @var SecurityServiceInterface
     */
    protected $security;

    /**
     * DocumentService constructor.
     *
     * @param PaazlClientInterface       $client
     * @param SecurityServiceInterface $security
     */
    public function __construct(PaazlClientInterface $client, SecurityServiceInterface $security)
    {
        $this->security = $security;
        $this->client = $client;
    }

    /**
     * @throws RuntimeException
     */
    public function generateShippingManifest()
    {
        throw new RuntimeException('Not Implemented');
    }

    /**
     * @param DateTime $date
     * @param null     $targetWebShop
     *
     * @return OrdersToShipResponse
     */
    public function getOrdersToShip(DateTime $date = null, $targetWebShop = null)
    {
        if ($date === null) {
            $date = new DateTime();
        }

        $request = new OrdersToShipRequest(
            $this->security->getHash($date->format('Ymd')),
            $this->client->getWebShopId(),
            $targetWebShop,
            $date
        );

        return $this->client->ordersToShip($request);
    }

    /**
     * @param CancelShipmentType[] $barCodes
     * @param null  $targetWebShop
     *
     * @return CancelShipmentsResponse
     */
    public function cancelShipments(array $barCodes, $targetWebShop = null)
    {
        $labels = [];

        foreach ($barCodes as $barCode) {
            $labels[] = new ExistingLabelType(
                $this->security->getHash($barCode->getOrderReference()),
                $targetWebShop,
                $barCode->getOrderReference(),
                $barCode->getBarcode()
            );
        }

        $request = new CancelShipmentsRequest(
            $this->client->getWebShopId(),
            $labels
        );

        return $this->client->cancelShipments($request);
    }

    /**
     * @param $orderReference
     * @param string $country
     * @param DateRangeType|null $deliveryDateRange
     * @param null $postcode
     * @param bool $extendedDeliveryDateDetails
     * @param null $shippingOption
     * @param Source[] $sources
     * @param $targetWebShop
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
    ) {

        $sources = new Sources($sources);

        $request = new ShippingOptionRequest(
            $this->security->getHash($orderReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $postcode,
            $country,
            null,
            null,
            $extendedDeliveryDateDetails,
            $shippingOption,
            $deliveryDateRange,
            $deliveryDateRange,
            $sources
        );

        return $this->client->shippingOption($request);
    }
}
