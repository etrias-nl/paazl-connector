<?php
/**
 * Created by PhpStorm.
 * User: cprinse
 * Date: 7-8-17
 * Time: 16:37
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
     * @param string[] $orderReferences
     * @param null $printer
     * @param null $includeMetaData
     * @param null $batch
     * @param null $targetWebShop
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
     * @param $orderReference
     * @param null $printer
     * @param null $includeMetaData
     * @param null $batch
     * @param null $targetWebShop
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
     * @param array $orderReferences
     * @param $shippingOption
     * @param null $printer
     * @param null $targetWebShop
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
     * @param $orderReference
     * @param $shippingOption
     * @param null $printer
     * @param null $targetWebShop
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
     * @param array $orderReferences
     * @param null $includeMetaData
     * @param null $batch
     * @param null $targetWebShop
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
     * @param array $orderReferences
     * @param $shippingOption
     * @param null $printer
     * @param null $targetWebShop
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
     * @param $orderReference
     * @param $shippingOption
     * @param null $targetWebShop
     *
     * @return GenerateExtraImageReturnLabelResponse
     */
    public function generateExtraImageReturnLabel($orderReference, $shippingOption, $targetWebShop = null);

    /**
     * @param $orderReference
     * @param null $includeMetaData
     * @param null $batch
     * @param null $targetWebShop
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
     * @param array $orderReferences
     * @param null $printer
     * @param null $includeMetaData
     * @param null $batch
     * @param null $targetWebShop
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
     * @param $orderReference
     * @param $barCode
     * @param null $printer
     * @param null $includeMetaData
     * @param null $targetWebShop
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
     * @param null $printer
     * @param null $includeMetaData
     *
     * @return GetExistingPdfLabelsResponse
     */
    public function getExistingPdfLabels(array $labelTypes, $printer = null, $includeMetaData = null);

    /**
     * @param $orderReference
     * @param $barCode
     * @param null $includeMetaData
     * @param null $targetWebShop
     *
     * @return GetExistingImageLabelResponse
     */
    public function getExistingImageLabel($orderReference, $barCode, $includeMetaData = null, $targetWebShop = null);

    /**
     * @param LabelType[] $labelTypes
     * @param null $includeMetaData
     *
     * @return GetExistingPdfLabelsResponse
     */
    public function getExistingImageLabels(array $labelTypes, $includeMetaData = null);
}
