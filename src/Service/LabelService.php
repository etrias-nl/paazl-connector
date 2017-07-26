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
use Etrias\PaazlConnector\ServiceType\Get as GetServiceType;
use Etrias\PaazlConnector\StructType\ExistingLabelType;
use Etrias\PaazlConnector\StructType\GenerateExtraImageLabelRequest;
use Etrias\PaazlConnector\StructType\GenerateExtraImageLabelResponse;
use Etrias\PaazlConnector\StructType\GenerateExtraImageReturnLabelResponse;
use Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelRequest;
use Etrias\PaazlConnector\StructType\GenerateExtraPdfLabelResponse;
use Etrias\PaazlConnector\StructType\GenerateExtraPdfReturnLabelRequest;
use Etrias\PaazlConnector\StructType\GenerateExtraPdfReturnLabelResponse;
use Etrias\PaazlConnector\StructType\GenerateImageLabelsRequest;
use Etrias\PaazlConnector\StructType\GenerateImageLabelsResponse;
use Etrias\PaazlConnector\StructType\GenerateImageReturnLabelsResponse;
use Etrias\PaazlConnector\StructType\GeneratePdfLabelsRequest;
use Etrias\PaazlConnector\StructType\GeneratePdfLabelsResponse;
use Etrias\PaazlConnector\StructType\GeneratePdfReturnLabelsRequest;
use Etrias\PaazlConnector\StructType\GeneratePdfReturnLabelsResponse;
use Etrias\PaazlConnector\StructType\GenerateZplLabelsRequest;
use Etrias\PaazlConnector\StructType\GenerateZplLabelsResponse;
use Etrias\PaazlConnector\StructType\GetExistingImageLabelResponse;
use Etrias\PaazlConnector\StructType\GetExistingImageLabelsResponse;
use Etrias\PaazlConnector\StructType\GetExistingPdfLabelRequest;
use Etrias\PaazlConnector\StructType\GetExistingPdfLabelResponse;
use Etrias\PaazlConnector\StructType\GetExistingPdfLabelsRequest;
use Etrias\PaazlConnector\StructType\GetExistingPdfLabelsResponse;
use Etrias\PaazlConnector\StructType\OrderType;
use Etrias\PaazlConnector\StructType\ReturnLabelsOrderType;

