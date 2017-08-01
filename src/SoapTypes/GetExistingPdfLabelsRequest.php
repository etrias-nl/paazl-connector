<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\RequestInterface;

class GetExistingPdfLabelsRequest extends GetExistingLabelsType implements RequestInterface
{

    /**
     * @var printerType
     */
    protected $printer = null;

    /**
     * Constructor
     *
     * @param int $webshop
     * @param existingLabelType[] $label
     * @param bool $includeMetaData
     * @var string $printer
     */
    public function __construct($webshop, array $label, $includeMetaData, $printer)
    {
        parent::__construct($webshop, $label, $includeMetaData);
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

