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

use Etrias\PaazlConnector\Client\PaazlClientInterface;
use Etrias\PaazlConnector\SoapTypes\AddressRequest;
use Etrias\PaazlConnector\SoapTypes\AddressResponse;
use Etrias\PaazlConnector\SoapTypes\CoordinatesType;
use Etrias\PaazlConnector\SoapTypes\DeliveryEstimateRequest;
use Etrias\PaazlConnector\SoapTypes\DeliveryEstimateResponse;
use Etrias\PaazlConnector\SoapTypes\RateRequest;
use Etrias\PaazlConnector\SoapTypes\RateResponse;
use Etrias\PaazlConnector\SoapTypes\ServicePointsRequest;
use Etrias\PaazlConnector\SoapTypes\ServicePointsResponse;
use RuntimeException;

class ListService implements ListServiceInterface
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
     * @param PaazlClientInterface     $client
     * @param SecurityServiceInterface $security
     */
    public function __construct(PaazlClientInterface $client, SecurityServiceInterface $security)
    {
        $this->security = $security;
        $this->client = $client;
    }

    /**
     * @inheritdoc
     */
    public function getAddress($orderReference, $zipCode, $houseNumber, $addition = null, $targetWebShop = null)
    {
        $request = new AddressRequest(
            $this->security->getHash($orderReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $zipCode,
            $houseNumber,
            $addition
        );

        return $this->client->address($request);
    }

    /**
     * @inheritdoc
     */
    public function getDeliveryEstimate(
        $orderReference,
        $weight,
        $value,
        $valueCurrency,
        $consigneeCountry,
        $consigneeCity,
        $consigneePostcode,
        $shippingOption = null,
        $senderCountry = null,
        $senderCity = null,
        $senderPostcode = null,
        $targetWebShop = null)
    {
        $request = new DeliveryEstimateRequest(
            $this->security->getHash($orderReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $shippingOption,
            $weight,
            $value,
            $valueCurrency,
            $senderCountry,
            $senderCity,
            $senderPostcode,
            $consigneeCountry,
            $consigneeCity,
            $consigneePostcode
        );

        return $this->client->deliveryEstimate($request);
    }

    /**
     * @inheritdoc
     */
    public function getRates($orderReference, $country = null, $postalCode = null, $shippingOption = null, $targetWebShop = null)
    {
        $request = new RateRequest(
            $this->security->getHash($orderReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $country,
            $postalCode,
            $shippingOption
        );

        return $this->client->rate($request);
    }

    /**
     * @inheritdoc
     */
    public function getServicePoints(
        $country = null,
        $postcode = null,
        CoordinatesType $southWest = null,
        CoordinatesType $northEast = null,
        $limit = null,
        $shippingOption = null,
        $evening = null,
        $weekend = null,
        $targetWebShop = null
    ) {
        $hashInput = '';

        if ($country !== null) {
            $hashInput .= $country;
        }

        if ($postcode !== null) {
            $hashInput .= $postcode;
        }

        if ($southWest !== null) {
            throw new RuntimeException('Not yet implemented');
        }

        if ($northEast !== null) {
            throw new RuntimeException('Not yet implemented');
        }

        $request = new ServicePointsRequest(
            $this->security->getHash($hashInput),
            $this->client->getWebShopId(),
            $targetWebShop,
            $shippingOption,
            $evening,
            $weekend,
            $country,
            $postcode,
            $limit,
            $southWest,
            $northEast
        );

        return $this->client->servicePoints($request);
    }
}
