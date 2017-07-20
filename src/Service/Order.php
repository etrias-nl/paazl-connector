<?php

namespace Etrias\PaazlConnector\Service;

use Etrias\PaazlConnector\ExceptionMap;
use Etrias\PaazlConnector\RequestFactory;
Use Etrias\PaazlConnector\ServiceType\Order as OrderServiceType;
use Etrias\PaazlConnector\StructType\OrderDetailsRequest;
use Etrias\PaazlConnector\StructType\OrderDetailsResponse;

class Order
{
    /** @var  OrderServiceType */
    protected $serviceType;

    /**
     * Constructor
     * @uses AbstractSoapClientBase::setLastError()
     * @uses AbstractSoapClientBase::initSoapClient()
     * @param array $wsdlOptions
     * @param bool $resetSoapClient allows to disable the SoapClient redefinition
     */
    public function __construct(array $wsdlOptions = array(), $resetSoapClient = true)
    {
        $this->serviceType = new OrderServiceType($wsdlOptions, $resetSoapClient);

    }

    /**
     * @param string $orderReference
     *
     * @return string
     */
    protected function getHash($orderReference)
    {
        return sha1($this->serviceType->getWebShopId() . $this->serviceType->getPassword() . $orderReference);
    }

    /**
     * Constructor method for orderDetailsRequest
     * @param string $orderReference
     * @param int $targetWebshop
     * @param bool $extendedDetails
     *
     * @return OrderDetailsResponse
     */
    public function orderDetails($orderReference, $targetWebshop = null, $extendedDetails = null)
    {
        $request = new OrderDetailsRequest(
            $this->getHash($orderReference),
            $this->serviceType->getWebShopId(),
            $targetWebshop,
            $orderReference,
            $extendedDetails
        );


        $response = $this->serviceType->orderDetails($request);


        if ($response === false) {
            throw end($this->serviceType->getLastError());
        }

        if ($response->getError()) {
            $exceptionName = ExceptionMap::getException($response->getError()->getCode());
            throw new $exceptionName;
        }

        return $response;
    }

}
