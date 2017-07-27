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
use Etrias\PaazlConnector\Processor\Processor;
use Etrias\PaazlConnector\ServiceType\Service as GeneralServiceType;
use Etrias\PaazlConnector\StructType\CancelShipmentsRequest;
use Etrias\PaazlConnector\StructType\CancelShipmentsResponse;
use Etrias\PaazlConnector\StructType\DateRangeType;
use Etrias\PaazlConnector\StructType\ExistingLabelType;
use Etrias\PaazlConnector\StructType\OrdersToShipRequest;
use Etrias\PaazlConnector\StructType\OrdersToShipResponse;
use Etrias\PaazlConnector\StructType\ShippingOptionRequest;
use Etrias\PaazlConnector\StructType\ShippingOptionResponse;
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
            $this->securityService->getHash($date->format('Ymd')),
            $this->generalServiceType->getWebShopId(),
            $targetWebShop,
            $date->format('Y-m-d')
        );

        $response = $this->generalServiceType->ordersToShip($request);

        return $this->processResponse($response, $this->generalServiceType);
    }

    /**
     * @param array $barCodes      [$orderReference => $barcode]
     * @param null  $targetWebShop
     *
     * @return CancelShipmentsResponse
     */
    public function cancelShipments(array $barCodes, $targetWebShop = null)
    {
        $labels = [];

        foreach ($barCodes as $orderReference => $barCode) {
            $labels[] = new ExistingLabelType(
                $this->securityService->getHash($orderReference),
                $targetWebShop,
                $orderReference,
                $barCode
            );
        }

        $request = new CancelShipmentsRequest(
            $this->generalServiceType->getWebShopId(),
            $labels
        );

        $response = $this->generalServiceType->cancelShipments($request);

        return $this->processResponse($response, $this->generalServiceType);
    }

    /**
     * @param $orderReference
     * @param DateRangeType|null $deliveryDateRange
     * @param string             $country
     * @param null               $postcode
     * @param bool               $extendedDeliveryDateDetails
     * @param null               $shippingOption
     * @param null               $deliveryEstimate
     * @param $targetWebShop
     *
     * @return ShippingOptionResponse
     */
    public function getShippingOptions(
        $orderReference,
        $country,
        DateRangeType $deliveryDateRange = null,
        $postcode,
        $extendedDeliveryDateDetails,
        $shippingOption,
        $deliveryEstimate,
        $targetWebShop
    ) {
        $request = new ShippingOptionRequest(
            $this->securityService->getHash($orderReference),
            $this->generalServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $postcode,
            $country,
            null,
            null,
            $extendedDeliveryDateDetails,
            $shippingOption,
            $deliveryEstimate,
            $deliveryDateRange
        );

        $response = $this->generalServiceType->shippingOption($request);

        return $this->processResponse($response, $this->generalServiceType);
    }
}
