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
use Etrias\PaazlConnector\SoapTypes\AddressType;
use Etrias\PaazlConnector\SoapTypes\CancelPickupRequestResponse;
use Etrias\PaazlConnector\SoapTypes\CreatePickupRequestRequest;
use Etrias\PaazlConnector\SoapTypes\CreatePickupRequestResponse;
use Etrias\PaazlConnector\SoapTypes\PickupRequestDetailsResponse;
use Etrias\PaazlConnector\SoapTypes\PickupRequestOptionsRequest;
use Etrias\PaazlConnector\SoapTypes\PickupRequestQueryType;
use Etrias\PaazlConnector\SoapTypes\PickupRequestStatusResponse;
use InvalidArgumentException;

class PickupService
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
     * @param $internalReference
     * @param null $pickupCountry
     * @param null $deliveryCountry
     * @param null $targetWebShop
     *
     * @return PickupRequestDetailsResponse
     */
    public function getPickupRequestOptions($internalReference, $pickupCountry = null, $deliveryCountry = null, $targetWebShop = null)
    {
        $request = new PickupRequestOptionsRequest(
            $this->security->getHash($internalReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $internalReference,
            $pickupCountry,
            $deliveryCountry
        );

        return $this->client->pickupRequestOptions($request);
    }

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
        $pickupCompanyName = null,
        $pickupContactName = null,
        $pickupName = null,
        AddressType $pickupAddress,
        $pickupPhoneNumber,
        $pickupEmailAddress = null,
        AddressType $deliveryAddress = null,
        $deliveryEmailAddress = null,
        $additionalInstruction = null,
        $orderReference = null,
        $contract = null,
        $targetWebShop = null
    ) {
        if ($pickupWindowStart->format('Y-m-d') !== $pickupWindowEnd->format('Y-m-d')) {
            throw new InvalidArgumentException('pickupWindowStart and pickupWindowEnd should be on the same day');
        }

        $request = new CreatePickupRequestRequest(
            $this->security->getHash($internalReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $internalReference,
            $contract,
            $pickupRequestOption,
            $orderReference,
            $pieceCount,
            $pickupWindowStart,
            $pickupWindowStart->format('H:i:s'),
            $pickupWindowEnd->format('H:i:s'),
            $pickupCompanyName,
            $pickupContactName,
            $pickupName,
            $pickupAddress,
            $pickupPhoneNumber,
            $pickupEmailAddress,
            $deliveryAddress,
            $deliveryEmailAddress,
            $additionalInstruction
        );

        return $this->client->createPickupRequest($request);
    }

    /**
     * @param $internalReference
     * @param $distributor
     * @param $externalReference
     * @param null $targetWebShop
     *
     * @return PickupRequestDetailsResponse
     */
    public function getPickupRequestDetails($internalReference, $distributor, $externalReference, $targetWebShop = null)
    {
        $request = new PickupRequestQueryType(
            $this->security->getHash($internalReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $internalReference,
            $distributor,
            $externalReference
        );

        return $this->client->pickupRequestDetails($request);
    }

    /**
     * @param $internalReference
     * @param $distributor
     * @param $externalReference
     * @param null $targetWebShop
     *
     * @return PickupRequestStatusResponse
     */
    public function getPickupRequestStatus($internalReference, $distributor, $externalReference, $targetWebShop = null)
    {
        $request = new PickupRequestQueryType(
            $this->security->getHash($internalReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $internalReference,
            $distributor,
            $externalReference
        );

        return $this->client->pickupRequestStatus($request);
    }

    /**
     * @param $internalReference
     * @param $distributor
     * @param $externalReference
     * @param null $targetWebShop
     *
     * @return CancelPickupRequestResponse
     */
    public function cancelPickupRequest($internalReference, $distributor, $externalReference, $targetWebShop = null)
    {
        $request = new PickupRequestQueryType(
            $this->security->getHash($internalReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $internalReference,
            $distributor,
            $externalReference
        );

        return $this->client->cancelPickupRequest($request);
    }
}
