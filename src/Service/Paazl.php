<?php

namespace Etrias\PaazlConnector\Service;

use DateTime;
use Etrias\PaazlConnector\Processor\ResponseProcessor;
Use Etrias\PaazlConnector\ServiceType\Address as AddressServiceType;
Use Etrias\PaazlConnector\ServiceType\Change as ChangeServiceType;
Use Etrias\PaazlConnector\ServiceType\Delete as DeleteServiceType;
Use Etrias\PaazlConnector\ServiceType\Generate as GenerateServiceType;
Use Etrias\PaazlConnector\ServiceType\Get as GetServiceType;
Use Etrias\PaazlConnector\ServiceType\Order as OrderServiceType;
Use Etrias\PaazlConnector\ServiceType\Orders as OrdersServiceType;
Use Etrias\PaazlConnector\ServiceType\Commit as CommitServiceType;
Use Etrias\PaazlConnector\ServiceType\Update as UpdateServiceType;
Use Etrias\PaazlConnector\ServiceType\Proof as ProofServiceType;
Use Etrias\PaazlConnector\ServiceType\Rate as RateServiceType;
Use Etrias\PaazlConnector\ServiceType\Shipping as ShippingServiceType;
use Etrias\PaazlConnector\StructType\AddressRequest;
use Etrias\PaazlConnector\StructType\AddressResponse;
use Etrias\PaazlConnector\StructType\ChangeOrderRequest;
use Etrias\PaazlConnector\StructType\ChangeProducts;
use Etrias\PaazlConnector\StructType\ChangeSenderAddress;
use Etrias\PaazlConnector\StructType\ChangeShippingMethod;
use Etrias\PaazlConnector\StructType\CommitOrderRequest;
use Etrias\PaazlConnector\StructType\DateRangeType;
use Etrias\PaazlConnector\StructType\DeleteOrderRequest;
use Etrias\PaazlConnector\StructType\ExistingLabelType;
use Etrias\PaazlConnector\StructType\GenerateAdditionalImageDocumentResponse;
use Etrias\PaazlConnector\StructType\GenerateAdditionalPdfDocumentRequest;
use Etrias\PaazlConnector\StructType\GenerateAdditionalPdfDocumentResponse;
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
use Etrias\PaazlConnector\StructType\GeneratePdfCustomsDocumentsRequest;
use Etrias\PaazlConnector\StructType\GeneratePdfCustomsDocumentsResponse;
use Etrias\PaazlConnector\StructType\GeneratePdfLabelsRequest;
use Etrias\PaazlConnector\StructType\GeneratePdfLabelsResponse;
use Etrias\PaazlConnector\StructType\GeneratePdfReturnLabelsRequest;
use Etrias\PaazlConnector\StructType\GeneratePdfReturnLabelsResponse;
use Etrias\PaazlConnector\StructType\GenerateShippingManifestRequest;
use Etrias\PaazlConnector\StructType\GenerateZplLabelsRequest;
use Etrias\PaazlConnector\StructType\GenerateZplLabelsResponse;
use Etrias\PaazlConnector\StructType\GetExistingImageLabelResponse;
use Etrias\PaazlConnector\StructType\GetExistingImageLabelsResponse;
use Etrias\PaazlConnector\StructType\GetExistingPdfLabelRequest;
use Etrias\PaazlConnector\StructType\GetExistingPdfLabelResponse;
use Etrias\PaazlConnector\StructType\GetExistingPdfLabelsRequest;
use Etrias\PaazlConnector\StructType\GetExistingPdfLabelsResponse;
use Etrias\PaazlConnector\StructType\LabelType;
use Etrias\PaazlConnector\StructType\OrderDetailsRequest;
use Etrias\PaazlConnector\StructType\OrderDetailsResponse;
use Etrias\PaazlConnector\StructType\OrderRequest;
use Etrias\PaazlConnector\StructType\OrderSaveResponseType;
use Etrias\PaazlConnector\StructType\OrderStatusRequest;
use Etrias\PaazlConnector\StructType\OrderStatusResponse;
use Etrias\PaazlConnector\StructType\OrdersToShipRequest;
use Etrias\PaazlConnector\StructType\OrdersToShipResponse;
use Etrias\PaazlConnector\StructType\OrderType;
use Etrias\PaazlConnector\StructType\Products;
use Etrias\PaazlConnector\StructType\ProofOfDeliveryRequest;
use Etrias\PaazlConnector\StructType\ProofOfDeliveryResponse;
use Etrias\PaazlConnector\StructType\RateRequest;
use Etrias\PaazlConnector\StructType\RateResponse;
use Etrias\PaazlConnector\StructType\ReturnLabelsOrderType;
use Etrias\PaazlConnector\StructType\SenderAddress;
use Etrias\PaazlConnector\StructType\ShippingAddress;
use Etrias\PaazlConnector\StructType\ShippingMethod;
use Etrias\PaazlConnector\StructType\ShippingOptionRequest;
use Etrias\PaazlConnector\StructType\ShippingOptionResponse;
use Etrias\PaazlConnector\StructType\UpdateOrderRequest;
use RuntimeException;

