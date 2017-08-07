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
use Etrias\PaazlConnector\SoapTypes\GenerateAdditionalImageDocumentResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateAdditionalPdfDocumentRequest;
use Etrias\PaazlConnector\SoapTypes\GenerateAdditionalPdfDocumentResponse;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfCustomsDocumentsRequest;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfCustomsDocumentsResponse;
use Etrias\PaazlConnector\SoapTypes\OrderType;
use Etrias\PaazlConnector\SoapTypes\ProofOfDeliveryRequest;
use Etrias\PaazlConnector\SoapTypes\ProofOfDeliveryResponse;

class DocumentService implements DocumentServiceInterface
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
     * @inheritdoc
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
     * @inheritdoc
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
     * @inheritdoc
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
     * @inheritdoc
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
