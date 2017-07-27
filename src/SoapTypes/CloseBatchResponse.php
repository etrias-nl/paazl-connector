<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\ResultInterface;

class CloseBatchResponse implements ResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var batchStatusType
     */
    protected $summary = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var batchStatusType $summary
     */
    public function __construct($error, $summary)
    {
        $this->error = $error;
        $this->summary = $summary;
    }

    /**
     * @return errorType
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param errorType $error
     * @return $this
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }

    /**
     * @return batchStatusType
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param batchStatusType $summary
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
        return $this;
    }


}

