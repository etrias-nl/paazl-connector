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

use Etrias\PaazlConnector\SoapTypes\AddressResponse;
use Etrias\PaazlConnector\SoapTypes\CoordinatesType;
use Etrias\PaazlConnector\SoapTypes\DeliveryEstimateResponse;
use Etrias\PaazlConnector\SoapTypes\RateResponse;
use Etrias\PaazlConnector\SoapTypes\ServicePointsResponse;

interface ListServiceInterface
{
    /**
     * @param $orderReference
     * @param $zipCode
     * @param $houseNumber
     * @param null $addition
     * @param null $targetWebShop
     *
     * @return AddressResponse
     */
    public function getAddress($orderReference, $zipCode, $houseNumber, $addition = null, $targetWebShop = null);

    /**
     * @param $orderReference
     * @param $weight
     * @param $value
     * @param $valueCurrency
     * @param $consigneeCountry
     * @param $consigneeCity
     * @param $consigneePostcode
     * @param null $shippingOption
     * @param null $senderCountry
     * @param null $senderCity
     * @param null $senderPostcode
     * @param null $targetWebShop
     *
     * @return DeliveryEstimateResponse
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
        $targetWebShop = null
    );

    /**
     * @param $orderReference
     * @param null $country
     * @param null $postalCode
     * @param null $shippingOption
     * @param null $targetWebShop
     *
     * @return RateResponse
     */
    public function getRates(
        $orderReference,
        $country = null,
        $postalCode = null,
        $shippingOption = null,
        $targetWebShop = null
    );

    /**
     * @param null                 $country
     * @param null                 $postcode
     * @param CoordinatesType|null $southWest
     * @param CoordinatesType|null $northEast
     * @param null                 $limit
     * @param null                 $shippingOption
     * @param null                 $evening
     * @param null                 $weekend
     * @param null                 $targetWebShop
     *
     * @return ServicePointsResponse
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
    );
}
