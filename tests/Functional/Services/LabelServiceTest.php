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

namespace Tests\Etrias\PaazlConnector\Functional\Services;

use Etrias\PaazlConnector\Exceptions\DistributorException;
use Etrias\PaazlConnector\Exceptions\NoSuchBarcodeException;
use Etrias\PaazlConnector\Services\LabelService;
use Etrias\PaazlConnector\Services\ShippingService;
use Etrias\PaazlConnector\SoapTypes\ExistingLabel;
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
use Etrias\PaazlConnector\SoapTypes\PrinterType;

/**
 * @coversNothing
 */
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
