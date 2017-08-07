<?php
/**
 * Created by PhpStorm.
 * User: cprinse
 * Date: 7-8-17
 * Time: 16:37
 */

namespace Etrias\PaazlConnector\Services;

use Etrias\PaazlConnector\SoapTypes\GenerateAdditionalImageDocumentResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateAdditionalPdfDocumentResponse;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfCustomsDocumentsResponse;
use Etrias\PaazlConnector\SoapTypes\ProofOfDeliveryResponse;

interface DocumentServiceInterface
{
    /**
     * @param $orderReference
     * @param $barcode
     * @param $documentType
     * @param null $printer
     * @param null $targetWebShop
     *
     * @return GenerateAdditionalPdfDocumentResponse
     */
    public function generateAdditionalPdfDocument(
        $orderReference,
        $barcode,
        $documentType,
        $printer = null,
        $targetWebShop = null
    );

    /**
     * @param $orderReference
     * @param $barcode
     * @param $documentType
     * @param null $targetWebShop
     *
     * @return GenerateAdditionalImageDocumentResponse
     */
    public function generateAdditionalImageDocument($orderReference, $barcode, $documentType, $targetWebShop = null);

    /**
     * @param array $orderReferences
     * @param $targetWebShop
     *
     * @return GeneratePdfCustomsDocumentsResponse
     */
    public function generatePdfCustomsDocuments(array $orderReferences, $targetWebShop = null);

    /**
     * @param $barcode
     * @param null $targetWebShop
     *
     * @return ProofOfDeliveryResponse
     */
    public function getProofOfDelivery($barcode, $targetWebShop = null);
}