class Paazl
{
    use ResponseProcessor;

    /**
     * @var AddressServiceType
     */
    protected $addressServiceType;
    /**
     * @var OrderServiceType
     */
    protected $orderServiceType;
    /**
     * @var CommitServiceType
     */
    protected $commitServiceType;
    /**
     * @var ShippingServiceType
     */
    protected $shippingServiceType;
    /**
     * @var UpdateServiceType
     */
    protected $updateServiceType;
    /**
     * @var ChangeServiceType
     */
    protected $changeServiceType;
    /**
     * @var DeleteServiceType
     */
    protected $deleteServiceType;
    /**
     * @var OrdersServiceType
     */
    protected $ordersServiceType;
    /**
     * @var RateServiceType
     */
    protected $rateServiceType;
    /**
     * @var ProofServiceType
     */
    protected $proofServiceType;
    /**
     * @var GenerateServiceType
     */
    protected $generateServiceType;
    /**
     * @var GetServiceType
     */
    protected $getServiceType;

    /**
     * Constructor
     * @param AddressServiceType $addressServiceType
     * @param ChangeServiceType $changeServiceType
     * @param DeleteServiceType $deleteServiceType
     * @param GenerateServiceType $generateServiceType
     * @param GetServiceType $getServiceType
     * @param OrderServiceType $orderServiceType
     * @param OrdersServiceType $ordersServiceType
     * @param CommitServiceType $commitServiceType
     * @param ProofServiceType $proofServiceType
     * @param RateServiceType $rateServiceType
     * @param ShippingServiceType $shippingServiceType
     * @param UpdateServiceType $updateServiceType
     */
    public function __construct(
        AddressServiceType $addressServiceType,
        ChangeServiceType $changeServiceType,
        DeleteServiceType $deleteServiceType,
        GenerateServiceType $generateServiceType,
        GetServiceType $getServiceType,
        OrderServiceType $orderServiceType,
        OrdersServiceType $ordersServiceType,
        CommitServiceType $commitServiceType,
        ProofServiceType $proofServiceType,
        RateServiceType $rateServiceType,
        ShippingServiceType $shippingServiceType,
        UpdateServiceType $updateServiceType
    )
    {
        $this->addressServiceType = $addressServiceType;
        $this->orderServiceType = $orderServiceType;
        $this->commitServiceType = $commitServiceType;
        $this->shippingServiceType = $shippingServiceType;
        $this->updateServiceType = $updateServiceType;
        $this->changeServiceType = $changeServiceType;
        $this->deleteServiceType = $deleteServiceType;
        $this->ordersServiceType = $ordersServiceType;
        $this->rateServiceType = $rateServiceType;
        $this->proofServiceType = $proofServiceType;
        $this->generateServiceType = $generateServiceType;
        $this->getServiceType = $getServiceType;
    }

