<?php

namespace Etrias\PaazlConnector\SoapTypes;

class History
{

    /**
     * @var carrierStatusType
     */
    protected $status = null;

    /**
     * Constructor
     *
     * @var carrierStatusType $status
     */
    public function __construct($status)
    {
        $this->status = $status;
    }

    /**
     * @return carrierStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param carrierStatusType $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }


}