class LabelService
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
     * @var GetServiceType
     */
    protected $getServiceType;

    /**
     * DocumentService constructor.
     * @param GenerateServiceType $generateServiceType
     * @param GetServiceType $getServiceType
     * @param SecurityServiceInterface $securityService
     */
    public function __construct(
        GenerateServiceType $generateServiceType,
        GetServiceType $getServiceType,
        SecurityServiceInterface $securityService
    )
    {
        $this->securityService = $securityService;
        $this->generateServiceType = $generateServiceType;
        $this->getServiceType = $getServiceType;
    }


    /**
     * @param array $orderReferences
     * @param null  $printer
     * @param null  $includeMetaData
     * @param null  $batch
     * @param null  $targetWebShop
     *
     * @return GeneratePdfLabelsResponse
     */
    public function generatePdfLabels(array $orderReferences, $printer = null, $includeMetaData = null, $batch = null, $targetWebShop = null)
    {
        $orders = [];

        foreach ($orderReferences as $orderReference) {
            $orders[] = new OrderType(
                $this->securityService->getHash($orderReference),
                $targetWebShop,
                $orderReference,
                null,
                $batch
            );
        }

        $request = new GeneratePdfLabelsRequest(
            $this->generateServiceType->getWebShopId(),
            $printer,
            $orders,
            $includeMetaData
        );

        $response = $this->generateServiceType->generatePdfLabels($request);

        return $this->processResponse($response, $this->generateServiceType);
    }

    /**
     * @param $orderReference
     * @param null $printer
     * @param null $includeMetaData
     * @param null $batch
     * @param null $targetWebShop
     *
     * @return GenerateExtraPdfLabelResponse
     */
    public function generateExtraPdfLabel($orderReference, $printer = null, $includeMetaData = null, $batch = null, $targetWebShop = null)
    {
        $request = new GenerateExtraPdfLabelRequest(
            $this->securityService->getHash($orderReference),
            $this->generateServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $printer,
            $batch,
            $includeMetaData
        );

        $response = $this->generateServiceType->generateExtraPdfLabel($request);

        return $this->processResponse($response, $this->generateServiceType);
    }

    /**
     * @param array $orderReferences
     * @param $shippingOption
     * @param null $printer
     * @param null $targetWebShop
     *
     * @return GeneratePdfReturnLabelsResponse
     */
    public function generatePdfReturnLabels(array $orderReferences, $shippingOption, $printer = null, $targetWebShop = null)
    {
        $orders = [];

        foreach ($orderReferences as $orderReference) {
            $orders[] = new ReturnLabelsOrderType(
                $this->securityService->getHash($orderReference),
                $targetWebShop,
                $orderReference,
                null,
                $shippingOption
            );
        }

        $request = new GeneratePdfReturnLabelsRequest(
            $printer
        );
        $request->setWebshop($this->generateServiceType->getWebShopId());
        $request->setOrder($orders);

        $response = $this->generateServiceType->generatePdfReturnLabels($request);

        return $this->processResponse($response, $this->generateServiceType);
    }

    /**
     * @param $orderReference
     * @param $shippingOption
     * @param null $printer
     * @param null $targetWebShop
     *
     * @return GenerateExtraPdfReturnLabelResponse
     */
    public function generateExtraPdfReturnLabel($orderReference, $shippingOption, $printer = null, $targetWebShop = null)
    {
        $request = new GenerateExtraPdfReturnLabelRequest($printer);
        $request->setShippingOption($shippingOption)
            ->setWebshop($this->generateServiceType->getWebShopId())
            ->setHash($this->securityService->getHash($orderReference))
            ->setTargetWebshop($targetWebShop)
            ->setOrderReference($orderReference)
            ->setShippingOption($shippingOption);

        $response = $this->generateServiceType->generateExtraPdfReturnLabel($request);

        return $this->processResponse($response, $this->generateServiceType);
    }

    /**
     * @param array $orderReferences
     * @param null  $includeMetaData
     * @param null  $batch
     * @param null  $targetWebShop
     *
     * @return GenerateImageLabelsResponse
     */
    public function generateImageLabels(array $orderReferences, $includeMetaData = null, $batch = null, $targetWebShop = null)
    {
        $orders = [];

        foreach ($orderReferences as $orderReference) {
            $orders[] = new OrderType(
                $this->securityService->getHash($orderReference),
                $targetWebShop,
                $orderReference,
                null,
                $batch
            );
        }

        $request = new GenerateImageLabelsRequest(
            $this->generateServiceType->getWebShopId(),
            $orders,
            $includeMetaData
        );

        $response = $this->generateServiceType->generateImageLabels($request);

        return $this->processResponse($response, $this->generateServiceType);
    }

    /**
     * @param array $orderReferences
     * @param $shippingOption
     * @param null $printer
     * @param null $targetWebShop
     *
     * @return GenerateImageReturnLabelsResponse
     */
    public function generateImageReturnLabels(array $orderReferences, $shippingOption, $printer = null, $targetWebShop = null)
    {
        $orders = [];

        foreach ($orderReferences as $orderReference) {
            $orders[] = new ReturnLabelsOrderType(
                $this->securityService->getHash($orderReference),
                $targetWebShop,
                $orderReference,
                null,
                $shippingOption
            );
        }

        $request = new GeneratePdfReturnLabelsRequest(
            $printer
        );
        $request->setWebshop($this->generateServiceType->getWebShopId());
        $request->setOrder($orders);

        $response = $this->generateServiceType->generateImageReturnLabels($request);

        return $this->processResponse($response, $this->generateServiceType);
    }

    /**
     * @param $orderReference
     * @param $shippingOption
     * @param null $printer
     * @param null $targetWebShop
     *
     * @return GenerateExtraImageReturnLabelResponse
     */
    public function generateExtraImageReturnLabel($orderReference, $shippingOption, $printer = null, $targetWebShop = null)
    {
        $request = new GenerateExtraPdfReturnLabelRequest($printer);
        $request->setShippingOption($shippingOption)
            ->setWebshop($this->generateServiceType->getWebShopId())
            ->setHash($this->securityService->getHash($orderReference))
            ->setTargetWebshop($targetWebShop)
            ->setOrderReference($orderReference)
            ->setShippingOption($shippingOption);

        $response = $this->generateServiceType->generateExtraImageReturnLabel($request);

        return $this->processResponse($response, $this->generateServiceType);
    }

    /**
     * @param $orderReference
     * @param null $includeMetaData
     * @param null $batch
     * @param null $targetWebShop
     *
     * @return GenerateExtraImageLabelResponse
     */
    public function generateExtraImageLabel($orderReference, $includeMetaData = null, $batch = null, $targetWebShop = null)
    {
        $request = new GenerateExtraImageLabelRequest(
            $this->securityService->getHash($orderReference),
            $this->generateServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $batch,
            $includeMetaData
        );

        $response = $this->generateServiceType->generateExtraImageLabel($request);

        return $this->processResponse($response, $this->generateServiceType);
    }

    /**
     * @param array $orderReferences
     * @param null  $printer
     * @param null  $includeMetaData
     * @param null  $batch
     * @param null  $targetWebShop
     *
     * @return GenerateZplLabelsResponse
     */
    public function generateZplLabels(array $orderReferences, $printer = null, $includeMetaData = null, $batch = null, $targetWebShop = null)
    {
        $orders = [];

        foreach ($orderReferences as $orderReference) {
            $orders[] = new OrderType(
                $this->securityService->getHash($orderReference),
                $targetWebShop,
                $orderReference,
                null,
                $batch
            );
        }

        $request = new GenerateZplLabelsRequest(
            $this->generateServiceType->getWebShopId(),
            $printer,
            $orders,
            $includeMetaData
        );

        $response = $this->generateServiceType->generateZplLabels($request);

        return $this->processResponse($response, $this->generateServiceType);
    }

    /**
     * @param $orderReference
     * @param $barCode
     * @param null $printer
     * @param null $includeMetaData
     * @param null $targetWebShop
     *
     * @return GetExistingPdfLabelResponse
     */
    public function getExistingPdfLabel($orderReference, $barCode, $printer = null, $includeMetaData = null, $targetWebShop = null)
    {
        $request = new GetExistingPdfLabelRequest($printer);
        $request->setHash($this->securityService->getHash($orderReference))
            ->setWebshop($this->getServiceType->getWebShopId())
            ->setOrderReference($orderReference)
            ->setBarcode($barCode)
            ->setIncludeMetaData($includeMetaData)
            ->setTargetWebshop($targetWebShop);

        $response = $this->getServiceType->getExistingPdfLabel($request);

        return $this->processResponse($response, $this->getServiceType);
    }

    /**
     * @param array $barCodes        [$orderReference => $barcode]
     * @param null  $printer
     * @param null  $includeMetaData
     *
     * @return GetExistingPdfLabelsResponse
     */
    public function getExistingPdfLabels(array $barCodes, $printer = null, $includeMetaData = null)
    {
        $labels = [];

        foreach ($barCodes as $orderReference => $barcode) {
            $labels[] = new ExistingLabelType(
                $this->securityService->getHash($orderReference),
                $this->getServiceType->getWebShopId(),
                $orderReference,
                $barcode
            );
        }

        $request = new GetExistingPdfLabelsRequest($printer);
        $request->setLabel($labels)
            ->setWebshop($this->getServiceType->getWebShopId())
            ->setIncludeMetaData($includeMetaData);

        $response = $this->getServiceType->getExistingPdfLabels($request);

        return $this->processResponse($response, $this->getServiceType);
    }

    /**
     * @param $orderReference
     * @param $barCode
     * @param null $includeMetaData
     * @param null $targetWebShop
     *
     * @return GetExistingImageLabelResponse
     */
    public function getExistingImageLabel($orderReference, $barCode, $includeMetaData = null, $targetWebShop = null)
    {
        $request = new GetExistingPdfLabelRequest();
        $request->setHash($this->securityService->getHash($orderReference))
            ->setWebshop($this->getServiceType->getWebShopId())
            ->setOrderReference($orderReference)
            ->setBarcode($barCode)
            ->setIncludeMetaData($includeMetaData)
            ->setTargetWebshop($targetWebShop);

        $response = $this->getServiceType->getExistingImageLabel($request);

        return $this->processResponse($response, $this->getServiceType);
    }

    /**
     * @param array $barCodes        [$orderReference => $barcode]
     * @param null  $includeMetaData
     *
     * @return GetExistingImageLabelsResponse
     */
    public function getExistingImageLabels(array $barCodes, $includeMetaData = null)
    {
        $labels = [];

        foreach ($barCodes as $orderReference => $barcode) {
            $labels[] = new ExistingLabelType(
                $this->securityService->getHash($orderReference),
                $this->getServiceType->getWebShopId(),
                $orderReference,
                $barcode
            );
        }

        $request = new GetExistingPdfLabelsRequest();
        $request->setLabel($labels)
            ->setWebshop($this->getServiceType->getWebShopId())
            ->setIncludeMetaData($includeMetaData);

        $response = $this->getServiceType->getExistingImageLabels($request);

        return $this->processResponse($response, $this->getServiceType);
    }
}