    /**
     * @param $orderReference
     * @param $barcode
     * @param $documentType
     * @param null $printer
     * @param null $targetWebShop
     * @return GenerateAdditionalPdfDocumentResponse
     */
    public function generateAdditionalPdfDocument($orderReference, $barcode, $documentType, $printer = null, $targetWebShop = null)
    {
        $request = new GenerateAdditionalPdfDocumentRequest($printer);
        $request->setHash($this->getHash($orderReference))
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
     * @return GenerateAdditionalImageDocumentResponse
     */
    public function generateAdditionalImageDocument($orderReference, $barcode, $documentType, $targetWebShop = null)
    {
        $request = new GenerateAdditionalPdfDocumentRequest();
        $request->setHash($this->getHash($orderReference))
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
     * @return GeneratePdfCustomsDocumentsResponse
     */
    public function generatePdfCustomsDocuments(array $orderReferences, $targetWebShop = null)
    {
        $orders = [];

        foreach ($orderReferences as $orderReference) {
            $orders[] = new OrderType(
                $this->getHash($orderReference),
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

    /**
     * @param array $orderReferences
     * @param null $printer
     * @param null $includeMetaData
     * @param null $batch
     * @param null $targetWebShop
     * @return GeneratePdfLabelsResponse
     */
    public function generatePdfLabels(array $orderReferences, $printer = null, $includeMetaData = null, $batch = null, $targetWebShop = null)
    {
        $orders = [];

        foreach ($orderReferences as $orderReference) {
            $orders[] = new OrderType(
                $this->getHash($orderReference),
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
     * @return GenerateExtraPdfLabelResponse
     */
    public function generateExtraPdfLabel($orderReference, $printer = null, $includeMetaData = null, $batch = null, $targetWebShop = null)
    {
        $request = new GenerateExtraPdfLabelRequest(
            $this->getHash($orderReference),
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
     * @return GeneratePdfReturnLabelsResponse
     */
    public function generatePdfReturnLabels(array $orderReferences, $shippingOption, $printer = null, $targetWebShop = null)
    {
        $orders = [];

        foreach ($orderReferences as $orderReference) {
            $orders[] = new ReturnLabelsOrderType(
                $this->getHash($orderReference),
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
     * @return GenerateExtraPdfReturnLabelResponse
     */
    public function generateExtraPdfReturnLabel($orderReference, $shippingOption, $printer = null, $targetWebShop = null)
    {
        $request = new GenerateExtraPdfReturnLabelRequest($printer);
        $request->setShippingOption($shippingOption)
            ->setWebshop($this->generateServiceType->getWebShopId())
            ->setHash($this->getHash($orderReference))
            ->setTargetWebshop($targetWebShop)
            ->setOrderReference($orderReference)
            ->setShippingOption($shippingOption);

        $response = $this->generateServiceType->generateExtraPdfReturnLabel($request);

        return $this->processResponse($response, $this->generateServiceType);
    }

    /**
     * @param array $orderReferences
     * @param null $includeMetaData
     * @param null $batch
     * @param null $targetWebShop
     * @return GenerateImageLabelsResponse
     */
    public function generateImageLabels(array $orderReferences, $includeMetaData = null, $batch = null, $targetWebShop = null)
    {
        $orders = [];

        foreach ($orderReferences as $orderReference) {
            $orders[] = new OrderType(
                $this->getHash($orderReference),
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
     * @return GenerateImageReturnLabelsResponse
     */
    public function generateImageReturnLabels(array $orderReferences, $shippingOption, $printer = null, $targetWebShop = null)
    {
        $orders = [];

        foreach ($orderReferences as $orderReference) {
            $orders[] = new ReturnLabelsOrderType(
                $this->getHash($orderReference),
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
     * @return GenerateExtraImageReturnLabelResponse
     */
    public function generateExtraImageReturnLabel($orderReference, $shippingOption, $printer = null, $targetWebShop = null)
    {
        $request = new GenerateExtraPdfReturnLabelRequest($printer);
        $request->setShippingOption($shippingOption)
            ->setWebshop($this->generateServiceType->getWebShopId())
            ->setHash($this->getHash($orderReference))
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
     * @return GenerateExtraImageLabelResponse
     */
    public function generateExtraImageLabel($orderReference, $includeMetaData = null, $batch = null, $targetWebShop = null)
    {
        $request = new GenerateExtraImageLabelRequest(
            $this->getHash($orderReference),
            $this->addressServiceType->getWebShopId(),
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
     * @param null $printer
     * @param null $includeMetaData
     * @param null $batch
     * @param null $targetWebShop
     * @return GenerateZplLabelsResponse
     */
    public function generateZplLabels(array $orderReferences, $printer = null, $includeMetaData = null, $batch = null, $targetWebShop = null)
    {
        $orders = [];

        foreach ($orderReferences as $orderReference) {
            $orders[] = new OrderType(
                $this->getHash($orderReference),
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
     * @param DateTime $startDate
     * @param DateTime $endDate
     * @param null $distributor
     * @param null $targetWebShop
     * @throws RuntimeException
     */
    public function generateShippingManifest(DateTime $startDate, DateTime $endDate, $distributor = null, $targetWebShop = null)
    {
        throw new RuntimeException('Not Implemented');
    }

    /**
     * @param $orderReference
     * @param $zipCode
     * @param $houseNumber
     * @param null $addition
     * @param null $targetWebShop
     * @return AddressResponse
     */
    public function getAddress($orderReference, $zipCode, $houseNumber, $addition = null, $targetWebShop = null)
    {
        $request = new AddressRequest(
            $this->getHash($orderReference),
            $this->addressServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $zipCode,
            $houseNumber,
            $addition
        );

        $response = $this->addressServiceType->address($request);

        return $this->processResponse($response, $this->addressServiceType);
    }

    /**
     * @param $orderReference
     * @param $barCode
     * @param null $printer
     * @param null $includeMetaData
     * @param null $targetWebShop
     * @return GetExistingPdfLabelResponse
     */
    public function getExistingPdfLabel($orderReference, $barCode, $printer = null, $includeMetaData = null, $targetWebShop = null)
    {
        $request = new GetExistingPdfLabelRequest($printer);
        $request->setHash($this->getHash($orderReference))
            ->setWebshop($this->getServiceType->getWebShopId())
            ->setOrderReference($orderReference)
            ->setBarcode($barCode)
            ->setIncludeMetaData($includeMetaData)
            ->setTargetWebshop($targetWebShop);

        $response = $this->getServiceType->getExistingPdfLabel($request);

        return $this->processResponse($response, $this->getServiceType);
    }

    /**
     * @param array $barCodes [$orderReference => $barcode]
     * @param null $printer
     * @param null $includeMetaData
     * @return GetExistingPdfLabelsResponse
     */
    public function getExistingPdfLabels(array $barCodes, $printer = null, $includeMetaData = null)
    {
        $labels = [];

        foreach ($barCodes as $orderReference => $barcode ) {
            $labels[] = new ExistingLabelType(
                $this->getHash($orderReference),
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
     * @return GetExistingImageLabelResponse
     */
    public function getExistingImageLabel($orderReference, $barCode, $includeMetaData = null, $targetWebShop = null)
    {
        $request = new GetExistingPdfLabelRequest();
        $request->setHash($this->getHash($orderReference))
            ->setWebshop($this->getServiceType->getWebShopId())
            ->setOrderReference($orderReference)
            ->setBarcode($barCode)
            ->setIncludeMetaData($includeMetaData)
            ->setTargetWebshop($targetWebShop);

        $response = $this->getServiceType->getExistingImageLabel($request);

        return $this->processResponse($response, $this->getServiceType);
    }

    /**
     * @param array $barCodes [$orderReference => $barcode]
     * @param null $includeMetaData
     * @return GetExistingImageLabelsResponse
     */
    public function getExistingImageLabels(array $barCodes, $includeMetaData = null)
    {
        $labels = [];

        foreach ($barCodes as $orderReference => $barcode ) {
            $labels[] = new ExistingLabelType(
                $this->getHash($orderReference),
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


    /**
     * Constructor method for orderDetailsRequest
     * @param string $orderReference
     * @param int $targetWebShop
     * @param bool $extendedDetails
     *
     * @return OrderDetailsResponse
     */
    public function getOrderDetails($orderReference, $targetWebShop = null, $extendedDetails = null)
    {
        $request = new OrderDetailsRequest(
            $this->getHash($orderReference),
            $this->orderServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $extendedDetails
        );

        $response = $this->orderServiceType->orderDetails($request);

        return $this->processResponse($response, $this->orderServiceType);
    }

    /**
     * @param $orderReference
     * @param Products $products
     * @param null $targetWebShop
     * @return OrderSaveResponseType
     */
    public function createOrder($orderReference, Products $products, $targetWebShop = null)
    {
        $request = new OrderRequest(
            $this->getHash($orderReference),
            $this->orderServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $products
        );

        $response = $this->orderServiceType->order($request);

        return $this->processResponse($response, $this->orderServiceType);
    }

    /**
     * @param $orderReference
     * @param Products $products
     * @param null $targetWebShop
     * @return OrderSaveResponseType
     */
    public function updateOrder($orderReference, Products $products, $targetWebShop = null)
    {
        $request = new UpdateOrderRequest(
            $this->getHash($orderReference),
            $this->orderServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $products
        );

        $response = $this->updateServiceType->updateorder($request);

        return $this->processResponse($response, $this->updateServiceType);
    }

    /**
     * @param $orderReference
     * @param null $newOrderReference
     * @param ChangeShippingMethod|null $shippingMethod
     * @param ShippingAddress|null $shippingAddress
     * @param ChangeSenderAddress|null $returnAddress
     * @param ChangeSenderAddress|null $shipperAddress
     * @param ChangeProducts|null $products
     * @param null $totalAmount
     * @param null $totalAmountCurrency
     * @param null $language
     * @param null $customerEmail
     * @param null $customerPhoneNumber
     * @param null $targetWebShop
     * @return OrderSaveResponseType
     */
    public function changeOrder(
        $orderReference,
        $newOrderReference = null,
        ChangeShippingMethod $shippingMethod = null,
        ShippingAddress $shippingAddress = null,
        ChangeSenderAddress $returnAddress = null,
        ChangeSenderAddress $shipperAddress = null,
        ChangeProducts $products = null,
        $totalAmount = null,
        $totalAmountCurrency = null,
        $language = null,
        $customerEmail = null,
        $customerPhoneNumber = null,
        $targetWebShop = null
    ) {
        $request = new ChangeOrderRequest(
            $this->getHash($orderReference),
            $this->orderServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $newOrderReference,
            $totalAmount,
            $totalAmountCurrency,
            $language,
            $customerEmail,
            $customerPhoneNumber,
            $shippingMethod,
            $shipperAddress,
            $returnAddress,
            $shippingAddress,
            $products
        );

        $response = $this->changeServiceType->changeOrder($request);

        return $this->processResponse($response, $this->updateServiceType);
    }

    public function deleteOrder($orderReference, $targetWebShop = null)
    {
        $request = new DeleteOrderRequest(
            $this->getHash($orderReference),
            $this->orderServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference
        );

        $response = $this->deleteServiceType->deleteOrder($request);

        return $this->processResponse($response, $this->updateServiceType);
    }

    /**
     * @param $orderReference
     * @param ShippingMethod $shippingMethod
     * @param ShippingAddress $shippingAddress
     * @param null $totalAmount
     * @param null $totalAmountCurrency
     * @param null $language
     * @param null $customerEmail
     * @param null $customerPhoneNumber
     * @param SenderAddress|null $returnAddress
     * @param SenderAddress|null $shipperAddress
     * @param null $pendingOrderReference
     * @param null $targetWebShop
     * @return OrderSaveResponseType
     */
    public function commitOrder(
        $orderReference,
        ShippingMethod $shippingMethod,
        ShippingAddress $shippingAddress,
        $totalAmount = null,
        $totalAmountCurrency = null,
        $language = null,
        $customerEmail = null,
        $customerPhoneNumber = null,
        SenderAddress $returnAddress = null,
        SenderAddress $shipperAddress = null,
        $pendingOrderReference = null,
        $targetWebShop = null
    )
    {
        if ($pendingOrderReference === null) {
            $pendingOrderReference = $orderReference;
        }

        $request = new CommitOrderRequest(
          $this->getHash($pendingOrderReference),
          $this->commitServiceType->getWebShopId(),
          $targetWebShop,
          $orderReference,
          $pendingOrderReference,
          $totalAmount,
          $totalAmountCurrency,
          $language,
          $customerEmail,
          $customerPhoneNumber,
          $shippingMethod,
          $shipperAddress,
          $returnAddress,
          $shippingAddress
        );

        $response = $this->commitServiceType->commitOrder($request);

        return $this->processResponse($response, $this->commitServiceType);
    }

    /**
     * @param DateTime $date
     * @param null $targetWebShop
     * @return OrdersToShipResponse
     */
    public function getOrdersToShip(DateTime $date = null, $targetWebShop = null)
    {
        if ($date === null) {
            $date = new DateTime();
        }

        $request = new OrdersToShipRequest(
            $this->getHash($date->format('Ymd')),
            $this->ordersServiceType->getWebShopId(),
            $targetWebShop,
            $date->format('Y-m-d')
        );

        $response = $this->ordersServiceType->ordersToShip($request);

        return $this->processResponse($response, $this->ordersServiceType);
    }

    /**
     * @param $orderReference
     * @param bool|null $includeLabels
     * @param bool|null $getCarrierStatus
     * @param null $targetWebShop
     * @return OrderStatusResponse
     */
    public function getOrderStatus(
        $orderReference,
        $includeLabels = null,
        $getCarrierStatus = null,
        $targetWebShop = null
    )
    {
        $request = new OrderStatusRequest(
            $this->getHash($orderReference),
            $this->commitServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $includeLabels,
            $getCarrierStatus
        );

        $response = $this->orderServiceType->orderStatus($request);

        return $this->processResponse($response, $this->orderServiceType);
    }

    /**
     * @param $barcode
     * @param null $targetWebShop
     * @return ProofOfDeliveryResponse
     */
    public function getProofOfDelivery($barcode, $targetWebShop = null)
    {
        $request = new ProofOfDeliveryRequest(
            $this->getHash($barcode),
            $this->commitServiceType->getWebShopId(),
            $targetWebShop,
            $barcode
        );

        $response = $this->proofServiceType->proofOfDelivery($request);

        return $this->processResponse($response, $this->proofServiceType);
    }

    /**
     * @param $orderReference
     * @param null $country
     * @param null $postalCode
     * @param null $shippingOption
     * @param null $targetWebShop
     * @return RateResponse
     */
    public function getRates($orderReference, $country = null, $postalCode = null, $shippingOption = null, $targetWebShop = null)
    {
        $request = new RateRequest(
            $this->getHash($orderReference),
            $this->rateServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $country,
            $postalCode,
            $shippingOption
        );
        $response = $this->rateServiceType->rate($request);

        return $this->processResponse($response, $this->rateServiceType);
    }


    /**
     * @param $orderReference
     * @param DateRangeType|null $deliveryDateRange
     * @param string $country
     * @param null $postcode
     * @param bool $extendedDeliveryDateDetails
     * @param null $shippingOption
     * @param null $deliveryEstimate
     * @param $targetWebShop
     * @return ShippingOptionResponse
     */
    public function getShippingOptions(
        $orderReference,
        $country = 'NL',
        DateRangeType $deliveryDateRange = null,
        $postcode = null,
        $extendedDeliveryDateDetails = false,
        $shippingOption = null,
        $deliveryEstimate = null,
        $targetWebShop
    )
    {
        $request = new ShippingOptionRequest(
            $this->getHash($orderReference),
            $this->shippingServiceType->getWebShopId(),
            $targetWebShop,
            $orderReference,
            $postcode,
            $country,
            null,
            null,
            $extendedDeliveryDateDetails,
            $shippingOption,
            $deliveryEstimate,
            $deliveryDateRange
        );

        $response = $this->shippingServiceType->shippingOption($request);

        return $this->processResponse($response, $this->shippingServiceType);
    }

    /**
     * @param string $orderReference
     *
     * @return string
     */
    protected function getHash($input)
    {
        return sha1($this->orderServiceType->getWebShopId() . $this->orderServiceType->getPassword() . $input);
    }

}
