<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Etrias\PaazlConnector\Result\PaazlResultInterface;

class BatchStatusResponse implements PaazlResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var batchStatusType
     */
    protected $batch = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var batchStatusType $batch
     */
    public function __construct($error, $batch)
    {
        $this->error = $error;
        $this->batch = $batch;
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
    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * @param batchStatusType $batch
     * @return $this
     */
    public function setBatch($batch)
    {
        $this->batch = $batch;
        return $this;
    }


}

