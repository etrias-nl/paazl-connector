<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Etrias\PaazlConnector\Result\PaazlResultInterface;

class GenerateAdditionalPdfDocumentResponse implements PaazlResultInterface
{

    /**
     * @var errorType
     */
    protected $error = null;

    /**
     * @var additionalDocumentContainerType
     */
    protected $document = null;

    /**
     * Constructor
     *
     * @var errorType $error
     * @var additionalDocumentContainerType $document
     */
    public function __construct($error, $document)
    {
        $this->error = $error;
        $this->document = $document;
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
     * @return additionalDocumentContainerType
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param additionalDocumentContainerType $document
     * @return $this
     */
    public function setDocument($document)
    {
        $this->document = $document;
        return $this;
    }


}

