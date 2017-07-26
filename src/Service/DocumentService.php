<?php
/**
 * Created by PhpStorm.
 * User: heiligbrood
 * Date: 26-07-17
 * Time: 19:56
 */

namespace Etrias\PaazlConnector\Service;

use Etrias\PaazlConnector\Processor\Processor;
use Etrias\PaazlConnector\ServiceType\Service as GeneralServiceType;
use Etrias\PaazlConnector\StructType\GenerateAdditionalImageDocumentResponse;
use Etrias\PaazlConnector\StructType\GenerateAdditionalPdfDocumentRequest;
use Etrias\PaazlConnector\StructType\GenerateAdditionalPdfDocumentResponse;
use Etrias\PaazlConnector\StructType\GeneratePdfCustomsDocumentsRequest;
use Etrias\PaazlConnector\StructType\GeneratePdfCustomsDocumentsResponse;
use Etrias\PaazlConnector\StructType\OrderType;
use Etrias\PaazlConnector\StructType\ProofOfDeliveryRequest;
use Etrias\PaazlConnector\StructType\ProofOfDeliveryResponse;

class DocumentService
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
        $request = new GenerateAdditionalPdfDocumentRequest($printer);
        $request->setHash($this->securityService->getHash($orderReference))
            ->setWebshop($this->generalServiceType->getWebShopId())
            ->setTargetWebshop($targetWebShop)
            ->setOrderReference($orderReference)
            ->setBarcode($barcode)
            ->setDocumentType($documentType);

        $response = $this->generalServiceType->generateAdditionalPdfDocument($request);

        return $this->processResponse($response, $this->generalServiceType);
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
        $request = new GenerateAdditionalPdfDocumentRequest();
        $request->setHash($this->securityService->getHash($orderReference))
            ->setWebshop($this->generalServiceType->getWebShopId())
            ->setTargetWebshop($targetWebShop)
            ->setOrderReference($orderReference)
            ->setBarcode($barcode)
            ->setDocumentType($documentType);

        $response = $this->generalServiceType->generateAdditionalImageDocument($request);

        return $this->processResponse($response, $this->generalServiceType);
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
                $this->securityService->getHash($orderReference),
                $targetWebShop,
                $orderReference
            );
        }

        $request = new GeneratePdfCustomsDocumentsRequest(
            $this->generalServiceType->getWebShopId(),
            $orders
        );

        $response = $this->generalServiceType->generatePdfCustomsDocuments($request);

        return $this->processResponse($response, $this->generalServiceType);
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
            $this->securityService->getHash($barcode),
            $this->generalServiceType->getWebShopId(),
            $targetWebShop,
            $barcode
        );

        $response = $this->generalServiceType->proofOfDelivery($request);

        return $this->processResponse($response, $this->generalServiceType);
    }
}