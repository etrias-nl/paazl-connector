<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\RequestInterface;

class GetExistingPdfLabelRequest extends GetExistingLabelType implements RequestInterface
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
     * @param bool $includeMetaData
     * @var string $printer
     */
    public function __construct(
        $hash,
        $webShop,
        $targetWebShop,
        $orderReference,
        $barcode,
        $includeMetaData,
        $printer
    )
    {
        parent::__construct($hash, $webShop, $targetWebShop, $orderReference, $barcode, $includeMetaData);
        $this->printer = $printer;
    }

    /**
     * @return string
     */
    public function getPrinter()
    {
        return $this->printer;
    }

    /**
     * @param string $printer
     * @return $this
     */
    public function setPrinter($printer)
    {
        $this->printer = $printer;
        return $this;
    }


}

