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
use Etrias\PaazlConnector\Exceptions\NoSuchBarcodeException;
use Etrias\PaazlConnector\Exceptions\NotAvailableProofOfDeliveryDocumentException;
use Etrias\PaazlConnector\Exceptions\UnsupportedOperationException;
use Etrias\PaazlConnector\GuzzleSoapClient;
use Etrias\PaazlConnector\Services\BatchService;
use Etrias\PaazlConnector\Services\DocumentService;
use Etrias\PaazlConnector\Services\LabelService;
use Etrias\PaazlConnector\Services\ListService;
use Etrias\PaazlConnector\Services\SecurityService;
use Etrias\PaazlConnector\Services\ShippingService;
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
use Etrias\PaazlConnector\SoapTypes\ExistingLabel;
use Etrias\PaazlConnector\SoapTypes\GenerateAdditionalPdfDocumentResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraImageLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraImageReturnLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraPdfLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateExtraPdfReturnLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateImageLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateImageReturnLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfCustomsDocumentsResponse;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfReturnLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GenerateZplLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GetExistingImageLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GetExistingImageLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\GetExistingPdfLabelResponse;
use Etrias\PaazlConnector\SoapTypes\GetExistingPdfLabelsResponse;
use Etrias\PaazlConnector\SoapTypes\Label;
use Etrias\PaazlConnector\SoapTypes\LabelType;
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

    /**
     * @var ShippingService
     */
    protected $shippingService;

    public function setUp()
    {
        parent::setUp();
        $this->labelService = new LabelService($this->soapClient, $this->securityService);
        $this->shippingService = new ShippingService($this->soapClient, $this->securityService);
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

    public function testGeneratePdfReturnLabels()
    {
        $shippingOptions = $this->shippingService->getShippingOptions('ET171', 'NL')->getShippingOptions()->getShippingOption();
        $shippingOption = reset($shippingOptions);

        $response = $this->labelService->generatePdfReturnLabels(
            ['ET100'],
            $shippingOption->getType()
        );

        $this->assertInstanceOf(GeneratePdfReturnLabelsResponse::class, $response);
    }

    public function testGenerateExtraPdfReturnLabel()
    {
        $shippingOptions = $this->shippingService->getShippingOptions('ET171', 'NL')->getShippingOptions()->getShippingOption();
        $shippingOption = reset($shippingOptions);

        $response = $this->labelService->generateExtraPdfReturnLabel(
            'ET100',
            $shippingOption->getType()
        );

        $this->assertInstanceOf(GenerateExtraPdfReturnLabelResponse::class, $response);
    }

    public function testGenerateImageLabels()
    {
        $response = $this->labelService->generateImageLabels(
            ['ET100']
        );

        $this->assertInstanceOf(GenerateImageLabelsResponse::class, $response);
    }

    public function testGenerateImageReturnLabels()
    {
        $shippingOptions = $this->shippingService->getShippingOptions('ET171', 'NL')->getShippingOptions()->getShippingOption();
        $shippingOption = reset($shippingOptions);

        $response = $this->labelService->generateImageReturnLabels(
            ['ET100'],
            $shippingOption->getType()
        );

        $this->assertInstanceOf(GenerateImageReturnLabelsResponse::class, $response);
    }

    public function testGenerateExtraImageReturnLabel()
    {
        $shippingOptions = $this->shippingService->getShippingOptions('ET171', 'NL')->getShippingOptions()->getShippingOption();
        $shippingOption = reset($shippingOptions);

        $response = $this->labelService->generateExtraImageReturnLabel(
            'ET100',
            $shippingOption->getType()
        );

        $this->assertInstanceOf(GenerateExtraImageReturnLabelResponse::class, $response);
    }

    public function testGenerateExtraImageLabel()
    {
        $response = $this->labelService->generateExtraImageLabel(
            'ET100'
        );

        $this->assertInstanceOf(GenerateExtraImageLabelResponse::class, $response);
    }

    public function testGenerateZplLabels()
    {
        $this->expectException(DistributorException::class);

        $response = $this->labelService->generateZplLabels(
            ['ET100'],
            PrinterType::ZEBRA
        );

        $this->assertInstanceOf(GenerateZplLabelsResponse::class, $response);
    }

    public function testGetExistingPdfLabel()
    {
        $this->expectException(NoSuchBarcodeException::class);

        $response = $this->labelService->getExistingPdfLabel(
            'ET100',
            '3SWRE0000000137',
            PrinterType::ZEBRA
        );

        $this->assertInstanceOf(GetExistingPdfLabelResponse::class, $response);
    }

    public function testGetExistingPdfLabels()
    {
        $this->expectException(NoSuchBarcodeException::class);

         $this->labelService->getExistingPdfLabels([
            new ExistingLabel('ET100', '3SWRE0000000137'),
        ]);
    }

    public function testGetExistingImageLabel()
    {
        $this->expectException(NoSuchBarcodeException::class);

        $response = $this->labelService->getExistingImageLabel(
            'ET100',
            '3SWRE0000000137',
            PrinterType::ZEBRA
        );

        $this->assertInstanceOf(GetExistingImageLabelResponse::class, $response);
    }

    public function testGetExistingImageLabels()
    {
        $this->expectException(NoSuchBarcodeException::class);

        $this->labelService->getExistingImageLabels([
            new ExistingLabel('ET100', '3SWRE0000000137'),
        ]);
    }
}
