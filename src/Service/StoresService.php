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
use Etrias\PaazlConnector\StructType\BaseCheckoutRequestType;
use Etrias\PaazlConnector\StructType\ChangeStoreDetailsType;
use Etrias\PaazlConnector\StructType\ChangeStoresRequestType;
use Etrias\PaazlConnector\StructType\ChangeStoresResponseType;
use Etrias\PaazlConnector\StructType\CheckoutResponse;
use Etrias\PaazlConnector\StructType\DeleteStoresRequest;
use Etrias\PaazlConnector\StructType\DeleteStoresResponse;
use Etrias\PaazlConnector\StructType\DeleteStoreType;
use Etrias\PaazlConnector\StructType\GenerateAdditionalImageDocumentResponse;
use Etrias\PaazlConnector\StructType\GenerateAdditionalPdfDocumentRequest;
use Etrias\PaazlConnector\StructType\GenerateAdditionalPdfDocumentResponse;
use Etrias\PaazlConnector\StructType\GeneratePdfCustomsDocumentsRequest;
use Etrias\PaazlConnector\StructType\GeneratePdfCustomsDocumentsResponse;
use Etrias\PaazlConnector\StructType\ListStoresRequest;
use Etrias\PaazlConnector\StructType\ListStoresResponse;
use Etrias\PaazlConnector\StructType\OrderType;
use Etrias\PaazlConnector\StructType\StoreDetailsType;

class StoresService
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
     * @param StoreDetailsType[] $stores
     * @param null               $targetWebShop
     *
     * @return ChangeStoresResponseType
     */
    public function createStores(array $stores, $targetWebShop = null)
    {
        $changeStores = [];
        foreach ($stores as $store) {
            $changeStore = new ChangeStoreDetailsType($this->securityService->getHash($store->getCode()));
            $changeStore->setName($store->getName())
                ->setAddress($store->getAddress())
                ->setBusinessHours($store->getBusinessHours())
                ->setCode($store->getCode())
                ->setCoordinates($store->getCoordinates());
            $changeStores[] = $changeStore;
        }

        $request = new ChangeStoresRequestType(
            $this->generalServiceType->getWebShopId(),
            $targetWebShop,
            $changeStores
        );

        $response = $this->generalServiceType->createStores($request);

        return $this->processResponse($response, $this->generalServiceType);
    }

    /**
     * @param StoreDetailsType[] $stores
     * @param null               $targetWebShop
     *
     * @return ChangeStoresResponseType
     */
    public function updateStores(array $stores, $targetWebShop = null)
    {
        $changeStores = [];
        foreach ($stores as $store) {
            $changeStore = new ChangeStoreDetailsType($this->securityService->getHash($store->getCode()));
            $changeStore->setName($store->getName())
                ->setAddress($store->getAddress())
                ->setBusinessHours($store->getBusinessHours())
                ->setCode($store->getCode())
                ->setCoordinates($store->getCoordinates());
            $changeStores[] = $changeStore;
        }

        $request = new ChangeStoresRequestType(
            $this->generalServiceType->getWebShopId(),
            $targetWebShop,
            $changeStores
        );

        $response = $this->generalServiceType->updateStores($request);

        return $this->processResponse($response, $this->generalServiceType);
    }

    /**
     * @param array $storeCodes
     * @param null  $targetWebShop
     *
     * @return DeleteStoresResponse
     */
    public function deleteStores(array $storeCodes, $targetWebShop = null)
    {
        $stores = [];

        foreach ($storeCodes as $storeCode) {
            $stores[] = new DeleteStoreType($this->securityService->getHash($storeCode), $storeCode);
        }

        $request = new DeleteStoresRequest(
            $this->generalServiceType->getWebShopId(),
            $targetWebShop,
            $stores
        );

        $response = $this->generalServiceType->deleteStores($request);

        return $this->processResponse($response, $this->generalServiceType);
    }

    /**
     * @param null $targetWebShop
     *
     * @return ListStoresResponse
     */
    public function listStores($targetWebShop = null)
    {
        $today = new DateTime();
        $request = new ListStoresRequest(
            $this->securityService->getHash($today->format('Ymd')),
            $this->generalServiceType->getWebShopId(),
            $targetWebShop
        );

        $response = $this->generalServiceType->listStores($request);

        return $this->processResponse($response, $this->generalServiceType);
    }

}