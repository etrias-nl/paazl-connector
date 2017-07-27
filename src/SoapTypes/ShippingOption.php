<?php

namespace Etrias\PaazlConnector\SoapTypes;

class ShippingOption
{

    /**
     * @var string
     */
    protected $distributor = null;

    /**
     * @var string
     */
    protected $shippingOption = null;

    /**
     * @var servicePointType
     */
    protected $servicePoint = null;

    /**
     * Constructor
     *
     * @var string $distributor
     * @var string $shippingOption
     * @var servicePointType $servicePoint
     */
    public function __construct($distributor, $shippingOption, $servicePoint)
    {
        $this->distributor = $distributor;
        $this->shippingOption = $shippingOption;
        $this->servicePoint = $servicePoint;
    }

    /**
     * @return string
     */
    public function getDistributor()
    {
        return $this->distributor;
    }

    /**
     * @param string $distributor
     * @return $this
     */
    public function setDistributor($distributor)
    {
        $this->distributor = $distributor;
        return $this;
    }

    /**
     * @return string
     */
    public function getShippingOption()
    {
        return $this->shippingOption;
    }

    /**
     * @param string $shippingOption
     * @return $this
     */
    public function setShippingOption($shippingOption)
    {
        $this->shippingOption = $shippingOption;
        return $this;
    }

    /**
     * @return servicePointType
     */
    public function getServicePoint()
    {
        return $this->servicePoint;
    }

    /**
     * @param servicePointType $servicePoint
     * @return $this
     */
    public function setServicePoint($servicePoint)
    {
        $this->servicePoint = $servicePoint;
        return $this;
    }


}

