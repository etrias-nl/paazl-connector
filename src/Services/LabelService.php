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
use Etrias\PaazlConnector\SoapTypes\GenerateExtraImageReturnLabelRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraPdfLabelRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraPdfReturnLabelRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateImageLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateImageReturnLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfReturnLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateZplLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GetExistingImageLabelRequest;
use Etrias\PaazlConnector\SoapTypes\GetExistingImageLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\GetExistingPdfLabelRequest;
use Etrias\PaazlConnector\SoapTypes\GetExistingPdfLabelsRequest;
use Etrias\PaazlConnector\SoapTypes\OrderType;
use Etrias\PaazlConnector\SoapTypes\ReturnLabelsOrderType;

class LabelService implements LabelServiceInterface
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
     * {@inheritdoc}
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
     * {@inheritdoc}
     */
    public function generateExtraPdfLabel($orderReference, $printer = null, $includeMetaData = null, $batch = null, $targetWebShop = null)
    {
        $request = new GenerateExtraPdfLabelRequest(
            $this->security->getHash($orderReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $orderReference,
            null,
            $printer,
            $batch,
            $includeMetaData
        );

        return $this->client->generateExtraPdfLabel($request);
    }

    /**
     * {@inheritdoc}
     */
    public function generatePdfReturnLabels(array $orderReferences, $shippingOption = null, $printer = null, $targetWebShop = null)
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
            $this->client->getWebShopId(),
            $orders,
            $printer
        );

        return $this->client->generatePdfReturnLabels($request);
    }

    /**
     * {@inheritdoc}
     */
    public function generateExtraPdfReturnLabel($orderReference, $shippingOption, $printer = null, $targetWebShop = null)
    {
        $request = new GenerateExtraPdfReturnLabelRequest(
            $this->security->getHash($orderReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $orderReference,
            null,
            $shippingOption,
            $printer
        );

        return $this->client->generateExtraPdfReturnLabel($request);
    }

    /**
     * {@inheritdoc}
     */
    public function generateImageLabels(array $orderReferences, $includeMetaData = null, $batch = null, $targetWebShop = null)
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

        $request = new GenerateImageLabelsRequest(
            $this->client->getWebShopId(),
            $orders,
            $includeMetaData
        );

        return $this->client->generateImageLabels($request);
    }

    /**
     * {@inheritdoc}
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

        $request = new GenerateImageReturnLabelsRequest(
            $this->client->getWebShopId(),
            $orders
        );

        return $this->client->generateImageReturnLabels($request);
    }

    /**
     * {@inheritdoc}
     */
    public function generateExtraImageReturnLabel($orderReference, $shippingOption, $targetWebShop = null)
    {
        $request = new GenerateExtraImageReturnLabelRequest(
            $this->security->getHash($orderReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $orderReference,
            null,
            $shippingOption
        );

        return $this->client->generateExtraImageReturnLabel($request);
    }

    /**
     * {@inheritdoc}
     */
    public function generateExtraImageLabel($orderReference, $includeMetaData = null, $batch = null, $targetWebShop = null)
    {
        $request = new GenerateExtraImageLabelRequest(
            $this->security->getHash($orderReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $orderReference,
            null,
            $batch,
            $includeMetaData
        );

        return $this->client->generateExtraImageLabel($request);
    }

    /**
     * {@inheritdoc}
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
     * {@inheritdoc}
     */
    public function getExistingPdfLabel($orderReference, $barCode, $printer = null, $includeMetaData = null, $targetWebShop = null)
    {
        $request = new GetExistingPdfLabelRequest(
            $this->security->getHash($orderReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $barCode,
            $includeMetaData,
            $printer
        );

        return $this->client->getExistingPdfLabel($request);
    }

    /**
     * {@inheritdoc}
     */
    public function getExistingPdfLabels(array $labelTypes, $printer = null, $includeMetaData = null)
    {
        $labels = [];

        foreach ($labelTypes as $label) {
            $labels[] = new ExistingLabelType(
                $this->security->getHash($label->getOrderReference()),
                $this->client->getWebShopId(),
                $label->getOrderReference(),
                $label->getBarcode()
            );
        }

        $request = new GetExistingPdfLabelsRequest(
            $this->client->getWebShopId(),
            $labels,
            $includeMetaData,
            $printer);

        return $this->client->getExistingPdfLabels($request);
    }

    /**
     * {@inheritdoc}
     */
    public function getExistingImageLabel($orderReference, $barCode, $includeMetaData = null, $targetWebShop = null)
    {
        $request = new GetExistingImageLabelRequest(
            $this->security->getHash($orderReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $barCode,
            $includeMetaData);

        return $this->client->getExistingImageLabel($request);
    }

    /**
     * {@inheritdoc}
     */
    public function getExistingImageLabels(array $labelTypes, $includeMetaData = null)
    {
        $labels = [];

        foreach ($labelTypes as $label) {
            $labels[] = new ExistingLabelType(
                $this->security->getHash($label->getOrderReference()),
                $this->client->getWebShopId(),
                $label->getOrderReference(),
                $label->getBarcode()
            );
        }

        $request = new GetExistingImageLabelsRequest(
            $this->client->getWebShopId(),
            $labels,
            $includeMetaData
        );

        return $this->client->getExistingImageLabels($request);
    }
}
