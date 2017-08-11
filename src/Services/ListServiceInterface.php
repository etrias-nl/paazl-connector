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
     * @param string      $orderReference
     * @param string      $zipCode
     * @param string      $houseNumber
     * @param string|null $addition
     * @param int|null    $targetWebShop
     *
     * @return AddressResponse
     */
    public function getAddress($orderReference, $zipCode, $houseNumber, $addition = null, $targetWebShop = null);

    /**
     * @param string      $orderReference
     * @param float       $weight
     * @param float       $value
     * @param string      $valueCurrency
     * @param string      $consigneeCountry
     * @param string      $consigneeCity
     * @param string      $consigneePostcode
     * @param string|null $shippingOption
     * @param string|null $senderCountry
     * @param string|null $senderCity
     * @param string|null $senderPostcode
     * @param int|null    $targetWebShop
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
     * @param string      $orderReference
     * @param string|null $country
     * @param string|null $postalCode
     * @param string|null $shippingOption
     * @param int|null    $targetWebShop
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
     * @param string|null          $country
     * @param string|null          $postcode
     * @param CoordinatesType|null $southWest
     * @param CoordinatesType|null $northEast
     * @param string|null          $limit
     * @param string|null          $shippingOption
     * @param string|null          $evening
     * @param string|null          $weekend
     * @param int|null             $targetWebShop
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
