<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\ResultInterface;

class GeneratePdfCustomsDocumentsResponse implements ResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var base64Binary
     */
    protected $documents = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var base64Binary $documents
     */
    public function __construct($error, $documents)
    {
        $this->error = $error;
        $this->documents = $documents;
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
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param base64Binary $documents
     * @return $this
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;
        return $this;
    }


}

