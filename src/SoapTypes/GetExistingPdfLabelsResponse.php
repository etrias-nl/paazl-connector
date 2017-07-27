<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\ResultInterface;

class GetExistingPdfLabelsResponse implements ResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var base64Binary
     */
    protected $labels = null;

    /**
     * @var labelMetaDataType
     */
    protected $metaData = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var base64Binary $labels
     * @var labelMetaDataType $metaData
     */
    public function __construct($error, $labels, $metaData)
    {
        $this->error = $error;
        $this->labels = $labels;
        $this->metaData = $metaData;
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
     * @return base64Binary
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @param base64Binary $labels
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     * @return labelMetaDataType
     */
    public function getMetaData()
    {
        return $this->metaData;
    }

    /**
     * @param labelMetaDataType $metaData
     * @return $this
     */
    public function setMetaData($metaData)
    {
        $this->metaData = $metaData;
        return $this;
    }


}

