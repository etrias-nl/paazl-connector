<?php

namespace Etrias\PaazlConnector\SoapTypes;

class GenerateAdditionalPdfDocumentRequest extends GenerateAdditionalDocumentType
{

    /**
     * @var printerType
     */
    protected $printer = null;

    /**
     * Constructor
     *
     * @param string $hash
     * @param int $webShop
     * @param int $targetWebShop
     * @param string $orderReference
     * @param string $barcode
     * @param additionalDocumentType $documentType
     * @param printerType $printer
     */
    public function __construct($hash, $webShop, $targetWebShop, $orderReference, $barcode, $documentType, $printer)
    {
        parent::__construct($hash, $webShop, $targetWebShop, $orderReference, $barcode, $documentType);
        $this->printer = $printer;
    }

    /**
     * @return printerType
     */
    public function getPrinter()
    {
        return $this->printer;
    }

    /**
     * @param printerType $printer
     * @return $this
     */
    public function setPrinter($printer)
    {
        $this->printer = $printer;
        return $this;
    }


}

