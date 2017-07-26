<?php
/**
 * Created by PhpStorm.
 * User: heiligbrood
 * Date: 26-07-17
 * Time: 19:56
 */

namespace Etrias\PaazlConnector\Service;

use DateTime;
use Etrias\PaazlConnector\Processor\Processor;
use Etrias\PaazlConnector\ServiceType\Service as GeneralServiceType;
use Etrias\PaazlConnector\StructType\BatchStatusRequest;
use Etrias\PaazlConnector\StructType\BatchStatusResponse;
use Etrias\PaazlConnector\StructType\CloseBatchRequest;
use Etrias\PaazlConnector\StructType\CloseBatchResponse;
use Etrias\PaazlConnector\StructType\GenerateAdditionalImageDocumentResponse;
use Etrias\PaazlConnector\StructType\GenerateAdditionalPdfDocumentRequest;
use Etrias\PaazlConnector\StructType\GenerateAdditionalPdfDocumentResponse;
use Etrias\PaazlConnector\StructType\GeneratePdfCustomsDocumentsRequest;
use Etrias\PaazlConnector\StructType\GeneratePdfCustomsDocumentsResponse;
use Etrias\PaazlConnector\StructType\ListOpenBatchesRequest;
use Etrias\PaazlConnector\StructType\ListOpenBatchesResponse;
use Etrias\PaazlConnector\StructType\OpenBatchRequest;
use Etrias\PaazlConnector\StructType\OpenBatchResponse;
use Etrias\PaazlConnector\StructType\OrderType;
use Etrias\PaazlConnector\StructType\ProofOfDeliveryRequest;
use Etrias\PaazlConnector\StructType\ProofOfDeliveryResponse;

class BatchService
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
     * @param null $distributor
     * @param null $shippingOption
     * @param null $country
     * @param null $targetWebShop
     *
     * @return OpenBatchResponse
     */
    public function openBatch(
        $distributor = null,
        $shippingOption = null,
        $country = null,
        $targetWebShop = null
    ) {
        $today = new DateTime();
        $hashInput = implode('', [
            $distributor,
            $shippingOption,
            $country,
            $today->format('Ymd'),
        ]);

        $request = new OpenBatchRequest(
            $this->securityService->getHash($hashInput),
            $this->generalServiceType->getWebShopId(),
            $targetWebShop,
            $distributor,
            $shippingOption,
            $country
        );

        $response = $this->generalServiceType->openBatch($request);

        return $this->processResponse($response, $this->generalServiceType);
    }

    /**
     * @param $batchId
     * @param null $targetWebShop
     *
     * @return CloseBatchResponse
     */
    public function closeBatch($batchId, $targetWebShop = null)
    {
        $request = new CloseBatchRequest(
            $this->securityService->getHash($batchId),
            $this->generalServiceType->getWebShopId(),
            $targetWebShop,
            $batchId
        );

        $response = $this->generalServiceType->closeBatch($request);

        return $this->processResponse($response, $this->generalServiceType);
    }

    /**
     * @param $batchId
     * @param null $targetWebShop
     *
     * @return BatchStatusResponse
     */
    public function getBatchStatus($batchId, $targetWebShop = null)
    {
        $request = new BatchStatusRequest(
            $this->securityService->getHash($batchId),
            $this->generalServiceType->getWebShopId(),
            $targetWebShop,
            $batchId
        );

        $response = $this->generalServiceType->batchStatus($request);

        return $this->processResponse($response, $this->generalServiceType);
    }

    /**
     * @param null $targetWebShop
     *
     * @return ListOpenBatchesResponse
     */
    public function listOpenBatches($targetWebShop = null)
    {
        $today = new DateTime();
        $request = new ListOpenBatchesRequest(
            $this->securityService->getHash($today->format('Ymd')),
            $this->generalServiceType->getWebShopId(),
            $targetWebShop
        );

        $response = $this->generalServiceType->listOpenBatches($request);

        return $this->processResponse($response, $this->generalServiceType);
    }

}