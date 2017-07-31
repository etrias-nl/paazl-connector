<?php
/**
 * Created by PhpStorm.
 * User: cprinse
 * Date: 27-7-17
 * Time: 15:43
 */

namespace Tests\Etrias\PaazlConnector\Functional\Services;


use Etrias\PaazlConnector\Client\PaazlClientInterface;
use Etrias\PaazlConnector\Exceptions\DistributorException;
use Etrias\PaazlConnector\Exceptions\NotAvailableProofOfDeliveryDocumentException;
use Etrias\PaazlConnector\Exceptions\UnsupportedOperationException;
use Etrias\PaazlConnector\GuzzleSoapClient;
use Etrias\PaazlConnector\Services\BatchService;
use Etrias\PaazlConnector\Services\DocumentService;
use Etrias\PaazlConnector\Services\ListService;
use Etrias\PaazlConnector\Services\SecurityService;
use Etrias\PaazlConnector\Services\StoresService;
use Etrias\PaazlConnector\SoapTypes\AdditionalDocumentType;
use Etrias\PaazlConnector\SoapTypes\AddressResponse;
use Etrias\PaazlConnector\SoapTypes\AddressType;
use Etrias\PaazlConnector\SoapTypes\BatchStatusResponse;
use Etrias\PaazlConnector\SoapTypes\BusinessHoursType;
use Etrias\PaazlConnector\SoapTypes\ChangeStoresRequestType;
use Etrias\PaazlConnector\SoapTypes\ChangeStoresResponseType;
use Etrias\PaazlConnector\SoapTypes\CloseBatchResponse;
use Etrias\PaazlConnector\SoapTypes\CoordinatesType;
use Etrias\PaazlConnector\SoapTypes\DeleteStoresResponse;
use Etrias\PaazlConnector\SoapTypes\DeliveryEstimateResponse;
use Etrias\PaazlConnector\SoapTypes\DocumentType;
use Etrias\PaazlConnector\SoapTypes\GenerateAdditionalPdfDocumentResponse;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfCustomsDocumentsResponse;
use Etrias\PaazlConnector\SoapTypes\ListOpenBatchesResponse;
use Etrias\PaazlConnector\SoapTypes\ListStoresResponse;
use Etrias\PaazlConnector\SoapTypes\OpenBatchResponse;
use Etrias\PaazlConnector\SoapTypes\ProofOfDeliveryResponse;
use Etrias\PaazlConnector\SoapTypes\RateResponse;
use Etrias\PaazlConnector\SoapTypes\ServicePointsResponse;
use Etrias\PaazlConnector\SoapTypes\StoreDetailsType;
use GuzzleHttp\Client;
use Phpro\SoapClient\ClientBuilder;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\Soap\Handler\GuzzleHandle;

class DocumentServiceTest extends AbstractServiceTest
{
    /**
     * @var DocumentService
     */
    protected $documentService;

    public function setUp()
    {
        parent::setUp();
        $this->documentService = new DocumentService($this->soapClient, $this->securityService);
    }

    public function testGenerateAdditionalPdfDocument()
    {
        $this->expectException(DistributorException::class);

        $this->documentService->generateAdditionalPdfDocument(
            'ET100',
            '3SYAXW0000041',
            AdditionalDocumentType::CUSTOMS_DECLARATION
        );
    }

    public function testGenerateAdditionalImageDocument()
    {
        $this->expectException(UnsupportedOperationException::class);

        $this->documentService->generateAdditionalImageDocument(
            'ET100',
            '3SYAXW0000041',
            AdditionalDocumentType::CUSTOMS_DECLARATION
        );
    }

    public function testGeneratePdfCustomsDocuments()
    {
        $response = $this->documentService->generatePdfCustomsDocuments(['ET100']);
        $this->assertInstanceOf(GeneratePdfCustomsDocumentsResponse::class, $response);
    }

    public function testGetProofOfDelivery()
    {
        $this->expectException(NotAvailableProofOfDeliveryDocumentException::class);
        $this->documentService->getProofOfDelivery('3SYAXW0000041');
    }

}
