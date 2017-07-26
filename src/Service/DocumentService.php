<?php
/**
 * Created by PhpStorm.
 * User: heiligbrood
 * Date: 26-07-17
 * Time: 19:56
 */

namespace Etrias\PaazlConnector\Service;

use Etrias\PaazlConnector\Processor\Processor;
use Etrias\PaazlConnector\ServiceType\Generate as GenerateServiceType;
use Etrias\PaazlConnector\StructType\GenerateAdditionalImageDocumentResponse;
use Etrias\PaazlConnector\StructType\GenerateAdditionalPdfDocumentRequest;
use Etrias\PaazlConnector\StructType\GenerateAdditionalPdfDocumentResponse;
use Etrias\PaazlConnector\StructType\GeneratePdfCustomsDocumentsRequest;
use Etrias\PaazlConnector\StructType\GeneratePdfCustomsDocumentsResponse;
use Etrias\PaazlConnector\StructType\OrderType;

class DocumentService
{
    use Processor;

    /**
     * @var SecurityServiceInterface
     */
    protected $securityService;
    /**
     * @var GenerateServiceType
     */
    protected $generateServiceType;

    /**
     * DocumentService constructor.
     * @param GenerateServiceType $generateServiceType
     * @param SecurityServiceInterface $securityService
     */
    public function __construct(GenerateServiceType $generateServiceType, SecurityServiceInterface $securityService)
    {
        $this->securityService = $securityService;
        $this->generateServiceType = $generateServiceType;
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
            ->setWebshop($this->generateServiceType->getWebShopId())
            ->setTargetWebshop($targetWebShop)
            ->setOrderReference($orderReference)
            ->setBarcode($barcode)
            ->setDocumentType($documentType);

        $response = $this->generateServiceType->generateAdditionalPdfDocument($request);

        return $this->processResponse($response, $this->generateServiceType);
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
            ->setWebshop($this->generateServiceType->getWebShopId())
            ->setTargetWebshop($targetWebShop)
            ->setOrderReference($orderReference)
            ->setBarcode($barcode)
            ->setDocumentType($documentType);

        $response = $this->generateServiceType->generateAdditionalImageDocument($request);

        return $this->processResponse($response, $this->generateServiceType);
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
            $this->generateServiceType->getWebShopId(),
            $orders
        );

        $response = $this->generateServiceType->generatePdfCustomsDocuments($request);

        return $this->processResponse($response, $this->generateServiceType);
    }
}