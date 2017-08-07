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
use Etrias\PaazlConnector\Exceptions\NotAvailableProofOfDeliveryDocumentException;
use Etrias\PaazlConnector\Exceptions\UnsupportedOperationException;
use Etrias\PaazlConnector\Services\DocumentService;
use Etrias\PaazlConnector\Services\DocumentServiceInterface;
use Etrias\PaazlConnector\SoapTypes\AdditionalDocumentType;
use Etrias\PaazlConnector\SoapTypes\GeneratePdfCustomsDocumentsResponse;

/**
 * @coversNothing
 */
class DocumentServiceTest extends AbstractServiceTest
{
    /**
     * @var DocumentServiceInterface
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
