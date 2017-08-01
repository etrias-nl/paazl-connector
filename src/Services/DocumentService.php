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
use Etrias\PaazlConnector\SoapTypes\GenerateAdditionalDocumentType;
use Etrias\PaazlConnector\SoapTypes\GenerateAdditionalPdfDocumentRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateAdditionalPdfDocumentResponse;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfCustomsDocumentsRequest;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfCustomsDocumentsResponse;
use Etrias\PaazlConnector\SoapTypes\OrderType;
use Etrias\PaazlConnector\SoapTypes\ProofOfDeliveryRequest;

class DocumentService
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
     * @param $orderReference
     * @param $barcode
     * @param $documentType
     * @param null $printer
     * @param null $targetWebShop
     *
     * @return GenerateAdditionalPdfDocumentResponse
     */
    public function generateAdditionalPdfDocument($orderReference, $barcode, $documentType, $printer = null, $targetWebShop = null)
    {
        $request = new GenerateAdditionalPdfDocumentRequest(
            $this->security->getHash($orderReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $barcode,
            $documentType,
            $printer
        );

        return $this->client->generateAdditionalPdfDocument($request);
    }

    /**
     * @param $orderReference
     * @param $barcode
     * @param $documentType
     * @param null $targetWebShop
     *
     * @return GenerateAdditionalImageDocumentResponse
     */
    public function generateAdditionalImageDocument($orderReference, $barcode, $documentType, $targetWebShop = null)
    {
        $request = new GenerateAdditionalDocumentType(
            $this->security->getHash($orderReference),
            $this->client->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $barcode,
            $documentType
        );

        return $this->client->generateAdditionalImageDocument($request);
    }

    /**
     * @param array $orderReferences
     * @param $targetWebShop
     *
     * @return GeneratePdfCustomsDocumentsResponse
     */
    public function generatePdfCustomsDocuments(array $orderReferences, $targetWebShop = null)
    {
        $orders = [];

        foreach ($orderReferences as $orderReference) {
            $orders[] = new OrderType(
                $this->security->getHash($orderReference),
                $targetWebShop,
                $orderReference
            );
        }

        $request = new GeneratePdfCustomsDocumentsRequest(
            $this->client->getWebShopId(),
            $orders
        );

        return $this->client->generatePdfCustomsDocuments($request);
    }

    /**
     * @param $barcode
     * @param null $targetWebShop
     *
     * @return ProofOfDeliveryResponse
     */
    public function getProofOfDelivery($barcode, $targetWebShop = null)
    {
        $request = new ProofOfDeliveryRequest(
            $this->security->getHash($barcode),
            $this->client->getWebShopId(),
            $targetWebShop,
            $barcode
        );

        return $this->client->proofOfDelivery($request);
    }
}
