<?php

namespace Etrias\PaazlConnector\SoapTypes;


use Phpro\SoapClient\Type\RequestInterface;

class GenerateExtraPdfReturnLabelRequest extends GenerateReturnLabelType implements RequestInterface
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
     * @param labelProducts $labelProducts
     * @param string $shippingOption
     * @var printerType $printer
     */
    public function __construct(
        $hash,
        $webShop,
        $targetWebShop = null,
        $orderReference,
        $labelProducts,
        $shippingOption = null,
        $printer = null
)
    {
        parent::__construct($hash, $webShop, $targetWebShop, $orderReference, $labelProducts, $shippingOption);
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

