<?php
/**
 * Created by PhpStorm.
 * User: heiligbrood
 * Date: 26-07-17
 * Time: 19:56
 */

namespace Etrias\PaazlConnector\Service;

use DateTime;
use Etrias\PaazlConnector\Processor\Processor;
use Etrias\PaazlConnector\ServiceType\Service as GeneralServiceType;
use Etrias\PaazlConnector\StructType\BatchStatusRequest;
use Etrias\PaazlConnector\StructType\BatchStatusResponse;
use Etrias\PaazlConnector\StructType\CancelShipmentsRequest;
use Etrias\PaazlConnector\StructType\CancelShipmentsResponse;
use Etrias\PaazlConnector\StructType\CloseBatchRequest;
use Etrias\PaazlConnector\StructType\CloseBatchResponse;
use Etrias\PaazlConnector\StructType\DateRangeType;
use Etrias\PaazlConnector\StructType\ExistingLabelType;
use Etrias\PaazlConnector\StructType\GenerateAdditionalImageDocumentResponse;
use Etrias\PaazlConnector\StructType\GenerateAdditionalPdfDocumentRequest;
use Etrias\PaazlConnector\StructType\GenerateAdditionalPdfDocumentResponse;
use Etrias\PaazlConnector\StructType\GeneratePdfCustomsDocumentsRequest;
use Etrias\PaazlConnector\StructType\GeneratePdfCustomsDocumentsResponse;
use Etrias\PaazlConnector\StructType\ListOpenBatchesRequest;
use Etrias\PaazlConnector\StructType\ListOpenBatchesResponse;
use Etrias\PaazlConnector\StructType\OpenBatchRequest;
use Etrias\PaazlConnector\StructType\OpenBatchResponse;
use Etrias\PaazlConnector\StructType\OrdersToShipRequest;
use Etrias\PaazlConnector\StructType\OrdersToShipResponse;
use Etrias\PaazlConnector\StructType\OrderType;
use Etrias\PaazlConnector\StructType\ProofOfDeliveryRequest;
use Etrias\PaazlConnector\StructType\ProofOfDeliveryResponse;
use Etrias\PaazlConnector\StructType\ShippingOptionRequest;
use Etrias\PaazlConnector\StructType\ShippingOptionResponse;
use RuntimeException;

class ShippingService
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
     * @param GeneralServiceType $generalServiceType
     * @param SecurityServiceInterface $securityService
     */
    public function __construct(GeneralServiceType $generalServiceType, SecurityServiceInterface $securityService)
    {
        $this->securityService = $securityService;
        $this->generalServiceType = $generalServiceType;
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