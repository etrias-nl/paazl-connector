<?php

namespace Etrias\PaazlConnector\SoapTypes;

class ServicePointsType
{

    /**
     * @var servicePoint
     */
    protected $servicePoint = null;

    /**
     * Constructor
     *
     * @var servicePoint $servicePoint
     */
    public function __construct($servicePoint)
    {
        $this->servicePoint = $servicePoint;
    }

    /**
     * @return servicePoint
     */
    public function getServicePoint()
    {
        return $this->servicePoint;
    }

    /**
     * @param servicePoint $servicePoint
     * @return $this
     */
    public function setServicePoint($servicePoint)
    {
        $this->servicePoint = $servicePoint;
        return $this;
    }


}

