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
use Etrias\PaazlConnector\SoapTypes\AddressType;
use Etrias\PaazlConnector\SoapTypes\CancelPickupRequestResponse;
use Etrias\PaazlConnector\SoapTypes\CreatePickupRequestResponse;
use Etrias\PaazlConnector\SoapTypes\PickupRequestDetailsResponse;
use Etrias\PaazlConnector\SoapTypes\PickupRequestStatusResponse;

interface PickupServiceInterface
{
    /**
     * @param $internalReference
     * @param null $pickupCountry
     * @param null $deliveryCountry
     * @param null $targetWebShop
     *
     * @return PickupRequestDetailsResponse
     */
    public function getPickupRequestOptions(
        $internalReference,
        $pickupCountry = null,
        $deliveryCountry = null,
        $targetWebShop = null
    );

    /**
     * @param $internalReference
     * @param $pickupRequestOption
     * @param $pieceCount
     * @param DateTime $pickupWindowStart
     * @param DateTime $pickupWindowEnd
     * @param $pickupCompanyName
     * @param $pickupContactName
     * @param $pickupName
     * @param AddressType $pickupAddress
     * @param $pickupPhoneNumber
     * @param null             $pickupEmailAddress
     * @param AddressType|null $deliveryAddress
     * @param null             $deliveryEmailAddress
     * @param null             $additionalInstruction
     * @param null             $orderReference
     * @param null             $contract
     * @param null             $targetWebShop
     *
     * @return CreatePickupRequestResponse
     */
    public function createPickupRequest(
        $internalReference,
        $pickupRequestOption,
        $pieceCount,
        DateTime $pickupWindowStart,
        DateTime $pickupWindowEnd,
        $pickupCompanyName,
        $pickupContactName,
        $pickupName,
        AddressType $pickupAddress,
        $pickupPhoneNumber,
        $pickupEmailAddress = null,
        AddressType $deliveryAddress = null,
        $deliveryEmailAddress = null,
        $additionalInstruction = null,
        $orderReference = null,
        $contract = null,
        $targetWebShop = null
    );

    /**
     * @param $internalReference
     * @param $distributor
     * @param $externalReference
     * @param null $targetWebShop
     *
     * @return PickupRequestDetailsResponse
     */
    public function getPickupRequestDetails(
        $internalReference,
        $distributor,
        $externalReference,
        $targetWebShop = null
    );

    /**
     * @param $internalReference
     * @param $distributor
     * @param $externalReference
     * @param null $targetWebShop
     *
     * @return PickupRequestStatusResponse
     */
    public function getPickupRequestStatus($internalReference, $distributor, $externalReference, $targetWebShop = null);

    /**
     * @param $internalReference
     * @param $distributor
     * @param $externalReference
     * @param null $targetWebShop
     *
     * @return CancelPickupRequestResponse
     */
    public function cancelPickupRequest($internalReference, $distributor, $externalReference, $targetWebShop = null);
}
