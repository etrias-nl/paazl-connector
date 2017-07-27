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
use Etrias\PaazlConnector\Processor\Processor;
use Etrias\PaazlConnector\ServiceType\Service as GeneralServiceType;
use Etrias\PaazlConnector\StructType\ExistingLabelType;
use Etrias\PaazlConnector\StructType\GenerateExtraImageLabelRequest;
use Etrias\PaazlConnector\StructType\GenerateExtraImageLabelResponse;
use Etrias\PaazlConnector\StructType\GenerateExtraImageReturnLabelResponse;
use Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelRequest;
use Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelResponse;
use Etrias\PaazlConnector\StructType\GenerateExtraPdfReturnLabelRequest;
use Etrias\PaazlConnector\StructType\GenerateExtraPdfReturnLabelResponse;
use Etrias\PaazlConnector\StructType\GenerateImageLabelsRequest;
use Etrias\PaazlConnector\StructType\GenerateImageLabelsResponse;
use Etrias\PaazlConnector\StructType\GenerateImageReturnLabelsResponse;
use Etrias\PaazlConnector\StructType\GeneratePdfLabelsRequest;
use Etrias\PaazlConnector\StructType\GeneratePdfLabelsResponse;
use Etrias\PaazlConnector\StructType\GeneratePdfReturnLabelsRequest;
use Etrias\PaazlConnector\StructType\GeneratePdfReturnLabelsResponse;
use Etrias\PaazlConnector\StructType\GenerateZplLabelsRequest;
use Etrias\PaazlConnector\StructType\GenerateZplLabelsResponse;
use Etrias\PaazlConnector\StructType\GetExistingImageLabelResponse;
use Etrias\PaazlConnector\StructType\GetExistingImageLabelsResponse;
use Etrias\PaazlConnector\StructType\GetExistingPdfLabelRequest;
use Etrias\PaazlConnector\StructType\GetExistingPdfLabelResponse;
use Etrias\PaazlConnector\StructType\GetExistingPdfLabelsRequest;
use Etrias\PaazlConnector\StructType\GetExistingPdfLabelsResponse;
use Etrias\PaazlConnector\StructType\OrderType;
use Etrias\PaazlConnector\StructType\ReturnLabelsOrderType;

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
                $this->securityService->getHash($orderReference),
                $targetWebShop,
                $orderReference,
                null,
                $batch
            );
        }

        $request = new GeneratePdfLabelsRequest(
            $this->generalServiceType->getWebShopId(),
            $printer,
            $orders,
            $includeMetaData
        );

        $response = $this->generalServiceType->generatePdfLabels($request);

        return $this->processResponse($response, $this->generalServiceType);
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
            $this->securityService->getHash($orderReference),
            $this->generalServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $printer,
            $batch,
            $includeMetaData
        );

        $response = $this->generalServiceType->generateExtraPdfLabel($request);

        return $this->processResponse($response, $this->generalServiceType);
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
                $this->securityService->getHash($orderReference),
                $targetWebShop,
                $orderReference,
                null,
                $shippingOption
            );
        }

        $request = new GeneratePdfReturnLabelsRequest(
            $printer
        );
        $request->setWebshop($this->generalServiceType->getWebShopId());
        $request->setOrder($orders);

        $response = $this->generalServiceType->generatePdfReturnLabels($request);

        return $this->processResponse($response, $this->generalServiceType);
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
            ->setWebshop($this->generalServiceType->getWebShopId())
            ->setHash($this->securityService->getHash($orderReference))
            ->setTargetWebshop($targetWebShop)
            ->setOrderReference($orderReference)
            ->setShippingOption($shippingOption);

        $response = $this->generalServiceType->generateExtraPdfReturnLabel($request);

        return $this->processResponse($response, $this->generalServiceType);
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
                $this->securityService->getHash($orderReference),
                $targetWebShop,
                $orderReference,
                null,
                $batch
            );
        }

        $request = new GenerateImageLabelsRequest(
            $this->generalServiceType->getWebShopId(),
            $orders,
            $includeMetaData
        );

        $response = $this->generalServiceType->generateImageLabels($request);

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
                $this->securityService->getHash($orderReference),
                $targetWebShop,
                $orderReference,
                null,
                $shippingOption
            );
        }

        $request = new GeneratePdfReturnLabelsRequest(
            $printer
        );
        $request->setWebshop($this->generalServiceType->getWebShopId());
        $request->setOrder($orders);

        $response = $this->generalServiceType->generateImageReturnLabels($request);

        return $this->processResponse($response, $this->generalServiceType);
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
            ->setWebshop($this->generalServiceType->getWebShopId())
            ->setHash($this->securityService->getHash($orderReference))
            ->setTargetWebshop($targetWebShop)
            ->setOrderReference($orderReference)
            ->setShippingOption($shippingOption);

        $response = $this->generalServiceType->generateExtraImageReturnLabel($request);

        return $this->processResponse($response, $this->generalServiceType);
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
            $this->securityService->getHash($orderReference),
            $this->generalServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $batch,
            $includeMetaData
        );

        $response = $this->generalServiceType->generateExtraImageLabel($request);

        return $this->processResponse($response, $this->generalServiceType);
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
                $this->securityService->getHash($orderReference),
                $targetWebShop,
                $orderReference,
                null,
                $batch
            );
        }

        $request = new GenerateZplLabelsRequest(
            $this->generalServiceType->getWebShopId(),
            $printer,
            $orders,
            $includeMetaData
        );

        $response = $this->generalServiceType->generateZplLabels($request);

        return $this->processResponse($response, $this->generalServiceType);
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
        $request->setHash($this->securityService->getHash($orderReference))
            ->setWebshop($this->generalServiceType->getWebShopId())
            ->setOrderReference($orderReference)
            ->setBarcode($barCode)
            ->setIncludeMetaData($includeMetaData)
            ->setTargetWebshop($targetWebShop);

        $response = $this->generalServiceType->getExistingPdfLabel($request);

        return $this->processResponse($response, $this->generalServiceType);
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
                $this->securityService->getHash($orderReference),
                $this->generalServiceType->getWebShopId(),
                $orderReference,
                $barcode
            );
        }

        $request = new GetExistingPdfLabelsRequest($printer);
        $request->setLabel($labels)
            ->setWebshop($this->generalServiceType->getWebShopId())
            ->setIncludeMetaData($includeMetaData);

        $response = $this->generalServiceType->getExistingPdfLabels($request);

        return $this->processResponse($response, $this->generalServiceType);
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
        $request->setHash($this->securityService->getHash($orderReference))
            ->setWebshop($this->generalServiceType->getWebShopId())
            ->setOrderReference($orderReference)
            ->setBarcode($barCode)
            ->setIncludeMetaData($includeMetaData)
            ->setTargetWebshop($targetWebShop);

        $response = $this->generalServiceType->getExistingImageLabel($request);

        return $this->processResponse($response, $this->generalServiceType);
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
                $this->securityService->getHash($orderReference),
                $this->generalServiceType->getWebShopId(),
                $orderReference,
                $barcode
            );
        }

        $request = new GetExistingPdfLabelsRequest();
        $request->setLabel($labels)
            ->setWebshop($this->generalServiceType->getWebShopId())
            ->setIncludeMetaData($includeMetaData);

        $response = $this->generalServiceType->getExistingImageLabels($request);

        return $this->processResponse($response, $this->generalServiceType);
    }
}
