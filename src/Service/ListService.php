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

namespace Etrias\PaazlConnector\Service;

use Etrias\PaazlConnector\Processor\Processor;
use Etrias\PaazlConnector\ServiceType\Service as GeneralServiceType;
use Etrias\PaazlConnector\StructType\AddressRequest;
use Etrias\PaazlConnector\StructType\AddressResponse;
use Etrias\PaazlConnector\StructType\CoordinatesType;
use Etrias\PaazlConnector\StructType\DeliveryEstimateRequest;
use Etrias\PaazlConnector\StructType\DeliveryEstimateResponse;
use Etrias\PaazlConnector\StructType\RateRequest;
use Etrias\PaazlConnector\StructType\RateResponse;
use Etrias\PaazlConnector\StructType\ServicePointsRequest;
use Etrias\PaazlConnector\StructType\ServicePointsResponse;
use RuntimeException;

class ListService
{
    use Processor;

    /**
     * @var SecurityServiceInterface
     */
    protected $securityService;
    /**
     * @var GeneralServiceType
     */
    protected $generalServiceType;

    /**
     * DocumentService constructor.
     *
     * @param GeneralServiceType       $generalServiceType
     * @param SecurityServiceInterface $securityService
     */
    public function __construct(GeneralServiceType $generalServiceType, SecurityServiceInterface $securityService)
    {
        $this->securityService = $securityService;
        $this->generalServiceType = $generalServiceType;
    }

    /**
     * @param $orderReference
     * @param $zipCode
     * @param $houseNumber
     * @param null $addition
     * @param null $targetWebShop
     *
     * @return AddressResponse
     */
    public function getAddress($orderReference, $zipCode, $houseNumber, $addition = null, $targetWebShop = null)
    {
        $request = new AddressRequest(
            $this->securityService->getHash($orderReference),
            $this->generalServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $zipCode,
            $houseNumber,
            $addition
        );

        $response = $this->generalServiceType->address($request);

        return $this->processResponse($response, $this->generalServiceType);
    }

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
        $targetWebShop = null)
    {
        $request = new DeliveryEstimateRequest(
            $this->securityService->getHash($orderReference),
            $this->generalServiceType->getWebShopId(),
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

        $response = $this->generalServiceType->deliveryEstimate($request);

        return $this->processResponse($response, $this->generalServiceType);
    }

    /**
     * @param $orderReference
     * @param null $country
     * @param null $postalCode
     * @param null $shippingOption
     * @param null $targetWebShop
     *
     * @return RateResponse
     */
    public function getRates($orderReference, $country = null, $postalCode = null, $shippingOption = null, $targetWebShop = null)
    {
        $request = new RateRequest(
            $this->securityService->getHash($orderReference),
            $this->generalServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $country,
            $postalCode,
            $shippingOption
        );
        $response = $this->generalServiceType->rate($request);

        return $this->processResponse($response, $this->generalServiceType);
    }

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
            $this->securityService->getHash($hashInput),
            $this->generalServiceType->getWebShopId(),
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

        $response = $this->generalServiceType->servicePoints($request);

        return $this->processResponse($response, $this->generalServiceType);
    }
}
