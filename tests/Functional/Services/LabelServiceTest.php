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
use Etrias\PaazlConnector\Services\LabelService;
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
use Etrias\PaazlConnector\SoapTypes\GenerateExtraPdfLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfCustomsDocumentsResponse;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\Label;
use Etrias\PaazlConnector\SoapTypes\ListOpenBatchesResponse;
use Etrias\PaazlConnector\SoapTypes\ListStoresResponse;
use Etrias\PaazlConnector\SoapTypes\OpenBatchResponse;
use Etrias\PaazlConnector\SoapTypes\PrinterType;
use Etrias\PaazlConnector\SoapTypes\ProofOfDeliveryResponse;
use Etrias\PaazlConnector\SoapTypes\RateResponse;
use Etrias\PaazlConnector\SoapTypes\ServicePointsResponse;
use Etrias\PaazlConnector\SoapTypes\StoreDetailsType;
use GuzzleHttp\Client;
use Phpro\SoapClient\ClientBuilder;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\Soap\Handler\GuzzleHandle;

class LabelServiceTest extends AbstractServiceTest
{
    /**
     * @var LabelService
     */
    protected $labelService;

    public function setUp()
    {
        parent::setUp();
        $this->labelService = new LabelService($this->soapClient, $this->securityService);
    }

    public function testGeneratePdfLabels()
    {
        $response = $this->labelService->generatePdfLabels(
            ['ET100'],
            PrinterType::ZEBRA
        );

        $this->assertInstanceOf(GeneratePdfLabelsResponse::class, $response);
    }

    public function testGenerateExtraPdfLabel()
    {
        $response = $this->labelService->generateExtraPdfLabel(
            'ET100',
            PrinterType::ZEBRA
        );

        $this->assertInstanceOf(GenerateExtraPdfLabelResponse::class, $response);
    }
}
