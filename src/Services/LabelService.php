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
use Etrias\PaazlConnector\SoapTypes\ExistingLabelType;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraImageLabelRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraImageLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraImageReturnLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraPdfLabelRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraPdfReturnLabelRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraPdfReturnLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateImageLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateImageLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateImageReturnLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfReturnLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfReturnLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateZplLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateZplLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GetExistingImageLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GetExistingImageLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GetExistingPdfLabelRequest;
use Etrias\PaazlConnector\SoapTypes\GetExistingPdfLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GetExistingPdfLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GetExistingPdfLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\OrderType;
use Etrias\PaazlConnector\SoapTypes\ReturnLabelsOrderType;

class LabelService
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
     * @param array $orderReferences
     * @param null  $printer
     * @param null  $includeMetaData
     * @param null  $batch
     * @param null  $targetWebShop
     *
     * @return GeneratePdfLabelsResponse
     */
    public function generatePdfLabels(array $orderReferences, $printer = null, $includeMetaData = null, $batch = null, $targetWebShop = null)
    {
        $orders = [];

        foreach ($orderReferences as $orderReference) {
            $orders[] = new OrderType(
                $this->security->getHash($orderReference),
                $targetWebShop,
                $orderReference,
                [],
                $batch
            );
        }

        $request = new GeneratePdfLabelsRequest(
            $this->client->getWebShopId(),
            $printer,
            $orders,
            $includeMetaData
        );

        return $this->client->generatePdfLabels($request);
    }

    /**
     * @param $orderReference
     * @param null $printer
     * @param null $includeMetaData
     * @param null $batch
     * @param null $targetWebShop
     *
     * @return GenerateExtraPdfLabelResponse
     */
    public function generateExtraPdfLabel($orderReference, $printer = null, $includeMetaData = null, $batch = null, $targetWebShop = null)
    {
        $request = new GenerateExtraPdfLabelRequest(
            $this->security->getHash($orderReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $printer,
            $batch,
            $includeMetaData
        );

        return $this->client->generateExtraPdfLabel($request);
    }

    /**
     * @param array $orderReferences
     * @param $shippingOption
     * @param null $printer
     * @param null $targetWebShop
     *
     * @return GeneratePdfReturnLabelsResponse
     */
    public function generatePdfReturnLabels(array $orderReferences, $shippingOption, $printer = null, $targetWebShop = null)
    {
        $orders = [];

        foreach ($orderReferences as $orderReference) {
            $orders[] = new ReturnLabelsOrderType(
                $this->security->getHash($orderReference),
                $targetWebShop,
                $orderReference,
                null,
                $shippingOption
            );
        }

        $request = new GeneratePdfReturnLabelsRequest(
            $printer
        );
        $request->setWebshop($this->client->getWebShopId());
        $request->setOrder($orders);

        return $this->client->generatePdfReturnLabels($request);
    }

    /**
     * @param $orderReference
     * @param $shippingOption
     * @param null $printer
     * @param null $targetWebShop
     *
     * @return GenerateExtraPdfReturnLabelResponse
     */
    public function generateExtraPdfReturnLabel($orderReference, $shippingOption, $printer = null, $targetWebShop = null)
    {
        $request = new GenerateExtraPdfReturnLabelRequest($printer);
        $request->setShippingOption($shippingOption)
            ->setWebshop($this->client->getWebShopId())
            ->setHash($this->security->getHash($orderReference))
            ->setTargetWebshop($targetWebShop)
            ->setOrderReference($orderReference)
            ->setShippingOption($shippingOption);

        return $this->client->generateExtraPdfReturnLabel($request);
    }

    /**
     * @param array $orderReferences
     * @param null  $includeMetaData
     * @param null  $batch
     * @param null  $targetWebShop
     *
     * @return GenerateImageLabelsResponse
     */
    public function generateImageLabels(array $orderReferences, $includeMetaData = null, $batch = null, $targetWebShop = null)
    {
        $orders = [];

        foreach ($orderReferences as $orderReference) {
            $orders[] = new OrderType(
                $this->security->getHash($orderReference),
                $targetWebShop,
                $orderReference,
                null,
                $batch
            );
        }

        $request = new GenerateImageLabelsRequest(
            $this->client->getWebShopId(),
            $orders,
            $includeMetaData
        );

        $response = $this->client->generateImageLabels($request);

        return $this->processResponse($response, $this->generalServiceType);
    }

    /**
     * @param array $orderReferences
     * @param $shippingOption
     * @param null $printer
     * @param null $targetWebShop
     *
     * @return GenerateImageReturnLabelsResponse
     */
    public function generateImageReturnLabels(array $orderReferences, $shippingOption, $printer = null, $targetWebShop = null)
    {
        $orders = [];

        foreach ($orderReferences as $orderReference) {
            $orders[] = new ReturnLabelsOrderType(
                $this->security->getHash($orderReference),
                $targetWebShop,
                $orderReference,
                null,
                $shippingOption
            );
        }

        $request = new GeneratePdfReturnLabelsRequest(
            $printer
        );
        $request->setWebshop($this->client->getWebShopId());
        $request->setOrder($orders);

        return $this->client->generateImageReturnLabels($request);
    }

    /**
     * @param $orderReference
     * @param $shippingOption
     * @param null $printer
     * @param null $targetWebShop
     *
     * @return GenerateExtraImageReturnLabelResponse
     */
    public function generateExtraImageReturnLabel($orderReference, $shippingOption, $printer = null, $targetWebShop = null)
    {
        $request = new GenerateExtraPdfReturnLabelRequest($printer);
        $request->setShippingOption($shippingOption)
            ->setWebshop($this->client->getWebShopId())
            ->setHash($this->security->getHash($orderReference))
            ->setTargetWebshop($targetWebShop)
            ->setOrderReference($orderReference)
            ->setShippingOption($shippingOption);

        return $this->client->generateExtraImageReturnLabel($request);
    }

    /**
     * @param $orderReference
     * @param null $includeMetaData
     * @param null $batch
     * @param null $targetWebShop
     *
     * @return GenerateExtraImageLabelResponse
     */
    public function generateExtraImageLabel($orderReference, $includeMetaData = null, $batch = null, $targetWebShop = null)
    {
        $request = new GenerateExtraImageLabelRequest(
            $this->security->getHash($orderReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $batch,
            $includeMetaData
        );

        return $this->client->generateExtraImageLabel($request);
    }

    /**
     * @param array $orderReferences
     * @param null  $printer
     * @param null  $includeMetaData
     * @param null  $batch
     * @param null  $targetWebShop
     *
     * @return GenerateZplLabelsResponse
     */
    public function generateZplLabels(array $orderReferences, $printer = null, $includeMetaData = null, $batch = null, $targetWebShop = null)
    {
        $orders = [];

        foreach ($orderReferences as $orderReference) {
            $orders[] = new OrderType(
                $this->security->getHash($orderReference),
                $targetWebShop,
                $orderReference,
                null,
                $batch
            );
        }

        $request = new GenerateZplLabelsRequest(
            $this->client->getWebShopId(),
            $printer,
            $orders,
            $includeMetaData
        );

        return $this->client->generateZplLabels($request);
    }

    /**
     * @param $orderReference
     * @param $barCode
     * @param null $printer
     * @param null $includeMetaData
     * @param null $targetWebShop
     *
     * @return GetExistingPdfLabelResponse
     */
    public function getExistingPdfLabel($orderReference, $barCode, $printer = null, $includeMetaData = null, $targetWebShop = null)
    {
        $request = new GetExistingPdfLabelRequest($printer);
        $request->setHash($this->security->getHash($orderReference))
            ->setWebshop($this->client->getWebShopId())
            ->setOrderReference($orderReference)
            ->setBarcode($barCode)
            ->setIncludeMetaData($includeMetaData)
            ->setTargetWebshop($targetWebShop);

        return $this->client->getExistingPdfLabel($request);
    }

    /**
     * @param array $barCodes        [$orderReference => $barcode]
     * @param null  $printer
     * @param null  $includeMetaData
     *
     * @return GetExistingPdfLabelsResponse
     */
    public function getExistingPdfLabels(array $barCodes, $printer = null, $includeMetaData = null)
    {
        $labels = [];

        foreach ($barCodes as $orderReference => $barcode) {
            $labels[] = new ExistingLabelType(
                $this->security->getHash($orderReference),
                $this->client->getWebShopId(),
                $orderReference,
                $barcode
            );
        }

        $request = new GetExistingPdfLabelsRequest($printer);
        $request->setLabel($labels)
            ->setWebshop($this->client->getWebShopId())
            ->setIncludeMetaData($includeMetaData);

        return $this->client->getExistingPdfLabels($request);
    }

    /**
     * @param $orderReference
     * @param $barCode
     * @param null $includeMetaData
     * @param null $targetWebShop
     *
     * @return GetExistingImageLabelResponse
     */
    public function getExistingImageLabel($orderReference, $barCode, $includeMetaData = null, $targetWebShop = null)
    {
        $request = new GetExistingPdfLabelRequest();
        $request->setHash($this->security->getHash($orderReference))
            ->setWebshop($this->client->getWebShopId())
            ->setOrderReference($orderReference)
            ->setBarcode($barCode)
            ->setIncludeMetaData($includeMetaData)
            ->setTargetWebshop($targetWebShop);

        return $this->client->getExistingImageLabel($request);
    }

    /**
     * @param array $barCodes        [$orderReference => $barcode]
     * @param null  $includeMetaData
     *
     * @return GetExistingImageLabelsResponse
     */
    public function getExistingImageLabels(array $barCodes, $includeMetaData = null)
    {
        $labels = [];

        foreach ($barCodes as $orderReference => $barcode) {
            $labels[] = new ExistingLabelType(
                $this->security->getHash($orderReference),
                $this->client->getWebShopId(),
                $orderReference,
                $barcode
            );
        }

        $request = new GetExistingPdfLabelsRequest();
        $request->setLabel($labels)
            ->setWebshop($this->client->getWebShopId())
            ->setIncludeMetaData($includeMetaData);

        return $this->client->getExistingImageLabels($request);
    }
}
