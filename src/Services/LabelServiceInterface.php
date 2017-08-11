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

use Etrias\PaazlConnector\SoapTypes\GenerateExtraImageLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraImageReturnLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraPdfLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraPdfReturnLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateImageLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateImageReturnLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfReturnLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateZplLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GetExistingImageLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GetExistingPdfLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GetExistingPdfLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\LabelType;

interface LabelServiceInterface
{
    /**
     * @param string[]    $orderReferences
     * @param string|null $printer
     * @param bool|null   $includeMetaData
     * @param string|null $batch
     * @param int|null    $targetWebShop
     *
     * @return GeneratePdfLabelsResponse
     */
    public function generatePdfLabels(
        array $orderReferences,
        $printer = null,
        $includeMetaData = null,
        $batch = null,
        $targetWebShop = null
    );

    /**
     * @param string      $orderReference
     * @param string|null $printer
     * @param bool|null   $includeMetaData
     * @param string|null $batch
     * @param int|null    $targetWebShop
     *
     * @return GenerateExtraPdfLabelResponse
     */
    public function generateExtraPdfLabel(
        $orderReference,
        $printer = null,
        $includeMetaData = null,
        $batch = null,
        $targetWebShop = null
    );

    /**
     * @param string[]    $orderReferences
     * @param string      $shippingOption
     * @param string|null $printer
     * @param int|null    $targetWebShop
     *
     * @return GeneratePdfReturnLabelsResponse
     */
    public function generatePdfReturnLabels(
        array $orderReferences,
        $shippingOption = null,
        $printer = null,
        $targetWebShop = null
    );

    /**
     * @param string      $orderReference
     * @param string      $shippingOption
     * @param string|null $printer
     * @param int|null    $targetWebShop
     *
     * @return GenerateExtraPdfReturnLabelResponse
     */
    public function generateExtraPdfReturnLabel(
        $orderReference,
        $shippingOption,
        $printer = null,
        $targetWebShop = null
    );

    /**
     * @param string[]    $orderReferences
     * @param bool|null   $includeMetaData
     * @param string|null $batch
     * @param int|null    $targetWebShop
     *
     * @return GenerateImageLabelsResponse
     */
    public function generateImageLabels(
        array $orderReferences,
        $includeMetaData = null,
        $batch = null,
        $targetWebShop = null
    );

    /**
     * @param string[]    $orderReferences
     * @param string      $shippingOption
     * @param string|null $printer
     * @param int|null    $targetWebShop
     *
     * @return GenerateImageReturnLabelsResponse
     */
    public function generateImageReturnLabels(
        array $orderReferences,
        $shippingOption,
        $printer = null,
        $targetWebShop = null
    );

    /**
     * @param string   $orderReference
     * @param string   $shippingOption
     * @param int|null $targetWebShop
     *
     * @return GenerateExtraImageReturnLabelResponse
     */
    public function generateExtraImageReturnLabel($orderReference, $shippingOption, $targetWebShop = null);

    /**
     * @param string      $orderReference
     * @param bool|null   $includeMetaData
     * @param string|null $batch
     * @param int|null    $targetWebShop
     *
     * @return GenerateExtraImageLabelResponse
     */
    public function generateExtraImageLabel(
        $orderReference,
        $includeMetaData = null,
        $batch = null,
        $targetWebShop = null
    );

    /**
     * @param string[]    $orderReferences
     * @param string|null $printer
     * @param bool|null   $includeMetaData
     * @param string|null $batch
     * @param int|null    $targetWebShop
     *
     * @return GenerateZplLabelsResponse
     */
    public function generateZplLabels(
        array $orderReferences,
        $printer = null,
        $includeMetaData = null,
        $batch = null,
        $targetWebShop = null
    );

    /**
     * @param string      $orderReference
     * @param string      $barCode
     * @param string|null $printer
     * @param bool|null   $includeMetaData
     * @param int|null    $targetWebShop
     *
     * @return GetExistingPdfLabelResponse
     */
    public function getExistingPdfLabel(
        $orderReference,
        $barCode,
        $printer = null,
        $includeMetaData = null,
        $targetWebShop = null
    );

    /**
     * @param LabelType[] $labelTypes
     * @param string|null $printer
     * @param bool|null   $includeMetaData
     *
     * @return GetExistingPdfLabelsResponse
     */
    public function getExistingPdfLabels(array $labelTypes, $printer = null, $includeMetaData = null);

    /**
     * @param string    $orderReference
     * @param string    $barCode
     * @param bool|null $includeMetaData
     * @param int|null  $targetWebShop
     *
     * @return GetExistingImageLabelResponse
     */
    public function getExistingImageLabel($orderReference, $barCode, $includeMetaData = null, $targetWebShop = null);

    /**
     * @param LabelType[] $labelTypes
     * @param bool|null   $includeMetaData
     *
     * @return GetExistingPdfLabelsResponse
     */
    public function getExistingImageLabels(array $labelTypes, $includeMetaData = null);
}
